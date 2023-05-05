@extends('_superadmin_.layouts.master')

@section('content')
 <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-center mb-3">Tambah Detail Multi Komponen</h4>
                                 @include('_superadmin_.layouts.session_notif')
                                <form action="{{route('multi_komponen_detail_admin_add')}}" class="needs-validation" method="POST" novalidate>
                                    @csrf
                                  <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">ID IKU KOMPONEN</label>
                                      <input value="{{$data->id}}" name="ID_IKU_MULTI_KOMPONEN" type="text" class="form-control" id="ID_IKU_MULTI_KOMPONEN" required readonly>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Kode SS/IKU BAGIAN</label>
                                      <input value="{{$data->KODE_SS}}" name="KODE_SS_KOMPONEN" type="text" class="form-control" id="KODE_SS_KOMPONEN" placeholder="Input Kode SS" required readonly>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Sasaran Strategis BAGIAN</label>
                                      <input name="SS_KOMPONEN" type="text" class="form-control" id="validationTooltip01" placeholder="Input Sasaran Strategis" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Nama IKU BAGIAN</label>
                                      <input name="IKU_KOMPONEN" type="text" class="form-control" id="validationTooltip01" placeholder="Input Nama IKU" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Definisi IKU BAGIAN</label>
                                        <textarea  name="DEFINISI_IKU_KOMPONEN" type="text" class="form-control" id="validationTooltip01" placeholder="Input Definisi IKU" required></textarea>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Formula IKU BAGIAN</label>
                                       <textarea  name="FORMULA_IKU_KOMPONEN" type="text" class="form-control" id="validationTooltip01" placeholder="Input Formula IKU" required></textarea>
                                      
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Komponen Pengukuran BAGIAN</label>
                                      <input name="KOMPONEN_PENGUKURAN_KOMPONEN" type="text" class="form-control" id="validationTooltip01" placeholder="Input Komponen Pengukuran" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Penjelasan IKU/Komponen BAGIAN</label>
                                      <textarea name="PENJELASAN_IKU_KOMPONEN_KOMPONEN" type="text" class="form-control" id="validationTooltip01" placeholder="Input Penjelasan IKU" required></textarea>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                      <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">UIC BAGIAN</label>
                                      <input name="UIC_KOMPONEN" type="text" class="form-control" id="validationTooltip01" placeholder="Input UIC name" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>

                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">TARGET BAGIAN Q1</label>
                                      <input step="any" name="TARGET_Q1_KOMPONEN" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">CAPAIAN BAGIAN Q1</label>
                                      <input step="any" name="CAPAIAN_Q1_KOMPONEN" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">TARGET BAGIAN Q2</label>
                                      <input step="any" name="TARGET_Q2_KOMPONEN" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">CAPAIAN BAGIAN Q2</label>
                                      <input step="any" name="CAPAIAN_Q2_KOMPONEN" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div> 
                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">TARGET BAGIAN Q3</label>
                                      <input step="any" name="TARGET_Q3_KOMPONEN" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">CAPAIAN BAGIAN Q3</label>
                                      <input step="any" name="CAPAIAN_Q3_KOMPONEN" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">TARGET BAGIAN Q4</label>
                                      <input step="any" name="TARGET_Q4_KOMPONEN" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">CAPAIAN BAGIAN Q4</label>
                                      <input step="any" name="CAPAIAN_Q4_KOMPONEN" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">TARGET BAGIAN AKTUAL</label>
                                      <input step="any" name="TARGET_AKTUAL_KOMPONEN" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">CAPAIAN BAGIAN AKTUAL</label>
                                      <input step="any" name="CAPAIAN_AKTUAL_KOMPONEN" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>

                                  </div>
                                 
                                  <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Penjelasan Capaian Bagian</label>
                                      <textarea  name="PENJELASAN_CAPAIAN_KOMPONEN" type="text" class="form-control" id="validationTooltip01" placeholder="Input Penjelasan Capaian" required></textarea>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Kegiatan yang Telah Dilaksanakan Bagian</label>
                                      <textarea  name="KEGIATAN_YANG_TELAH_DILAKSANAKAN_KOMPONEN" type="text" class="form-control" id="validationTooltip01" placeholder="Input Kegiatan yang sudah dilaksanakan" required></textarea>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Rencana Aksi dan Target Penyelesaian Rencana Aksi Bagian</label>
                                      <textarea  name="RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI_KOMPONEN" type="text" class="form-control" id="validationTooltip01" placeholder="Input Rencana Aksi" required></textarea>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Permasalahan Bagian</label>
                                      <textarea  name="PERMASALAHAN_KOMPONEN" type="text" class="form-control" id="validationTooltip01" placeholder="Input Permasalahan" required></textarea>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                  </div>
                                  <button class="btn btn-block btn-primary mt-4" type="submit">Kirim</button>
                                  
                                </form>
                                <a href="{{route('_superadmin_.index')}}"><button class="btn btn-block btn-danger mt-2" type="submit">Batal</button></a>
                            </div>
                    </div>
@endsection
