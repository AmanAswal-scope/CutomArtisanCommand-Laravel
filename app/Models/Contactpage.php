<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactpage extends Model
{
    use HasFactory;

    protected $fillable=[
        'title', 
        'image', 
        'heading',

        'ContactTitle',
        'ContactTitleAddress',
        'ContactTitleNumber',
        'ContactTitleNumber2',
        'ContactTitleEmail',

        'contacttitle1', 
        'title1address', 
        'title1number', 
        'title1number2', 
        'title1email', 
        'contacttitle2', 
        'title2address', 
        'title2number', 
        'title2number2', 
        'title2email', 
        'contacttitle3', 
        'title3address', 
        'title3number', 
        'title3email', 
        'contacttitle4', 
        'title4address', 
        'title4number', 
        'title4email', 
        'contacttitle5', 
        'title5address', 
        'title5email', 
        'regionaltitle', 
        'regional1title', 
        'regional1address', 
        'regional1number', 
        'regional1email', 
        'regional2title', 
        'regional2address', 
        'regional2number', 
        'regional2email', 
        'regional3title', 
        'regional3address', 
        'regional3number', 
        'regional3email', 
        'regional4title', 
        'regional4address', 
        'regional4number', 
        'regional4email',
        
    ];
}
