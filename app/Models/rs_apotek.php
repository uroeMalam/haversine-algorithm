<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\SoftDeletes;


class rs_apotek extends Model
{
    use HasFactory;
    use Timestamp;
    use SoftDeletes;

    protected $table = 'tb_rs_apotek';
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'id_kategori', 'id_fasilitas', 'nama', 'kota','alamat','lat','long',
    ];
}
