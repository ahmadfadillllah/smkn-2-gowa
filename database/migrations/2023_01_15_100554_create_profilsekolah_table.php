<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilsekolahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profilsekolah', function (Blueprint $table) {
            $table->id();
            $table->text('visi')->nullable();
            $table->text('misi')->nullable();
            $table->text('struktur_organisasi')->nullable();
            $table->text('sejarah')->nullable();
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
        Schema::dropIfExists('profilsekolah');
    }
}
