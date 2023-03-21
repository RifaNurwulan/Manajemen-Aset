<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listAsset extends Model
{
    protected $table = "list_asset";
    protected $primaryKey = "id_list_aset";
<<<<<<< HEAD
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



=======
<<<<<<< HEAD
    protected $fillable  = ['id_list_aset', 'kode_aset', 'id_grup', 'status_list_aset', 'id_satuan', 'tgl_beli', 'tgl_pakai', 'harga_perolehan', 'tarif', 'umur', 'id_supplier', 'keterangan', 'no_faktur', 'nama_aset', 'id_karyawan', 'id_departement', 'lokasi', 'kondisi', 'foto_aset', 'created_by', 'created_at', 'updated_by', 'updated_at'];
=======
    protected $fillable  = ['id_list_aset', 'kode_aset', 'group_aset', 'status_list_aset', 'satuan', 'tgl_beli', 'tgl_pakai', 'harga_perolehan', 'tarif', 'umur', 'suplier', 'keterangan', 'no_faktur', 'nama_aset', 'pic', 'departement', 'lokasi', 'kondisi', 'foto_aset', 'created_by', 'created_at', 'updated_by', 'updated_at'];
>>>>>>> 15922668a8aa208de618c2269cb613c6758c1bdd
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
}

