<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Tags\HasTags;


class media extends Model
{
    use HasFactory, InteractsWithMedia, HasTags;

    protected $fillable = [
        'name'
    ];
    public $timestamps=false;
}
