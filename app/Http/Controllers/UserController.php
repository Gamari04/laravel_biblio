<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('role')->get();
        return view('admin.dashboard',compact('users'));
    }
    // public function store(Request $request)
    // {
    //     User::create($request->all());
    //     return redirect()->route('admin.books');
    //     // dd($request);
    // }
    public function destroy(User $user)
    {
        $user->delete();
        // return to_route('admin.books')->with('success','book deleted successfully');
        // dd($book);
        return redirect()->route('admin');
    }
    public function edit(User $user)
    {
        return view('admin.editUser',compact('user'));
    }
    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return redirect()->route('admin');
    }

}
