<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTagPivotTable extends Migration
{
    /**
     * Run the migrations.
     * 文章分类中间表
     * @return void
     */
    public function up()
    {
        //
        Schema::create('post_tag_pivot', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tag_id')->unsigned();
            $table->integer('post_id')->unsigned();
            $table->timestamps();

            $table->foreign('tag_id')->on('tags')->references('id');
            $table->foreign('post_id')->on('posts')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('post_tag_pivot');
    }
}
