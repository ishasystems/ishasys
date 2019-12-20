<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\products,App\product_category,App\vendor,App\Product_type;

class AdminController extends Controller
{
    public function productList()
    {
        $products = [];
        return view('admin.product',compact('products'));
    }

    public function addProductForm()
    {

    }

    public function addProduct(Request $request)
    {

    }

    public function editProductForm(Request $request,$id)
    {

    }

    public function updateProduct(Request $request)
    {

    }

    public function vendorList()
    {

    }

    public function addVendor(Request $request)
    {

    }

    public function updateVendor(Request $request)
    {

    }

    public function categoryList()
    {

    }

    public function addCategory(Request $request)
    {

    }
    public function updateCategory(Request $request)
    {

    }


}
