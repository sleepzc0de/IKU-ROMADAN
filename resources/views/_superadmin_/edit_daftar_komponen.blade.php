@extends('_superadmin_.layouts.master')

@section('content')
 <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-center mb-3">Edit Daftar Komponen Iku Multikomponen</h4>
                                   @include('_superadmin_.layouts.session_notif')
                                <form action="{{route('daftar-komponen.update',$data->id)}}" class="needs-validation" method="POST" novalidate>
                                   @csrf
                                    @method('PUT')
                                  <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Kode SS/IKU</label>
                                      <input value="{{ old('KODE_SS_KOMPONEN') ?? $data->KODE_SS_KOMPONEN }}" name="KODE_SS_KOMPONEN" type="text" class="form-control @error('KODE_SS_KOMPONEN') is-invalid @enderror" id="validationTooltip01" placeholder="First name" required readonly>
                                      <!-- error message untuk judul -->
                                        @error('KODE_SS_KOMPONEN')
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
                                      <input value="{{ old('SS_KOMPONEN') ?? $data->SS_KOMPONEN }}" name="SS_KOMPONEN" type="text" class="form-control @error('SS_KOMPONEN') is-invalid @enderror" id="validationTooltip01" placeholder="First name" required>
                                      <!-- error message untuk judul -->
											@error('SS_KOMPONEN')
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
                                      <input value="{{ old('IKU_KOMPONEN') ?? $data->IKU_KOMPONEN }}" name="IKU_KOMPONEN" type="text" class="form-control @error('IKU_KOMPONEN') is-invalid @enderror" id="validationTooltip01" placeholder="First name" required>
                                       <!-- error message untuk judul -->
											@error('IKU_KOMPONEN')
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
                                      <textarea  name="DEFINISI_IKU_KOMPONEN" type="text" class="form-control @error('DEFINISI_IKU_KOMPONEN') is-invalid @enderror" id="validationTooltip01" placeholder="First name" required>{{ old('DEFINISI_IKU_KOMPONEN') ?? $data->DEFINISI_IKU_KOMPONEN }}</textarea>
                                        <!-- error message untuk judul -->
											@error('DEFINISI_IKU_KOMPONEN')
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
                                      <textarea  name="FORMULA_IKU_KOMPONEN" type="text" class="form-control @error('FORMULA_IKU_KOMPONEN') is-invalid @enderror" id="validationTooltip01" placeholder="First name" required>{{ old('FORMULA_IKU_KOMPONEN') ?? $data->FORMULA_IKU_KOMPONEN }}</textarea>
                                        <!-- error message untuk judul -->
											@error('FORMULA_IKU_KOMPONEN')
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
                                      <textarea  name="KOMPONEN_PENGUKURAN_KOMPONEN" type="text" class="form-control @error('KOMPONEN_PENGUKURAN_KOMPONEN') is-invalid @enderror" id="validationTooltip01" placeholder="First name" required>{{ old('KOMPONEN_PENGUKURAN_KOMPONEN') ?? $data->KOMPONEN_PENGUKURAN_KOMPONEN }}</textarea>
                                        <!-- error message untuk judul -->
											@error('KOMPONEN_PENGUKURAN_KOMPONEN')
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
                                      <textarea  name="PENJELASAN_IKU_KOMPONEN_KOMPONEN" type="text" class="form-control @error('PENJELASAN_IKU_KOMPONEN_KOMPONEN') is-invalid @enderror" id="validationTooltip01" placeholder="First name" required>{{ old('PENJELASAN_IKU_KOMPONEN_KOMPONEN') ?? $data->PENJELASAN_IKU_KOMPONEN_KOMPONEN }}</textarea>
                                      <!-- error message untuk judul -->
											@error('PENJELASAN_IKU_KOMPONEN_KOMPONEN')
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
                                      <input value="{{ old('UIC_KOMPONEN') ?? $data->UIC_KOMPONEN }}" name="UIC_KOMPONEN" type="text" class="form-control @error('UIC_KOMPONEN') is-invalid @enderror" id="validationTooltip01" placeholder="First name" required>
                                      <!-- error message untuk judul -->
											@error('UIC_KOMPONEN')
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
                                      <input value="{{ old('TARGET_Q1_KOMPONEN') ?? $data->TARGET_Q1_KOMPONEN }}" step="any" name="TARGET_Q1_KOMPONEN" type="number" class="form-control @error('TARGET_Q1_KOMPONEN') is-invalid @enderror" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                       <!-- error message untuk judul -->
											@error('TARGET_Q1_KOMPONEN')
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
                                      <input value="{{ old('CAPAIAN_Q1_KOMPONEN') ?? $data->CAPAIAN_Q1_KOMPONEN }}" step="any" name="CAPAIAN_Q1_KOMPONEN" type="number" class="form-control @error('CAPAIAN_Q1_KOMPONEN') is-invalid @enderror" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <!-- error message untuk judul -->
											@error('CAPAIAN_Q1_KOMPONEN')
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
                                      <input value="{{ old('TARGET_Q2_KOMPONEN') ?? $data->TARGET_Q2_KOMPONEN }}" step="any" name="TARGET_Q2_KOMPONEN" type="number" class="form-control @error('TARGET_Q2_KOMPONEN') is-invalid @enderror" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                       <!-- error message untuk judul -->
											@error('TARGET_Q2_KOMPONEN')
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
                                      <input value="{{ old('CAPAIAN_Q2_KOMPONEN') ?? $data->CAPAIAN_Q2_KOMPONEN }}" step="any" name="CAPAIAN_Q2_KOMPONEN" type="number" class="form-control @error('CAPAIAN_Q2_KOMPONEN') is-invalid @enderror" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <!-- error message untuk judul -->
											@error('CAPAIAN_Q2_KOMPONEN')
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
                                      <input value="{{ old('TARGET_Q3_KOMPONEN') ?? $data->TARGET_Q3_KOMPONEN }}" step="any" name="TARGET_Q3_KOMPONEN" type="number" class="form-control @error('TARGET_Q3_KOMPONEN') is-invalid @enderror" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                       <!-- error message untuk judul -->
											@error('TARGET_Q3_KOMPONEN')
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
                                      <input value="{{ old('CAPAIAN_Q3_KOMPONEN') ?? $data->CAPAIAN_Q3_KOMPONEN }}" step="any" name="CAPAIAN_Q3_KOMPONEN" type="number" class="form-control @error('CAPAIAN_Q3_KOMPONEN') is-invalid @enderror" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <!-- error message untuk judul -->
											@error('CAPAIAN_Q3_KOMPONEN')
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
                                      <input value="{{ old('TARGET_Q4_KOMPONEN') ?? $data->TARGET_Q4_KOMPONEN }}" step="any" name="TARGET_Q4_KOMPONEN" type="number" class="form-control @error('TARGET_Q4_KOMPONEN') is-invalid @enderror" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                       <!-- error message untuk judul -->
											@error('TARGET_Q4_KOMPONEN')
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
                                      <input value="{{ old('CAPAIAN_Q4_KOMPONEN') ?? $data->CAPAIAN_Q4_KOMPONEN }}" step="any" name="CAPAIAN_Q4_KOMPONEN" type="number" class="form-control @error('CAPAIAN_Q4_KOMPONEN') is-invalid @enderror" id="validationTooltip01" 
                                      placeholder="0.0 (Koma Pake Titik)" required>
                                      <!-- error message untuk judul -->
											@error('CAPAIAN_Q4_KOMPONEN')
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
                                      <input value="{{ old('TARGET_AKTUAL_KOMPONEN') ?? $data->TARGET_AKTUAL_KOMPONEN }}" step="any" name="TARGET_AKTUAL_KOMPONEN" type="number" class="form-control @error('TARGET_AKTUAL_KOMPONEN') is-invalid @enderror" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                       <!-- error message untuk judul -->
											@error('TARGET_AKTUAL_KOMPONEN')
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
                                      <input value="{{ old('CAPAIAN_AKTUAL_KOMPONEN') ?? $data->CAPAIAN_AKTUAL_KOMPONEN }}" step="any" name="CAPAIAN_AKTUAL_KOMPONEN" type="number" class="form-control @error('CAPAIAN_AKTUAL_KOMPONEN') is-invalid @enderror" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                       <!-- error message untuk judul -->
											@error('CAPAIAN_AKTUAL_KOMPONEN')
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
                                      <textarea  name="PENJELASAN_CAPAIAN_KOMPONEN" type="text" class="form-control @error('PENJELASAN_CAPAIAN_KOMPONEN') is-invalid @enderror" id="validationTooltip01" placeholder="Input Penjelasan Capaian" required>{{ old('PENJELASAN_CAPAIAN_KOMPONEN') ?? $data->PENJELASAN_CAPAIAN_KOMPONEN }}</textarea>
                                      <!-- error message untuk judul -->
											@error('PENJELASAN_CAPAIAN_KOMPONEN')
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
                                      <textarea name="KEGIATAN_YANG_TELAH_DILAKSANAKAN_KOMPONEN" type="text" class="form-control @error('KEGIATAN_YANG_TELAH_DILAKSANAKAN_KOMPONEN') is-invalid @enderror" id="validationTooltip01" placeholder="Input Kegiatan yang sudah dilaksanakan" required>{{ old('KEGIATAN_YANG_TELAH_DILAKSANAKAN_KOMPONEN') ?? $data->KEGIATAN_YANG_TELAH_DILAKSANAKAN_KOMPONEN }}</textarea>
                                       <!-- error message untuk judul -->
											@error('KEGIATAN_YANG_TELAH_DILAKSANAKAN_KOMPONEN')
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
                                      <textarea name="RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI_KOMPONEN" type="text" class="form-control @error('RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI_KOMPONEN') is-invalid @enderror" id="validationTooltip01" placeholder="Input Rencana Aksi" required>{{ old('RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI_KOMPONEN') ?? $data->RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI_KOMPONEN }}</textarea>
                                       <!-- error message untuk judul -->
											@error('RENCANA_AKSI_DAN_TARGET_PENYELESAIAN_RENCANA_AKSI_KOMPONEN')
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
                                      <textarea value="{{ old('PERMASALAHAN_KOMPONEN') ?? $data->PERMASALAHAN_KOMPONEN }}" name="PERMASALAHAN_KOMPONEN" type="text" class="form-control @error('PERMASALAHAN_KOMPONEN') is-invalid @enderror" id="validationTooltip01" placeholder="Input Permasalahan_KOMPONEN" required>{{ old('PERMASALAHAN_KOMPONEN') ?? $data->PERMASALAHAN_KOMPONEN }}</textarea>
                                       <!-- error message untuk judul -->
											@error('PERMASALAHAN_KOMPONEN')
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
