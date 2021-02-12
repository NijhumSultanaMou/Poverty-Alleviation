<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('fathername');
            $table->string('mothername');
            $table->string('mobile')->unique();
            $table->mediumText('image')->nullable();
            $table->string('gender');
            $table->string('dofb');
            $table->string('age');
            $table->string('nid')->unique();
            $table->string('address');
            $table->string('district');
            $table->string('division');
            $table->string('zipcode');
            $table->string('amount');
            $table->string('totalamount');
            $table->string('land');
            $table->string('paper');
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
        Schema::dropIfExists('farmers');
    }
}
