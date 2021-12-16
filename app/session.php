<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class session extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'ip_addresss',
        'user_agent', 
        'payload',
        'last_acitvity'
    ];

    public $timestamps=false;

}
