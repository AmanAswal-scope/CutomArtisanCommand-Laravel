<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\homepage;

class BannerController extends Controller
{



public function index()
{
    $banners = homepage::all(); 
    return view('banner', compact('banners'));
}


    public function edit()
    {
        $banners = homepage::first(); 
        return view('banner', compact('banners'));
    }
    
    public function update(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
    
        $banner = homepage::first();
        $banner->update($data);
    
        return redirect()->route('banner.index')->with('success', 'Banner updated successfully');
    }
    

}