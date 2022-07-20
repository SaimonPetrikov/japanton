<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('manufacturer_id');
            $table->integer('model_id');
            $table->integer('body_id');
            $table->integer('engine_id');
            $table->integer('transmission_id');
            $table->integer('mileage');
            $table->text('headlight')->nullable();
            $table->text('taillight')->nullable();
            $table->text('marriage')->nullable();
            $table->text('notes')->nullable();
            $table->text('notes_zibiz')->nullable();
            $table->text('images')->nullable();
            $table->text('videos')->nullable();
            $table->integer('user_id');
            $table->string('body_no');
            $table->string('engine_no');
            $table->tinyInteger('in_the_way');
            $table->tinyInteger('retail');
            $table->tinyInteger('small');
            $table->tinyInteger('archive');
            $table->string('color')->nullable();
            $table->string('optic')->nullable();
            $table->string('sticker_notes');
            $table->integer('manager_id');
            $table->text('documents');
            $table->integer('provider_id');
            $table->integer('provider_engine_price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
