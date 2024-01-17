<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected $fillable=[
        'footerlogo', 
        'SvamInfoFooter',
        'address',
        'Contactctnumber', 
        'email', 
        'footertitle',
        'footersubtitle',
        'title1',
        'T1subtitle1', 
        'T1subtitle2', 
        'T1subtitle3', 
        'T1subtitle4', 
        'T1subtitle5', 
        'T1subtitle6', 
        'T1subtitle7', 
        'T1subtitle8', 
        'title2',
        'T2subtitle1',
        'T2subtitle2', 
        'T2subtitle3', 
        'T2subtitle4', 
        'title3',
        'T3subtitle1',
        'T3subtitle2', 
        'connectwithus', 
        'copyright', 
        'CopyRsubtitle',
        'CopyRsubtitle1', 
        'CopyRsubtitle2',
        'CopyRsubtitle3', 
        'created_at',
        'updated_at',

    ];
}
