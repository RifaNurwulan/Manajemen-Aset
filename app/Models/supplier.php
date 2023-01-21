<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    protected $table = "supplier";
    protected $primaryKey = "id_supplier";
    protected $fillable  = ['id_supplier', 'nama_supplier', 'alamat', 'kota', 'pic', 'telp', 'mobile_phone', 'fax', 'email', 'keterangan', 'created_by', 'updated_by'];
}
