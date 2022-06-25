<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\SoftDeletes;

class kategori extends Model
{
    use HasFactory;
    use Timestamp;
    use SoftDeletes;

    protected $table = 'tb_kategori';
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'foto'
    ];
}
