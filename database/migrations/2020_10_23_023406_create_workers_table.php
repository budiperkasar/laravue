<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('group_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('priority')->nullable();
            $table->string('worker_name');
            $table->string('slug')->unique();
            $table->string('meta_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_desc')->nullable();
            $table->integer('agency_id')->unsigned();
            $table->integer('profession_id')->unsigned();
            $table->integer('admin_fee')->nullable();
            $table->integer('salary')->nullable();
            $table->string('description')->nullable();
            $table->string('profile_picture')->nullable();
            $table->integer('religion_id')->unsigned();
            $table->integer('country_id')->unsigned();
            $table->integer('province_id')->unsigned();
            $table->integer('district_id')->unsigned();
            $table->integer('marital_status_id')->unsigned();
            $table->string('address')->nullable();
            $table->integer('tribe_id')->unsigned();
            $table->integer('police_letter_id')->unsigned();
            $table->integer('doctor_note_id')->unsigned();
            $table->integer('reference_id')->unsigned();
            $table->integer('last_education_id')->unsigned();
            $table->integer('skill_pivot_id')->unsigned();
            $table->integer('willing_work_loc_pivot_id')->unsigned();
            $table->integer('weight')->nullable();
            $table->integer('height')->nullable();
            $table->integer('year_experience')->nullable();
            $table->integer('age')->nullable();
            $table->boolean('understand_english')->nullable();
            $table->boolean('experience_work_aboard')->nullable();
            $table->boolean('afraid_of_dog')->nullable();
            $table->boolean('have_children')->nullable();
            $table->boolean('number_of_children')->nullable();
            $table->boolean('stay_overnight')->nullable();
            $table->integer('warranty_period')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workers');
    }
}
