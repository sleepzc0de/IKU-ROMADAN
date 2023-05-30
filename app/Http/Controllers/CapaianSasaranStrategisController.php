<?php

namespace App\Http\Controllers;

use App\Models\CapaianSasaranModel;
use Exception;
use Illuminate\Http\Request;

class CapaianSasaranStrategisController extends Controller
{
    public function index()
    {
        // $cek = CapaianSasaranModel::findAll();
        $query = CapaianSasaranModel::select('*');
        if (request()->ajax()) {
            return datatables()->of($query)
                ->addColumn('opsi', function ($query) {
                    $preview = route('capaian-sasaran-strategis.show', $query->id);
                    $edit = route('capaian-sasaran-strategis.edit', $query->id);
                    $update = route('capaian-sasaran-strategis.update', $query->id);
                    $hapus = route('capaian-sasaran-strategis.destroy', $query->id);
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
                                             <form action="' . $update . '" method="POST">
													' . @csrf_field() . '
													' . @method_field('PUT') . '
                                            <div class="modal-body">

                                            <label  for="NamaCapaian">Nama Capaian</label>
                                            <input value="' . $query->NAMA_CAPAIAN . '" name="NAMA_CAPAIAN" type="text" class="form-control" id="NamaCapaian" required>
                                            

                                            <label  for="NilaiCapaian">Nilai Capaian</label>
                                            <input value="' . $query->NILAI_CAPAIAN . '" name="NILAI_CAPAIAN" type="number" class="form-control" id="NilaiCapaian"  required>
													
													
                                               
                                            </div>
                                            <div class="modal-footer">
                                            <button type="submit" class="ml-1 btn btn-warning" data-toggle="tooltip" data-placement="top" title="Update">Update</button>
                                            <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                                            </div>
                                            </form>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                                
                                 <a href="' . $edit . '" alt="default" data-toggle="modal" data-target="#myModal_' . $query->id . '" class="model_img img-fluid"><button type="button" class="ml-1 btn btn-warning" data-toggle="tooltip" data-placement="top" title="Preview IKU"><i class="fas fa-pencil-alt"></i></button></a>
                                                        
                                                       
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
        return view('_superadmin_.css_index');
    }

    public function store(Request $request)
    {

        try {
            // VALIDASI DATA
            $request->validate([
                'NAMA_CAPAIAN' => 'required',
                'NILAI_CAPAIAN' => 'required',


            ]);

            // TAMPUNGAN REQUEST DATA DARI FORM
            $data = [
                'NAMA_CAPAIAN' => $request->NAMA_CAPAIAN,
                'NILAI_CAPAIAN' => $request->NILAI_CAPAIAN,

            ];

            CapaianSasaranModel::create($data);

            //redirect to index
            return redirect()->back()->with(['success' => 'Data Capaian Sasaran Strategis Berhasil Disimpan!']);
        } catch (Exception $e) {
            return redirect()->back()->with(['failed' => 'Data Capaian Sasaran Strategis Gagal Disimpan! error :' . $e->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            // VALIDASI DATA
            $request->validate([
                'NAMA_CAPAIAN' => 'required',
                'NILAI_CAPAIAN' => 'required',
            ]);

            // TAMPUNGAN REQUEST DATA DARI FORM
            $data = [
                'NAMA_CAPAIAN' => $request->NAMA_CAPAIAN,
                'NILAI_CAPAIAN' => $request->NILAI_CAPAIAN,

            ];

            CapaianSasaranModel::findOrFail($id)->update($data);
            // $berita = Berita::find($id)->update($data);
            return redirect()->route('capaian-sasaran-strategis.index')->with('success', "Sasaran Strategis berhasil diupdate!");
        } catch (Exception $e) {
            return redirect()->route('capaian-sasaran-strategis.index')->with(['failed' => 'Data Sasaran Strategis Gagal Di Update! error :' . $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        try {
            CapaianSasaranModel::findOrFail($id)->delete();
            return redirect()->route('capaian-sasaran-strategis.index')->with('success', "Sasaran Strategis berhasil dihapus!");
        } catch (Exception $e) {
            return redirect()->route('capaian-sasaran-strategis.index')->with(['failed' => 'Data Yang Dihapus Tidak Ada ! error :' . $e->getMessage()]);
        }
    }
}
