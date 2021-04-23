<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->Increments('product_id');
            $table->string('product_name');
            $table->integer('brand_id');
            $table->text('product_content');
            $table->integer('product_price');
            $table->string('product_image1');
            $table->string('product_image2');
            $table->string('product_image3');
            $table->string('product_image4');
            $table->string('product_image5');
            $table->integer('product_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
