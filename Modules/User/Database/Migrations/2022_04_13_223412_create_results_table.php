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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->foreignId('term_id');
            $table->foreignId('subject_id');
            $table->foreignId('session_id');
            $table->foreignId('class_id');
            $table->integer('ca')->default(0);
            $table->integer('exam')->default(0);
            $table->integer('total')->default(0);
            $table->char('grade', 1)->default('F');
            $table->string('remark')->default('Fail');
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
        Schema::dropIfExists('results');
    }
};
