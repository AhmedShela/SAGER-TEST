<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function add()
    {
        return view('user.add');
    }

    public function edit($id)
    {
        $user = User::select('id', 'name', 'email')->where('id', $id)->first();
        return view('user.edit', compact('user'));
    }

    public function insert(Request $req)
    {
        // $req->validate([
        //     'password' => [
        //         'required',
        //         'min:8',
        //         'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
        //         'confirmed',
        //     ],
        // ]);
        logger('------->>:');
        logger(count(User::where('email', $req->email)->get()));
        if (count(User::where('email', $req->email)->get()) > 0) {
            return redirect('add-user')->with('status', 'Unique Email is required');
        }
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect('/users')->with('status', 'Added Successfully');
    }

    public function update(Request $req, $id)
    {
        $user = User::find($id);
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect('/users')->with('status', 'Updated Successfully');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/users')->with('status', 'Deleted Successfully');
    }
}
