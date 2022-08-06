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
        Schema::create('part_items', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id');
            $table->string('name_ru');
            $table->string('name_en');
            $table->string('name_jp');
            $table->integer('type');
            $table->double('weight');
            $table->integer('price');
            $table->integer('sort');
            $table->tinyInteger('car_type');
            $table->string('options');
            $table->string('code');
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
        Schema::dropIfExists('part_items');
    }
};
