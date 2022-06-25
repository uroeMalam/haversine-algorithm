<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\SoftDeletes;


class foto extends Model
{
    use HasFactory;
    use Timestamp;
    use SoftDeletes;

    protected $table = 'tb_foto';
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'id_rs', 'foto',
    ];
}
