<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    public function Author()
    {
        return $this->belongsTo('App\Author');
    }
}
