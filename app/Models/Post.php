<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    //relation categories and subcategories
    public function category()
    {
        return $this->belongsTo(Category::class, 'post_category', 'id');
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'post_subcategory', 'id');
    }

    
    //to point about the database post table columns post_title, post_category all those are table column
    protected $fillable = [
        'post_title',
        'post_category',
        'post_subcategory',
        'post_thumbnail',
        'post_description',
    ];
}
