<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UserController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->call->model('UserModel');
    }

    public function index()
    {
        $data['users'] = $this->UserModel->all();

        $this->call->view('users', $data);
    }
}