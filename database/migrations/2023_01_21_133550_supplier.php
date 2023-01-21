<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Supplier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier', function (Blueprint $table) {
            $table->id_supplier();
            $table->nama_supplier();
            $table->alamat();
            $table->kota();
            $table->string('pic', 255);
            $table->string('telp', 255);
            $table->string('mobile_phone', 255);
            $table->fax();
            $table->string('email', 255);
            $table->string('keterangan', 255);
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
        Schema::dropIfExists('supplier');
    }
}
