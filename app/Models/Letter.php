<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    public $timestamps = true;

    protected $table = 'News';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'headline',
        'story text',
        'added_on',
    ];

    protected $casts = [
        'headline'      =>  'string',
        'story text'    =>  'string',
        'added_on'      =>  'string',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
    ];
}