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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('p_f_name');
            $table->string('p_l_name');
            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->string('house_no');
            $table->string('street_no');
            $table->string('city');
            $table->string('age');
            $table->string('p_telno');
            $table->string('nic');
            $table->foreignId('user_id')->constrained('users');
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
        Schema::dropIfExists('patients');
    }
};
