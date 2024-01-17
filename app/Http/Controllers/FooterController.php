<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Footer;

class FooterController extends Controller
{
    public function index()
    {
   
        return redirect()->route('home.index');

    }
    
    
        public function showEditForm()
        {
            $Footerpage = Footer::first(); // Retrieve the existing header data
            $tableName = 'footers'; 
            $columns = Schema::getColumnListing($tableName);
            return view('editpage.editpageFooter', compact('Footerpage','columns'));
        }
    
        public function showviewForm()
        {
            $Footerpage = Footer::first(); // Retrieve the existing header data
            $tableName = 'footers'; 
            $columns = Schema::getColumnListing($tableName);
            return view('view.viewpageFooter', compact('Footerpage','columns'));
        }


        public function updateHomepage(Request $request)
        {
           
            $Footerpage = Footer::first(); 
            $svamInfoFooter = explode(',', $Footerpage->SvamInfoFooter);
            $footertitl = explode(',', $Footerpage->footertitle);
            $footersubtitl=explode(',',$Footerpage->footersubtitle);
            $opyRsubtitle=explode(',',$Footerpage->CopyRsubtitle);


        
            foreach ($svamInfoFooter as $sif) 
            {
                if ($request->has($sif)) 
                {         
                   $Footerpage->SvamInfoFooter= str_replace($sif,$request->$sif,$Footerpage->SvamInfoFooter);
             
                }
            }
   
            foreach ($footertitl as $ft) 
            {
                if ($request->has($ft)) 
                {         
                   $Footerpage->footertitle= str_replace($ft,$request->$ft,$Footerpage->footertitle);
             
                }
            }
   
            foreach ($footersubtitl as $fst) 
            {
                if ($request->has($fst)) 
                {         
                   $Footerpage->footersubtitle= str_replace($fst,$request->$fst,$Footerpage->footersubtitle);
             
                }
            }
   
            foreach ($opyRsubtitle as $rs) 
            {
                if ($request->has($rs)) 
                {         
                   $Footerpage->CopyRsubtitle= str_replace($rs,$request->$rs,$Footerpage->CopyRsubtitle);
             
                }
            }
   
            $Footerpage->save();
            return redirect()->route('footer.index')->with('success', 'footer data updated successfully.');

        }






public function createForm()
{
    return view('create.footerpagecreate');
}



public function storefooterpage(Request $request)
{
    $validatedData = $request->validate([
        'footertitle' => 'max:255',
        'footersubtitle'=>'',
        'CopyRsubtitle'=>'',
        'SvamInfoFooter'=>'',
    ]);

    $existingfooterpage = Footer::first();

    if ($existingfooterpage) {

        $updateData = [];

        if (!empty($validatedData['footertitle'])) {
            $updateData['footertitle'] = $existingfooterpage->footertitle ? $existingfooterpage->footertitle . ',' . $validatedData['footertitle'] : $validatedData['footertitle'];
        }
    
        if (!empty($validatedData['footersubtitle'])) {
            $updateData['footersubtitle'] = $existingfooterpage->footersubtitle ? $existingfooterpage->footersubtitle . ',' . $validatedData['footersubtitle'] : $validatedData['footersubtitle'];
        }

        if (!empty($validatedData['CopyRsubtitle'])) {
            $updateData['CopyRsubtitle'] = $existingfooterpage->CopyRsubtitle ? $existingfooterpage->CopyRsubtitle . ',' . $validatedData['CopyRsubtitle'] : $validatedData['CopyRsubtitle'];
        }

        if (!empty($validatedData['SvamInfoFooter'])) {
            $updateData['SvamInfoFooter'] = $existingfooterpage->SvamInfoFooter ? $existingfooterpage->SvamInfoFooter . ',' . $validatedData['SvamInfoFooter'] : $validatedData['SvamInfoFooter'];
        }
    
    
    
        $existingfooterpage->update($updateData);
    
    } else {
        $post = new Footer;
        $post->footertitle = $validatedData['footertitle'];
        $post->footersubtitle = $validatedData['footersubtitle'];
        $post->CopyRsubtitle = $validatedData['CopyRsubtitle'];
        $post->SvamInfoFooter = $validatedData['SvamInfoFooter'];
        $post->save();
    }

    return redirect()->route('footer.index')->with('success', 'Footerpage updated successfully');
}

public function deleteForm()
{
    return view('delete.footerpagedelete');
}



public function removefooterpage(Request $request)
{
    $validatedData = $request->validate([
        'footertitle' => 'max:255',
        'footersubtitle'=>'',
        'CopyRsubtitle'=>'',
        'SvamInfoFooter'=>'',
    ]);

    $existingfooterpage = Footer::first();

    if ($existingfooterpage) {
        $titles = explode(',', $existingfooterpage->footertitle);
        $subtitles = explode(',', $existingfooterpage->footersubtitle);
        $Copyrsubtitle = explode(',', $existingfooterpage->CopyRsubtitle);
        $SvamInfo = explode(',', $existingfooterpage->SvamInfoFooter);


        if (!empty($validatedData['footertitle']))
        array_pop($titles);

        if (!empty($validatedData['footersubtitle']))
        array_pop($subtitles);

        
        if (!empty($validatedData['CopyRsubtitle']))
        array_pop($Copyrsubtitle);

        if (!empty($validatedData['SvamInfoFooter']))
        array_pop($SvamInfo);

        $existingfooterpage->footertitle= implode(',', $titles);
        $existingfooterpage->footersubtitle= implode(',', $subtitles);
        $existingfooterpage->CopyRsubtitle= implode(',', $Copyrsubtitle);
        $existingfooterpage->SvamInfoFooter= implode(',', $SvamInfo);

        $existingfooterpage->save();
    }

    return redirect()->route('footer.index')->with('success', 'Last item deleted successfully');
}

}
