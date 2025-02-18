<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\ProductList;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('product', compact('categories'));
    }

    public function add_product(Request $req){
        // Create the new category
        $category = new Category();
        $category->name = $req->category_name;
        $category->save();

        // Save products under the new category
        foreach ($req->product_name as $productName) {
            $product = new ProductList();
            $product->name = $productName;
            $product->category_id = $category->id;
            $product->user_id = session('user')->id; // Make sure the user session is available
            $product->save();
        }

        return redirect('/product');
    }
}
