<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('News', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('headline', 127);
            $table->text('story_text');
            $table->text('excerpt');
            $table->dateTime('added_on')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('News');
    }
}
