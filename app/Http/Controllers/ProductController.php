<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index');   // Ver listado de productos
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
