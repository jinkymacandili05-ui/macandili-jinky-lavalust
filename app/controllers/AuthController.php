<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->call->model('AuthModel');
    }

    public function login()
    {
        if (!empty($_SESSION['user_id'])) {
            redirect('products');
            return;
        }

        $this->call->view('auth/login', ['error' => null]);
    }

    public function authenticate()
    {
        $email = trim($_POST['email'] ?? '');
        $password = (string) ($_POST['password'] ?? '');
        $user = $this->AuthModel->find_by('email', $email);

        if (!$user || (int) $user['is_active'] !== 1 || !is_string($user['password'] ?? null) || !password_verify($password, $user['password'])) {
            $this->call->view('auth/login', ['error' => 'Invalid email or password.']);
            return;
        }

        session_regenerate_id(true);
        $_SESSION['user_id'] = (int) $user['id'];
        $_SESSION['username'] = $user['username'];
        redirect('products');
    }

    public function register()
    {
        $this->call->view('auth/register', ['error' => null]);
    }

    public function store()
    {
        $this->ensure_auth_columns();

        $username = trim($_POST['username'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $password = (string) ($_POST['password'] ?? '');

        if ($username === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($password) < 8) {
            $this->call->view('auth/register', ['error' => 'Use a username, valid email, and password of at least 8 characters.']);
            return;
        }

        if ($this->AuthModel->find_by('email', $email)) {
            $this->call->view('auth/register', ['error' => 'That email is already registered.']);
            return;
        }

        $this->AuthModel->insert([
            'username' => $username,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'role' => 'user',
            'is_active' => 1,
        ]);
        redirect('login');
    }

    private function ensure_auth_columns()
    {
        $lava = lava_instance();
        $lava->call->dbforge();

        if (!$lava->dbforge->table_exists('users')) {
            return;
        }

        if (!$lava->dbforge->column_exists('users', 'password')) {
            $lava->dbforge->add_column('users', [
                'password' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => TRUE],
            ]);
        }

        if (!$lava->dbforge->column_exists('users', 'role')) {
            $lava->dbforge->add_column('users', [
                'role' => ['type' => 'ENUM', 'constraint' => "'admin','moderator','user'", 'null' => FALSE, 'default' => 'user'],
            ]);
        }

        if (!$lava->dbforge->column_exists('users', 'is_active')) {
            $lava->dbforge->add_column('users', [
                'is_active' => ['type' => 'TINYINT', 'constraint' => 1, 'unsigned' => TRUE, 'null' => FALSE, 'default' => 1],
            ]);
        }
    }

    public function logout()
    {
        $_SESSION = [];
        session_destroy();
        redirect('login');
    }
}