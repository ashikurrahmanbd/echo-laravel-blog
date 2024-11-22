<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    //making relationship with Category Model

    /**
     * Summary of category
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        // Foreign key and primary key
        $relation =  $this->belongsTo(Category::class, 'category_id', 'id'); 

        return $relation;

    }

    //for posts relation
    public function posts()
    {
        return $this->hasMany(Post::class, 'post_subcategory', 'id');
    }
    
}
