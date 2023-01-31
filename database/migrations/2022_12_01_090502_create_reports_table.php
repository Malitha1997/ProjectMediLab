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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('patient_name');
            $table->string('description');
            $table->foreignId('doctor_id')->constrained('doctors');
            $table->foreignId('test_bill_id')->constrained('test_bills');
            $table->foreignId('lab_assistant_id')->constrained('lab_assistants');
            $table->string('report_file');
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
        Schema::dropIfExists('reports');
    }
};
