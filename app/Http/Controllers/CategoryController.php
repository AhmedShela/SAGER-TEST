<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::withCount(['products'])->get();
        return view('category.index', compact('categories'));
    }

    public function add()
    {
        return view('category.add');
    }

    public function insert(Request $requist)
    {
        $category = new Category();
        $category->name = $requist->name;
        $category->save();
        return redirect('/categories')->with('status', 'Category Added Successfully');
    }

    public function edit($id)
    {
        $cat = Category::find($id);
        return view('category.edit', compact('cat'));
    }

    public function update(Request $req, $id)
    {
        $cat = Category::find($id);
        $cat->name = $req->name;
        $cat->update();
        return redirect('/categories')->with('status', 'Category Updated Successfully');
    }

    public function destroy($id)
    {
        $products = Product::all()->where('category_id', $id);
        if (count($products) > 0) {
            return redirect('/categories')->with('status', 'failed Deleted Category');
        }
        // $cat = Category::find($id);
        // $cat->delete();
        return redirect('/categories')->withErrors(array('message' => 'Fail!'));
    }
}
