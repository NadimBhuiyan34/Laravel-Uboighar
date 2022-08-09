<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Earnpoint extends Model
{
    use HasFactory;
    protected $table='earnpoint_accept';
    protected $fillable=['user_id','book_id','delivery_date','message','status','delivery_image','confirm_id'];
    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function requestbooks()
    {
        return $this->belongsTo(requestbook::class,'book_id');
    }
}
