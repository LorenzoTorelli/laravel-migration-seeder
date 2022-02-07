<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string("NomeAzienda", 40);
            $table->string("NomeViaggio", 20);
            $table->string("Meta",20);
            $table->date("DataPartenza");
            $table->tinyInteger("Notti");
            $table->smallInteger('CostoViaggio');
            $table->tinyInteger("NumeroPersoneMax");
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
        Schema::dropIfExists('trips');
    }
}
