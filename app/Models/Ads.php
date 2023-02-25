<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    use HasFactory;

    protected $table = 'ads';
    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'description',
        'price',
        'address',
        'communication',
        'active',
        'slug',
        'phone'
        ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function images()
    {
        return $this->hasMany(Gallery::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
