<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $table    = 'pages';
    protected $guarded  = ['id'];

    // Relationship to Menu Parent
    public function menuParents()
    {
        return $this->hasOne('App\Models\MenuParentAdmin', 'id', 'id_menu_parent');
    }

    // Relationship to Menu One Child
    public function menuOneChild()
    {
        return $this->hasOne('App\Models\MenuOneChildAdmin', 'id', 'id_menu_one_child');
    }

    // Relationship to Menu Two Child
    public function menuTwoChild()
    {
        return $this->hasOne('App\Models\MenuTwoChildAdmin', 'id', 'id_menu_two_child');
    }

    // Relationship to User
    public function users()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_author');
    }
}
