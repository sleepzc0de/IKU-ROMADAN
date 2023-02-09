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
                                <form action="{{route('_superadmin_.update',$iku->id)}}" class="needs-validation" method="POST" novalidate>
                                   @csrf
                                    @method('PUT')
                                  <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                      <label for="validationTooltip01">Kode Sasaran Strategis / IKU</label>
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
                                      <label for="validationTooltip01">Nama Sasaran Strategis</label>
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
                                      <label for="validationTooltip01">Unit In Charge / UIC </label>
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
                                      <label for="validationTooltip01">Q1 TARGET</label>
                                      <input value="{{ old('QUARTAL_TARGET_1') ?? $iku->QUARTAL_TARGET_1 }}" step="any" name="QUARTAL_TARGET_1" type="number" class="form-control @error('QUARTAL_TARGET_1') is-invalid @enderror" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                       <!-- error message untuk judul -->
											@error('QUARTAL_TARGET_1')
											<div class="alert alert-danger mt-2">
												{{ $message }}
											</div>
											@enderror
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">Q1 CAPAIAN</label>
                                      <input value="{{ old('QUARTAL_CAPAIAN_1') ?? $iku->QUARTAL_CAPAIAN_1 }}" step="any" name="QUARTAL_CAPAIAN_1" type="number" class="form-control @error('QUARTAL_CAPAIAN_1') is-invalid @enderror" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <!-- error message untuk judul -->
											@error('QUARTAL_CAPAIAN_1')
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
                                      <label for="validationTooltip01">Q2 TARGET</label>
                                      <input value="{{ old('QUARTAL_TARGET_2') ?? $iku->QUARTAL_TARGET_2 }}" step="any" name="QUARTAL_TARGET_2" type="number" class="form-control @error('QUARTAL_TARGET_2') is-invalid @enderror" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                       <!-- error message untuk judul -->
											@error('QUARTAL_TARGET_2')
											<div class="alert alert-danger mt-2">
												{{ $message }}
											</div>
											@enderror
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">Q2 CAPAIAN</label>
                                      <input value="{{ old('QUARTAL_CAPAIAN_2') ?? $iku->QUARTAL_CAPAIAN_2 }}" step="any" name="QUARTAL_CAPAIAN_2" type="number" class="form-control @error('QUARTAL_CAPAIAN_2') is-invalid @enderror" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <!-- error message untuk judul -->
											@error('QUARTAL_CAPAIAN_2')
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
                                      <label for="validationTooltip01">Q3 TARGET</label>
                                      <input value="{{ old('QUARTAL_TARGET_3') ?? $iku->QUARTAL_TARGET_3 }}" step="any" name="QUARTAL_TARGET_3" type="number" class="form-control @error('QUARTAL_TARGET_3') is-invalid @enderror" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                       <!-- error message untuk judul -->
											@error('QUARTAL_TARGET_3')
											<div class="alert alert-danger mt-2">
												{{ $message }}
											</div>
											@enderror
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">Q3 CAPAIAN</label>
                                      <input value="{{ old('QUARTAL_CAPAIAN_3') ?? $iku->QUARTAL_CAPAIAN_3 }}" step="any" name="QUARTAL_CAPAIAN_3" type="number" class="form-control @error('QUARTAL_CAPAIAN_3') is-invalid @enderror" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <!-- error message untuk judul -->
											@error('QUARTAL_CAPAIAN_3')
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
                                      <label for="validationTooltip01">Q4 TARGET</label>
                                      <input value="{{ old('QUARTAL_TARGET_4') ?? $iku->QUARTAL_TARGET_4 }}" step="any" name="QUARTAL_TARGET_4" type="number" class="form-control @error('QUARTAL_TARGET_4') is-invalid @enderror" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                       <!-- error message untuk judul -->
											@error('QUARTAL_TARGET_4')
											<div class="alert alert-danger mt-2">
												{{ $message }}
											</div>
											@enderror
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">Q4 CAPAIAN</label>
                                      <input value="{{ old('QUARTAL_CAPAIAN_4') ?? $iku->QUARTAL_CAPAIAN_4 }}" step="any" name="QUARTAL_CAPAIAN_4" type="number" class="form-control @error('QUARTAL_CAPAIAN_4') is-invalid @enderror" id="validationTooltip01" 
                                      placeholder="0.0 (Koma Pake Titik)" required>
                                      <!-- error message untuk judul -->
											@error('QUARTAL_CAPAIAN_4')
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
                                      <label for="validationTooltip01">SEMESTERAN TARGET</label>
                                      <input value="{{ old('TARGET_SEMESTERAN') ?? $iku->TARGET_SEMESTERAN }}" step="any" name="TARGET_SEMESTERAN" type="number" class="form-control @error('TARGET_SEMESTERAN') is-invalid @enderror" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                      <!-- error message untuk judul -->
											@error('TARGET_SEMESTERAN')
											<div class="alert alert-danger mt-2">
												{{ $message }}
											</div>
											@enderror
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">SEMESTERAN CAPAIAN</label>
                                      <input value="{{ old('CAPAIAN_SEMESTERAN') ?? $iku->CAPAIAN_SEMESTERAN }}" step="any" name="CAPAIAN_SEMESTERAN" type="number" class="form-control @error('CAPAIAN_SEMESTERAN') is-invalid @enderror" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                       <!-- error message untuk judul -->
											@error('CAPAIAN_SEMESTERAN')
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
                                      <label for="validationTooltip01">TAHUNAN TARGET</label>
                                      <input value="{{ old('TARGET_TAHUNAN') ?? $iku->TARGET_TAHUNAN }}" step="any" name="TARGET_TAHUNAN" type="number" class="form-control @error('TARGET_TAHUNAN') is-invalid @enderror" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                       <!-- error message untuk judul -->
											@error('TARGET_TAHUNAN')
											<div class="alert alert-danger mt-2">
												{{ $message }}
											</div>
											@enderror
                                      <div class="valid-tooltip">
                                        Looks good!
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationTooltip01">TAHUNAN CAPAIAN</label>
                                      <input value="{{ old('CAPAIAN_TAHUNAN') ?? $iku->CAPAIAN_TAHUNAN }}" step="any" name="CAPAIAN_TAHUNAN" type="number" class="form-control @error('CAPAIAN_TAHUNAN') is-invalid @enderror" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                       <!-- error message untuk judul -->
											@error('CAPAIAN_TAHUNAN')
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
                                      <label for="validationTooltip01">AKTUAL TARGET</label>
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
                                      <label for="validationTooltip01">AKTUAL CAPAIAN</label>
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
                                  <a href="{{route('_superadmin_.index')}}"><button class="btn btn-block btn-danger mt-2">KEMBALI</button></a>
                                </form>
                            </div>
                    </div>
@endsection
