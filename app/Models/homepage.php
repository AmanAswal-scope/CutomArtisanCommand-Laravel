<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class homepage extends Model
{
    use HasFactory;
    // app/Models/Homepage.php

protected $fillable = [
    'title',
    'title2',
    'description',
    'description1',
    'SubTitle',
    'SubTitleDes',
    'SubTitle1',
    'SubTitle1Des',
    'SubTitle2',
    'SubTitle2Des',
    'SubTitle3',
    'SubTitle3Des',
    'ServiceTitle',
    'ServiceDes',
    'Service1Title',
    'Service1',
    'Service2Title',
    'Service2',
    'Service3Title',
    'Service3',
    // Add other fields here
];

}
