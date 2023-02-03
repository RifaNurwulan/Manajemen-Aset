<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listAsset extends Model
{
    protected $table = "list_asset";
    protected $primaryKey = "id_list_aset";
    protected $fillable  = ['id_list_aset', 'kode_aset', 'id_grup', 'status_list_aset', 'id_satuan', 'tgl_beli', 'tgl_pakai', 'harga_perolehan', 'tarif', 'umur', 'id_supplier', 'keterangan', 'no_faktur', 'nama_aset', 'id_karyawan', 'id_departement', 'lokasi', 'kondisi', 'foto_aset', 'created_by', 'created_at', 'updated_by', 'updated_at'];
}
