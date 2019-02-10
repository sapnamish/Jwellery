<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubSubMenuItem extends Model
{
    protected $fillable = [
        'name', 'config', 'sub_menu_items_id', 'action'
    ];

    public function subMenu()
    {
        return $this->belongsTo('App\SubMenu');
    }
}
