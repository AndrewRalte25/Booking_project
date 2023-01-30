<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'code',
    ];

    protected $hidden = [
        // 'is_active',
        // 'limit'
    ];

    protected $casts = [
        'name' => 'string',
        'code' => 'string',
    ];

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
