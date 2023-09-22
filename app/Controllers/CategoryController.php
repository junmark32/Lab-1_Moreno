<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
class CategoryController extends BaseController
{
    public function products($category)
    {
        // Fetch products from the database for the selected category
        $productModel = new ProductModel();
        $data['products'] = $productModel->where('ProductCategory', $category)->findAll();

        return view('product/prod', $data);
    }
}
