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
        $vendors = vendor::all();
            return view('admin.vendor',compact('vendors'));
    }

    public function addVendor(Request $request)
    {
        $vendors = new vendor;
        $vendors->full_name = $request->get('full_name');
        $vendors->short_name = $request->get('short_name');
        $vendors->save();

        return redirect()->back();

    }

    public function updateVendor(Request $request)
    {

    }

    public function categoryList()
    {
        $category = product_category::all()->where('status',1);
        return view("admin.category",compact('category'));
    }

    public function addCategory(Request $request)
    {
        $category = new product_category;
        $category->category = $request->get('name');
        $category ->save();


        return redirect()->back();
   }
    public function updateCategory(Request $request)
    {
        
    }


}
