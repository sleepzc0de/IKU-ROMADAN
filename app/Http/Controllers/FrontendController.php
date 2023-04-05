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


        $query = Iku::select('*');
        // dd($query);
        if (request()->ajax()) {
            return datatables()->of($query)
                ->addColumn('opsi', function ($query) {
                    // $data = $query->find($query->id)->firstOrFail();
                    // $data = Iku::where('id', $query->id)->first();
                    // $preview = route('detail-kinerja', $query->id);
                    return '<!-- sample modal content -->
                                <div id="myModal_' . $query->id . '" class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 style="text-align-center" class="modal-title" id="myModalLabel">Detail Indikator Kinerja Utama</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">

                                            <label  for="NamaIKU">Nama IKU</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->IKU . '" disabled>

                                            <label class="mt-2" for="NamaIKU">Komponen Pengukuran</label>
                                            <textarea class="form-control" rows="3" placeholder="' . $query->KOMPONEN_PENGUKURAN . '" disabled></textarea>


                                            <label class="mt-2" for="NamaIKU">Penjelasan IKU</label>
                                            <textarea class="form-control" rows="3" placeholder="' . $query->PENJELASAN_IKU_KOMPONEN . '" disabled></textarea>

                                            <label class="mt-2" for="NamaIKU">UIC</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->UIC . '" disabled>

                                            <div class="row">
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Target Q1</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->QUARTAL_TARGET_1 . '" disabled>
                                            </div>
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Capaian Q1</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->QUARTAL_CAPAIAN_1 . '" disabled>
                                            </div>
                                            </div>

                                            <div class="row">
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Target Q2</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->QUARTAL_TARGET_2 . '" disabled>
                                            </div>
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Capaian Q2</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->QUARTAL_CAPAIAN_2 . '" disabled>
                                            </div>
                                            </div>

                                            <div class="row">
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Target Q3</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->QUARTAL_TARGET_3 . '" disabled>
                                            </div>
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Capaian Q3</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->QUARTAL_CAPAIAN_3 . '" disabled>
                                            </div>
                                            </div>

                                            <div class="row">
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Target Q4</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->QUARTAL_TARGET_4 . '" disabled>
                                            </div>
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Capaian Q4</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->QUARTAL_CAPAIAN_4 . '" disabled>
                                            </div>
                                            </div>
                                           

                                             <label class="mt-2" for="NamaIKU">Penjelasan Capaian</label>
                                             <textarea class="form-control" rows="3" placeholder="' . $query->PENJELASAN_CAPAIAN . '" disabled></textarea>

                                            <label class="mt-2" for="NamaIKU">Permasalahan</label>
                                              <textarea class="form-control" rows="3" placeholder="' . $query->PERMASALAHAN . '" disabled></textarea>
                                               
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                                <a href="#" alt="default" data-toggle="modal" data-target="#myModal_' . $query->id . '" class="model_img img-fluid"><span class="mdi mdi-book-open mdi-dark"></span>
</a>
                                
                ';
                })
                ->rawColumns(['opsi'])
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
