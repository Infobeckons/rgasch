<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media_User_Map extends Model
{
    use HasFactory;
    protected $table = "media_user_map";
    protected $fillable = [
        'user_id',
        'media_id'
    ];
    public $timestamps=false;

}
