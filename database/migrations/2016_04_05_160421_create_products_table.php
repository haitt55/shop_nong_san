<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->string('name');
            $table->string('product_code')->nullable();
            $table->double('price');
            $table->integer('discount')->default(0);
            $table->integer('amount')->default(0);
            $table->integer('unit_id')->default(0);
            $table->longText('detail')->nullable();
            $table->string('slug');
            $table->tinyInteger('status')->default(1);
            $table->string('page_title', 70)->nullable();
            $table->string('meta_keyword')->nullable();
            $table->string('meta_description', 160)->nullable();
            $table->string('image')->nullable();
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
        Schema::drop('products');
    }
}