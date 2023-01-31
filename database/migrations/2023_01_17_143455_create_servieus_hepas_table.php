<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServieusHepasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servieus_hepas', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('server')->nullable();
            $table->string('name_4')->nullable();
            $table->string('server_4')->nullable();
            $table->string('name_5')->nullable();
            $table->string('server_5')->nullable();
            $table->string('name_6')->nullable();
            $table->string('server_6')->nullable();
            $table->string('name_7')->nullable();
            $table->string('server_7')->nullable();
            $table->string('phone')->nullable();
            $table->string('server_phone')->nullable();
            $table->string('name_1')->nullable();
            $table->string('server_1')->nullable();
            $table->string('name_2')->nullable();
            $table->string('server_2')->nullable();
            $table->string('name_3')->nullable();
            $table->string('server_3')->nullable();
  
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
        Schema::dropIfExists('servieus_hepas');
    }
}
