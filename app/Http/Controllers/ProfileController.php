<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;

class ProfileController extends Controller
{
    public function getImageProfile() {
        return Auth::User()->getPicture();
    }
}
