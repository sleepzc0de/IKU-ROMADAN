<?php

namespace App\Http\Controllers;

use App\Models\Iku;
use Exception;
use Illuminate\Http\Request;

class MultiKomponenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menuUsers = 'active';
        $query = Iku::select('*')->where('FLAG_KOMPONEN', 'MULTI_KOMPONEN');
        if (request()->ajax()) {
            return datatables()->of($query)
                ->addColumn('opsi', function ($query) {
                    $preview = route('multi_komponen.show', $query->id);
                    $edit = route('multi_komponen.edit', $query->id);
                    $hapus = route('multi_komponen.destroy', $query->id);
                    $addkomponen = route('multi_komponen_detail_admin', $query->id);
                    return '<div class="d-inline-flex">
                    

                    
                                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                        <a href="' . $preview . '"><button type="button" class="ml-1 btn btn-info"><i class="fa fas fa-eye"></i></button></a>
                                                        <a href="' . $edit . '"><button type="button" class="ml-1 btn btn-warning"><i class="fas fa-pencil-alt"></i></button></a>
                                                        <form action="' . $hapus . '" method="POST">
													' . @csrf_field() . '
													' . @method_field('DELETE') . '
													 <button type="submit" class="ml-1 btn btn-danger"><i class="fas fa-trash-alt"></i></button>
													</form>
                                                    <a href="' . $addkomponen . '"><button type="button" class="ml-1 btn btn-secondary"><i class="mr-1 fa fas fa-plus"></i>Komponen</button></a>
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
                // 'PENJELASAN_CAPAIAN' => 'required',
                // 'KEGIATAN_YANG_TELAH_DILAKSANAKAN' => 'required',
                // 'RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI' => 'required',
                // 'PERMASALAHAN' => 'required',


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
                // 'PENJELASAN_CAPAIAN' => $request->PENJELASAN_CAPAIAN,
                // 'KEGIATAN_YANG_TELAH_DILAKSANAKAN' => $request->KEGIATAN_YANG_TELAH_DILAKSANAKAN,
                // 'RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI' => $request->RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI,
                // 'PERMASALAHAN' => $request->PERMASALAHAN,
                'FLAG_KOMPONEN' => 'MULTI_KOMPONEN'

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
    public function show($id)
    {
        $data = Iku::findOrFail($id);
        // dd($data);

        return view('_superadmin_.show', compact(['data']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $kategori = ref_kategori::all();
        $iku = Iku::findOrFail($id);
        // dd($berita);
        return view('_superadmin_.edit', compact(['iku']));
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
                'KOMPONEN_PENGUKURAN' => 'required',
                'PENJELASAN_IKU_KOMPONEN' => 'required',
                'UIC' => 'required',
                'QUARTAL_TARGET_1' => 'required',
                'QUARTAL_CAPAIAN_1' => 'required',
                'QUARTAL_TARGET_2' => 'required',
                'QUARTAL_CAPAIAN_2' => 'required',
                'QUARTAL_TARGET_3' => 'required',
                'QUARTAL_CAPAIAN_3' => 'required',
                'QUARTAL_TARGET_4' => 'required',
                'QUARTAL_CAPAIAN_4' => 'required',
                'PENJELASAN_CAPAIAN' => 'required',
                'TARGET_SEMESTERAN' => 'required',
                'CAPAIAN_SEMESTERAN' => 'required',
                'TARGET_SEMESTERAN' => 'required',
                'TARGET_TAHUNAN' => 'required',
                'CAPAIAN_TAHUNAN' => 'required',
                'TARGET_AKTUAL' => 'required',
                'CAPAIAN_AKTUAL' => 'required',
                'KEGIATAN_YANG_TELAH_DILAKSANAKAN' => 'required',
                'RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI' => 'required',
                'PERMASALAHAN' => 'required',
            ]);

            // TAMPUNGAN REQUEST DATA DARI FORM
            $data = [
                'KODE_SS' => $request->KODE_SS,
                'SS' => $request->SS,
                'IKU' => $request->IKU,
                'KOMPONEN_PENGUKURAN' => $request->KOMPONEN_PENGUKURAN,
                'PENJELASAN_IKU_KOMPONEN' => $request->PENJELASAN_IKU_KOMPONEN,
                'UIC' => $request->UIC,
                'QUARTAL_TARGET_1' => $request->QUARTAL_TARGET_1,
                'QUARTAL_CAPAIAN_1' => $request->QUARTAL_CAPAIAN_1,
                'QUARTAL_TARGET_2' => $request->QUARTAL_TARGET_2,
                'QUARTAL_CAPAIAN_2' => $request->QUARTAL_CAPAIAN_2,
                'QUARTAL_TARGET_3' => $request->QUARTAL_TARGET_3,
                'QUARTAL_CAPAIAN_3' => $request->QUARTAL_CAPAIAN_3,
                'QUARTAL_TARGET_4' => $request->QUARTAL_TARGET_4,
                'QUARTAL_CAPAIAN_4' => $request->QUARTAL_CAPAIAN_4,
                'PENJELASAN_CAPAIAN' => $request->PENJELASAN_CAPAIAN,
                'TARGET_SEMESTERAN' => $request->TARGET_SEMESTERAN,
                'CAPAIAN_SEMESTERAN' => $request->CAPAIAN_SEMESTERAN,
                'TARGET_SEMESTERAN' => $request->TARGET_SEMESTERAN,
                'TARGET_TAHUNAN' => $request->TARGET_TAHUNAN,
                'CAPAIAN_TAHUNAN' => $request->CAPAIAN_TAHUNAN,
                'TARGET_AKTUAL' => $request->TARGET_AKTUAL,
                'CAPAIAN_AKTUAL' => $request->CAPAIAN_AKTUAL,
                'KEGIATAN_YANG_TELAH_DILAKSANAKAN' => $request->KEGIATAN_YANG_TELAH_DILAKSANAKAN,
                'RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI' => $request->RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI,
                'PERMASALAHAN' => $request->PERMASALAHAN,

            ];

            Iku::findOrFail($id)->update($data);
            // $berita = Berita::find($id)->update($data);
            return redirect()->route('_superadmin_.index')->with('success', "IKU berhasil diupdate!");
        } catch (Exception $e) {
            return redirect()->route('_superadmin_.index')->with(['failed' => 'Data IKU Gagal Di Update! error :' . $e->getMessage()]);
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
            Iku::findOrFail($id)->delete();
            return redirect()->route('_superadmin_.index')->with('success', "IKU berhasil dihapus!");
        } catch (Exception $e) {
            return redirect()->route('_superadmin_.index')->with(['failed' => 'Data Yang Dihapus Tidak Ada ! error :' . $e->getMessage()]);
        }
    }
}
