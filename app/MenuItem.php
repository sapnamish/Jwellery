<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = [
        'name', 'action'

    ];

    public function subMenu()
    {
        return $this->hasMany('App\SubMenuItem');
    }
}
