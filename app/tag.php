<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class tag extends Model
{
    use HasFactory;
    use HasTags;

    protected $fillable = [
        'name',
        'slug'
    ];
    public $timestamps=false;
}
