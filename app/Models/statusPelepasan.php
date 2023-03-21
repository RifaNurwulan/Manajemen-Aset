<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statusPelepasan extends Model
{
    protected $table = "pelepasanstatus_asset";
    protected $primaryKey = "id_pelepasanstatus";
    protected $fillable  = ['id_pelepasanstatus', 'desc_pelepasanstatus', 'created_by', 'updated_by', 'status_pelepasan'];
    
}
