<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductosController extends Controller
{
    //devuelve la vista de productos
    public function index(){
        $products = \App\Producto::all();
        return view('productos.productos', compact('products'));
    }

    public function create(){
        $categories = \App\Categoria::all();
        return view('productos.crear', compact('categories'));
    }

    public function save(Request $request){
        $this->validate($request, [
            "name" => 'required',
            "description"  => 'required',
            "categoria_id" => 'required',
            "precio" => 'required|integer',
            "imageLoc" => "image",
            "imageLoc2" => "image",
        ]);

        $producto = new Producto([
            'name' => $request->input("name"),
            'description' => $request->input("description"),
            'categoria_id' => $request->input("categoria_id"),
            'precio' => $request->input("precio"),
            'imageLoc' => 'storage/products/image-placeholder_1.png',
            'imageLoc2' => 'storage/products/image-placeholder_1.png',
        ]);

        $path = $request->file('imageLoc');
        $path2 = $request->file('imageLoc2');

        $extension = $request->file('imageLoc')->extension();
        $extension2 = $request->file('imageLoc2')->extension();

        if (!is_null($path)) {
            $path->storeAs('public/products', '1'.$request->user()->id.'.'.$extension);
            $producto->imageLoc = 'storage/products/1'.$request->user()->id.'.'.$extension2;
        }
        if (!is_null($path2)) {
            $path2->storeAs('public/products', '2'.$request->user()->id);
            $producto->imageLoc2 = 'storage/products/2'.$request->user()->id;
        }

        $producto->save();


        return redirect()->route('inicio-productos');
    }

    public function delete($id){
        $product = Producto::find($id);
        $product->delete();

        return redirect()->route("inicio-productos");
    }

    public function edit($id)
    {
        $categories = \App\Categoria::all();
        $product = Producto::find($id);
        return view('productos.editar',compact('product','categories'));
    }


}
