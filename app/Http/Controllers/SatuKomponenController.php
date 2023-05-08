<?php

namespace App\Http\Controllers;

use App\Models\Iku;
use Exception;
use Illuminate\Http\Request;

class SatuKomponenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menuUsers = 'active';
        $query = Iku::select('*')->where('FLAG_KOMPONEN', 'SATU_KOMPONEN');
        if (request()->ajax()) {
            return datatables()->of($query)
                ->addColumn('opsi', function ($query) {
                    $preview = route('satu_komponen.show', $query->id);
                    $edit = route('satu_komponen.edit', $query->id);
                    $hapus = route('satu_komponen.destroy', $query->id);
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
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->KODE_SS . '" disabled>

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

                                            <div class="row">
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Target Aktual</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->TARGET_AKTUAL . '" disabled>
                                            </div>
                                            <div class="col-lg-6">
                                            <label class="mt-2" for="NamaIKU">Capaian Aktual</label>
                                            <input type="text" class="form-control" id="NamaIKU" placeholder="' . $query->CAPAIAN_AKTUAL . '" disabled>
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
                                
                                 <a href="#" alt="default" data-toggle="modal" data-target="#myModal_' . $query->id . '" class="model_img img-fluid"><button type="button" class="ml-1 btn btn-info" data-toggle="tooltip" data-placement="top" title="Preview IKU"><i class="fa fas fa-eye"></i></button></a>
                                                        
                                                        <a href="' . $edit . '"><button type="button" class="ml-1 btn btn-warning" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-pencil-alt"></i></button></a>
                                                        <form action="' . $hapus . '" method="POST">
													' . @csrf_field() . '
													' . @method_field('DELETE') . '
													 <button type="submit" class="ml-1 btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash-alt"></i></button>
													</form>
                                                    </div>
                    
                    </div>
                ';
                })
                ->rawColumns(['opsi',])
                ->addIndexColumn()
                ->make(true);
        }
        return view('_superadmin_.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $kategori = ref_kategori::get();
        return view('_superadmin_.create');
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
                'KODE_SS' => 'required',
                'SS' => 'required',
                'IKU' => 'required',
                'DEFINISI_IKU' => 'required',
                'FORMULA_IKU' => 'required',
                'KOMPONEN_PENGUKURAN' => 'required',
                'PENJELASAN_IKU_KOMPONEN' => 'required',
                'UIC' => 'required',
                'TARGET_Q1' => 'required',
                'TARGET_Q2' => 'required',
                'TARGET_Q3' => 'required',
                'TARGET_Q4' => 'required',
                'CAPAIAN_Q1' => 'required',
                'CAPAIAN_Q2' => 'required',
                'CAPAIAN_Q3' => 'required',
                'CAPAIAN_Q4' => 'required',
                'TARGET_AKTUAL' => 'required',
                'CAPAIAN_AKTUAL' => 'required',
                'PENJELASAN_CAPAIAN' => 'required',
                'KEGIATAN_YANG_TELAH_DILAKSANAKAN' => 'required',
                'RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI' => 'required',
                'PERMASALAHAN' => 'required',


            ]);

            // TAMPUNGAN REQUEST DATA DARI FORM
            $data = [
                'KODE_SS' => $request->KODE_SS,
                'SS' => $request->SS,
                'IKU' => $request->IKU,
                'DEFINISI_IKU' => $request->DEFINISI_IKU,
                'FORMULA_IKU' => $request->FORMULA_IKU,
                'KOMPONEN_PENGUKURAN' => $request->KOMPONEN_PENGUKURAN,
                'PENJELASAN_IKU_KOMPONEN' => $request->PENJELASAN_IKU_KOMPONEN,
                'UIC' => $request->UIC,
                'TARGET_Q1' => $request->TARGET_Q1,
                'TARGET_Q2' => $request->TARGET_Q2,
                'TARGET_Q3' => $request->TARGET_Q3,
                'TARGET_Q4' => $request->TARGET_Q4,
                'CAPAIAN_Q1' => $request->CAPAIAN_Q1,
                'CAPAIAN_Q2' => $request->CAPAIAN_Q2,
                'CAPAIAN_Q3' => $request->CAPAIAN_Q3,
                'CAPAIAN_Q4' => $request->CAPAIAN_Q4,
                'TARGET_AKTUAL' => $request->TARGET_AKTUAL,
                'CAPAIAN_AKTUAL' => $request->CAPAIAN_AKTUAL,
                'PENJELASAN_CAPAIAN' => $request->PENJELASAN_CAPAIAN,
                'KEGIATAN_YANG_TELAH_DILAKSANAKAN' => $request->KEGIATAN_YANG_TELAH_DILAKSANAKAN,
                'RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI' => $request->RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI,
                'PERMASALAHAN' => $request->PERMASALAHAN,
                'FLAG_KOMPONEN' => 'SATU_KOMPONEN'

            ];

            Iku::create($data);

            //redirect to index
            return redirect()->back()->with(['success' => 'Data IKU Berhasil Disimpan!']);
        } catch (Exception $e) {
            return redirect()->back()->with(['failed' => 'Data IKU Gagal Disimpan! error :' . $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $data = Iku::where('FLAG_KOMPONEN', 'SATU_KOMPONEN')->findOrFail($id);
    //     // dd($data);

    //     return view('_superadmin_.show', compact(['data']));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $kategori = ref_kategori::all();
        $iku = Iku::where('FLAG_KOMPONEN', 'SATU_KOMPONEN')->findOrFail($id);
        // dd($berita);
        return view('_superadmin_.edit_iku_satu_komponen', compact(['iku']));
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
                'KODE_SS' => 'required',
                'SS' => 'required',
                'IKU' => 'required',
                'DEFINISI_IKU' => 'required',
                'FORMULA_IKU' => 'required',
                'KOMPONEN_PENGUKURAN' => 'required',
                'PENJELASAN_IKU_KOMPONEN' => 'required',
                'UIC' => 'required',
                'TARGET_Q1' => 'required',
                'TARGET_Q2' => 'required',
                'TARGET_Q3' => 'required',
                'TARGET_Q4' => 'required',
                'CAPAIAN_Q1' => 'required',
                'CAPAIAN_Q2' => 'required',
                'CAPAIAN_Q3' => 'required',
                'CAPAIAN_Q4' => 'required',
                'TARGET_AKTUAL' => 'required',
                'CAPAIAN_AKTUAL' => 'required',
                'PENJELASAN_CAPAIAN' => 'required',
                'KEGIATAN_YANG_TELAH_DILAKSANAKAN' => 'required',
                'RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI' => 'required',
                'PERMASALAHAN' => 'required',


            ]);

            // TAMPUNGAN REQUEST DATA DARI FORM
            $data = [
                'KODE_SS' => $request->KODE_SS,
                'SS' => $request->SS,
                'IKU' => $request->IKU,
                'DEFINISI_IKU' => $request->DEFINISI_IKU,
                'FORMULA_IKU' => $request->FORMULA_IKU,
                'KOMPONEN_PENGUKURAN' => $request->KOMPONEN_PENGUKURAN,
                'PENJELASAN_IKU_KOMPONEN' => $request->PENJELASAN_IKU_KOMPONEN,
                'UIC' => $request->UIC,
                'TARGET_Q1' => $request->TARGET_Q1,
                'TARGET_Q2' => $request->TARGET_Q2,
                'TARGET_Q3' => $request->TARGET_Q3,
                'TARGET_Q4' => $request->TARGET_Q4,
                'CAPAIAN_Q1' => $request->CAPAIAN_Q1,
                'CAPAIAN_Q2' => $request->CAPAIAN_Q2,
                'CAPAIAN_Q3' => $request->CAPAIAN_Q3,
                'CAPAIAN_Q4' => $request->CAPAIAN_Q4,
                'TARGET_AKTUAL' => $request->TARGET_AKTUAL,
                'CAPAIAN_AKTUAL' => $request->CAPAIAN_AKTUAL,
                'PENJELASAN_CAPAIAN' => $request->PENJELASAN_CAPAIAN,
                'KEGIATAN_YANG_TELAH_DILAKSANAKAN' => $request->KEGIATAN_YANG_TELAH_DILAKSANAKAN,
                'RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI' => $request->RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI,
                'PERMASALAHAN' => $request->PERMASALAHAN,
                'FLAG_KOMPONEN' => 'SATU_KOMPONEN'

            ];

            Iku::where('FLAG_KOMPONEN', 'SATU_KOMPONEN')->findOrFail($id)->update($data);
            // $berita = Berita::find($id)->update($data);
            return redirect()->route('home-admin.index')->with('success', "IKU berhasil diupdate!");
        } catch (Exception $e) {
            return redirect()->route('home-admin.index')->with(['failed' => 'Data IKU Gagal Di Update! error :' . $e->getMessage()]);
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
            Iku::where('FLAG_KOMPONEN', 'SATU_KOMPONEN')->findOrFail($id)->delete();
            return redirect()->route('home-admin.index')->with('success', "IKU berhasil dihapus!");
        } catch (Exception $e) {
            return redirect()->route('home-admin.index')->with(['failed' => 'Data Yang Dihapus Tidak Ada ! error :' . $e->getMessage()]);
        }
    }
}
