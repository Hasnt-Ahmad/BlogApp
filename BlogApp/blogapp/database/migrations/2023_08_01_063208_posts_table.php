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
        //
        Schema::create('posts',function(Blueprint $table){
            $table->string("category_name");
            $table->bigInteger('post_id')->primary()->autoIncrement();
            $table->string("post_title");
            $table->string("post_content");
            $table->date("post_publication_date");
            $table->foreign('category_name')->references('category_name')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
