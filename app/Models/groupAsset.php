<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class groupAsset extends Model
{
    protected $table = "group_asset";
    protected $primaryKey = "id_grup";
    protected $fillable  = ['id_grup', 'kode_grup', 'nama_grup_aset', 'tipe_depresiasi', 'tahun', 'depresiasi', 'status_grup_asset', 'created_by', 'updated_by'];
}
