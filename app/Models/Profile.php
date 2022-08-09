<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table='profiles';
    protected $fillable=['user_id','mobile','profession','address','facebook_url','linkedin_url','image','bio'];
    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
