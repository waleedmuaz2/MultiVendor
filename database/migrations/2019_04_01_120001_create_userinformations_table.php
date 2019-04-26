<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserinformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userinformations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('WorkAs');
            $table->string('ComName');
            $table->string('MainCategory');
            $table->string('Phone');
            $table->string('CompanyAddress');
            $table->string('Email');
            $table->string('CoURL');
            $table->string('Description');
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
        Schema::dropIfExists('userinformations');
    }
}
