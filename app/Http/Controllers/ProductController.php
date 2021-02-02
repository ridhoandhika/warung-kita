<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{

    public function index(Request $request)
    {
        $data = Product::all()->paginate(9);
        return response()->json(
            [
                "message" => "GET Method Success ",
                "data" => $data
            ]
        );

        return view('home', $this->data);
    }
    function post(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->active = $request->active;
        $product->description = $request->description;

        $product->save();
         
        return response()->json(
            [
                "message" => "Success ",
                "data" => $product,
            ]
        );
    }

    function get()
    {
        $data = Product::all();
        return response()->json(
            [
                "message" => "GET Method Success ",
                "data" => $data
            ]
        );
    }

    function put($id, Request $request)
    {
        $product = Product::where('id', $id)->first();
        if($product) {
            $product->name = $request->name ? $request->name : $product->name;
            $product->price = $request->price ? $request->price :  $product->price;
            $product->quantity = $request->quantity ? $request->quantity : $product->quantity;
            $product->active = $request->active ? $request->active :  $product->active;
            $product->description = $request->description ? $request->description : $product->description;

            $product->save();
            return response()->json(
                [
                    "message" => "Update Success ",
                    "data" => $product,
                ]
            );
        }
        return response()->json(
            [
                "message" => "not found this id " . $id ." in Product "
            ], 400
        );
    }

    function delete($id)
    {
        $product = Product::where('id', $id)->first();
        if($product){
            $product->delete();
            return response()->json(
                [
                    "message" => "DELETE Product id " . $id ." Success"
                ]
            );
        }
        return response()->json(
            [
                "message" => "Product with id ". $id ." Not Found"
            ], 400
        );
    }
}
