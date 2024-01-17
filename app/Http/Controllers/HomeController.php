<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\homepage;
use App\Models\Header;
use App\Models\Footer;

class HomeController extends Controller
{
  
    // public function store(Request $request)
    // {
       

    //     homepage::create([
    //         'title' => $request->input('title'),
    //     ]);
    //     return redirect()->back()->with('success', 'Homepage created successfully');
    // }





    public function index()
    {
        $Footerpage = Footer::all();
        $headerpage = Header::all(); 
        $banners = homepage::all(); 
        return view('main-section.index', compact('headerpage', 'banners','Footerpage'));
    }

    public function showEditForm()
    {
        $homepage = Homepage::first();
        $tableName = 'homepages'; 
        $columns = Schema::getColumnListing($tableName);
        return view('editpage.editpagehome', compact('homepage','columns'));
    }
    public function  viewEditForm()
    {
        $homepage = Homepage::first(); // Retrieve the existing homepage data
        $tableName = 'homepages'; 
        $columns = Schema::getColumnListing($tableName);
        return view('view.viewhomepage', compact('homepage','columns'));
    }


   

    public function updateHomepage(Request $request)
    {
        // $homepage = Homepage::first(); 
        // $homepage->update($request->all()); 
        // return redirect()->route('home.index')->with('success', 'Homepage data updated successfully.');
         $homepage = Homepage::first(); 
         $titles = explode(',', $homepage->title);
         $des = explode(',', $homepage->description);
         $subtitle=explode(',',$homepage->SubTitle);
         $subtitledes=explode(',',$homepage->SubTitleDes);
         $Servicetitle=explode(',',$homepage->ServiceTitle);
         $Servicedes=explode(',',$homepage->ServiceDes);
     
         foreach ($titles as $titl) 
         {
             if ($request->has($titl)) 
             {         
                $homepage->title= str_replace($titl,$request->$titl,$homepage->title);
          
             }
         }

         foreach ($des as $de) 
         {
             if ($request->has($de)) 
             {         
                $homepage->description= str_replace($de,$request->$de,$homepage->description);
          
             }
         }

         foreach ($subtitle as $subt) 
         {
             if ($request->has($subt)) 
             {         
                $homepage->SubTitle= str_replace($subt,$request->$subt,$homepage->SubTitle);
          
             }
         }

         foreach ($subtitledes as $subtdes) 
         {
             if ($request->has($subtdes)) 
             {         
                $homepage->subtitledes= str_replace($subtdes,$request->$subtdes,$homepage->subtitledes);
          
             }
         }

         foreach ($Servicetitle as $sert) 
         {
             if ($request->has($sert)) 
             {         
                $homepage->Servicetitle= str_replace($sert,$request->$sert,$homepage->Servicetitle);
          
             }
         }

         foreach ($Servicedes as $serde) 
         {
             if ($request->has($serde)) 
             {         
                $homepage->Servicedes= str_replace($serde,$request->$serde,$homepage->Servicedes);
          
             }
         }


         $homepage->save();
        return redirect()->route('home.index')->with('success', 'Homepage data updated successfully.');

    }



    public function createForm()
    {
        return view('create.homepagecreate');
    }


    // public function storeHomepage(Request $request)
    // {
        
    //     $validatedData = $request->validate([
    //         'title' => 'required|max:255',
    //         'description' => 'required',
    //     ]);
    
    //     $post = new Homepage;
    //     $post->title = $validatedData['title'];
    //     $post->description = $validatedData['description'];
    //     $post->save();
    
        
    //     return redirect()->route('home.index')->with('success', 'Homepage created successfully');
    // }



    // public function storeHomepage(Request $request)
    // {
        
    //     $validatedData = $request->validate([
    //         'title2' => 'required|max:255',
           
    //     ]);
    
    //     $post = new Homepage;
    //     $post->title2 = $validatedData['title2'];
    //     $post->save();
    
        
    //     return redirect()->route('home.index')->with('success', 'Homepage created successfully');
    // }
    

    public function storeHomepage(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'max:255',
            'description' => '', 
            'SubTitle' => 'max:255',
            'SubTitleDes' => '', 
            'ServiceTitle' => 'max:255',
            'ServiceDes' => '', 
        ]);
    
        $existingHomepage = Homepage::first();
    
        if ($existingHomepage) {
            // $existingHomepage->title .= ',' . $validatedData['title'];
            // $existingHomepage->description .= ',' . $validatedData['description'];
            // $existingHomepage->SubTitle .= ',' . $validatedData['SubTitle'];
            // $existingHomepage->SubTitleDes .= ',' . $validatedData['SubTitleDes'];
            // $existingHomepage->ServiceTitle .= ',' . $validatedData['ServiceTitle'];
            // $existingHomepage->ServiceDes .= ',' . $validatedData['ServiceDes'];
            // $existingHomepage->save();
            $updateData = [];

            if (!empty($validatedData['title'])) {
                $updateData['title'] = $existingHomepage->title ? $existingHomepage->title . ',' . $validatedData['title'] : $validatedData['title'];
            }
        
            if (!empty($validatedData['description'])) {
                $updateData['description'] = $existingHomepage->description ? $existingHomepage->description . ',' . $validatedData['description'] : $validatedData['description'];
            }
        
            if (!empty($validatedData['SubTitle'])) {
                $updateData['SubTitle'] = $existingHomepage->SubTitle ? $existingHomepage->SubTitle . ',' . $validatedData['SubTitle'] : $validatedData['SubTitle'];
            }
        
            if (!empty($validatedData['SubTitleDes'])) {
                $updateData['SubTitleDes'] = $existingHomepage->SubTitleDes ? $existingHomepage->SubTitleDes . ',' . $validatedData['SubTitleDes'] : $validatedData['SubTitleDes'];
            }
        
            if (!empty($validatedData['ServiceTitle'])) {
                $updateData['ServiceTitle'] = $existingHomepage->ServiceTitle ? $existingHomepage->ServiceTitle . ',' . $validatedData['ServiceTitle'] : $validatedData['ServiceTitle'];
            }
        
            if (!empty($validatedData['ServiceDes'])) {
                $updateData['ServiceDes'] = $existingHomepage->ServiceDes ? $existingHomepage->ServiceDes . ',' . $validatedData['ServiceDes'] : $validatedData['ServiceDes'];
            }
        
            $existingHomepage->update($updateData);
        
        } else {
            $post = new Homepage;
            $post->title = $validatedData['title'];
            $post->description = $validatedData['description'];
            $post->SubTitle = $validatedData['SubTitle'];
            $post->SubTitleDes = $validatedData['SubTitleDes'];
            $post->ServiceTitle = $validatedData['ServiceTitle'];
            $post->ServiceDes = $validatedData['ServiceDes'];
            $post->save();
        }
    
        return redirect()->route('home.index')->with('success', 'Homepage updated successfully');
    }
    


    
    public function deleteForm()
    {
        return view('delete.homepagedelete');
    }



    public function deletehomepage(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'max:255',
        'description' => '', 
        'SubTitle' => 'max:255',
        'SubTitleDes' => '', 
        'ServiceTitle' => 'max:255',
        'ServiceDes' => '', 
    ]);

    $existingHomepage = Homepage::first();

    if ($existingHomepage) {
        $titles = explode(',', $existingHomepage->title);
        $descriptions = explode(',', $existingHomepage->description);
        $SubTitle = explode(',', $existingHomepage->SubTitle);
        $SubTitleDes = explode(',', $existingHomepage->SubTitleDes);
        $ServiceTitle = explode(',', $existingHomepage->ServiceTitle);
        $ServiceDes = explode(',', $existingHomepage->ServiceDes);

        if (!empty($validatedData['title']))
        array_pop($titles);

        if (!empty($validatedData['description']))
        array_pop($descriptions);

        if (!empty($validatedData['SubTitle']))
        array_pop($SubTitle);

        if (!empty($validatedData['SubTitleDes']))
        array_pop($SubTitleDes);

        if (!empty($validatedData['ServiceTitle']))
        array_pop($ServiceTitle);

        if (!empty($validatedData['ServiceDes']))
        array_pop($ServiceDes);

        $existingHomepage->title = implode(',', $titles);
        $existingHomepage->description = implode(',', $descriptions);
        $existingHomepage->SubTitle = implode(',', $SubTitle);
        $existingHomepage->SubTitleDes = implode(',', $SubTitleDes);
        $existingHomepage->ServiceTitle = implode(',', $ServiceTitle);
        $existingHomepage->ServiceDes = implode(',', $ServiceDes);

        $existingHomepage->save();
    }

    return redirect()->route('home.index')->with('success', 'Last item deleted successfully');
}

    

    
}
