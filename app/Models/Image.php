<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['post_id', 'address'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    use HasFactory;
}
