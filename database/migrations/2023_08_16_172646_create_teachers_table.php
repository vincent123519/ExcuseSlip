<?php

// database/migrations/2023_08_17_create_teachers_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id('teacher_id');
            $table->unsignedBigInteger('user_id');
            $table->string('name', 100);
            $table->string('subject_area', 100);
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('app_users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
