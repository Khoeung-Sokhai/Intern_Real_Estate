<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'address',
        'bedroom',
        'bathroom',
        'size',
        'price',
        'cover',
        'description',
        
        'types'
    ];

    protected $casts=[
        'types'=>'array',
    ];

    public function images(){
        return $this->belongsTo(Image::class);
    }
}