@extends('_superadmin_.layouts.master')
@section('css')
 <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
@endsection

@section('content')
<!-- basic table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                             <div class="card-body text-center">
                          <h1>List Berita Romadan</h1>
                           @include('_superadmin_.layouts.session_notif')
						</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered nowrap" style="text-align: center">
                                        <thead >
                                            <tr>
                                                <th>KODE SS/IKU</th>
                                                <th>SASARAN STRATEGIS</th>
                                                <th>IKU</th>
                                                <th>TARGET AKTUAL</th>
                                                <th>REALISASI AKTUAL</th>
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
            dom: 'Bfrtip',
            buttons: [
                'excel', 'pdf',
            ],
            scrollY: "300px",
            scrollX: true,
            scrollCollapse: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('grafik.iku') }}",
            columns: [
            // { data:'DT_RowIndex', name:'DT_RowIndex', width:'10px',orderable:false,searchable:false},
            {data: 'KODE_SS',name:'KODE_SS'},
            {data: 'SS',name:'SS'},
            {data: 'IKU',name:'IKU'},
            {data: 'TARGET_AKTUAL',name:'TARGET_AKTUAL'},
            {data: 'CAPAIAN_AKTUAL',name:'CAPAIAN_AKTUAL'},
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
$('.buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
</script>


@endsection