<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('user_last_name', 100);
            $table->char('user_first_name', 100);
            $table->mediumText('user_address');
            $table->mediumText('user_post');
            $table->mediumText('user_phone');
            $table->mediumText('user_linked_in');
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
        Schema::dropIfExists('cvs');
    }
}
