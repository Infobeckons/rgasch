<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Media extends Model
{
    use HasFactory;
    protected $fillable = [
        // 'name',
        'path',
        'tags'
    ];
    public $timestamps=false;
}
