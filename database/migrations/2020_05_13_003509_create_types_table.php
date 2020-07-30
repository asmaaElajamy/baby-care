<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category')->nullable();
            $table->string('types');
            $table->string('photo');
            $table->string('val1');
            $table->string('val2');
            $table->string('val3');
            $table->string('val4');
            $table->longText('nutrients')->nullable();
            $table->longText('Pregnancy');
            $table->longText('AfterBirth');
            $table->longText('Breastfeeding');
            $table->longText('Baby');
            $table->unsignedInteger('food_id');
            $table->foreign('food_id')
            ->references('id')
            ->on('foods');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
            ->references('id')
            ->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('types');
    }
}
