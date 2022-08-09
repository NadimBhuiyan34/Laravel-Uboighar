<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGetdonateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('getdonate', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('book_id')->nullable();
            $table->string('fullname',100);
            $table->string('email',100);
            $table->string('address');
            $table->string('mobile');
            $table->string('describe')->nullable();
            $table->string('booktitle',100);
            $table->string('bookauthor',100);
            $table->string('bookedition',100);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('book_id')->references('id')->on('donatebooks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('getdonate');
    }
}
