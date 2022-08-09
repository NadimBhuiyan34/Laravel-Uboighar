<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestbookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requestbook', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();  
            $table->string('booktitle',100);
            $table->string('bookauthor',100);
            $table->string('bookedition',100)->nullable();
            $table->integer('bookquantity');
            $table->string('mobile');
            $table->string('status');
            $table->string('order_id')->nullable();
            $table->string('address')->default('nadim');
            $table->string('bookimage')->nullable();
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
        Schema::dropIfExists('requestbook');
    }
}
