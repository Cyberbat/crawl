<?php

namespace App;



class Post extends Model
{
    	
    	public function domain(){

    		return $this->belongsTo(Domain::class);
    	}


    }
