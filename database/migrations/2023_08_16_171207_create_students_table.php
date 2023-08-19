<?php

// database/migrations/2023_08_16_create_students_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id('student_id');
            $table->unsignedBigInteger('user_id');
            $table->string('name', 100);
            $table->string('degree_program', 100);
            $table->integer('year_level');
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('app_users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}