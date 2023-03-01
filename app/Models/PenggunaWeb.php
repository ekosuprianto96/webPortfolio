<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenggunaWeb extends Model
{
    use HasFactory;
    protected $table = 'pengguna_web';
    protected $guarded = ['id'];
}
