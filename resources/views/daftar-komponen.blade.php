@extends('layouts.master')
@section('css')
 <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
@endsection

@section('content')
<!-- basic table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body text-center">
                            <h1>Daftar Komponen</h1>
                            </div>
                            <div class="card-body">
                                <h6>Kode IKU :  {{$data->KODE_SS ?? 'KODE IKU KOSONG'}}</h6>
                                <br>
                                <h6>Nama IKU :  {{$data->IKU ?? 'NAMA IKU KOSONG'}}</h6>
                                <div class="table-responsive">
                                        <table id="daftar_komponen" class="table table-striped table-bordered w-100" style="text-align: center">
                                                <thead >
                                                        <tr>
                                                            <th>KOMPONEN PENGUKURAN</th>
                                                            <th>UIC</th>
                                                            <th>AKSI</th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                </tbody>
                                        </table>
                                </div>
                            </div>
                            <a href="{{route('grafik.iku')}}"><button class="btn btn-block btn-secondary mt-2"><i class="mdi mdi-10px mdi-arrow-left-bold mr-1"></i>KEMBALI</button></a>
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
$('#daftar_komponen').DataTable({
            dom: 'frtip',
            buttons: [
                {
                text: '<i class="mdi mdi-10px mdi-arrow-left-bold"></i> Kembali',
                className: 'btn btn-outline-warning btn-rounded waves-effect waves-light',
                action: function(e, dt, button, config) {
                    window.location = "{{route('home-admin.index')}}";
                }
            },
            ],
            scrollY: "300px",
            scrollX: true,
            scrollCollapse: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('daftar-komponen-fe',$current) }}",
            columns: [
            // { data:'DT_RowIndex', name:'DT_RowIndex', width:'10px',orderable:false,searchable:false},
            {data: 'KOMPONEN_PENGUKURAN_KOMPONEN'},
            {data: 'UIC_KOMPONEN'},
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