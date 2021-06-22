<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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
        return response()->json($products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
                'name' => ['required', 'string'],
                'description' => ['required', 'string'],
                'price' => ['required', 'integer'],
            ]);

        return Product::create($validatedData);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            return Product::findOrFail($id); 
        } catch (\Throwable $th) {
            return response()->json([
                ['message' => 'Product not Found.'], 404
            ]);
        }
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
        try {
            $product = Product::findOrFail($id); 
            $product->update($request->all());
            return $product;
        } catch (\Throwable $th) {
            return response()->json([
                ['message' => 'Updating Product Failed!'], 500
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = '';

        try {
            $product = Product::findOrFail($id); 
            $product->delete();
            $message = [
                ['message' => 'Product ID: '.$id.' successfully deleted.'], 200
            ];
        } catch (\Throwable $th) {
            $message = [
                ['message' => 'Action Failed!'], 404
            ];
        }

        return response()->json($message);
    }
}
