<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Admins extends Model
// {
//     use HasFactory;
   
// }
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

 use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admins extends Model implements Authenticatable
{
    use AuthenticableTrait;

     use HasFactory;
}