<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkerCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worker_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('worker_group_id')->nullable();
            $table->boolean('active')->nullable();
            $table->integer('parent')->nullable();
            $table->integer('entry_by')->nullable();
            $table->string('title')->nullable();
            $table->string('desc')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_desc')->nullable();
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
        Schema::dropIfExists('worker_categories');
    }
}
