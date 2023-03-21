<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reportPelepasan extends Model
{
    protected $table = "riwayatpenghapusan_asset";
    protected $primaryKey = "id_hapus";
    protected $fillable  = ['id_hapus', 'id_list_aset', 'id_pelepasanstatus', 'keterangan_hapus', 'created_by', 'created_at'];
}

