<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newComicBook = $request->all();
        $newProduct = new Product();
        $newProduct->title = $newComicBook['title'];
        $newProduct->description = $newComicBook['description'];
        $newProduct->image = $newComicBook['image'];
        $newProduct->price = $newComicBook['price'];
        $newProduct->series = $newComicBook['series'];
        $newProduct->release_date = $newComicBook['release_date'];
        $newProduct->type = $newComicBook['type'];
        $newProduct->save();
        return redirect()->route('products.show', $newProduct->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $newComicBook = $request->all();
        $product = Product::findOrFail($id);
        $product->title = $newComicBook['title'];
        $product->description = $newComicBook['description'];
        $product->image = $newComicBook['image'];
        $product->price = $newComicBook['price'];
        $product->series = $newComicBook['series'];
        $product->release_date = $newComicBook['release_date'];
        $product->type = $newComicBook['type'];
        $product->update();



        return redirect()->route('products.show', $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index');
    }
}
