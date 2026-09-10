<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProductController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->call->model('ProductModel');
    }

    public function index()
    {
        $data['products'] = $this->ProductModel->order_by('created_at', 'DESC');
        $data['username'] = $_SESSION['username'] ?? '';
        $this->call->view('products/index', $data);
    }

    public function create()
    {
        $this->call->view('products/form', ['product' => null, 'error' => null]);
    }

    public function store()
    {
        $data = $this->product_input();
        if ($data['error']) {
            $this->call->view('products/form', ['product' => $data['product'], 'error' => $data['error']]);
            return;
        }

        $this->ProductModel->insert($data['product']);
        redirect('products');
    }

    public function edit($id)
    {
        $product = $this->ProductModel->find((int) $id);
        if (!$product) {
            show_404();
            return;
        }

        $this->call->view('products/form', ['product' => $product, 'error' => null]);
    }

    public function update($id)
    {
        $product = $this->ProductModel->find((int) $id);
        if (!$product) {
            show_404();
            return;
        }

        $data = $this->product_input();
        if ($data['error']) {
            $data['product']['id'] = (int) $id;
            $this->call->view('products/form', ['product' => $data['product'], 'error' => $data['error']]);
            return;
        }

        $this->ProductModel->update((int) $id, $data['product']);
        redirect('products');
    }

    public function delete($id)
    {
        $this->ProductModel->delete((int) $id);
        redirect('products');
    }

    private function product_input()
    {
        $product = [
            'product_name' => trim($_POST['product_name'] ?? ''),
            'description' => trim($_POST['description'] ?? ''),
            'price' => $_POST['price'] ?? '',
            'quantity' => $_POST['quantity'] ?? '',
        ];
        $error = null;

        if ($product['product_name'] === '' || !is_numeric($product['price']) || (float) $product['price'] < 0 || filter_var($product['quantity'], FILTER_VALIDATE_INT) === false || (int) $product['quantity'] < 0) {
            $error = 'Enter a product name, a non-negative price, and a non-negative whole quantity.';
        }

        return ['product' => $product, 'error' => $error];
    }
}