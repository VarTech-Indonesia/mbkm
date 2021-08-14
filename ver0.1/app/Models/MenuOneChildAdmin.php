<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class MenuOneChildAdmin extends Model
{
    use HasFactory, Notifiable;
    protected $table    = "menu_one_childs";
    protected $fillable = ['id_menu_parent', 'title', 'link', 'status'];

    // Relationship to Menu Parent
    public function menuParent()
    {
        return $this->hasOne('App\Models\MenuParentAdmin', 'id', 'id_menu_parent');
    }

    // Relationship to Menu One Child
    public function belongsToMenuTwoChild()
    {
        return $this->belongsTo('App\Models\MenuTwoChildAdmin');
    }

    // Relationship to Page
    public function belongsToPage()
    {
        return $this->belongsTo('App\Models\Page');
    }
}
