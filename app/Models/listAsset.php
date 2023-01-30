<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listAsset extends Model
{
    protected $table = "list_asset";
    protected $primaryKey = "id_list_aset";
    protected $fillable  = ['id_list_aset', 'kode_aset', 'group_aset', 'status_list_aset', 'satuan', 'tgl_beli', 'tgl_pakai', 'harga_perolehan', 'tarif', 'umur', 'suplier', 'keterangan', 'no_faktur', 'nama_aset', 'pic', 'departement', 'lokasi', 'kondisi', 'foto_aset', 'created_by', 'created_at', 'updated_by', 'updated_at'];
}
