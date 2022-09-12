<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable=[
        'image',
        'property_id',
    ];
 
    public function properties(){
        return $this->belongsTo(Property::class);
    }

    // public function properties(){
    //     return $this->hasMany(Property::class);
    // }
}