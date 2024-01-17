<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Servicepage;
use App\Models\Header;
use App\Models\Footer;


class ServiceController extends Controller
{

    public function index()
{
    $Footerpage = Footer::all();
    $headerpage = Header::all(); 
    $servicepage = Servicepage::all(); 
    return view('main-section.services', compact('servicepage','headerpage','Footerpage'));
}


    public function showEditForm()
    {
        $servicepage = Servicepage::first(); // Retrieve the existing homepage data
        $tableName = 'servicepages'; 
        $columns = Schema::getColumnListing($tableName);
        return view('editpage.editpageservice', compact('servicepage','columns'));
    }

    public function showviewForm()
    {
        $servicepage = Servicepage::first(); // Retrieve the existing homepage data
        $tableName = 'servicepages'; 
        $columns = Schema::getColumnListing($tableName);
        return view('view.viewservicepage', compact('servicepage','columns'));
    }


    public function updateHomepage(Request $request)
    {
        $servicepage = Servicepage::first(); 

        $title=explode(',',$servicepage->heading);
        $desc=explode(',',$servicepage->descp);
        $benefitTitle=explode(',',$servicepage->BenefitTitle);
        $benefitdes=explode(',',$servicepage->BenefitDes);
        $benefitpoint=explode(',',$servicepage->BenefitPoint);
        

        foreach($title as $ti)
        {
            if($request->has($ti))
            {
                $servicepage->heading= str_replace($ti,$request->$ti,$servicepage->heading);

            }
        }

        foreach($desc as $de)
        {
            if($request->has($de))
            {
                $servicepage->descp= str_replace($de,$request->$de,$servicepage->descp);

            }
        }

        foreach($benefitTitle as $bt)
        {
            if($request->has($bt))
            {
                $servicepage->BenefitTitle= str_replace($bt,$request->$bt,$servicepage->BenefitTitle);

            }
        }

        foreach($benefitdes as $bd)
        {
            if($request->has($bd))
            {
                $servicepage->BenefitDes= str_replace($bd,$request->$bd,$servicepage->BenefitDes);

            }
        }

        foreach($benefitpoint as $bp)
        {
            if($request->has($bp))
            {
                $servicepage->BenefitPoint= str_replace($bp,$request->$bp,$servicepage->BenefitPoint);

            }
        }
        
        //$servicepage->update($request->all());

        $servicepage->save();
        return redirect()->route('services.index')->with('success', 'Servicepage data updated successfully.');
    }



public function createForm()
{
    return view('create.servicepagecreate');
}



public function storeservicepage(Request $request)
{
    $validatedData = $request->validate([
        'heading' => 'max:255',
        'descp'=>'',
        'BenefitTitle'=>'',
        'BenefitDes'=>'',
        'BenefitPoint'=>','
    ]);

    $existingservicepage = Servicepage::first();

    if ($existingservicepage) {

        $updateData = [];

        if (!empty($validatedData['heading'])) {
            $updateData['heading'] = $existingservicepage->heading ? $existingservicepage->heading . ',' . $validatedData['heading'] : $validatedData['heading'];
        }

        
        if (!empty($validatedData['descp'])) {
            $updateData['descp'] = $existingservicepage->heading ? $existingservicepage->heading . ',' . $validatedData['descp'] : $validatedData['descp'];
        }    

        if (!empty($validatedData['BenefitTitle'])) {
            $updateData['BenefitTitle'] = $existingservicepage->BenefitTitle ? $existingservicepage->BenefitTitle . ',' . $validatedData['BenefitTitle'] : $validatedData['BenefitTitle'];
        }    

        if (!empty($validatedData['BenefitDes'])) {
            $updateData['BenefitDes'] = $existingservicepage->BenefitDes ? $existingservicepage->BenefitDes . ',' . $validatedData['BenefitDes'] : $validatedData['BenefitDes'];
        }    

        if (!empty($validatedData['BenefitPoint'])) {
            $updateData['BenefitPoint'] = $existingservicepage->BenefitPoint ? $existingservicepage->BenefitPoint . ',' . $validatedData['BenefitPoint'] : $validatedData['BenefitPoint'];
        }    
    
        $existingservicepage->update($updateData);
    
    } else {
        $post = new Servicepage;
        $post->heading = $validatedData['heading'];
        $post->descp = $validatedData['descp'];
        $post->BenefitTitle = $validatedData['BenefitTitle'];
        $post->BenefitDes = $validatedData['BenefitDes'];
        $post->BenefitPoint = $validatedData['BenefitPoint'];
        $post->save();
    }

    return redirect()->route('services.index')->with('success', 'Abotus Page updated successfully');
}

public function deleteForm()
{
    return view('delete.servicepagedelete');
}



public function removeservicepage(Request $request)
{
    $validatedData = $request->validate([
        'heading' => 'max:255',
        'descp'=>'',
        'BenefitTitle'=>'',
        'BenefitDes'=>'',
        'BenefitPoint'=>','
    ]);

    $existingservicepage = Servicepage::first();

    if ($existingservicepage) {
        $title = explode(',', $existingservicepage->heading);
        $des = explode(',', $existingservicepage->descp);
        $Benefittitle = explode(',', $existingservicepage->BenefitTitle);
        $Benefitdes = explode(',', $existingservicepage->BenefitDes);
        $Benefitpoint = explode(',', $existingservicepage->BenefitPoint);


        if (!empty($validatedData['heading']))
        array_pop($title);

        if (!empty($validatedData['descp']))
        array_pop($des);

        if (!empty($validatedData['BenefitTitle']))
        array_pop($des);

        if (!empty($validatedData['BenefitDes']))
        array_pop($des);

        if (!empty($validatedData['BenefitPoint']))
        array_pop($des);

        $existingservicepage->heading= implode(',', $title);
        $existingservicepage->descp= implode(',', $des);
        $existingservicepage->BenefitTitle= implode(',', $Benefittitle);
        $existingservicepage->BenefitDes= implode(',', $Benefitdes);
        $existingservicepage->BenefitPoint= implode(',', $Benefitpoint);
        $existingservicepage->save();
    }

    return redirect()->route('services.index')->with('success', 'Last item deleted successfully');
}
}
