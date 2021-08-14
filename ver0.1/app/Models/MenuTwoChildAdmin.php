<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class MenuTwoChildAdmin extends Model
{
    use HasFactory, Notifiable;
    protected $table    = "menu_two_childs";
    protected $fillable = ['id_menu_parent', 'id_menu_one_child', 'title', 'link', 'status'];

    // Relationship to Menu Parent
    public function menuParent()
    {
        return $this->hasOne('App\Models\MenuParentAdmin', 'id', 'id_menu_parent');
    }

    // Relationship to Menu Parent
    public function menuOneChild()
    {
        return $this->hasOne('App\Models\MenuOneChildAdmin', 'id', 'id_menu_one_child');
    }

    // Relationship to Page
    public function belongsToPage()
    {
        return $this->belongsTo('App\Models\Page');
    }
}
