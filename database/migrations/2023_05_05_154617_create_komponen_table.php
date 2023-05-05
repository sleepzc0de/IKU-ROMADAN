<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komponen', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('ID_IKU_MULTI_KOMPONEN');
            $table->string('SS_KOMPONEN')->nullable();
            $table->string('KODE_SS_KOMPONEN')->nullable();
            $table->string('IKU_KOMPONEN')->nullable();
            $table->text('DEFINISI_IKU_KOMPONEN')->nullable();
            $table->text('FORMULA_IKU_KOMPONEN')->nullable();
            $table->text('KOMPONEN_PENGUKURAN_KOMPONEN')->nullable();
            $table->text('PENJELASAN_IKU_KOMPONEN_KOMPONEN')->nullable();
            $table->string('UIC_KOMPONEN')->nullable();
            $table->unsignedFloat('QUARTAL_TARGET_1_KOMPONEN')->nullable();
            $table->unsignedFloat('QUARTAL_CAPAIAN_1_KOMPONEN')->nullable();
            $table->unsignedFloat('QUARTAL_TARGET_2_KOMPONEN')->nullable();
            $table->unsignedFloat('QUARTAL_CAPAIAN_2_KOMPONEN')->nullable();
            $table->unsignedFloat('QUARTAL_TARGET_3_KOMPONEN')->nullable();
            $table->unsignedFloat('QUARTAL_CAPAIAN_3_KOMPONEN')->nullable();
            $table->unsignedFloat('QUARTAL_TARGET_4_KOMPONEN')->nullable();
            $table->unsignedFloat('QUARTAL_CAPAIAN_4_KOMPONEN')->nullable();
            $table->unsignedFloat('TARGET_SEMESTERAN_KOMPONEN')->nullable();
            $table->unsignedFloat('CAPAIAN_SEMESTERAN_KOMPONEN')->nullable();
            $table->unsignedFloat('TARGET_TAHUNAN_KOMPONEN')->nullable();
            $table->unsignedFloat('CAPAIAN_TAHUNAN_KOMPONEN')->nullable();
            $table->unsignedFloat('TARGET_AKTUAL_KOMPONEN')->nullable();
            $table->unsignedFloat('CAPAIAN_AKTUAL_KOMPONEN')->nullable();
            $table->text('PENJELASAN_CAPAIAN_KOMPONEN')->nullable();
            $table->text('KEGIATAN_YANG_TELAH_DILAKSANAKAN_KOMPONEN')->nullable();
            $table->text('RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI_KOMPONEN')->nullable();
            $table->text('PERMASALAHAN_KOMPONEN')->nullable();
            $table->string('FLAG_KOMPONEN_KOMPONEN')->nullable();
            $table->unsignedFloat('TARGET_Q1_KOMPONEN')->nullable();
            $table->unsignedFloat('TARGET_Q2_KOMPONEN')->nullable();
            $table->unsignedFloat('TARGET_Q3_KOMPONEN')->nullable();
            $table->unsignedFloat('TARGET_Q4_KOMPONEN')->nullable();
            $table->unsignedFloat('CAPAIAN_Q1_KOMPONEN')->nullable();
            $table->unsignedFloat('CAPAIAN_Q2_KOMPONEN')->nullable();
            $table->unsignedFloat('CAPAIAN_Q3_KOMPONEN')->nullable();
            $table->unsignedFloat('CAPAIAN_Q4_KOMPONEN')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komponen');
    }
};
