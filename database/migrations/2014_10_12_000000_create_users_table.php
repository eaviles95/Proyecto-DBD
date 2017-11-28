<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
           $table->string('email')->unique();
            $table->string('password');
            $table->integer('active');
            $table->rememberToken();
            $table->timestamps();

            $table->integer('rnv_id')
            ->unsigned()->nullable();
            $table->foreign('rnv_id')
            ->references('id')
            ->on('rnv')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('users');
        //DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
