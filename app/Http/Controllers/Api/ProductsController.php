<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
    public function index()
    {
        return Product::get();
    }

    public function show(Product $product)
    {
        return $product;
    }
}
