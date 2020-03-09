<?php

namespace App\Http\Controllers\Admin;

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
}
