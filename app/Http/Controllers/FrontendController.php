<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function grafik()
    {
        $grafik = DB::table('iku')->select('*')->get();
        // $label_iku = $grafik->mapWithKeys(function ($item, $key) {
        //     return [$item->IKU => $item->QUARTAL_TARGET_3];
        // });
        $label_iku = $grafik->mapWithKeys(function ($item, $key) {
            return [$item->IKU => $item->IKU];
        });
        $target = $grafik->mapWithKeys(function ($item, $key) {
            return [$item->QUARTAL_TARGET_3 => $item->QUARTAL_TARGET_3];
        });
        // dd($label_iku);
        $capaian = $grafik->mapWithKeys(function ($item, $key) {
            return [$item->QUARTAL_CAPAIAN_3 => $item->QUARTAL_CAPAIAN_3];
        });
        // dd($elections);

        return view('home', compact(['target', 'capaian', 'grafik', 'label_iku']));
    }
}
