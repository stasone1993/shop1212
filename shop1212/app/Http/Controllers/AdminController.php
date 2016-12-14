<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;

class AdminController extends Controller {

    public function index() {
        $products = Product::orderBy('created_at', 'asc')
                ->get();
        return view('products.admin.index', [
            'products' => $products,
        ]);
    }

    public function create() {
        return view('products.admin.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
                    'name' => 'required|max:255',
                    'description' => 'required',
        ]);
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();
        return redirect()->route('admin');
    }

    public function destroy(Product $product) {
        $product->delete();
        return redirect()->route('admin');
    }

}
