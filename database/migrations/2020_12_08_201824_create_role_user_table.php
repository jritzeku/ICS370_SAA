<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();     //dont need this
            // $table->bigIncrements('id');
            $table->bigInteger('role_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');//->onCascade('delete');
            $table->foreign('role_id')->references('id')->on('roles');//->onCascade('delete');



//todo: if onCascade() dont work, try cascadeOnDelete() below

            //  $table->foreign('role_id')->references('id')->on('roles')->cascadeOnDelete();
            //$table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_user');
    }
}