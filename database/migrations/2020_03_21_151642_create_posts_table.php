<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('user_id');
          //   $table->timestamp('updated_at');
           // $table->integer('user_id');
            $table->text('post_content');
            $table->text('post_title');
            $table->string('post_status');
             $table->text('post_name');
            $table->text('post_type');
            $table->text('post_category');
            $table->timestamps('created_at');
           // $table->integer('counts-comment');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');

    }
}
