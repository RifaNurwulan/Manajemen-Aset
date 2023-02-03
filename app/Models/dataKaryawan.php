<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataKaryawan extends Model
{
    protected $table = "data_karyawan";
    protected $primaryKey = "id_karyawan";
    protected $fillable  = ['id_karyawan', 'nama_karyawan', 'nik', 'id_jabatan', 'status_data_karyawan', 'created_by', 'updated_by'];
}
