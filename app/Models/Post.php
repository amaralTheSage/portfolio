<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasUuids;

    protected $fillable = [
        'title',
        'techs',
        'short_description',
        'description',
        'website',
        'github',
    ];

    public function getImageURL($address)
    {
        return url('storage/'.$address);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    use HasFactory;
}
