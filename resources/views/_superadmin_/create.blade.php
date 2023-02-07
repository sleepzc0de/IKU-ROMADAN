@extends('_superadmin_.layouts.master')

@section('content')
 <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-center mb-3">Tambah IKU</h4>
                                 @if($message = Session::get('success'))
                            <div class="alert alert-success alert-icon-start alert-dismissible fade show">
											<span class="alert-icon bg-success text-white">
												<i class="ph-gear"></i>
											</span>
											<span class="fw-semibold">{{$message}}</span> 
											<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
									    </div>
                            @endif

                             @if($message = Session::get('failed'))
                            <div class="alert alert-danger alert-icon-start alert-dismissible fade show">
											<span class="alert-icon bg-danger text-white">
												<i class="ph-gear"></i>
											</span>
											<span class="fw-semibold">{{$message}}</span> 
											<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
									    </div>
                            @endif
                                <form action="{{route('_superadmin_.store')}}" class="needs-validation" method="POST" novalidate>
                                    @csrf
                                  <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Kode Sasaran Strategis / IKU</label>
                                      <input name="KODE_SS" type="text" class="form-control" id="validationTooltip01" placeholder="First name" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Nama Sasaran Strategis</label>
                                      <input name="SS" type="text" class="form-control" id="validationTooltip01" placeholder="First name" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Nama IKU</label>
                                      <input name="IKU" type="text" class="form-control" id="validationTooltip01" placeholder="First name" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Komponen Pengukuran</label>
                                      <input name="KOMPONEN_PENGUKURAN" type="text" class="form-control" id="validationTooltip01" placeholder="First name" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Penjelasan IKU / Komponen</label>
                                      <textarea name="PENJELASAN_IKU_KOMPONEN" type="text" class="form-control" id="validationTooltip01" placeholder="First name" required></textarea>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                      <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Unit In Charge / UIC </label>
                                      <input name="UIC" type="text" class="form-control" id="validationTooltip01" placeholder="First name" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>

                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">Q1 TARGET</label>
                                      <input step="any" name="QUARTAL_TARGET_1" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">Q1 CAPAIAN</label>
                                      <input step="any" name="QUARTAL_CAPAIAN_1" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">Q2 TARGET</label>
                                      <input step="any" name="QUARTAL_TARGET_2" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">Q2 CAPAIAN</label>
                                      <input step="any" name="QUARTAL_CAPAIAN_2" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div> 
                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">Q3 TARGET</label>
                                      <input step="any" name="QUARTAL_TARGET_3" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">Q3 CAPAIAN</label>
                                      <input step="any" name="QUARTAL_CAPAIAN_3" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">Q4 TARGET</label>
                                      <input step="any" name="QUARTAL_TARGET_4" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">Q4 CAPAIAN</label>
                                      <input step="any" name="QUARTAL_CAPAIAN_4" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>

                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">SEMESTERAN TARGET</label>
                                      <input step="any" name="TARGET_SEMESTERAN" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">SEMESTERAN CAPAIAN</label>
                                      <input step="any" name="CAPAIAN_SEMESTERAN" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>

                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">TAHUNAN TARGET</label>
                                      <input step="any" name="TARGET_TAHUNAN" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">TAHUNAN CAPAIAN</label>
                                      <input step="any" name="CAPAIAN_TAHUNAN" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>

                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">AKTUAL TARGET</label>
                                      <input step="any" name="TARGET_AKTUAL" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">AKTUAL CAPAIAN</label>
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
                                  <button class="btn btn-primary mt-4" type="submit">Kirim</button>
                                </form>
                            </div>
                    </div>
@endsection
