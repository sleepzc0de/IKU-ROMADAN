<?php

namespace App\Http\Controllers;

use App\Models\Iku;
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


        $query = Iku::select('*')->get();
        // dd($query);
        if (request()->ajax()) {
            return datatables()->of($query)
                ->rawColumns([])
                ->addIndexColumn()
                ->make(true);
        }

        return view('home', compact(['target', 'capaian', 'grafik', 'label_iku']));
    }

    public function kinerja_Q1()
    {
        return view('kinerjaQ1');
    }
    public function kinerja_Q2()
    {
        return view('kinerjaQ2');
    }
    public function kinerja_Q3()
    {
        return view('kinerjaQ3');
    }
    public function kinerja_Q4()
    {
        return view('kinerjaQ4');
    }
}
