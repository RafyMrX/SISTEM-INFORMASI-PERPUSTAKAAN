<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usulan extends Model
{
    protected $table = "usulan";
    protected $guarded = ['id_usulan', 'created_at', 'updated_at'];
}
