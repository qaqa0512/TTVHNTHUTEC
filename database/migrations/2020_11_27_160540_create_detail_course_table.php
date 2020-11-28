<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_course', function (Blueprint $table) {
            $table->increments('detail_id');
            $table->text('detail_des_course');
            $table->text('detail_des_instructor');
            $table->text('detail_des_request');
            $table->text('detail_des_rate');
            $table->integer('course_id');
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
        Schema::dropIfExists('detail_course');
    }
}
