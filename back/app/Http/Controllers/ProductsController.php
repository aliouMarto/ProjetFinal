<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    public function index()
    {
        return Product::latest()->get();
    }

    public function store(Request $request)
    {
        $product = Product::created($request->all() + ['user_id' => Auth::id()]);

        return $product;
    }


    public function show($id)
    {
        return response()->json(Product::find($id));
    }

    public function destroy($id) {
        try {
            Product::destroy($id);

            return response([], 204);
        }catch(\Exception $e) {
            return response(['Huuum ca veut pas delete !!', 500]);
        }
    }
}
