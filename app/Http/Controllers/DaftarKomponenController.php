<?php

namespace App\Http\Controllers;

use App\Models\Iku;
use App\Models\Komponen;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DaftarKomponenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            // VALIDASI DATA
            $request->validate([
                'ID_IKU_MULTI_KOMPONEN' => 'required',
                'KODE_SS_KOMPONEN' => 'required',
                'SS_KOMPONEN' => 'required',
                'IKU_KOMPONEN' => 'required',
                'DEFINISI_IKU_KOMPONEN' => 'required',
                'FORMULA_IKU_KOMPONEN' => 'required',
                'KOMPONEN_PENGUKURAN_KOMPONEN' => 'required',
                'PENJELASAN_IKU_KOMPONEN_KOMPONEN' => 'required',
                'UIC_KOMPONEN' => 'required',
                'TARGET_Q1_KOMPONEN' => 'required',
                'TARGET_Q2_KOMPONEN' => 'required',
                'TARGET_Q3_KOMPONEN' => 'required',
                'TARGET_Q4_KOMPONEN' => 'required',
                'CAPAIAN_Q1_KOMPONEN' => 'required',
                'CAPAIAN_Q2_KOMPONEN' => 'required',
                'CAPAIAN_Q3_KOMPONEN' => 'required',
                'CAPAIAN_Q4_KOMPONEN' => 'required',
                'TARGET_AKTUAL_KOMPONEN' => 'required',
                'CAPAIAN_AKTUAL_KOMPONEN' => 'required',
                'PENJELASAN_CAPAIAN_KOMPONEN' => 'required',
                'KEGIATAN_YANG_TELAH_DILAKSANAKAN_KOMPONEN' => 'required',
                'RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI_KOMPONEN' => 'required',
                'PERMASALAHAN_KOMPONEN' => 'required',


            ]);

            // TAMPUNGAN REQUEST DATA DARI FORM
            $data = [
                'ID_IKU_MULTI_KOMPONEN' => $request->ID_IKU_MULTI_KOMPONEN,
                'KODE_SS_KOMPONEN' => $request->KODE_SS_KOMPONEN,
                'SS_KOMPONEN' => $request->SS_KOMPONEN,
                'IKU_KOMPONEN' => $request->IKU_KOMPONEN,
                'DEFINISI_IKU_KOMPONEN' => $request->DEFINISI_IKU_KOMPONEN,
                'FORMULA_IKU_KOMPONEN' => $request->FORMULA_IKU_KOMPONEN,
                'KOMPONEN_PENGUKURAN_KOMPONEN' => $request->KOMPONEN_PENGUKURAN_KOMPONEN,
                'PENJELASAN_IKU_KOMPONEN_KOMPONEN' => $request->PENJELASAN_IKU_KOMPONEN_KOMPONEN,
                'UIC_KOMPONEN' => $request->UIC_KOMPONEN,
                'TARGET_Q1_KOMPONEN' => $request->TARGET_Q1_KOMPONEN,
                'TARGET_Q2_KOMPONEN' => $request->TARGET_Q2_KOMPONEN,
                'TARGET_Q3_KOMPONEN' => $request->TARGET_Q3_KOMPONEN,
                'TARGET_Q4_KOMPONEN' => $request->TARGET_Q4_KOMPONEN,
                'CAPAIAN_Q1_KOMPONEN' => $request->CAPAIAN_Q1_KOMPONEN,
                'CAPAIAN_Q2_KOMPONEN' => $request->CAPAIAN_Q2_KOMPONEN,
                'CAPAIAN_Q3_KOMPONEN' => $request->CAPAIAN_Q3_KOMPONEN,
                'CAPAIAN_Q4_KOMPONEN' => $request->CAPAIAN_Q4_KOMPONEN,
                'TARGET_AKTUAL_KOMPONEN' => $request->TARGET_AKTUAL_KOMPONEN,
                'CAPAIAN_AKTUAL_KOMPONEN' => $request->CAPAIAN_AKTUAL_KOMPONEN,
                'PENJELASAN_CAPAIAN_KOMPONEN' => $request->PENJELASAN_CAPAIAN_KOMPONEN,
                'KEGIATAN_YANG_TELAH_DILAKSANAKAN_KOMPONEN' => $request->KEGIATAN_YANG_TELAH_DILAKSANAKAN_KOMPONEN,
                'RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI_KOMPONEN' => $request->RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI_KOMPONEN,
                'PERMASALAHAN_KOMPONEN' => $request->PERMASALAHAN_KOMPONEN,
                'FLAG_KOMPONEN_KOMPONEN' => 'MULTI_KOMPONEN_DETAIL'

            ];

            Komponen::create($data);

            //redirect to index
            return redirect()->back()->with(['success' => 'Data Komponen Berhasil Disimpan!']);
        } catch (Exception $e) {
            return redirect()->back()->with(['failed' => 'Data Komponen Gagal Disimpan! error :' . $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $data = Iku::where('iku.id', $id)->join('komponen', 'iku.id', '=', 'komponen.ID_IKU_MULTI_KOMPONEN')->get();
        // dd($data);
        $current = $id;
        $data = Iku::where('iku.id', $id)->leftjoin('komponen', 'iku.id', '=', 'komponen.ID_IKU_MULTI_KOMPONEN')->first();
        // $test = Iku::where('iku.id', $id)->leftjoin('komponen', 'iku.id', '=', 'komponen.ID_IKU_MULTI_KOMPONEN')->get();
        // dd(count($test));
        $query = Iku::where('iku.id', $id)->join('komponen', 'iku.id', '=', 'komponen.ID_IKU_MULTI_KOMPONEN')->get();
        if (request()->ajax()) {
            return datatables()->of($query)
                ->addColumn('opsi', function ($query) {
                    $edit = route('daftar-komponen.edit', $query->id);
                    $hapus = route('daftar-komponen.destroy', $query->id);


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

                                 <a href="#" alt="default" data-toggle="modal" data-target="#myModal_' . $query->id . '" class="model_img img-fluid"><button type="button" class="ml-1 btn btn-info"><i class="fa fas fa-eye"></i></button></a>
                                                        <a href="' . $edit . '"><button type="button" class="ml-1 btn btn-warning"><i class="fas fa-pencil-alt"></i></button></a>
                                                        <form action="' . $hapus . '" method="POST">
        											' . @csrf_field() . '
        											' . @method_field('DELETE') . '
        											 <button type="submit" class="ml-1 btn btn-danger"><i class="fas fa-trash-alt"></i></button>
        											</form>
                                                    </div>

                    </div>
                ';
                })
                ->rawColumns(['opsi',])
                ->addIndexColumn()
                ->make(true);
        }
        // dd($data);


        return view('_superadmin_.show_daftar_komponen', compact(['query', 'current', 'data']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Komponen::findOrFail($id);

        // dd($data);
        return view('_superadmin_.edit_daftar_komponen', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            // VALIDASI DATA
            $request->validate([
                'KODE_SS_KOMPONEN' => 'required',
                'SS_KOMPONEN' => 'required',
                'IKU_KOMPONEN' => 'required',
                'DEFINISI_IKU_KOMPONEN' => 'required',
                'FORMULA_IKU_KOMPONEN' => 'required',
                'KOMPONEN_PENGUKURAN_KOMPONEN' => 'required',
                'PENJELASAN_IKU_KOMPONEN_KOMPONEN' => 'required',
                'UIC_KOMPONEN' => 'required',
                'TARGET_Q1_KOMPONEN' => 'required',
                'TARGET_Q2_KOMPONEN' => 'required',
                'TARGET_Q3_KOMPONEN' => 'required',
                'TARGET_Q4_KOMPONEN' => 'required',
                'CAPAIAN_Q1_KOMPONEN' => 'required',
                'CAPAIAN_Q2_KOMPONEN' => 'required',
                'CAPAIAN_Q3_KOMPONEN' => 'required',
                'CAPAIAN_Q4_KOMPONEN' => 'required',
                'TARGET_AKTUAL_KOMPONEN' => 'required',
                'CAPAIAN_AKTUAL_KOMPONEN' => 'required',
                'PENJELASAN_CAPAIAN_KOMPONEN' => 'required',
                'KEGIATAN_YANG_TELAH_DILAKSANAKAN_KOMPONEN' => 'required',
                'RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI_KOMPONEN' => 'required',
                'PERMASALAHAN_KOMPONEN' => 'required',


            ]);

            // TAMPUNGAN REQUEST DATA DARI FORM
            $data = [
                'KODE_SS_KOMPONEN' => $request->KODE_SS_KOMPONEN,
                'SS_KOMPONEN' => $request->SS_KOMPONEN,
                'IKU_KOMPONEN' => $request->IKU_KOMPONEN,
                'DEFINISI_IKU_KOMPONEN' => $request->DEFINISI_IKU_KOMPONEN,
                'FORMULA_IKU_KOMPONEN' => $request->FORMULA_IKU_KOMPONEN,
                'KOMPONEN_PENGUKURAN_KOMPONEN' => $request->KOMPONEN_PENGUKURAN_KOMPONEN,
                'PENJELASAN_IKU_KOMPONEN_KOMPONEN' => $request->PENJELASAN_IKU_KOMPONEN_KOMPONEN,
                'UIC_KOMPONEN' => $request->UIC_KOMPONEN,
                'TARGET_Q1_KOMPONEN' => $request->TARGET_Q1_KOMPONEN,
                'TARGET_Q2_KOMPONEN' => $request->TARGET_Q2_KOMPONEN,
                'TARGET_Q3_KOMPONEN' => $request->TARGET_Q3_KOMPONEN,
                'TARGET_Q4_KOMPONEN' => $request->TARGET_Q4_KOMPONEN,
                'CAPAIAN_Q1_KOMPONEN' => $request->CAPAIAN_Q1_KOMPONEN,
                'CAPAIAN_Q2_KOMPONEN' => $request->CAPAIAN_Q2_KOMPONEN,
                'CAPAIAN_Q3_KOMPONEN' => $request->CAPAIAN_Q3_KOMPONEN,
                'CAPAIAN_Q4_KOMPONEN' => $request->CAPAIAN_Q4_KOMPONEN,
                'TARGET_AKTUAL_KOMPONEN' => $request->TARGET_AKTUAL_KOMPONEN,
                'CAPAIAN_AKTUAL_KOMPONEN' => $request->CAPAIAN_AKTUAL_KOMPONEN,
                'PENJELASAN_CAPAIAN_KOMPONEN' => $request->PENJELASAN_CAPAIAN_KOMPONEN,
                'KEGIATAN_YANG_TELAH_DILAKSANAKAN_KOMPONEN' => $request->KEGIATAN_YANG_TELAH_DILAKSANAKAN_KOMPONEN,
                'RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI_KOMPONEN' => $request->RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI_KOMPONEN,
                'PERMASALAHAN_KOMPONEN' => $request->PERMASALAHAN_KOMPONEN,
                'FLAG_KOMPONEN_KOMPONEN' => 'MULTI_KOMPONEN_DETAIL'

            ];

            Komponen::findOrFail($id)->update($data);

            //redirect to index
            return redirect()->back()->with(['success' => 'Data Komponen Berhasil Diupdate!']);
        } catch (Exception $e) {
            return redirect()->back()->with(['failed' => 'Data Komponen Gagal Diupdate! error :' . $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Komponen::findOrFail($id)->delete();
            return redirect()->back()->with('success', "Daftar Komponen berhasil dihapus!");
        } catch (Exception $e) {
            return redirect()->back()->with(['failed' => 'Data Yang Dihapus Tidak Ada ! error :' . $e->getMessage()]);
        }
    }
}
