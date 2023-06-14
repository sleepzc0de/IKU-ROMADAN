<?php

namespace App\Http\Controllers;

use App\Models\CapaianSasaranModel;
use App\Models\Iku;
use App\Models\Komponen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function grafik()
    {
        $grafik = DB::table('iku')->select('*')->orderBy('KODE_SS', 'ASC')->get();
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

        // $data = Iku::where('iku.id', )->leftjoin('komponen', 'iku.id', '=', 'komponen.ID_IKU_MULTI_KOMPONEN');

        $query = Iku::select('*')->orderBy('KODE_SS', 'ASC');
        // dd($query);
        if (request()->ajax()) {
            return datatables()->of($query)
                ->addColumn('opsi', function ($query) {
                    $x = '';
                    $daftar_komponen_fe =  route('daftar-komponen-fe', $query->id);
                    // $data = $query->find($query->id)->firstOrFail();
                    // $data = Iku::where('iku.id', $query->id)->join('komponen', 'iku.id', '=', 'komponen.ID_IKU_MULTI_KOMPONEN')->first();
                    // $preview = route('detail-kinerja', $query->id);
                    if ($query->FLAG_KOMPONEN == 'SATU_KOMPONEN') {
                        $x .= '<div class="d-inline-flex">
                    

                    
                                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                    <!-- sample modal content -->
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

                                            <label class="mt-2" for="DefinisiIKU">Definisi IKU</label>
                                            <textarea class="form-control" rows="3" placeholder="' . $query->DEFINISI_IKU . '" disabled></textarea>

                                            <label class="mt-2" for="FormulaIKU">Formula IKU</label>
                                            <textarea class="form-control" rows="3" placeholder="' . $query->FORMULA_IKU . '" disabled></textarea>

                                            <label class="mt-2" for="NamaIKU">Komponen Pengukuran</label>
                                            <textarea class="form-control" rows="3" placeholder="' . $query->KOMPONEN_PENGUKURAN . '" disabled></textarea>


                                            <label class="mt-2" for="NamaIKU">Penjelasan IKU / Komponen</label>
                                            <textarea class="form-control" rows="3" placeholder="' . $query->PENJELASAN_IKU_KOMPONEN . '" disabled></textarea>

                                            <label class="mt-2" for="NamaIKU">UIC</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->UIC . '" disabled>

                                            <div class="row">
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Target Q1</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->TARGET_Q1 . '" disabled>
                                            </div>
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Capaian Q1</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->CAPAIAN_Q1 . '" disabled>
                                            </div>
                                            </div>

                                            <div class="row">
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Target Q2</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->TARGET_Q2 . '" disabled>
                                            </div>
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Capaian Q2</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->CAPAIAN_Q2 . '" disabled>
                                            </div>
                                            </div>

                                            <div class="row">
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Target Q3</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->TARGET_Q3 . '" disabled>
                                            </div>
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Capaian Q3</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->CAPAIAN_Q3 . '" disabled>
                                            </div>
                                            </div>

                                            <div class="row">
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Target Q4</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->TARGET_Q4 . '" disabled>
                                            </div>
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Capaian Q4</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->CAPAIAN_Q4 . '" disabled>
                                            </div>
                                            </div>
                                           

                                             <label class="mt-2" for="NamaIKU">Penjelasan Capaian</label>
                                             <textarea class="form-control" rows="3" placeholder="' . $query->PENJELASAN_CAPAIAN . '" disabled></textarea>

                                            <label class="mt-2" for="NamaIKU">Kegiatan Yang Telah Dilaksanakan</label>
                                             <textarea class="form-control" rows="3" placeholder="' . $query->KEGIATAN_YANG_TELAH_DILAKSANAKAN . '" disabled></textarea>

                                             <label class="mt-2" for="NamaIKU">Rencana Aksi dan Target Penyelesaian Rencana Aksi</label>
                                             <textarea class="form-control" rows="3" placeholder="' . $query->RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI . '" disabled></textarea>

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
                                
                                 <a href="#" alt="default" data-toggle="modal" data-target="#myModal_' . $query->id . '" class="model_img img-fluid"><button type="button" class="ml-1 btn btn-info"><i class="fa fas fa-eye"></i></button></a>
                                                    </div>
                    
                    </div>
                ';
                    }
                    if ($query->FLAG_KOMPONEN == 'MULTI_KOMPONEN') {
                        $x .= '<div class="d-inline-flex">
                    

                    
                                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                    <!-- sample modal content -->
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

                                            <label class="mt-2" for="DefinisiIKU">Definisi IKU</label>
                                            <textarea class="form-control" rows="3" placeholder="' . $query->DEFINISI_IKU . '" disabled></textarea>

                                            <label class="mt-2" for="FormulaIKU">Formula IKU</label>
                                            <textarea class="form-control" rows="3" placeholder="' . $query->FORMULA_IKU . '" disabled></textarea>

                                            <label class="mt-2" for="NamaIKU">Komponen Pengukuran</label>
                                            <textarea class="form-control" rows="3" placeholder="' . $query->KOMPONEN_PENGUKURAN . '" disabled></textarea>


                                            <label class="mt-2" for="NamaIKU">Penjelasan IKU / Komponen</label>
                                            <textarea class="form-control" rows="3" placeholder="' . $query->PENJELASAN_IKU_KOMPONEN . '" disabled></textarea>

                                            <label class="mt-2" for="NamaIKU">UIC</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->UIC . '" disabled>

                                            <div class="row">
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Target Q1</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->TARGET_Q1 . '" disabled>
                                            </div>
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Capaian Q1</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->CAPAIAN_Q1 . '" disabled>
                                            </div>
                                            </div>

                                            <div class="row">
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Target Q2</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->TARGET_Q2 . '" disabled>
                                            </div>
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Capaian Q2</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->CAPAIAN_Q2 . '" disabled>
                                            </div>
                                            </div>

                                            <div class="row">
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Target Q3</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->TARGET_Q3 . '" disabled>
                                            </div>
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Capaian Q3</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->CAPAIAN_Q3 . '" disabled>
                                            </div>
                                            </div>

                                            <div class="row">
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Target Q4</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->TARGET_Q4 . '" disabled>
                                            </div>
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Capaian Q4</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->CAPAIAN_Q4 . '" disabled>
                                            </div>
                                            </div>
                                               
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
                                
                                 <a href="#" alt="default" data-toggle="modal" data-target="#myModal_' . $query->id . '" class="model_img img-fluid"><button type="button" class="ml-1 btn btn-info"><i class="fa fas fa-eye"></i></button></a>

                                 <a href="' . $daftar_komponen_fe . '"><button type="button" class="ml-1 btn btn-warning"><i class="fas fa-eye"></i></button></a>
                                                        
                                                    </div>
                    
                    </div>
                    
                ';
                    };
                    return '' . $x . '';
                })
                ->rawColumns(['opsi'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('home', compact(['target', 'capaian', 'grafik', 'label_iku']));
    }

    public function capaian_sasaran()
    {
        $capaian = CapaianSasaranModel::all();

        $capaian_strategis = $capaian->mapWithKeys(function ($item, $key) {
            return [$item->NAMA_CAPAIAN => $item->NILAI_CAPAIAN];
        });
        // dd($capaian_strategis);
        return view('capaian_sasaran', compact('capaian_strategis', 'capaian'));
    }

    public function capaian_sasaran_new()
    {
        $judul1 = 'Pengelolaan Keuangan dan BMN yang Kredibel dan Akuntabel';
        $judul2 = 'Pelayanan Publik yang Prima';
        $judul3 = 'Penyediaan Data BMN dan Pengadaan Kemenkeu yang Akurat, Akuntabel, dan Berdaya Guna';
        $judul4 = 'Penguatan Manajemen Pengelolaan BMN dan Pengadaan Kementerian Keuangan';
        $judul5 = 'Pengelolaan BMN dan Pengadaan yang Memberi Nilai Tambah';
        $judul6 = 'Organisasi dan SDM yang optimal';
        $judul7 = 'Pengelolaan Keuangan yang Kredibel dan Akuntabel';
        $judul8 = 'Sistem informasi yang andal';
        $judul9 = 'Pengelolaan risiko, pengendalian, dan pengawasan internal yang bernilai tambah';
        $new1 = Iku::orderBy('SS', 'ASC')->where('SS', $judul1)->get();
        // dd($new1);
        $new2 = Iku::orderBy('SS', 'ASC')->where('SS', $judul2)->get();
        $new3 = Iku::orderBy('SS', 'ASC')->where('SS', $judul3)->get();
        $new4 = Iku::orderBy('SS', 'ASC')->where('SS', $judul4)->get();
        $new5 = Iku::orderBy('SS', 'ASC')->where('SS', $judul5)->get();
        $new6 = Iku::orderBy('SS', 'ASC')->where('SS', $judul6)->get();
        $new7 = Iku::orderBy('SS', 'ASC')->where('SS', $judul7)->get();
        $new8 = Iku::orderBy('SS', 'ASC')->where('SS', $judul8)->get();
        $new9 = Iku::orderBy('SS', 'ASC')->where('SS', $judul9)->get();

        $new_all = Iku::select('SS')->distinct()->orderBy('SS', 'ASC')->get();
        // dd($new_all);


        // lABEL SS
        $SS1 = $new1->mapWithKeys(function ($item, $key) {
            return [$item->IKU => $item->SS];
        });
        $SS2 = $new2->mapWithKeys(function ($item, $key) {
            return [$item->IKU => $item->SS];
        });
        $SS3 = $new3->mapWithKeys(function ($item, $key) {
            return [$item->IKU => $item->SS];
        });
        $SS4 = $new4->mapWithKeys(function ($item, $key) {
            return [$item->IKU => $item->SS];
        });
        $SS5 = $new5->mapWithKeys(function ($item, $key) {
            return [$item->IKU => $item->SS];
        });
        $SS6 = $new6->mapWithKeys(function ($item, $key) {
            return [$item->IKU => $item->SS];
        });
        $SS7 = $new7->mapWithKeys(function ($item, $key) {
            return [$item->IKU => $item->SS];
        });
        $SS8 = $new8->mapWithKeys(function ($item, $key) {
            return [$item->IKU => $item->SS];
        });
        $SS9 = $new9->mapWithKeys(function ($item, $key) {
            return [$item->IKU => $item->SS];
        });
        // CAPAIAN
        $capaian1 = $new1->mapWithKeys(function ($item, $key) {
            return [$item->IKU => $item->CAPAIAN_AKTUAL];
        });
        $capaian2 = $new2->mapWithKeys(function ($item, $key) {
            return [$item->IKU => $item->CAPAIAN_AKTUAL];
        });
        $capaian3 = $new3->mapWithKeys(function ($item, $key) {
            return [$item->IKU => $item->CAPAIAN_AKTUAL];
        });
        $capaian4 = $new4->mapWithKeys(function ($item, $key) {
            return [$item->IKU => $item->CAPAIAN_AKTUAL];
        });
        $capaian5 = $new5->mapWithKeys(function ($item, $key) {
            return [$item->IKU => $item->CAPAIAN_AKTUAL];
        });
        $capaian6 = $new6->mapWithKeys(function ($item, $key) {
            return [$item->IKU => $item->CAPAIAN_AKTUAL];
        });
        $capaian7 = $new7->mapWithKeys(function ($item, $key) {
            return [$item->IKU => $item->CAPAIAN_AKTUAL];
        });
        $capaian8 = $new8->mapWithKeys(function ($item, $key) {
            return [$item->IKU => $item->CAPAIAN_AKTUAL];
        });
        $capaian9 = $new9->mapWithKeys(function ($item, $key) {
            return [$item->IKU => $item->CAPAIAN_AKTUAL];
        });
        // TARGET
        $target1 = $new1->mapWithKeys(function ($item, $key) {
            return [$item->IKU => $item->TARGET_AKTUAL];
        });
        $target2 = $new2->mapWithKeys(function ($item, $key) {
            return [$item->IKU => $item->TARGET_AKTUAL];
        });
        $target3 = $new3->mapWithKeys(function ($item, $key) {
            return [$item->IKU => $item->TARGET_AKTUAL];
        });
        $target4 = $new4->mapWithKeys(function ($item, $key) {
            return [$item->IKU => $item->TARGET_AKTUAL];
        });
        $target5 = $new5->mapWithKeys(function ($item, $key) {
            return [$item->IKU => $item->TARGET_AKTUAL];
        });
        $target6 = $new6->mapWithKeys(function ($item, $key) {
            return [$item->IKU => $item->TARGET_AKTUAL];
        });
        $target7 = $new7->mapWithKeys(function ($item, $key) {
            return [$item->IKU => $item->TARGET_AKTUAL];
        });
        $target8 = $new8->mapWithKeys(function ($item, $key) {
            return [$item->IKU => $item->TARGET_AKTUAL];
        });
        $target9 = $new9->mapWithKeys(function ($item, $key) {
            return [$item->IKU => $item->TARGET_AKTUAL];
        });
        // dd($iku1);
        return view('capaian_sasaran_new', compact([
            'capaian1', 'target1',
            'capaian2', 'target2',
            'capaian3', 'target3',
            'capaian4', 'target4',
            'capaian5', 'target5',
            'capaian6', 'target6',
            'capaian7', 'target7',
            'capaian8', 'target8',
            'capaian9', 'target9',
            'SS1', 'SS2',
            'SS3', 'SS4',
            'SS5', 'SS6',
            'SS7', 'SS8',
            'SS9',
            'judul1', 'judul2',
            'judul3', 'judul4',
            'judul5', 'judul6',
            'judul7', 'judul8',
            'judul9', 'new_all'
        ]));
    }



    public function capaian_perspective()
    {
        return view('capaian_perspective');
    }


    public function show($id)
    {

        $current = $id;
        $data = Iku::where('iku.id', $id)->leftjoin('komponen', 'iku.id', '=', 'komponen.ID_IKU_MULTI_KOMPONEN')->first();
        $query = Iku::where('iku.id', $id)->join('komponen', 'iku.id', '=', 'komponen.ID_IKU_MULTI_KOMPONEN')->get();
        if (request()->ajax()) {
            return datatables()->of($query)
                ->addColumn('opsi', function ($query) {


                    return '<div class="d-inline-flex">



                                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                    <!-- sample modal content -->
                                <div id="myModal_' . $query->id . '" class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 style="text-align-center" class="modal-title" id="myModalLabel">Detail Indikator Kinerja Utama</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">

                                            <label  for="NamaIKU">Kode SS/IKU</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->KODE_SS_KOMPONEN . '" disabled>

                                            <label  for="NamaIKU">Nama IKU</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->IKU_KOMPONEN . '" disabled>

                                            <label class="mt-2" for="NamaIKU">Komponen Pengukuran</label>
                                            <textarea class="form-control" rows="3" placeholder="' . $query->KOMPONEN_PENGUKURAN_KOMPONEN . '" disabled></textarea>


                                            <label class="mt-2" for="NamaIKU">Penjelasan IKU / Komponen</label>
                                            <textarea class="form-control" rows="3" placeholder="' . $query->PENJELASAN_IKU_KOMPONEN_KOMPONEN . '" disabled></textarea>

                                            <label class="mt-2" for="NamaIKU">UIC</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->UIC_KOMPONEN . '" disabled>

                                            <div class="row">
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Target Bagian Q1</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->TARGET_Q1_KOMPONEN . '" disabled>
                                            </div>
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Capaian Bagian Q1</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->CAPAIAN_Q1_KOMPONEN . '" disabled>
                                            </div>
                                            </div>

                                            <div class="row">
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Target Bagian Q2</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->TARGET_Q2_KOMPONEN . '" disabled>
                                            </div>
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Capaian Bagian Q2</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->CAPAIAN_Q2_KOMPONEN . '" disabled>
                                            </div>
                                            </div>

                                            <div class="row">
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Target Bagian Q3</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->TARGET_Q3_KOMPONEN . '" disabled>
                                            </div>
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Capaian Bagian Q3</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->CAPAIAN_Q3_KOMPONEN . '" disabled>
                                            </div>
                                            </div>

                                            <div class="row">
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Target Bagian Q4</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->TARGET_Q4_KOMPONEN . '" disabled>
                                            </div>
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Capaian Bagian Q4</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->CAPAIAN_Q4_KOMPONEN . '" disabled>
                                            </div>
                                            </div>

                                             <div class="row">
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Target Bagian Aktual</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->TARGET_AKTUAL_KOMPONEN . '" disabled>
                                            </div>
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Capaian Bagian Aktual</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->CAPAIAN_AKTUAL_KOMPONEN . '" disabled>
                                            </div>
                                            </div>


                                             <label class="mt-2" for="NamaIKU">Penjelasan Capaian Bagian</label>
                                             <textarea class="form-control" rows="3" placeholder="' . $query->PENJELASAN_CAPAIAN_KOMPONEN . '" disabled></textarea>

                                            <label class="mt-2" for="NamaIKU">Kegiatan Yang Telah Dilaksanakan Bagian</label>
                                             <textarea class="form-control" rows="3" placeholder="' . $query->KEGIATAN_YANG_TELAH_DILAKSANAKAN_KOMPONEN . '" disabled></textarea>

                                             <label class="mt-2" for="NamaIKU">Rencana Aksi dan Target Penyelesaian Rencana Aksi Bagian</label>
                                             <textarea class="form-control" rows="3" placeholder="' . $query->RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI_KOMPONEN . '" disabled></textarea>

                                            <label class="mt-2" for="NamaIKU">Permasalahan Bagian</label>
                                              <textarea class="form-control" rows="3" placeholder="' . $query->PERMASALAHAN_KOMPONEN . '" disabled></textarea>

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

                                 <a href="#" alt="default" data-toggle="modal" data-target="#myModal_' . $query->id . '" class="model_img img-fluid"><button type="button" class="ml-1 btn btn-warning"><i class="fa fas fa-eye"></i></button></a>
                                                    </div>

                    </div>
                ';
                })
                ->rawColumns(['opsi',])
                ->addIndexColumn()
                ->make(true);
        }
        // dd($data);


        return view('daftar-komponen', compact(['query', 'current', 'data', 'current']));
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

    // public function testframe()
    // {
    //     return view('test');
    // }

    public function pengembang()
    {
        return view('pengembang');
    }
}
