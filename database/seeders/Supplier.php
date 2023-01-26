<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Supplier extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0;$i<20;$i++){
            $test = new supplier;
            $test->nama_supplier = "testt";
            $test->alamat = "sama";
            $test->kota = "kotaa";
            $test->pic = "picc";
            $test->telp = "08080808";
            $test->mobile_phone = "08080808";
            $test->fax = "13";
            $test->email = "test@gmail.com";
            $test->keterangan = "test@gmail.com";

        }
    }
}
