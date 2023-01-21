<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GroupAsset extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_asset', function (Blueprint $table) {
            $table->id_grup();
            $table->string('kode_grup', 10);
            $table->string('nama_grup_aset', 255);
            $table->tipe_depresiasi();
            $table->tahun();
            $table->depresiasi();
            $table->status_grup_asset();
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
        Schema::dropIfExists('groupAsset');
    }
}
