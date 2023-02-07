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
        Schema::create('iku', function (Blueprint $table) {
            $table->id();
            $table->string('SS')->nullable();
            $table->string('KODE_SS')->nullable();
            $table->string('IKU')->nullable();
            $table->text('KOMPONEN_PENGUKURAN')->nullable();
            $table->text('PENJELASAN_IKU_KOMPONEN')->nullable();
            $table->string('UIC')->nullable();
            $table->unsignedFloat('QUARTAL_TARGET_1')->nullable();
            $table->unsignedFloat('QUARTAL_CAPAIAN_1')->nullable();
            $table->unsignedFloat('QUARTAL_TARGET_2')->nullable();
            $table->unsignedFloat('QUARTAL_CAPAIAN_2')->nullable();
            $table->unsignedFloat('QUARTAL_TARGET_3')->nullable();
            $table->unsignedFloat('QUARTAL_CAPAIAN_3')->nullable();
            $table->unsignedFloat('QUARTAL_TARGET_4')->nullable();
            $table->unsignedFloat('QUARTAL_CAPAIAN_4')->nullable();
            $table->unsignedFloat('TARGET_SEMESTERAN')->nullable();
            $table->unsignedFloat('CAPAIAN_SEMESTERAN')->nullable();
            $table->unsignedFloat('TARGET_TAHUNAN')->nullable();
            $table->unsignedFloat('CAPAIAN_TAHUNAN')->nullable();
            $table->unsignedFloat('TARGET_AKTUAL')->nullable();
            $table->unsignedFloat('CAPAIAN_AKTUAL')->nullable();
            $table->text('PENJELASAN_CAPAIAN')->nullable();
            $table->text('KEGIATAN_YANG_TELAH_DILAKSANAKAN')->nullable();
            $table->text('RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI')->nullable();
            $table->text('PERMASALAHAN')->nullable();
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
        Schema::dropIfExists('iku');
    }
};
