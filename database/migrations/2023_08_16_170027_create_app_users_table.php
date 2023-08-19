<?php

// database/migrations/2023_08_16_create_app_users_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppUsersTable extends Migration
{
    public function up()
    {
        Schema::create('app_users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('username', 50)->unique();
            $table->string('password', 100);
            $table->enum('user_type', ['student', 'counselor', 'dean', 'teacher']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('app_users');
    }
}
