<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->validate([

            'name_product' => 'required|min:3',
            'merk' => 'required',
            'price' => 'required',
            'stock' => 'required'

        ],
        [
            'name_product.required.min:3' => 'name product belum masuk',
            'merk.required' => 'merk',
            'price.required' => 'required',
            'stock.required' => 'required'
        ]
    
    );
        $product = new Product;
        $product->name_product     = $request->name_product;
        $product->merk             = $request->merk;
        $product->price            = $request->price;
        $product->stock            = $request->stock;
        $product->save();

        return redirect('product')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::FindOrFail($id);
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::FindOrFail($id);
        return view('product.edit', compact('product'));
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

        $data = $request->validate([

            'name_product' => 'required|min:3',
            'merk' => 'required',
            'price' => 'required',
            'stock' => 'required'

        ]);
        $product = Product::findOrfail($id);
        $product->name_product     = $request->name_product;
        $product->merk             = $request->merk;
        $product->price            = $request->price;
        $product->stock            = $request->stock;
        $product->save();

        return redirect('product')->with('success', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrfail($id);
        $product->delete();
        return redirect('product')->with('success', 'Data Berhasil Dihapus');
    }
    
}
