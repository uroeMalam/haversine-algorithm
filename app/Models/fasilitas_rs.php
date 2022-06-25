<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\SoftDeletes;

class fasilitasrs extends Model
{
    use HasFactory;
    use Timestamp;
    use SoftDeletes;

    protected $table = 'tb_fasilitas_rs';
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'id_rs_apotek', 'id_fasilitas', 'keterangan',
    ];
}
