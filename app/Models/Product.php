<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'brand',
        'color',
        'size',
        'location',
        'description',
        'price',
        'quantity',
        'image',
        'category',
        'user_id'
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
