<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->constrained();
            $table->foreignId('car_id')->nullable()->constrained();
            $table->foreignId('cmodel_id')->nullable()->constrained();
            $table->foreignId('country_id')->nullable()->constrained();
            $table->foreignId('year_id')->nullable()->constrained();
            $table->string('f_name');
            $table->string('l_name');
            $table->string('phone',30)->nullable();
            $table->string('email')->unique();
            $table->string('address')->nullable();
            $table->string('location')->nullable();
            $table->enum('gender', ['male', 'fmale']);
            $table->date('date_of_birth')->nullable();
            $table->string('photo');
            $table->string('car_number',15)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
