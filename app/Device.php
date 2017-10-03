<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Device extends Model
{
    
      use Sluggable;
      
     public function user()
    {
        return $this->belongsTo('App\User');
    }
        public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    
    
}
