<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perpindahanAsset extends Model
{
    protected $table = "perpindahan_asset";
    protected $primaryKey = "id_log_aset";
    protected $fillable  = ['id_log_aset', 'id_list_aset', 'kode_aset', 'nama_aset', 'id_karyawan_before','id_departement_before', 'lokasi_before', 'id_karyawan', 'id_departement', 'lokasi', 'created_by', 'created_at', 'updated_by', 'updated_at'];
}

