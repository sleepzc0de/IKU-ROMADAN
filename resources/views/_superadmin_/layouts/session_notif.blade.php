 @if($message = Session::get('success'))
                           <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                            <h3 class="text-success"><i class="fa fa-check-circle"></i> Berhasil</h3> {{$message}}
                                        </div>
                            @endif

                             @if($message = Session::get('failed'))
                            <div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                            <h3 class="text-danger"><i class="fa fa-check-circle"></i> Gagal</h3> {{$message}}
                                        </div>
                            @endif