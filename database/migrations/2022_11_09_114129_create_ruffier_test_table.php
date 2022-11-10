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
        Schema::create('ruffier_test', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('first_name', 50)->default('');
            $table->string('last_name', 50)->default('');
            $table->integer('pulse_1')->default(0);
            $table->integer('pulse_2')->default(0);
            $table->integer('pulse_3')->default(0);
            $table->double('result', 4, 2)->nullable();
            $table->string('description', 100)->nullable();
            $table->integer('user_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ruffier_test');
    }
};
