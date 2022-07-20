<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->increments('id');
            
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('post_id');
            $table->text('like')->default(0);
            $table->timestamps();
            
            
            // Delete all comments on delete users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
             // Delete all comments on delete posts
             $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('votes');
    }
};
