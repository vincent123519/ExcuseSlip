<?php

// database/migrations/2023_08_17_create_deans_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeansTable extends Migration
{
    public function up()
    {
        Schema::create('deans', function (Blueprint $table) {
            $table->id('dean_id');
            $table->unsignedBigInteger('user_id');
            $table->string('name', 100);
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('app_users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('deans');
    }
}
