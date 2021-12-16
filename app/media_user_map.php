<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class media_user_map extends Model
{
    use HasFactory;
    protected $table = "media_user_map";
    protected $fillable = [
        'user_id',
        'media_id'
    ];
    public $timestamps=false;

}
