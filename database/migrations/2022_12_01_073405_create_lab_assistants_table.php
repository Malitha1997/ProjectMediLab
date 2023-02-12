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
        Schema::create('lab_assistants', function (Blueprint $table) {
            $table->id();
            $table->string('telno');
            $table->string('address_line1');
            $table->string('address_line2');
            $table->string('address_line3');
            $table->string('qualification');
            $table->string('age');
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
        Schema::dropIfExists('lab_assistants');
    }
};
