<?php

// database/migrations/2023_08_17_create_feedback_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id('feedback_id');
            $table->unsignedBigInteger('excuse_slip_id');
            $table->text('feedback_text');
            $table->enum('feedback_type', ['approval', 'rejection', 'remarks']);
            $table->timestamps();

            $table->foreign('excuse_slip_id')->references('excuse_slip_id')->on('excuse_slips');
        });
    }

    public function down()
    {
        Schema::dropIfExists('feedback');
    }
}


