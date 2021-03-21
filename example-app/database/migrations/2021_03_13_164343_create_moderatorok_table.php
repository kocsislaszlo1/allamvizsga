<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModeratorokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moderatorok', function (Blueprint $table) {
            $table->id('moderator_id');
         $table->unsignedBigInteger('felhasznalo_id');
         $table->foreign('felhasznalo_id')->references('id')->on('users');
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
        Schema::dropIfExists('moderatorok');
    }
}
