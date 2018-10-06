<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        return view('admin.products.index')->with(compact('products'));   // Ver listado de productos
    }

    public function create()
    {
        return view('');   // Ver formulario de registro
    }

    public function store()
    {
          // registra producto en la bd
    }
}
