<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Header;
use \Illuminate\Support\Facades\Log;

class HeaderController extends Controller
{
        
    public function index()
   {
    return redirect()->route('home.index');
   }


    public function showEditForm()
    {
        $headerpage = Header::first(); // Retrieve the existing header data
        $tableName = 'headers'; 
        $columns = Schema::getColumnListing($tableName);
        return view('editpage.editpageheader', compact('headerpage','columns'));
    }

    
    public function showviewForm()
    {
        $headerpage = Header::first(); // Retrieve the existing header data
        $tableName = 'headers'; 
        $columns = Schema::getColumnListing($tableName);
        return view('view.viewpageheader', compact('headerpage','columns'));
    }

    public function updateHomepage(Request $request)
    {
         
         $headerpage = Header::first(); 
        //$headerpage->update($request->all()); 
       
         $titles = explode(',', $headerpage->headertitle);
         $updatedData = [];
       //  print_r($titles);
         foreach ($titles as $title) 
         {
             if ($request->has($title)) 
             {         
                $headerpage->headertitle= str_replace($title,$request->$title,$headerpage->headertitle);
          
             }
         }
         $headerpage->save();
        return redirect()->route('header.index')->with('success', 'header data updated successfully.');

    }


public function createForm()
{
    return view('create.headerpagecreate');
}



public function storeheaderpage(Request $request)
{
    $validatedData = $request->validate([
        'headertitle' => 'max:255',
    ]);

    $existingheaderpage = Header::first();

    if ($existingheaderpage) {

        $updateData = [];

        if (!empty($validatedData['headertitle'])) {
            $updateData['headertitle'] = $existingheaderpage->headertitle ? $existingheaderpage->headertitle . ',' . $validatedData['headertitle'] : $validatedData['headertitle'];
        }
    
    
        $existingheaderpage->update($updateData);
    
    } else {
        $post = new Header;
        $post->headertitle = $validatedData['headertitle'];
        $post->save();
    }

    return redirect()->route('header.index')->with('success', 'Headerpage updated successfully');
}

public function deleteForm()
{
    return view('delete.headerpagedelete');
}



public function removeheaderpage(Request $request)
{
    $validatedData = $request->validate([
        'headertitle' => 'max:255',
    ]);

    $existingHeaderpage = Header::first();

    if ($existingHeaderpage) {
        $titles = explode(',', $existingHeaderpage->headertitle);

        if (!empty($validatedData['headertitle']))
        array_pop($titles);

        $existingHeaderpage->headertitle= implode(',', $titles);
        $existingHeaderpage->save();
    }

    return redirect()->route('header.index')->with('success', 'Last item deleted successfully');
}


}
