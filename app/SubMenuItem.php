<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubMenuItem extends Model
{
    protected $fillable = [
        'name', 'config', 'menu_items_id', 'action'
    ];

    public function subSubMenu()
    {
        return $this->hasMany('App\SubSubMenuItem');
    }

    public function menu()
    {
        return $this->belongsTo('App\MenuItem');
    }
}
