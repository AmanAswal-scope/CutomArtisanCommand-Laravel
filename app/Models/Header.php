<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;
    protected $fillable=[
        'titlelogo',
        'headertitle',
        'headertitle1',
        'headertitle2',
        'headertitle3',
        'headertitle4',
        'headertitle5',
        'headertitle6',
    ];
}
