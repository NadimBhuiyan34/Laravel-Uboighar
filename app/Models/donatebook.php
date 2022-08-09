<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class donatebook extends Model
{
    use HasFactory, SoftDeletes;
    protected $table='donatebooks';
    protected $fillable=['fullname','user_id','email','address','mobile','booktitle','bookauthor','bookedition','bookquantity','bookimage','status'];
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
