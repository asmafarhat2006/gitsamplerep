<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserprofileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userprofile', function (Blueprint $table) {
			$table->engine = 'MyISAM';
            $table->increments('id');
			$table->integer('field_id');
			$table->string('field_value',500);
			$table->integer('user_id')->unsigned()->index('userid_index');
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
        Schema::drop('userprofile');
    }
}
