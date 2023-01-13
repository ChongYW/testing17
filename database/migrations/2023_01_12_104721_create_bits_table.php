<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bits', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // CYW(S)
            $table -> string('chartName')->nullable();
            $table -> string('currenciesName')->nullable();
            $table -> double('rate')->nullable();
            $table -> dateTime('updateTimeUTC')->nullable();
            // CYW(E)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bits');
    }
}
