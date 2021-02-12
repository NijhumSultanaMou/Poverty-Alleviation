<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    protected $table='farmers';
    protected $fileable=['firstname','lastname','fathername','mothername','mobile','image','gender','dofb','age','nid','address','district','division','zipcode','amount','land','paper'];
}
