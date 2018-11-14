<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
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
            $table->integer('product_id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('details')->nullable();
            $table->integer('category_id');
            $table->decimal('price',8,2);
            $table->integer('unit_id');
            $table->boolean('size_track')->nullable();
            $table->integer('campaign_id')->nullable();
            $table->boolean('deleted')->default(false);
            $table->boolean('featured')->default(false);
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
        Schema::dropIfExists('products');
    }
}
