<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use DB;

class AuthController extends Controller
{

    public function getLogin() {
        return view('login');
    }

    public function postLogin(Request $request) {
        /*DB::table('users')->insert([
            'worker_id' => '-1',
            'fullname' => 'mohamed Salah B',
            'email'=>'m.s.benbakh@gmail.com',
            'password' => bcrypt($request->password),
            'role_id' => 1,
            'picture' => json_encode(['filename' => '2-profilepicture.jpg','mime'=>'image/jpeg']),
            'created_at' => date('Y-m-d H:i:s')
        ]);
        return 0;*/
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(!Auth::attempt($request->only(['email','password']),true)) {
            return redirect()->back()->with('danger' , 'Vos informations sont incorrect');
        } else {
            $user = Auth::User();
            
            return redirect()->route('adminindex');
        }
    }

}
