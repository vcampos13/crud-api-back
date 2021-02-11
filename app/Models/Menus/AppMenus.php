<?php

namespace App\Models\Menus;

use Illuminate\Database\Eloquent\Model;

class AppMenus extends Model
{
    protected $table = 'app_menus';

    protected $fillable = ['color', 'icon', 'title', 'destination', 'app_menus_id'];

    public function children()
    {
        return $this->hasMany('App\Models\Menus\AppMenus','app_menus_id','id');
    }
}
