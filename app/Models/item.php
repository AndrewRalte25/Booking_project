<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'image',
        'date',
        'price',
        'Location',
    ];

    protected $hidden = [
        // 'is_active',
        // 'limit'
    ];

    protected $casts = [
        
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
