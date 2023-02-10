<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function create_demo_data()
    {
        for ($i = 0; $i < 100; $i++) {
            $user = new User();
            $user->name = "user" . $i;
            $user->email = "user" . $i . "@user.io";
            $user->password = Hash::make('AhmadShela123');
            $user->save();
        }
        for ($i = 0; $i < 20; $i++) {
            $cat = new Category();
            $cat->name = "cat" . $i;
            $cat->save();
        }
        for ($i = 0; $i < 1000; $i++) {
            $product = new Product();
            $product->name = "product" . $i;
            $product->category_id = rand(1, 20);
            $product->description = "this is the descriptopn of thje product" . $i;
            $product->price = rand(1, 100);
            $product->quantity = rand(1, 100);
            $product->image = "";
            $product->created_by = rand(1, 100);
            $product->save();
        }

        return redirect('/home');
    }

    public function clear_data()
    {
        User::truncate();
        Category::truncate();
        Product::truncate();

        $user = new User();
        $user->name = "admin";
        $user->email = "admin@admin.io";
        $user->password = Hash::make('Admin123321');
        $user->save();
        return redirect('/home');
    }
}
