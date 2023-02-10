<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function add()
    {
        $categories = Category::all();
        return view('product.add', compact('categories'));
    }

    public function insert(Request $requist)
    {
        $user_id = Auth::user()->id;
        $product = new Product();
        if ($requist->hasFile('image')) {
            $file = $requist->file('image');
            $extinsion = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extinsion;
            $file->move('assets/uploads/products', $fileName);
            $product->image = $fileName;
        } else {
            $product->image = "";
        }

        $product->name = $requist->name;
        $product->category_id = $requist->category_id;
        $product->description = $requist->description;
        $product->price = $requist->price;
        $product->quantity = $requist->quantity;
        $product->created_by = $user_id;
        $product->save();
        return redirect('/products')->with('status', 'Added Successfully');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('product.edit', compact('product', 'categories'));
    }

    public function update(Request $req, $id)
    {
        $product = Product::find($id);
        if ($req->hasFile('image')) {
            $path = 'assets/uploads/products/' . $product->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $req->file('image');
            $extinsion = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extinsion;
            $file->move('assets/uploads/products', $fileName);
            $product->image = $fileName;
        } else {
            $product->image = "";
        }

        $product->name = $req->name;
        $product->category_id = $req->category_id;
        $product->description = $req->description;
        $product->price = $req->price;
        $product->quantity = $req->quantity;
        $product->update();
        return redirect('/products')->with('status', 'Updated Successfully');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $path = 'assets/uploads/products/' . $product->image;
        if (File::exists($path)) {
            File::delete($path);
        }
        $product->delete();
        return redirect('/products')->with('status', 'Deleted Successfully');
    }

    public function reduce($id)
    {
        $product = Product::find($id);
        if($product->quantity > 1){
            $product->quantity = $product->quantity - 1;
        }
        $product->update();
        return redirect('/products')->with('status', 'Updated Successfully');
    }
}
