<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['title', 'icon', 'url', 'parent_id'];

    public function childs()
    {
        return $this->hasMany('App\Models\Menu', 'parent_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo('App\Models\Menu', 'parent_id');
    }
}
