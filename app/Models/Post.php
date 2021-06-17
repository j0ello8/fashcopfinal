<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];
    // protected $fillable = [
    //     'caption', 'location', 'budget', 'image', 'user_id', 'description',
    // ];
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
