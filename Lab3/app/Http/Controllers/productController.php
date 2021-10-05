<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function create(){
        return view('add');
    }

    public function createSubmit(Request $req){
        $var = new product();
        $var->name = $req->name;
        $var->price = $req->price;
        $var->qty = $req->qty;
        $var->desc = $req->desc;
        $var->save();

        return "Product added";
    }

    public function lists(){
        $products = product::all();
        return view('products')->with('products',$products);
    }

    public function update(Request $req){
        $id = $req->id;
        $product = product::where('id', $id)->first();
        return view('edit')->with('product', $product);
    }

    public function updateSubmit(Request $req){
        $id = $req->id;
        $var = product::where('id',$id)->first();
        $var->name= $req->name;
        $var->price = $req->price;
        $var->qty = $req->qty;
        $var->desc=$req->desc;
        $var->save();
        return redirect()->route('product.list');
    }

    public function delete(Request $req){
        $id = $req->id;
        $var = product::where('id', $id)->first();
        $var->delete();
        return redirect()->route('product.list');
    }
}
