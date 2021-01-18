<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club_member', function (Blueprint $table) {
            $table->increments('club_member_id');
            $table->string('club_member_name');
            $table->string('club_member_email');
            $table->integer('club_member_phone');
            $table->integer('club_category_id');
            $table->integer('club_id');
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
        Schema::dropIfExists('club_member');
    }
}
