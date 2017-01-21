<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    public $timestamps = false;

    protected $table = 'News';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'headline',
        'story_text',
        'excerpt',
        'added_on',
    ];

    protected $casts = [
        'headline'      =>  'string',
        'story_text'    =>  'string',
        'excerpt'       =>  'string',
        'added_on'      =>  'dateTime',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
    ];
}