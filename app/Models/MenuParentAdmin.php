<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuParentAdmin extends Model
{
    use HasFactory;
    protected $table    = "menu_parents";
    protected $fillable = ['title', 'link', 'status'];

    // Relationship to Menu One Child
    public function belongsToMenuOneChild()
    {
        return $this->belongsTo('App\Models\MenuOneChildAdmin');
    }

    // Relationship to Menu Two Child
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
