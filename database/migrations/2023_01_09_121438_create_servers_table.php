<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servers', function (Blueprint $table) {
            $table->id();
            $table->string('name_1')->nullable();
            $table->string('name_2')->nullable();
            $table->string('name_3')->nullable();
            $table->string('name_4')->nullable();
            $table->string('name_5')->nullable();
            $table->string('name_6')->nullable();
            $table->string('name_7')->nullable();
            $table->string('name_8')->nullable();
            $table->string('name_9')->nullable();
            $table->string('name_10')->nullable();
            $table->string('name_11')->nullable();
            $table->string('name_12')->nullable();
            $table->string('name_13')->nullable();
            $table->string('name_14')->nullable();
            $table->string('name_15')->nullable();
            $table->string('name_16')->nullable();
            $table->string('name_17')->nullable();
            $table->string('name_18')->nullable();
            $table->string('name_19')->nullable();
            $table->string('name_20')->nullable();
            $table->string('name_21')->nullable();
            $table->string('name_22')->nullable();
            $table->string('name_23')->nullable();
            $table->string('name_24')->nullable();
            $table->string('name_25')->nullable();
            $table->string('name_26')->nullable();
            $table->string('name_27')->nullable();


            $table->string('server_1')->nullable();
            $table->string('server_2')->nullable();
            $table->string('server_3')->nullable();
            $table->string('server_4')->nullable();
            $table->string('server_5')->nullable();
            $table->string('server_6')->nullable();
            $table->string('server_7')->nullable();
            $table->string('server_8')->nullable();
            $table->string('server_9')->nullable();
            $table->string('server_10')->nullable();
            $table->string('server_11')->nullable();
            $table->string('server_12')->nullable();
            $table->string('server_13')->nullable();
            $table->string('server_14')->nullable();
            $table->string('server_15')->nullable();
            $table->string('server_16')->nullable();
            $table->string('server_17')->nullable();
            $table->string('server_18')->nullable();
            $table->string('server_19')->nullable();
            $table->string('server_20')->nullable();
            $table->string('server_21')->nullable();
            $table->string('server_22')->nullable();
            $table->string('server_23')->nullable();
            $table->string('server_24')->nullable();
            $table->string('server_25')->nullable();
            $table->string('server_26')->nullable();
            $table->string('server_27')->nullable();
            $table->string('name')->nullable();
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
        Schema::dropIfExists('servers');
    }
}
