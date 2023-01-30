<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jabatan extends Model
{
    protected $table = "jabatan";
    protected $primaryKey = "id_jabatan";
    protected $fillable  = ['id_jabatan', 'kode_jabatan', 'jabatan', 'status_jabatan', 'created_by', 'updated_by'];
}
