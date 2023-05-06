<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iku extends Model
{
    use HasFactory;

    protected $table = 'iku';
    protected $guarded = [];
    protected $fillable = ['KODE_SS', 'SS', 'IKU', 'KOMPONEN_PENGUKURAN', 'PENJELASAN_IKU_KOMPONEN', 'UIC', 'QUARTAL_TARGET_1', 'QUARTAL_CAPAIAN_1', 'QUARTAL_TARGET_2', 'QUARTAL_CAPAIAN_2', 'QUARTAL_TARGET_3', 'QUARTAL_CAPAIAN_3', 'QUARTAL_TARGET_4', 'QUARTAL_CAPAIAN_4', 'PENJELASAN_CAPAIAN', 'TARGET_SEMESTERAN', 'CAPAIAN_SEMESTERAN', 'TARGET_TAHUNAN', 'CAPAIAN_TAHUNAN', 'KEGIATAN_YANG_TELAH_DILAKSANAKAN', 'RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI', 'PERMASALAHAN', 'TARGET_AKTUAL', 'CAPAIAN_AKTUAL', 'FLAG_KOMPONEN', 'DEFINISI_IKU', 'FORMULA_IKU', 'TARGET_Q1', 'TARGET_Q2', 'TARGET_Q3', 'TARGET_Q4', 'CAPAIAN_Q1', 'CAPAIAN_Q2', 'CAPAIAN_Q3', 'CAPAIAN_Q4'];
    // protected $dates = ['deleted_at'];

    public function komponen()
    {
        return $this->hasMany(Komponen::class);
    }
}
