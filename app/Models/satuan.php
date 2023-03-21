<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class satuan extends Model
{
    protected $table = "satuan";
    protected $primaryKey = "id_satuan";
    protected $fillable  = ['id_satuan', 'kode_satuan', 'nama_satuan', 'status_satuan', 'created_by', 'updated_by'];
<<<<<<< HEAD

    public function listAsset()
    {
        return $this->hasMany(listAsset::class);
    }
=======
>>>>>>> c22277f4c7dafebbbbbd97715d2f4a37afec6ccc
}