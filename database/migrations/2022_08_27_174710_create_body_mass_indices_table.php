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
        Schema::create('body_mass_indices', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('first_name', 50)->nullable();
            $table->string('last_name', 50)->nullable();
            $table->double('weight', 4, 1)->nullable();
            $table->double('height', 3, 2)->nullable();
            $table->double('bmi', 4, 2)->nullable();
            $table->string('description', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('body_mass_indices');
    }
};
