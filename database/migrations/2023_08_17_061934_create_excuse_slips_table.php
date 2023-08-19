<?php

// database/migrations/2023_08_17_create_excuse_slips_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExcuseSlipsTable extends Migration
{
    public function up()
    {
        Schema::create('excuse_slips', function (Blueprint $table) {
            $table->id('excuse_slip_id');
            $table->unsignedBigInteger('student_id');
            $table->string('course_absent', 100);
            $table->text('reason_for_absence');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('supporting_document', 255)->nullable();
            $table->timestamps();

            $table->foreign('student_id')->references('student_id')->on('students');
        });
    }

    public function down()
    {
        Schema::dropIfExists('excuse_slips');
    }
}
