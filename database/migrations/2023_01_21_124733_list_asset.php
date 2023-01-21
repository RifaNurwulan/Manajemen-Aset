<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ListAsset extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_asset', function (Blueprint $table) {
            $table->id_list_aset();
            $table->string('kode_aset', 10);
            $table->satuan();
            $table->tgl_beli();
            $table->string('group_aset', 100);
            $table->tgl_pakai();
            $table->harga_perolehan();
            $table->tarif();
            $table->umur();
            $table->string('suplier', 100);
            $table->string('keterangan', 100);
            $table->no_faktur();
            $table->nama_aset();
            $table->pic();
            $table->departement();
            $table->string('lokasi', 255);
            $table->string('kondisi', 255);
            $table->string('foto_aset', 255);
            $table->string('created_by', 255);
            $table->string('updated_by', 255);
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
        Schema::dropIfExists('listAsset');
    }
}
