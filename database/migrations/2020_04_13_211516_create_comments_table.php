<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name');
            $table->string('email');
            $table->text('comment');
            $table->boolean('approved');
            $table->integer('post_id')->unsigned();
            $table->integer('user_id')->unsigned();


           Schema::table('comments', function($table){
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
              });

           Schema::table('comments', function($table){
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
              });

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');

        Schema::dropForeign(['post_id']);
        Schema::dropForeign(['user_id']);

    }
}
