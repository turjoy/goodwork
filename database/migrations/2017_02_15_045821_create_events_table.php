<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('title');
            $table->string('description');
            $table->text('time')->comment('format - {"day":"Mon","start":"05:58","end":"15:58"}');
            $table->string('place')->nullable()->comment('where the event will take place');
            $table->integer('created_by')->unsigned()->comment('id of the user who created the event');
            $table->string('eventable_type')->comment('office, team or projects');
            $table->integer('eventable_id')->unsigned();
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
        Schema::dropIfExists('events');
    }
}
