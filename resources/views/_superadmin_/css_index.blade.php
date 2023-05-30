@extends('_superadmin_.layouts.master')
@section('css')
<link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
@endsection

@section('content')

 {{-- <h4 class="card-title text-center mb-3">Tambah Capaian Sasaran Strategis</h4>
                                 @include('_superadmin_.layouts.session_notif')

                                <div class="button-box">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Capaian Sasaran Strategis</button>
                                </div>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLabel1">Capaian Sasaran Strategis</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('capaian-sasaran-strategis.store')}}" class="needs-validation" method="POST">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">NAMA SASARAN STRATEGIS:</label>
                                                        <textarea name="NAMA_CAPAIAN" type="text" class="form-control" id="validationTooltip01" placeholder="NAMA SASARAN STRATEGIS" required></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="message-text" class="control-label">NILAI SASARAN STRATEGIS:</label>
                                                         <input step="any" name="NILAI_CAPAIAN" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                                    </div>

                                                     <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                                </form>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                <!-- /.modal -->
 --}}
<!-- basic table -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            
                            <div class="card-body">
                                <h1 class="text-center">Capaian Sasaran Strategis</h1>
                                  @include('_superadmin_.layouts.session_notif')
                                 <div class="button-box">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Tambah Capaian</button>
                                </div>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLabel1">Capaian Sasaran Strategis</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('capaian-sasaran-strategis.store')}}" class="needs-validation" method="POST">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">NAMA SASARAN STRATEGIS:</label>
                                                        <textarea name="NAMA_CAPAIAN" type="text" class="form-control" id="validationTooltip01" placeholder="NAMA SASARAN STRATEGIS" required></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="message-text" class="control-label">NILAI SASARAN STRATEGIS:</label>
                                                         <input step="any" name="NILAI_CAPAIAN" type="number" class="form-control" id="validationTooltip01" placeholder="0.0 (Koma Pake Titik)" required>
                                                    </div>

                                                     <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                                </form>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                            <div class="card-body">
                                <div class="table-responsive w-100">
                                    <table id="zero_config" class="table table-striped table-bordered w-100" style="text-align: center">
                                        <thead >
                                            <tr>
                                                <th>NAMA SASARAN STRATEGIS</th>
                                                <th>NILAI SASARAN STRATEGIS</th>
                                                <th>AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    
                </div>

 
@endsection

@section('script')


<script src="{{asset('assets/extra-libs/DataTables/datatables.min.js')}}"></script>
<!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>

<script>
    /****************************************
 *       Basic Table                   *
 ****************************************/
$('#zero_config').DataTable({
            dom: 'frtip',
            buttons: [
                {
                text: '<i class="mdi mdi-10px mdi-file-excel-box"></i> Tambah IKU',
                className: 'btn btn-outline-warning btn-rounded waves-effect waves-light',
                action: function(e, dt, button, config) {
                    window.location = "{{route('home-admin.create')}}";
                }
            },
            ],
            scrollY: "300px",
            scrollX: true,
            scrollCollapse: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('capaian-sasaran-strategis.index') }}",
            columns: [
            // { data:'DT_RowIndex', name:'DT_RowIndex', width:'10px',orderable:false,searchable:false},
            {data: 'NAMA_CAPAIAN',name:'NAMA_CAPAIAN'},
            {data: 'NILAI_CAPAIAN',name:'NILAI_CAPAIAN'},
            {data: 'opsi', name:'opsi', orderable:false, searchable:false},
            ],
            // language: {
            // lengthMenu: "Display _MENU_ records per page",
            // zeroRecords: "Nothing found - sorry",
            // info: "Showing page _PAGE_ of _PAGES_",
            // infoEmpty: "No records available",
            // infoFiltered: "(filtered from _MAX_ total records)",
            // search:"Cari Data"
            //  }
});
// $('.buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
</script>


@endsection