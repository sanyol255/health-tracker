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
        Schema::create('hypoxia_tests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('first_name', 50)->nullable();
            $table->string('last_name', 50)->nullable();
            $table->integer('inhale_result')->default(0);
            $table->integer('exhale_result')->default(0);
            $table->integer('inhale_score')->default(0);
            $table->integer('exhale_score')->default(0);
            $table->string('inhale_info', 100)->default('');
            $table->string('exhale_info', 100)->default('');
            $table->integer('total_score')->default(0);
            $table->string('total_info', 200)->default('');
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
        Schema::dropIfExists('hypoxia_tests');
    }
};
