<?php

namespace App\Phone;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Phone extends Model
{
    use HasFactory;
    protected $fillable = ['model','price'];
}
