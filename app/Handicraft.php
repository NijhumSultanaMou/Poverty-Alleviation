<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Handicraft extends Model
{
    protected $table='handicrafts';
    protected $fileable=['firstname','lastname','fathername','mothername','mobile','image','gender','dofb','age','nid','address','district','division','zipcode','amount','land','paper'];
}
