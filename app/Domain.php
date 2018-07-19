<?php

namespace App;


class Domain extends Model
{
    public function posts()
    {

    	return $this->hasMany(Post::class);

    }


}
