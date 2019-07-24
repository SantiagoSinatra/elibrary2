<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class CategoriasController extends Controller
{
    //devuelve la vista de productos
    public function cat1(){
        $products = \App\Producto::all();
        return view('productos.categoria1', compact('products'));
    }
    public function cat2(){
        $products = \App\Producto::all();
        return view('productos.categoria2', compact('products'));
    }
    public function cat3(){
        $products = \App\Producto::all();
        return view('productos.categoria3', compact('products'));
    }

}
