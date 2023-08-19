<?php

// database/migrations/2023_08_17_create_counselors_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCounselorsTable extends Migration
{
    public function up()
    {
        Schema::create('counselors', function (Blueprint $table) {
            $table->id('counselor_id');
            $table->unsignedBigInteger('user_id');
            $table->string('name', 100);
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('app_users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('counselors');
    }
}
