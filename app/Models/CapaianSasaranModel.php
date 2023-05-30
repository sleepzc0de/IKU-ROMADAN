<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CapaianSasaranModel extends Model
{
    use HasFactory;

    protected $table = 'capaian_sasaran_strategis';
    protected $guarded = [];
    protected $fillable = ['NAMA_CAPAIAN', 'NILAI_CAPAIAN'];
}
