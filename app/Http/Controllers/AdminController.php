<?php

namespace App\Http\Controllers;

use App\Models\Iku;
use Exception;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menuUsers = 'active';
        $query = Iku::select('*');
        if (request()->ajax()) {
            return datatables()->of($query)
                ->rawColumns(['opsi', 'image_berita'])
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
