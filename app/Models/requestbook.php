<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class requestbook extends Model
{
    use HasFactory, SoftDeletes;
    protected $table='requestbook';
    protected $fillable=['status','order_id','user_id','booktitle','bookauthor','bookedition','bookquantity','mobile','address','bookimage'];

    public function earnpoint()
    {
        return $this->hasMany(Earnpoint::class);
    }
    
    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    
}
