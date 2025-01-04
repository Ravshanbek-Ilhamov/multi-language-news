<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'order'
    ];

    protected $casts = [
        'name' => 'array',
    ];

    public function news()
    {
        return $this->hasMany(News::class);
    }
}
