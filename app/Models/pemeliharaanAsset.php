<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemeliharaanAsset extends Model
{
    protected $table = "pemeliharaan_asset";
    protected $primaryKey = "id_pemeliharaan";
    protected $fillable  = ['id_pemeliharaan', 'id_list_aset', 'kode_aset', 'foto_asetRusak', 'nama_aset', 'tanggal_kerusakan', 'keterangan', 'tindakan', 'harga_perbaikan', 'created_by', 'updated_by'];
}
