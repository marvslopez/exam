<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employee_tbl', function (Blueprint $table) {
            $table->id('id');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('address');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->integer('zip');
            $table->integer('age');
            $table->date('bdate');
            $table->date('dhired');
            $table->string('dept');
            $table->string('div');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_tbl');
    }
};
