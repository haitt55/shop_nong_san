<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('order');
            $table->string('image')->nullable();
            $table->string('image_comment')->nullable();
            $table->longText('paragraph')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_articles');
    }
}
