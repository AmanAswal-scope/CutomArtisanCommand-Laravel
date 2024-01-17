<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contactpage;
use App\Models\Header;
use App\Models\Footer;

class ContactpageController extends Controller
{
    public function index()
    {
        $Footerpage = Footer::all();
        $headerpage = Header::all(); 
        $contactpage = Contactpage::all(); 
        return view('main-section.contact-us', compact('contactpage','headerpage','Footerpage'));
    }
    
    
        public function showEditForm()
        {
            $contactpage = Contactpage::first(); 
            $tableName = 'contactpages'; 
            $columns = Schema::getColumnListing($tableName);
            return view('editpage.editpagecontact', compact('contactpage','columns'));
        }

        public function showviewForm()
        {
            $contactpage = Contactpage::first(); // Retrieve the existing homepage data
            $tableName = 'contactpages'; 
            $columns = Schema::getColumnListing($tableName);
            return view('view.viewpagecontact', compact('contactpage','columns'));
        }
    
        public function updateHomepage(Request $request)
        {
            $contactpage = Contactpage::first(); 

            $head=explode(',',$contactpage->heading);
            $contacttitle=explode(',',$contactpage->ContactTitle);
            $contactaddress=explode(',',$contactpage->ContactTitleAddress);
            $contactnum1=explode(',',$contactpage->ContactTitleNumber);
            $contactnum2=explode(',',$contactpage->ContactTitleNumber2);
            $contactemail=explode(',',$contactpage->ContactTitleEmail);
            $regionTitle=explode(',',$contactpage->RegionTitle);
            $regionaddres=explode(',',$contactpage->regionaddress);
            $regioncontct=explode(',',$contactpage->regioncontact);
            $regionmail=explode(',',$contactpage->regionemail);
  
            foreach ($head as $he) 
            {
                if ($request->has($he)) 
                {         
                   $contactpage->heading= str_replace($he,$request->$he,$contactpage->heading);
             
                }
            }

            foreach ($contacttitle as $ct) 
            {
                if ($request->has($ct)) 
                {         
                   $contactpage->ContactTitle= str_replace($ct,$request->$ct,$contactpage->ContactTitle);
             
                }
            }

            foreach ($contactaddress as $ca) 
            {
                if ($request->has($ca)) 
                {         
                   $contactpage->ContactTitleAddress= str_replace($ca,$request->$ca,$contactpage->ContactTitleAddress);
             
                }
            }

            foreach ($contactnum1 as $cn1) 
            {
                if ($request->has($cn1)) 
                {         
                   $contactpage->ContactTitleNumber= str_replace($cn1,$request->$cn1,$contactpage->ContactTitleNumber);
             
                }
            }

            foreach ($contactnum2 as $cn2) 
            {
                if ($request->has($cn2)) 
                {         
                   $contactpage->ContactTitleNumber2= str_replace($cn2,$request->$cn2,$contactpage->ContactTitleNumber2);
             
                }
            }

            foreach ($contactemail as $cm) 
            {
                if ($request->has($cm)) 
                {         
                   $contactpage->ContactTitleEmail= str_replace($cm,$request->$cm,$contactpage->ContactTitleEmail);
             
                }
            }

            
            foreach ($regionTitle as $rt) 
            {
                if ($request->has($rt)) 
                {         
                   $contactpage->RegionTitle= str_replace($rt,$request->$rt,$contactpage->RegionTitle);
             
                }
            }

            foreach ($regionaddres as $ra) 
            {
                if ($request->has($ra)) 
                {         
                   $contactpage->regionaddress= str_replace($ra,$request->$ra,$contactpage->regionaddress);
             
                }
            }

            foreach ($regioncontct as $rc) 
            {
                if ($request->has($rc)) 
                {         
                   $contactpage->regioncontact= str_replace($rc,$request->$rc,$contactpage->regioncontact);
             
                }
            }

            foreach ($regionmail as $rmail) 
            {
                if ($request->has($rmail)) 
                {         
                   $contactpage->regionemail= str_replace($rmail,$request->$rmail,$contactpage->regionemail);
             
                }
            }

          

    
            $contactpage->save(); 
            return redirect()->route('contact.index')->with('success', 'contactpage data updated successfully.');
        }



public function createForm()
{
    return view('create.contactpagecreate');
}



public function storecontactpage(Request $request)
{
    $validatedData = $request->validate([
        'heading'=>'',
        'ContactTitle'=>'',
        'ContactTitleAddress'=>'',
        'ContactTitleNumber'=>'',
        'ContactTitleNumber2'=>'',
        'ContactTitleEmail'=>'',
    ]);

    $existingcontactpage = Contactpage::first();

    if ($existingcontactpage) {

        $updateData = [];

        if (!empty($validatedData['heading'])) {
            $updateData['heading'] = $existingaboutuspage->heading ? $existingaboutuspage->heading . ',' . $validatedData['heading'] : $validatedData['heading'];
        }

        if (!empty($validatedData['ContactTitle'])) {
            $updateData['ContactTitle'] = $existingcontactpage->ContactTitle ? $existingcontactpage->ContactTitle . ',' . $validatedData['ContactTitle'] : $validatedData['ContactTitle'];
        }

        
        if (!empty($validatedData['ContactTitleAddress'])) {
            $updateData['ContactTitleAddress'] = $existingaboutuspage->ContactTitleAddress ? $existingaboutuspage->ContactTitleAddress . ',' . $validatedData['ContactTitleAddress'] : $validatedData['ContactTitleAddress'];
        }

        if (!empty($validatedData['ContactTitleNumber'])) {
            $updateData['ContactTitleNumber'] = $existingaboutuspage->ContactTitleNumber ? $existingaboutuspage->ContactTitleNumber . ',' . $validatedData['ContactTitleNumber'] : $validatedData['ContactTitleNumber'];
        }

        if (!empty($validatedData['ContactTitleNumber2'])) {
            $updateData['ContactTitleNumber2'] = $existingaboutuspage->ContactTitleNumber2 ? $existingaboutuspage->ContactTitleNumber2 . ',' . $validatedData['ContactTitleNumber2'] : $validatedData['ContactTitleNumber2'];
        }

        if (!empty($validatedData['ContactTitleEmail'])) {
            $updateData['ContactTitleEmail'] = $existingaboutuspage->ContactTitleEmail ? $existingaboutuspage->ContactTitleEmail . ',' . $validatedData['ContactTitleEmail'] : $validatedData['ContactTitleEmail'];
        }

    
    
        $existingaboutuspage->update($updateData);
    
    } else {
        $post = new Contactpage;
        $post->heading = $validatedData['heading'];
        $post->ContactTitle = $validatedData['ContactTitle'];
        $post->ContactTitleAddress = $validatedData['ContactTitleAddress'];
        $post->ContactTitleNumber = $validatedData['ContactTitleNumber'];
        $post->ContactTitleNumber2 = $validatedData['ContactTitleNumber2'];
        $post->ContactTitleEmail = $validatedData['ContactTitleEmail'];
        $post->save();
    }

    return redirect()->route('contact.index')->with('success', 'Contact Page updated successfully');
}

public function deleteForm()
{
    return view('delete.contactpagedelete');
}



public function removecontactpage(Request $request)
{
    $validatedData = $request->validate([
        'heading'=>'',
        'ContactTitle'=>'',
        'ContactTitleAddress'=>'',
        'ContactTitleNumber'=>'',
        'ContactTitleNumber2'=>'',
        'ContactTitleEmail'=>'',
    ]);

    $existingcontactpage = Contactpage::first();

    if ($existingaboutuspage) {
        $head = explode(',', $existingcontactpage->heading);
        $title = explode(',', $existingcontactpage->ContactTitle);
        $address = explode(',', $existingcontactpage->ContactTitleAddress);
        $num1 = explode(',', $existingcontactpage->ContactTitleNumber);
        $num2 = explode(',', $existingcontactpage->ContactTitleNumber2);
        $email = explode(',', $existingcontactpage->ContactTitleEmail);


        if (!empty($validatedData['heading']))
        array_pop($head);

        if (!empty($validatedData['ContactTitle']))
        array_pop($title);

        if (!empty($validatedData['ContactTitleAddress']))
        array_pop($address);

        if (!empty($validatedData['ContactTitleNumber']))
        array_pop($num1);

        if (!empty($validatedData['ContactTitleNumber2']))
        array_pop($num2);
        
        if (!empty($validatedData['ContactTitleEmail']))
        array_pop($email);

        $existingcontactpage->heading= implode(',', $head);
        $existingcontactpage->ContactTitle= implode(',', $title);
        $existingcontactpage->ContactTitleAddress= implode(',', $address);
        $existingcontactpage->ContactTitleNumber= implode(',', $num1);
        $existingcontactpage->ContactTitleNumber2= implode(',', $num1);
        $existingcontactpage->ContactTitleEmail= implode(',', $mimg);
        $existingcontactpage->save();
    }

    return redirect()->route('contact.index')->with('success', 'Last item deleted successfully');
}
}
