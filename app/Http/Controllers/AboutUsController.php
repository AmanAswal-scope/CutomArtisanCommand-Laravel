<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\aboutuspage;
use App\Models\Header;
use App\Models\Footer;

class AboutUsController extends Controller
{
    
    public function index()
{
    $Footerpage=Footer::all();
    $headerpage=Header::all();
    $aboutuspage = aboutuspage::all(); 
    return view('main-section.about-us', compact('aboutuspage','headerpage','Footerpage'));
}


    public function showEditForm()
    {
        $aboutuspage = aboutuspage::first(); // Retrieve the existing homepage data
        $tableName = 'aboutuspages'; 
        $columns = Schema::getColumnListing($tableName);
        return view('editpage.editpageaboutus', compact('aboutuspage','columns'));
    }


    public function showviewForm()
    {
        $aboutuspage = aboutuspage::first(); // Retrieve the existing homepage data
        $tableName = 'aboutuspages'; 
        $columns = Schema::getColumnListing($tableName);
        return view('view.viewpageaboutus', compact('aboutuspage','columns'));
    }

    public function updateHomepage(Request $request)
    {
       
        $aboutuspage = aboutuspage::first(); 

        $tit=explode(',',$aboutuspage->heading);
        $des=explode(',',$aboutuspage->descp);
        $memname=explode(',',$aboutuspage->MemberName);
        $memdes=explode(',',$aboutuspage->MemberDes);

       
        foreach ($tit as $ti) 
        {
            if ($request->has($ti)) 
            {         
               $aboutuspage->heading= str_replace($ti,$request->$ti,$aboutuspage->heading);
         
            }
        }

        foreach ($des as $de) 
        {
            if ($request->has($de)) 
            {         
               $aboutuspage->descp= str_replace($de,$request->$de,$aboutuspage->descp);
         
            }
        }

        foreach ($memname as $mn) 
        {
            if ($request->has($mn)) 
            {         
               $aboutuspage->MemberName= str_replace($mn,$request->$mn,$aboutuspage->MemberName);
         
            }
        }

        foreach ($memdes as $md) 
        {
            if ($request->has($md)) 
            {         
               $aboutuspage->MemberDes= str_replace($md,$request->$md,$aboutuspage->MemberDes);
         
            }
        }

        
        $aboutuspage->save();
        return redirect()->route('aboutus.index')->with('success', 'Servicepage data updated successfully.');
    }




public function createForm()
{
    return view('create.aboutuspagecreate');
}



public function storeaboutuspage(Request $request)
{
    $validatedData = $request->validate([
        'heading' => 'max:255',
        'descp'=>'',
        'MemberName'=>'',
        'MemberDes'=>'',
        'MemberImg'=>'',
    ]);

    $existingaboutuspage = aboutuspage::first();

    if ($existingaboutuspage) {

        $updateData = [];

        if (!empty($validatedData['heading'])) {
            $updateData['heading'] = $existingaboutuspage->heading ? $existingaboutuspage->heading . ',' . $validatedData['heading'] : $validatedData['heading'];
        }

        
        if (!empty($validatedData['descp'])) {
            $updateData['descp'] = $existingaboutuspage->heading ? $existingaboutuspage->heading . ',' . $validatedData['descp'] : $validatedData['descp'];
        }

        if (!empty($validatedData['MemberName'])) {
            $updateData['MemberName'] = $existingaboutuspage->MemberName ? $existingaboutuspage->MemberName . ',' . $validatedData['MemberName'] : $validatedData['MemberName'];
        }

        if (!empty($validatedData['MemberDes'])) {
            $updateData['MemberDes'] = $existingaboutuspage->MemberDes ? $existingaboutuspage->MemberDes . ',' . $validatedData['MemberDes'] : $validatedData['MemberDes'];
        }

        if (!empty($validatedData['MemberImg'])) {
            $updateData['MemberImg'] = $existingaboutuspage->MemberImg ? $existingaboutuspage->MemberImg . ',' . $validatedData['MemberImg'] : $validatedData['MemberImg'];
        }
    
    
        $existingaboutuspage->update($updateData);
    
    } else {
        $post = new aboutuspage;
        $post->heading = $validatedData['heading'];
        $post->descp = $validatedData['descp'];
        $post->MemberName = $validatedData['MemberName'];
        $post->MemberDes = $validatedData['MemberDes'];
        $post->MemberImg = $validatedData['MemberImg'];
        $post->save();
    }

    return redirect()->route('aboutus.index')->with('success', 'Abotus Page updated successfully');
}

public function deleteForm()
{
    return view('delete.aboutuspagedelete');
}



public function removeaboutuspage(Request $request)
{
    $validatedData = $request->validate([
        'heading' => 'max:255',
        'descp'=>'',
        'MemberName'=>'',
        'MemberDes'=>'',
        'MemberImg'=>'',
    ]);

    $existingaboutuspage = aboutuspage::first();

    if ($existingaboutuspage) {
        $title = explode(',', $existingaboutuspage->heading);
        $des = explode(',', $existingaboutuspage->descp);
        $mname = explode(',', $existingaboutuspage->MemberName);
        $mdes = explode(',', $existingaboutuspage->MemberDes);
        $mimg = explode(',', $existingaboutuspage->MemberImg);


        if (!empty($validatedData['heading']))
        array_pop($title);

        if (!empty($validatedData['descp']))
        array_pop($des);

        if (!empty($validatedData['MemberName']))
        array_pop($mname);

        if (!empty($validatedData['MemberDes']))
        array_pop($mdes);
        
        if (!empty($validatedData['MemberImg']))
        array_pop($mimg);

        $existingaboutuspage->heading= implode(',', $title);
        $existingaboutuspage->descp= implode(',', $des);
        $existingaboutuspage->MemberName= implode(',', $mname);
        $existingaboutuspage->MemberDes= implode(',', $mdes);
        $existingaboutuspage->MemberImg= implode(',', $mimg);
        $existingaboutuspage->save();
    }

    return redirect()->route('aboutus.index')->with('success', 'Last item deleted successfully');
}

}
