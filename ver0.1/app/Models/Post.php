<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table    = 'posts';
    protected $guarded  = ['id'];

    // Relationship to Post Categories
    public function postCategories()
    {
        return $this->hasOne('App\Models\PostCategories', 'id', 'id_category');
    }

    // Relationship to User
    public function users()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_author');
    }
}
