<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function create()
    {
        return view('products.admin.create');
    }

    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->available = true;

        if ($request->hasFile('thumbnail'))
        {
            $file = $request->file('thumbnail');
            $name = time() . '-' . $file->getClientOriginaLName();
            $file->move(public_path().'/images/', $name);
            $product->thumbnail = $name;
        }
        $product->save();

        return redirect('/admin/product/index');
    }

    public function edit($productId)
    {
        $product = Product::findOrFail($productId);

        return view('products.admin.edit', compact('product'));
    }

    public function update(Request $request, $productId)
    {
        $product = Product::findOrFail($productId);
        if ($request->hasFile('thumbnail'))
        {
            unlink(public_path() . '/images/' . $product->thumbnail);
            $file = $request->file('thumbnail');
            $name = time() . '-' . $file->getClientOriginaLName();
            $file->move(public_path().'/images/', $name);
            $product->thumbnail = $name;
        }
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->save();

        return redirect(action('ProductController@adminIndex'));
    }

    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function show($productId)
    {
        $product = Product::find($productId);

        return view('products.show', compact('product'));
    }

    public function adminIndex()
    {
        $products = Product::all();
        return view('products.admin.index', compact('products'));
    }

    public function destroy($productId)
    {
        $product = Product::find($productId);
        unlink(public_path() . '/images/' . $product->thumbnail);
        $product->delete();
    }
}
