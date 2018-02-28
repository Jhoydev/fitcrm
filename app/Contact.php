<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function Member(){
        return  $this->belongsTo(Member::class);
    }
    public function fullName(){
        return $this->name . " " . $this->last_name;
    }
}
