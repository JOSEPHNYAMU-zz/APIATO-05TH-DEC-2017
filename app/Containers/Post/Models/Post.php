<?php

namespace App\Containers\Post\Models;

use App\Ship\Parents\Models\Model;

class Post extends Model
{
    protected $fillable = [

        'user_id', 'title', 'body'
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'posts';

    public function path(){
        return '/posts/' . $this->id;
    }
}
