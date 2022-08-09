<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonatebooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donatebooks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('fullname',100);
            $table->string('email',100);
            $table->string('address');
            $table->string('mobile');
            $table->string('booktitle',100);
            $table->string('bookauthor',100);
            $table->string('bookedition',100)->nullable();
            $table->integer('bookquantity')->nullable();
            $table->string('bookimage',100);
            $table->string('status',100);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donatebooks');
    }
}
