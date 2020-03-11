<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Create a redirect logic.
     *
     * @return void
     */
    protected function dashboard()
    {
        return view('admin.dashboard');
    }

    /**
     * Create a listusers logic.
     *
     * @return void
     */
    protected function listusers()
    {
    	$users = User::all()->toArray();
    	$count = 1;
    	//dd($users);
        return view('admin.listusers', compact('users', 'count'));
    }

    /**
     * Create a listusers logic.
     *
     * @return void
     */
    protected function edituser($id)
    {
    	$user = User::find($id)->toArray();
    	return view('admin.edituser', compact('user'));
    }

    /**
     * Create a listusers logic.
     *
     * @return void
     */
    protected function updateuser(Request $request)
    {
    	$user = User::find($request->userid);
    	//dd($request->toArray());
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->save();
    	return redirect()->route('admin.listusers')->with('success', 'updated successfully !');
    }
}
