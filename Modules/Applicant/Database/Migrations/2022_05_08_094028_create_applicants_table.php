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
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('application_no')->nullable();
            $table->string('f_name'); 
            $table->string('surname')->nullable();
            $table->string('m_name')->nullable();
            $table->string('email')->unique();
            $table->string('gender')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->string('lga')->nullable();
            $table->string('passport')->nullable();
            $table->string('disability')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('allergic_info')->nullable();
            $table->string('guardian_name')->nullable();
            $table->string('relationship')->nullable();
            $table->string('g_address')->nullable();
            $table->string('g_phone_no')->unique()->nullable();
            $table->string('g_email')->nullable();
            $table->string('class_id')->nullable();
            $table->string('propose_class_id')->nullable();
            $table->string('category_id')->nullable();
            $table->string('previous_sch')->nullable();  
            $table->string('session_id')->nullable();              
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('applicants');
    }
};
