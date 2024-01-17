<?php

// namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use App\Models\Admins;
// use Illuminate\Support\Facades\Auth;

// class AuthController extends Controller
// {
//     public function loginPost(Request $request)
//     {
//         $found_user =Admins::where('username',$request->username)->get();
//        // dd($found_user);
//         $errors=[];
//         if (Count($found_user ) > 0){
//         //     if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) 
//         //   {
//                               return redirect()->intended('home');
//             // }  else{
//             //     $errors[]=["msg"=>"Username/Password is incorrect!"];
//             // }         
//         }else{
//             $errors[]=["msg"=>"Username not found"];          
//         }
//         return redirect()->back()->withErrors($errors);
//     }
// }
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admins;
use App\Models\Client;
use App\Models\homepage;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function dashboard(Request $request)
    {
        $banners = homepage::all();
        return view('main-section.index',compact('banners'));
    }






    public function loginPost(Request $request)
    {
        $found_user = Admins::where('username', $request->username)->first(); // Use first() instead of get()
        $found_user2 = Client::where('username', $request->username)->first(); // Use first() instead of get()

        $errors = [];

        if ($found_user && $found_user->password === $request->password) {
           // Auth::login($found_user); // Manually log in the user
          // Auth::guard('admin_check')->login($found_user); // Use the correct guard

            return redirect()->intended('admin');
        }
        else if($found_user2 && $found_user2->password=$request->password)
        {
            return redirect()->intended('home');
        }
        
        else {
            $errors[] = ["msg" => "Username/Password is incorrect!"];
          
        }

        return redirect()->back()->withErrors($errors);
    }
}
