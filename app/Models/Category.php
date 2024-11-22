<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //ekta category te onk gula sub category thakte pare so the relation is one to many

    // in laravel one to many relationship expressed by hasMany()

    /**
     * 
     * hasMany( ModelClass, $foriegn_key, $local_key )
     * 
     */

    public function subcategories(){


        $relation = $this->hasMany(SubCategory::class, 'category_id', 'id');

        return $relation;

    }

    //for home page posts
    public function posts()
    {
        return $this->hasMany(Post::class, 'post_category', 'id');
    }


}
