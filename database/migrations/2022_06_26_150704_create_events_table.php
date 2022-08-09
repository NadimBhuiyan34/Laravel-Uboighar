<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100)->unique();
            $table->string('image',100)->nullable();
            $table->string('cheif_guest')->nullable();
            $table->text('details')->nullable();
            $table->string('venue');
            $table->date('date')->formate('d-m-Y');
            $table->time('time');
            $table->timestamps();
            $table->softDeletes();
            
           
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
