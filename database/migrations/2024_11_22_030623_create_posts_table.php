<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {

            $table->id();

            $table->string('post_title', 50); // Max length is 50 characters

            $table->unsignedBigInteger('post_category'); // Foreign key for category

            $table->unsignedBigInteger('post_subcategory'); // Foreign key for subcategory

            $table->string('post_thumbnail'); // Path to the image

            $table->text('post_description'); // Post content, minimum 10 characters
          

            // Foreign key constraints
            $table->foreign('post_category')->references('id')->on('categories')->onDelete('cascade');

            $table->foreign('post_subcategory')->references('id')->on('sub_categories')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
