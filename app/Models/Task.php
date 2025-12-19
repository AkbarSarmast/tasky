<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


public function users() { return $this->belongsToMany('App\Models\User'); }


class Task extends Model
{
    //
}
