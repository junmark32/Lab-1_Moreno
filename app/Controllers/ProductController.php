<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use App\Models\CategoryModel;
class ProductController extends BaseController
{
    public function index()
    {
        // Fetch categories from the database using your CategoryModel
        $categoryModel = new CategoryModel();
        $data['categories'] = $categoryModel->findAll();

        return view('product/index', $data);
    }

    public function products($category)
    {
        // Fetch products within the selected category
        $productModel = new ProductModel();
        $data['products'] = $productModel->where('ProductCategory', urldecode($category))->findAll();

        return view('product/prod', $data);
    }

    public function add()
    {
        // Load the product form view for adding a new product
        $categoryModel = new CategoryModel();
        $data['categories'] = $categoryModel->findAll();

        return view('product/form', $data);
    }

    public function edit($id)
    {
        // Load the product form view for editing an existing product
        $productModel = new ProductModel();
        $categoryModel = new CategoryModel();
        $data['product'] = $productModel->find($id);
        $data['categories'] = $categoryModel->findAll();

        return view('product/edit', $data);
    }

    public function save()
    {
        // Handle the form submission for adding/editing a product
        $productModel = new ProductModel();

        $data = [
            'ProductName' => $this->request->getPost('productName'),
            'ProductDescription' => $this->request->getPost('productDescription'),
            'ProductCategory' => $this->request->getPost('productCategory'),
            'ProductQuantity' => $this->request->getPost('productQuantity'),
            'ProductPrice' => $this->request->getPost('productPrice'),
        ];

        $id = $this->request->getPost('productID');

        if (empty($id)) {
            // Insert a new product
            $productModel->insert($data);
        } else {
            // Update an existing product
            $productModel->update($id, $data);
        }

        return redirect()->to(base_url('product'));
    }

    public function delete($id)
    {
        // Delete a product
        $productModel = new ProductModel();
        $productModel->delete($id);

        return redirect()->to(base_url('product'));
    }
}
