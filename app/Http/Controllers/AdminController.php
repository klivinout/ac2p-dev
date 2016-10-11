<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use Auth;

class AdminController extends Controller
{
    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }

    public function index()
    {
        return view('admin.index');
    }

    
}
