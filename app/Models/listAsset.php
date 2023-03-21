<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listAsset extends Model
{
    protected $table = "list_asset";
    protected $primaryKey = "id_list_aset";
    protected $fillable  = ['id_list_aset', 'kode_aset', 'id_grup', 'id_pelepasanstatus', 'id_satuan', 'tgl_beli', 'tgl_pakai', 'harga_perolehan', 'tarif', 'persentase', 'umur', 'id_supplier', 'keterangan', 'no_faktur', 'nama_aset', 'id_karyawan', 'id_departement', 'lokasi', 'metode', 'kondisi', 'foto_aset', 'created_by', 'created_at', 'updated_by', 'updated_at'];
    

    public function satuan()
    {
        return $this->belongsTo(satuan::class, 'id_satuan');
    }

    public function dataKaryawan()
    {
        return $this->belongsTo(dataKaryawan::class, 'id_karyawan');
    }

    public function departement()
    {
        return $this->belongsTo(departement::class, 'id_departement');
    }

    public function pelepasanstatus_asset()
    {
        return $this->belongsTo(Statuspelepasan::class, 'id_pelepasanstatus', 'id_pelepasanstatus');
    }

    public function supplier()
    {
        return $this->belongsTo(supplier::class, 'id_supplier');
    }

    public function perpindahanAsset()
    {
        return $this->belongsTo(perpindahanAsset::class, 'id_list_aset');
    }



}

