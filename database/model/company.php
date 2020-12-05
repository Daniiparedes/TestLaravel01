<?php

namespace App\company;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class company extends Model
{
     use HasFactory;
     protected $fillable = ['Phoneid','name'];
}
