<?php

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
        Schema::create('products', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('tinyurl')->unique();
            $table->string('title');
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->string('price')->nullable();
            $table->string('capacity')->nullable();
            $table->string('input')->nullable();
            $table->string('output')->nullable();
            $table->string('company')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->string('weight')->nullable();
            $table->text('introcom')->nullable();
            $table->text('intropro')->nullable();
            $table->integer('user_id');
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
        //
    }
}
