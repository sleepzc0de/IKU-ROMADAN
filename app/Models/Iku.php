<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iku extends Model
{
    use HasFactory;

    protected $table = 'iku';
    protected $guarded = [];
    protected $fillable = ['KODE_SS', 'SS', 'IKU', 'KOMPONEN_PENGUKURAN', 'PENJELASAN_IKU_KOMPONEN', 'UIC', 'QUARTAL_TARGET_1', 'QUARTAL_CAPAIAN_1', 'QUARTAL_TARGET_2', 'QUARTAL_CAPAIAN_2', 'QUARTAL_TARGET_3', 'QUARTAL_CAPAIAN_3', 'QUARTAL_TARGET_4', 'QUARTAL_CAPAIAN_4', 'PENJELASAN_CAPAIAN'];
    // protected $dates = ['deleted_at'];
}
