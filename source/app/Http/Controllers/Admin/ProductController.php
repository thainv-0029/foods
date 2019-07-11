<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('backend.products.index', compact('products', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('backend.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $file = $request->file('img');
        $path = $file->store('public/img/upload');
        $path = str_replace( 'public/img/upload/', '', $path );
        Product::create([
            'name' => $request->get('name'),
            'category_id' => $request->get('category'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'img' => $path,
        ]);

        return redirect('admin/products/create')->with('status', 'A new product create!');
    }

    public function edit($id) {
        $product = Product::whereId($id)->firstOrFail();
        $categories = Category::all();
        return view('backend.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id) {
        $product = Product::whereId($id)->firstOrFail();
        $product->name = $request->get('name');
        $product->category_id = $request->get('category');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        if($request->hasFile('img')) {
            $file = $request->file('img');
            $path = $file->store('public/img/upload');
            dd(path);
            $product->img = $file->originalName();
        }
        $product->save();
        return redirect(action('Admin\ProductController@edit', $product->id))->with('status', 'The product has been updated!');
    }

    public function delete($id) {
        $product = Product::whereId($id)->firstOrFail();
        $storage_path = 'public/img/upload/';
        Storage::delete($storage_path.$product->img);
        $product->delete();
        return redirect('admin/products')->with('status', 'Delete success!');
    }
}
