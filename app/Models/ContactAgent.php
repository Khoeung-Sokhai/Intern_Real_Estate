<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactAgent extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'agent_id',
        'name',
        'phone',
        'email',
        'message'
        
    ];

    public function agent(){
        return $this->belongsTo(User::class);
    }

}