@extends('_superadmin_.layouts.master')

@section('content')
 <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-center mb-3">Edit IKU Satu Komponen</h4>
                                   @include('_superadmin_.layouts.session_notif')
                                <form action="{{route('satu_komponen.update',$iku->id)}}" class="needs-validation" method="POST" novalidate>
                                   @csrf
                                    @method('PUT')
                                  <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Kode SS/IKU</label>
                                      <input value="{{ old('KODE_SS') ?? $iku->KODE_SS }}" name="KODE_SS" type="text" class="form-control @error('KODE_SS') is-invalid @enderror" id="validationTooltip01" placeholder="First name" required>
                                      <!-- error message untuk judul -->
											@error('KODE_SS')
											<div class="alert alert-danger mt-2">
												{{ $message }}
											</div>
											@enderror
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Sasaran Strategis</label>
                                      <input value="{{ old('SS') ?? $iku->SS }}" name="SS" type="text" class="form-control @error('SS') is-invalid @enderror" id="validationTooltip01" placeholder="First name" required>
                                      <!-- error message untuk judul -->
											@error('SS')
											<div class="alert alert-danger mt-2">
												{{ $message }}
											</div>
											@enderror
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Nama IKU</label>
                                      <input value="{{ old('IKU') ?? $iku->IKU }}" name="IKU" type="text" class="form-control @error('IKU') is-invalid @enderror" id="validationTooltip01" placeholder="First name" required>
                                       <!-- error message untuk judul -->
											@error('IKU')
											<div class="alert alert-danger mt-2">
												{{ $message }}
											</div>
											@enderror
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                   <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Definisi IKU</label>
                                      <textarea  name="DEFINISI_IKU" type="text" class="form-control @error('DEFINISI_IKU') is-invalid @enderror" id="validationTooltip01" placeholder="First name" required>{{ old('DEFINISI_IKU') ?? $iku->DEFINISI_IKU }}</textarea>
                                        <!-- error message untuk judul -->
											@error('DEFINISI_IKU')
											<div class="alert alert-danger mt-2">
												{{ $message }}
											</div>
											@enderror
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Formula IKU</label>
                                      <textarea  name="FORMULA_IKU" type="text" class="form-control @error('FORMULA_IKU') is-invalid @enderror" id="validationTooltip01" placeholder="First name" required>{{ old('FORMULA_IKU') ?? $iku->FORMULA_IKU }}</textarea>
                                        <!-- error message untuk judul -->
											@error('FORMULA_IKU')
											<div class="alert alert-danger mt-2">
												{{ $message }}
											</div>
											@enderror
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Komponen Pengukuran</label>
                                      <textarea  name="KOMPONEN_PENGUKURAN" type="text" class="form-control @error('KOMPONEN_PENGUKURAN') is-invalid @enderror" id="validationTooltip01" placeholder="First name" required>{{ old('KOMPONEN_PENGUKURAN') ?? $iku->KOMPONEN_PENGUKURAN }}</textarea>
                                        <!-- error message untuk judul -->
											@error('KOMPONEN_PENGUKURAN')
											<div class="alert alert-danger mt-2">
												{{ $message }}
											</div>
											@enderror
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Penjelasan IKU / Komponen</label>
                                      <textarea  name="PENJELASAN_IKU_KOMPONEN" type="text" class="form-control @error('PENJELASAN_IKU_KOMPONEN') is-invalid @enderror" id="validationTooltip01" placeholder="First name" required>{{ old('PENJELASAN_IKU_KOMPONEN') ?? $iku->PENJELASAN_IKU_KOMPONEN }}</textarea>
                                      <!-- error message untuk judul -->
											@error('PENJELASAN_IKU_KOMPONEN')
											<div class="alert alert-danger mt-2">
												{{ $message }}
											</div>
											@enderror
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                      <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">UIC </label>
                                      <input value="{{ old('UIC') ?? $iku->UIC }}" name="UIC" type="text" class="form-control @error('UIC') is-invalid @enderror" id="validationTooltip01" placeholder="First name" required>
                                      <!-- error message untuk judul -->
											@error('UIC')
											<div class="alert alert-danger mt-2">
												{{ $message }}
											</div>
											@enderror
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>

                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">TARGET Q1</label>
                                      <input value="{{ old('TARGET_Q1') ?? $iku->TARGET_Q1 }}" step="any" name="TARGET_Q1" type="number" class="form-control @error('TARGET_Q1') is-invalid @enderror" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                       <!-- error message untuk judul -->
											@error('TARGET_Q1')
											<div class="alert alert-danger mt-2">
												{{ $message }}
											</div>
											@enderror
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">CAPAIAN Q1</label>
                                      <input value="{{ old('CAPAIAN_Q1') ?? $iku->CAPAIAN_Q1 }}" step="any" name="CAPAIAN_Q1" type="number" class="form-control @error('CAPAIAN_Q1') is-invalid @enderror" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <!-- error message untuk judul -->
											@error('CAPAIAN_Q1')
											<div class="alert alert-danger mt-2">
												{{ $message }}
											</div>
											@enderror
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">TARGET Q2</label>
                                      <input value="{{ old('TARGET_Q2') ?? $iku->TARGET_Q2 }}" step="any" name="TARGET_Q2" type="number" class="form-control @error('TARGET_Q2') is-invalid @enderror" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                       <!-- error message untuk judul -->
											@error('TARGET_Q2')
											<div class="alert alert-danger mt-2">
												{{ $message }}
											</div>
											@enderror
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">CAPAIAN Q2</label>
                                      <input value="{{ old('CAPAIAN_Q2') ?? $iku->CAPAIAN_Q2 }}" step="any" name="CAPAIAN_Q2" type="number" class="form-control @error('CAPAIAN_Q2') is-invalid @enderror" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <!-- error message untuk judul -->
											@error('CAPAIAN_Q2')
											<div class="alert alert-danger mt-2">
												{{ $message }}
											</div>
											@enderror
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div> 
                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">TARGET Q3</label>
                                      <input value="{{ old('TARGET_Q3') ?? $iku->TARGET_Q3 }}" step="any" name="TARGET_Q3" type="number" class="form-control @error('TARGET_Q3') is-invalid @enderror" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                       <!-- error message untuk judul -->
											@error('TARGET_Q3')
											<div class="alert alert-danger mt-2">
												{{ $message }}
											</div>
											@enderror
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">CAPAIAN Q3</label>
                                      <input value="{{ old('CAPAIAN_Q3') ?? $iku->CAPAIAN_Q3 }}" step="any" name="CAPAIAN_Q3" type="number" class="form-control @error('CAPAIAN_Q3') is-invalid @enderror" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <!-- error message untuk judul -->
											@error('CAPAIAN_Q3')
											<div class="alert alert-danger mt-2">
												{{ $message }}
											</div>
											@enderror
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">TARGET Q4</label>
                                      <input value="{{ old('TARGET_Q4') ?? $iku->TARGET_Q4 }}" step="any" name="TARGET_Q4" type="number" class="form-control @error('TARGET_Q4') is-invalid @enderror" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                       <!-- error message untuk judul -->
											@error('TARGET_Q4')
											<div class="alert alert-danger mt-2">
												{{ $message }}
											</div>
											@enderror
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">CAPAIAN Q4</label>
                                      <input value="{{ old('CAPAIAN_Q4') ?? $iku->CAPAIAN_Q4 }}" step="any" name="CAPAIAN_Q4" type="number" class="form-control @error('CAPAIAN_Q4') is-invalid @enderror" id="validationTooltip01" 
                                      placeholder="0.0 (Koma Pake Titik)" required>
                                      <!-- error message untuk judul -->
											@error('CAPAIAN_Q4')
											<div class="alert alert-danger mt-2">
												{{ $message }}
											</div>
											@enderror
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">TARGET AKTUAL</label>
                                      <input value="{{ old('TARGET_AKTUAL') ?? $iku->TARGET_AKTUAL }}" step="any" name="TARGET_AKTUAL" type="number" class="form-control @error('TARGET_AKTUAL') is-invalid @enderror" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                       <!-- error message untuk judul -->
											@error('TARGET_AKTUAL')
											<div class="alert alert-danger mt-2">
												{{ $message }}
											</div>
											@enderror
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">CAPAIAN AKTUAL</label>
                                      <input value="{{ old('CAPAIAN_AKTUAL') ?? $iku->CAPAIAN_AKTUAL }}" step="any" name="CAPAIAN_AKTUAL" type="number" class="form-control @error('CAPAIAN_AKTUAL') is-invalid @enderror" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                       <!-- error message untuk judul -->
											@error('CAPAIAN_AKTUAL')
											<div class="alert alert-danger mt-2">
												{{ $message }}
											</div>
											@enderror
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>

                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Penjelasan Capaian</label>
                                      <textarea  name="PENJELASAN_CAPAIAN" type="text" class="form-control @error('PENJELASAN_CAPAIAN') is-invalid @enderror" id="validationTooltip01" placeholder="Input Penjelasan Capaian" required>{{ old('PENJELASAN_CAPAIAN') ?? $iku->PENJELASAN_CAPAIAN }}</textarea>
                                      <!-- error message untuk judul -->
											@error('PENJELASAN_CAPAIAN')
											<div class="alert alert-danger mt-2">
												{{ $message }}
											</div>
											@enderror
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Kegiatan yang Telah Dilaksanakan</label>
                                      <textarea name="KEGIATAN_YANG_TELAH_DILAKSANAKAN" type="text" class="form-control @error('KEGIATAN_YANG_TELAH_DILAKSANAKAN') is-invalid @enderror" id="validationTooltip01" placeholder="Input Kegiatan yang sudah dilaksanakan" required>{{ old('KEGIATAN_YANG_TELAH_DILAKSANAKAN') ?? $iku->KEGIATAN_YANG_TELAH_DILAKSANAKAN }}</textarea>
                                       <!-- error message untuk judul -->
											@error('KEGIATAN_YANG_TELAH_DILAKSANAKAN')
											<div class="alert alert-danger mt-2">
												{{ $message }}
											</div>
											@enderror
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Rencana Aksi dan Target Penyelesaian Rencana Aksi</label>
                                      <textarea name="RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI" type="text" class="form-control @error('RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI') is-invalid @enderror" id="validationTooltip01" placeholder="Input Rencana Aksi" required>{{ old('RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI') ?? $iku->RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI }}</textarea>
                                       <!-- error message untuk judul -->
											@error('RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI')
											<div class="alert alert-danger mt-2">
												{{ $message }}
											</div>
											@enderror
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Permasalahan</label>
                                      <textarea value="{{ old('PERMASALAHAN') ?? $iku->PERMASALAHAN }}" name="PERMASALAHAN" type="text" class="form-control @error('PERMASALAHAN') is-invalid @enderror" id="validationTooltip01" placeholder="Input Permasalahan" required>{{ old('PERMASALAHAN') ?? $iku->PERMASALAHAN }}</textarea>
                                       <!-- error message untuk judul -->
											@error('PERMASALAHAN')
											<div class="alert alert-danger mt-2">
												{{ $message }}
											</div>
											@enderror
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                  </div>
                                  <button class="btn btn-block btn-success mt-4" type="submit">UPDATE</button>
                                </form>
                                 <a href="{{route('home-admin.index')}}"><button class="btn btn-block btn-danger mt-2">KEMBALI</button></a>
                            </div>
                    </div>
@endsection
