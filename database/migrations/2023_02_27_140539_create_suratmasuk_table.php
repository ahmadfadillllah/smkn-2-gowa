<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratmasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratmasuk', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nomorsurat_id')->constrained('nomorsurat')->cascadeOnDelete();
            $table->foreignId('penerima')->constrained('users')->cascadeOnDelete();
            $table->string('pengirim');
            $table->string('perihal');
            $table->string('keterangan');
            $table->string('fileku');
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
        Schema::dropIfExists('suratmasuk');
    }
}
