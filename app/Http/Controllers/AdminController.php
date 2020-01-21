<?php

namespace App\Http\Controllers;

use App\products;
use App\product_category;
use File;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function productList()
    {
        // $products = products::where('status',0)->paginate(10);
        $products = products::with('product_category')->where("status",0)->get();
        // dd($products);
        return view('admin.product', compact('products'));
    }

    public function addProductForm()
    {
        $category = product_category::where('status', 0)->get();
        return view('admin.add-product', \compact('category'));
    }

    public function addProduct(Request $request)
    {
        $destinationName = "";
        $destinationImageName = "";
        if (!empty($request->file('image'))) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $ext = $file->getClientOriginalExtension();
            $size = $file->getSize();
            $mime = $file->getMimeType();
            $destinationImageName = \uniqid() . "_" . $name;

            $destinationPath = "products";
            if ($ext == "jpg" || $ext == "jpeg" || $ext == "png") {
                $file->move($destinationPath, $destinationImageName);
            } else {
                echo "invalid extension only jpg,jpeg,png is allowed";
                echo "<a href='add-product'>Back To Home</a>";
            }
        }
        // get file property
        if (!empty($request->file('catalogue'))) {
            $file = $request->file('catalogue');
            $name = $file->getClientOriginalName();
            $ext = $file->getClientOriginalExtension();
            $path = $file->getRealPath();
            $size = $file->getSize(); //in bytes
            $destinationPath = "catelogue";
            $destinationName = uniqid() . "_" . $name;
            if ($ext == "pdf") {
                $upload = $file->move($destinationPath, $destinationName);

                // dd($upload);
            } else {
                echo "invalid extension only pdf is allowed";
                echo "<a href='add-product'>Back To Home</a>";
            }
        }

        $products = new products;
        $products->product_name = $request->get('product_name');
        $products->product_description = $request->get('product_description');
        $products->category_id = $request->get('category_id');
        $products->catalogue = $destinationName;
        $products->product_img = $destinationImageName;
        $products->pro_specification= $request->get('technical_spec');
        $products->save();

        return redirect()->back()->withErrors('msg', 'product Added successfully');

    }

    public function editProductForm(Request $request, $id)
    {
        $product = products::where("id", $id)->first();
        $category = productMenu();
        return view('admin.edit-product', \compact('product', 'category'));
    }

    public function updateProduct(Request $request)
    {
        $currentPdata = products::where("id", $request->get('product_id'))->first();
        $update = products::find($request->get('product_id'));
        if (!empty($request->file('image'))) {
            // delete the current product image
            $currentImage = $currentPdata->product_img;
            if (!empty($currentImage)) {

                File::delete("products/" . $currentImage);
            }

            // update new image
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $ext = $file->getClientOriginalExtension();
            $size = $file->getSize();
            $mime = $file->getMimeType();
            $destinationImageName = \uniqid() . "_" . $name;

            $destinationPath = "products";
            if ($ext == "jpg" || $ext == "jpeg" || $ext == "png") {
                $file->move($destinationPath, $destinationImageName);

                $update->product_img = $destinationImageName;

            } else {
                echo "invalid extension only jpg,jpeg,png is allowed";
                echo "<a href='add-product'>Back To Home</a>";
            }
        }

        if (!empty($request->file('catalogue'))) {
            $currentfile = $currentPdata->catalogue;
            // delete current catalogue
            if (!empty($currentfile)) {
                File::delete("products/" . $currentfile);
            }
            // update new catalogue
            $file = $request->file('catalogue');
            $name = $file->getClientOriginalName();
            $ext = $file->getClientOriginalExtension();
            $path = $file->getRealPath();
            $size = $file->getSize(); //in bytes
            $destinationPath = "catelogue";
            $destinationName = uniqid() . "_" . $name;
            if ($ext == "pdf") {
                $upload = $file->move($destinationPath, $destinationName);
                $update->catalogue = $destinationName;
                // dd($upload);
            } else {
                echo "invalid extension only pdf is allowed";
                echo "<a href='add-product'>Back To Home</a>";
            }
        }

        $update->product_name = $request->get('product_name');
        $update->product_description = $request->get('product_description');
        $update->pro_specification = $request->get('technical_spec');
        $update->category_id = $request->get('category_id');
        $update->save();
        return redirect('admin/product');
    }

    public function deleteProduct(Request $request, $id)
    {

        // \dd($id);
        $status = products::find($id);
        // \dd($status);
        $status->status = 1;
        $status->save();
        return \redirect('admin/product');
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
        $category = product_category::where('status', 0)->paginate(10);
        return view('admin.category', compact('category'));
    }

    public function addCategory(Request $request)
    {
        $add = new product_category;
        $add->category_name = $request->get('category_name');
        $add->save();
        return redirect()->back();
    }
    public function updateCategory(Request $request)
    {
        $category = product_category::find($request->get('id'));
        $category->category_name = $request->get('category_name');
        $category->save();
        return redirect('admin/category');
    }

    public function deleteCategory(Request $request, $id)
    {
        // \dd($id);
        $pc = product_category::find($id);
        $pc->status = 1;
        $pc->save();

        return \redirect('admin/category');

    }

}
