<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\products;

class websiteController extends Controller
{
    public function getProductList(Request $request, $id)
    {
            $products = products::where("status",0)->where("category_id",$id)->paginate(20);
            return view('website.product',\compact('products'));
    }

    public function getSingleProduct(Request $request,$id)
    {
        $product = products::where("id",$id)->first();
        // \dd($product);
        return view('website.product_single',compact('product'));
    }
}
