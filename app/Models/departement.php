<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departement extends Model
{
    protected $table = "departement";
    protected $primaryKey = "id_departement";
    protected $fillable  = ['id_departement', 'kode_departement', 'nama_departement', 'singkatan', 'status', 'created_by', 'updated_by'];
}
