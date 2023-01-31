<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAfterSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('after_sales', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('server_phone')->nullable();
            $table->string('name_1')->nullable();
            $table->string('server_1')->nullable();

            $table->string('name_2')->nullable();
            $table->string('server_2')->nullable();
            $table->string('name_3')->nullable();
            $table->string('server_3')->nullable();

            $table->string('name_4')->nullable();
            $table->string('server_4')->nullable();

            $table->string('name_5')->nullable();
            $table->string('server_5')->nullable();
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
        Schema::dropIfExists('after_sales');
    }
}
