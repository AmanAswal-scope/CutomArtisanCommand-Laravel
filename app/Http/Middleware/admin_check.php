<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Admins; 



class admin_check
{
  /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
  
    //  public function loginPost(Request $request)
    //  {
    //      $found_user = Admins::where('username', $request->username)->first(); // Use first() instead of get()
    //      $errors = [];
     
    //      if ($found_user && $found_user->password === $request->password) {
    //          return redirect()->intended('home.page');
    //      } else {
    //          $errors[] = ["msg" => "Username/Password is incorrect!"];
    //      }
     
    //      return redirect()->back()->withErrors($errors);


         public function handle($request, Closure $next)
    {
       
        
        if ($request->username == "admin") {
            return $next($request);
        }

        // Authentication failed, redirect or handle as needed
        return redirect()->route('login.page')->withErrors(["msg" => "Username/Password is incorrect!"]);
    }
     
    }

