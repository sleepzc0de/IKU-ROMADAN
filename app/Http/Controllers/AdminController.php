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
        $query = Berita::with(['kategori', 'status'])->select('*');
        if (request()->ajax()) {
            return datatables()->of($query)

                ->addColumn('image_berita', function ($query) {
                    $url = asset('storage/romadan_gambar_web/' . $query->image);
                    return '<a href="' . $url . '"><img src="' . $url . '" border="0" width="100" class="img-rounded" align="center""/></a>';
                })
                ->addColumn('opsi', function ($query) {
                    $preview = route('berita.show', encrypt($query->id));
                    $edit = route('berita.edit', encrypt($query->id));
                    $hapus = route('berita.destroy', encrypt($query->id));
                    return '<div class="d-inline-flex">
											<div class="dropdown">
												<a href="#" class="text-body" data-bs-toggle="dropdown">
													<i class="ph-list"></i>
												</a>

												<div class="dropdown-menu dropdown-menu-end">
													<a href="' . $preview . '" class="dropdown-item">
														<i class="ph-detective me-2"></i>
														Preview
													</a>
													<a href="' . $edit . '" class="dropdown-item">
														<i class="ph-note-pencil me-2"></i>
														Edit
													</a>
													<form action="' . $hapus . '" method="POST">
													' . @csrf_field() . '
													' . @method_field('DELETE') . '
													<button type="submit" name="submit" class="dropdown-item"> <i class="ph-trash me-2"></i> Hapus</button>
													</form>
												</div>
											</div>
										</div>
                ';
                })

                ->editColumn('created_at', function ($query) {
                    return date('d-M-Y H:i:s', strtotime($query->created_at));
                })


                ->rawColumns(['opsi', 'image_berita'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('backend.berita.index');
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
                'PENJELESAN_CAPAIAN' => 'required',
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
                'PENJELESAN_CAPAIAN' => $request->PENJELESAN_CAPAIAN,

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
        $data = Berita::findOrFail(decrypt($id));
        // dd($data);

        return view('backend.berita.show', compact(['data']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = ref_kategori::all();
        $berita = Berita::with('kategori')->findOrFail(decrypt($id));
        // dd($berita);
        return view('backend.berita.edit', compact(['berita', 'kategori']));
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
                'judul' => 'required',
                'sub_judul' => 'required',
                'kategori' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg,svg|max:1000',
                'isi' => 'required',
            ]);

            // SLUG

            $slug = Str::slug($request->judul);

            // TAMPUNGAN REQUEST DATA DARI FORM
            $data = [
                'judul' => $request->judul,
                'sub_judul' => $request->sub_judul,
                'kategori' => $request->kategori,
                'isi' => $request->isi,
                'status' => 2,
                'slug' => $slug

            ];
            if ($request->hasFile('image')) {
                $request->validate([
                    'image' => 'image|mimes:jpeg,png,jpg,svg|max:1000',
                ], [
                    'image.mimes' => 'Gambar hanya diperbolehkaan berekstensi JPEG, JPG, PNG, SVG',
                ]);

                //UPLOAD IMAGE
                $image = $request->file('image');
                $image->storeAs('public/romadan_gambar_web', $image->hashName());

                $data_gambar = Berita::findOrFail(decrypt($id));
                File::delete(public_path('storage/romadan_gambar_web/') . $data_gambar->image);

                $data = [
                    'image' => $image->hashName(),
                ];
            }

            Berita::findOrFail(decrypt($id))->update($data);
            // $berita = Berita::find($id)->update($data);
            return redirect()->route('berita.index')->with('success', "Berita $request->judul berhasil diupdate!");
        } catch (Exception $e) {
            return redirect()->route('berita.index')->with(['failed' => 'Data Berita Gagal Di Update! error :' . $e->getMessage()]);
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
            $data = [
                'status' => 3,
            ];
            Berita::findOrFail(decrypt($id))->update($data);
            Berita::findOrFail(decrypt($id))->delete($data);
            return redirect()->route('berita.index')->with('success', "Berita berhasil dihapus!");
        } catch (Exception $e) {
            return redirect()->route('berita.index')->with(['failed' => 'Data Yang Dihapus Tidak Ada ! error :' . $e->getMessage()]);
        }
    }

    public function beritaSampah(Request $request)
    {
        $query = Berita::onlyTrashed()->with(['kategori', 'status']);
        if (request()->ajax()) {
            return datatables()->of($query)
                ->addColumn('image_berita', function ($query) {
                    $url = asset('storage/romadan_gambar_web/' . $query->image);
                    return '<a href="' . $url . '"><img src="' . $url . '" border="0" width="100" class="img-rounded" align="center""/></a>';
                })
                ->addColumn('opsi', function ($query) {
                    // $preview = route('berita.show', $query->id);
                    $restore = route('berita.restore', encrypt($query->id));
                    $paksahapus = route('berita.force-delete', encrypt($query->id));
                    return '<div class="d-inline-flex">
											<div class="dropdown">
												<a href="#" class="text-body" data-bs-toggle="dropdown">
													<i class="ph-list"></i>
												</a>

												<div class="dropdown-menu dropdown-menu-end">
													<form action="' . $restore . '" method="POST">
													' . @csrf_field() . '
													<button type="submit" name="submit" class="dropdown-item"> <i class="ph-trash me-2"></i> Restore</button>
													</form>
													<form action="' . $paksahapus . '" method="POST">
													' . @csrf_field() . '
													' . @method_field('DELETE') . '
													<button type="submit" name="submit" class="dropdown-item"> <i class="ph-trash me-2"></i> Paksa Hapus</button>
													</form>
												</div>
											</div>
										</div>
                ';
                })
                ->rawColumns(['opsi', 'image_berita'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('backend.berita.sampah', compact('query'));
    }

    public function restore($id)
    {
        try {
            $data = [
                'status' => 2,
            ];
            Berita::onlyTrashed()->findOrFail(decrypt($id))->update($data);
            Berita::onlyTrashed()->findOrFail(decrypt($id))->restore();
            return redirect()->route('berita.sampah')->with('success', "Data Berita berhasil direstore!, silahkan cek pada berita aktif yah guys!");
        } catch (Exception $e) {
            return redirect()->route('berita.sampah')->with(['failed' => 'Data Berita GAGAL di Restore ! error :' . $e->getMessage()]);
        }
    }

    public function restoreAll()
    {
        try {
            $data = [
                'status' => 2,
            ];
            Berita::onlyTrashed()->update($data);
            Berita::onlyTrashed()->restore();
            return redirect()->route('berita.sampah')->with('success', "Semua Data Berita berhasil direstore!, silahkan cek pada berita aktif yah guys!");
        } catch (Exception $e) {
            return redirect()->route('berita.sampah')->with(['failed' => 'Semua Data Berita GAGAL di Restore ! error :' . $e->getMessage()]);
        }
    }
    public function forceDelete($id)
    {
        try {
            $data_gambar = Berita::withTrashed()->findOrFail(decrypt($id));
            File::delete(public_path('storage/romadan_gambar_web/') . $data_gambar->image);
            Berita::withTrashed()->findOrFail(decrypt($id))->forceDelete();
            return redirect()->route('berita.sampah')->with('success', "Data Berhasil dihapus PERMANEN");
        } catch (Exception $e) {
            return redirect()->route('berita.sampah')->with(['failed' => 'Data GAGAL dihapus Permanen ! error :' . $e->getMessage()]);
        }
    }
}
