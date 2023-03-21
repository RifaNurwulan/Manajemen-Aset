<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jabatan extends Model
{
    protected $table = "jabatan";
    protected $primaryKey = "id_jabatan";
<<<<<<< HEAD
    protected $fillable  = ['id_jabatan', 'kode_jabatan', 'desc_jabatan', 'status_jabatan', 'created_by', 'updated_by'];

    public function dataKaryawan()
    {
        return $this->hasMany(dataKaryawan::class);
    }
=======
<<<<<<< HEAD
    protected $fillable  = ['id_jabatan', 'kode_jabatan', 'desc_jabatan', 'status_jabatan', 'created_by', 'updated_by'];
=======
    protected $fillable  = ['id_jabatan', 'kode_jabatan', 'jabatan', 'status_jabatan', 'created_by', 'updated_by'];
>>>>>>> 15922668a8aa208de618c2269cb613c6758c1bdd
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
}
