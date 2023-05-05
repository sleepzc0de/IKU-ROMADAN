@extends('_superadmin_.layouts.master')

@section('content')
 <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-center mb-3">Tambah IKU Satu Komponen</h4>
                                 @include('_superadmin_.layouts.session_notif')
                                <form action="{{route('satu_komponen.store')}}" class="needs-validation" method="POST" novalidate>
                                    @csrf
                                  <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Kode SS/IKU</label>
                                      <input name="KODE_SS" type="text" class="form-control" id="validationTooltip01" placeholder="Input Kode SS" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Sasaran Strategis</label>
                                      <input name="SS" type="text" class="form-control" id="validationTooltip01" placeholder="Input Sasaran Strategis" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Nama IKU</label>
                                      <input name="IKU" type="text" class="form-control" id="validationTooltip01" placeholder="Input Nama IKU" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Definisi IKU</label>
                                        <textarea  name="DEFINISI_IKU" type="text" class="form-control" id="validationTooltip01" placeholder="Input Definisi IKU" required></textarea>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Formula IKU</label>
                                       <textarea  name="FORMULA_IKU" type="text" class="form-control" id="validationTooltip01" placeholder="Input Formula IKU" required></textarea>
                                      
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Komponen Pengukuran</label>
                                      <input name="KOMPONEN_PENGUKURAN" type="text" class="form-control" id="validationTooltip01" placeholder="Input Komponen Pengukuran" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Penjelasan IKU / Komponen</label>
                                      <textarea name="PENJELASAN_IKU_KOMPONEN" type="text" class="form-control" id="validationTooltip01" placeholder="Input Penjelasan IKU" required></textarea>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                      <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">UIC </label>
                                      <input name="UIC" type="text" class="form-control" id="validationTooltip01" placeholder="Input UIC name" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>

                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">TARGET Q1</label>
                                      <input step="any" name="TARGET_Q1" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">CAPAIAN Q1</label>
                                      <input step="any" name="CAPAIAN_Q1" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">TARGET Q2</label>
                                      <input step="any" name="TARGET_Q2" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">CAPAIAN Q2</label>
                                      <input step="any" name="CAPAIAN_Q2" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div> 
                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">TARGET Q3</label>
                                      <input step="any" name="TARGET_Q3" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">CAPAIAN Q3</label>
                                      <input step="any" name="CAPAIAN_Q3" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">TARGET Q4</label>
                                      <input step="any" name="TARGET_Q4" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">CAPAIAN Q4</label>
                                      <input step="any" name="CAPAIAN_Q4" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">TARGET AKTUAL</label>
                                      <input step="any" name="TARGET_AKTUAL" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">CAPAIAN AKTUAL</label>
                                      <input step="any" name="CAPAIAN_AKTUAL" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>

                                  </div>
                                 
                                  <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Penjelasan Capaian</label>
                                      <textarea  name="PENJELASAN_CAPAIAN" type="text" class="form-control" id="validationTooltip01" placeholder="Input Penjelasan Capaian" required></textarea>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Kegiatan yang Telah Dilaksanakan</label>
                                      <textarea  name="KEGIATAN_YANG_TELAH_DILAKSANAKAN" type="text" class="form-control" id="validationTooltip01" placeholder="Input Kegiatan yang sudah dilaksanakan" required></textarea>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Rencana Aksi dan Target Penyelesaian Rencana Aksi</label>
                                      <textarea  name="RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI" type="text" class="form-control" id="validationTooltip01" placeholder="Input Rencana Aksi" required></textarea>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Permasalahan</label>
                                      <textarea  name="PERMASALAHAN" type="text" class="form-control" id="validationTooltip01" placeholder="Input Permasalahan" required></textarea>
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
