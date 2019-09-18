<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductsController extends Controller
{
    //
    public function index() {
    	//
    	$products = Product::where('status','Publish')->orderBy('created_at', 'DESC')->get();
    	return view('frontend.Products.index', compact('products'));
    }

    public function singleProduct($product_slug){
    	//
        $product = Product::where('slug', $product_slug)->first();
        return view('frontend.Products.single-product')->with('product',$product);

    }
}
