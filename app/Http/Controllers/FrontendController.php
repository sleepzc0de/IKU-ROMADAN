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
            return [$item->KODE_SS => $item->IKU];
        });
        // dd($label_iku);
        $target = $grafik->mapWithKeys(function ($item, $key) {
            return [$item->KODE_SS => $item->TARGET_AKTUAL];
        });

        // dd($label_iku);
        $capaian = $grafik->mapWithKeys(function ($item, $key) {
            return [$item->KODE_SS => $item->CAPAIAN_AKTUAL];
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
        $query = Iku::select('*')->get();
        // dd($query);
        if (request()->ajax()) {
            return datatables()->of($query)
                ->rawColumns([])
                ->addIndexColumn()
                ->make(true);
        }
        return view('kinerjaQ1');
    }
    public function kinerja_Q2()
    {
        $query = Iku::select('*')->get();
        // dd($query);
        if (request()->ajax()) {
            return datatables()->of($query)
                ->rawColumns([])
                ->addIndexColumn()
                ->make(true);
        }
        return view('kinerjaQ2');
    }
    public function kinerja_Q3()
    {
        $query = Iku::select('*')->get();
        // dd($query);
        if (request()->ajax()) {
            return datatables()->of($query)
                ->rawColumns([])
                ->addIndexColumn()
                ->make(true);
        }
        return view('kinerjaQ3');
    }
    public function kinerja_Q4()
    {
        $query = Iku::select('*')->get();
        // dd($query);
        if (request()->ajax()) {
            return datatables()->of($query)
                ->rawColumns([])
                ->addIndexColumn()
                ->make(true);
        }
        return view('kinerjaQ4');
    }

    public function testframe()
    {
        return view('test');
    }
}
