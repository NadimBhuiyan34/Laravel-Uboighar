<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class sellbook extends Model
{
    use HasFactory, SoftDeletes;
    protected $table='sellbook';
    protected $fillable=['status','user_id','booktitle','bookauthor','bookedition','bookquantity','mobile','price','bookimage'];

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}

