<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('no_barang');
            $table->string('namabarang');
            $table->string('varian');
            $table->date('tanggal_kadaluarsa');
            $table->date('tanggal_produksi');
            $table->decimal('hargabeli', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('barangs');
    }
}
