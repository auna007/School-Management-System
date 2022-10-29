<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('admission_no')->unique();
            $table->string('password');
            $table->string('f_name');
            $table->string('l_name');
            $table->string('m_name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('gender');
            $table->binary('passport')->nullable();
            $table->foreignId('class_id');
            $table->foreignId('section_id');
            $table->foreignId('category_id');
            $table->foreignId('health_id');
            $table->foreignId('studytype_id');
            $table->foreignId('guardian_id');
            $table->string('sport_house');
            $table->year('year_admitted');
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('students');
    }
};
