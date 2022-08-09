<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class getdonate extends Model
{
    use HasFactory;
    protected $table='getdonate';
    protected $fillable=['fullname','email','address','mobile','booktitle','bookauthor','bookedition','describe'];
}
