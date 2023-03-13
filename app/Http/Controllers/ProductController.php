<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    

    public function index()
    {
        $products = Product::all();
        return view('products.index',['products'=>$products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:products',
            'quantity' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'description' => 'nullable'
        ]);

        Product::create($data);
    }

    public function view($id)
    {
        $products = Product::get()->where('id',$id);

        return view('products.view',['products'=>$products]);
    }

    public function update(Request $request, $id)
    {
    
        $data = $request->validate([
            'name' => 'required|unique:products',
            'quantity' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'description' => 'nullable'
        ]);

      $prod_id = Product::find($id);

      $prod_id->name = $request->name;
      $prod_id->quantity = $request->quantity;
      $prod_id->price = $request->price;
      $prod_id->category_id = $request->category_id;
      $prod_id->description = $request->description;
      $prod_id->save();
    }

    public function delete($id)
    {
        $product_id = Product::find($id);

        $product_id->delete();
    }
}
