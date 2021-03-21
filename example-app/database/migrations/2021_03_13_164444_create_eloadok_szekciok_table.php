<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEloadokSzekciokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eloadok_szekciok', function (Blueprint $table) {

            $table->unsignedBigInteger('eloado_id');
            $table->foreign('eloado_id')->references('id')->on('eloadok');
           $table->unsignedBigInteger('szekcio_id');
             $table->foreign('szekcio_id')->references('szekcio_id')->on('szekciok');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eloadok_szekciok');
    }
}
