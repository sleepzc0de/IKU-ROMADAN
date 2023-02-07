@extends('layouts.master')

@section('css')
 <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
@endsection


@section('content')
<!-- basic table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered w-100" style="text-align: center">
                                        <thead >
                                            <tr>
                                                <th>KODE SS/IKU</th>
                                                <th>SASARAN STRATEGIS</th>
                                                <th>IKU</th>
                                                <th>TARGET Q3</th>
                                                <th>REALISASI Q3</th>
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
<script>
    /****************************************
 *       Basic Table                   *
 ****************************************/
$('#zero_config').DataTable({
            // scrollY: "300px",
            scrollCollapse: true,
            paging: false,
            searching:false,
            processing: true,
            serverSide: true,
            ajax: "{{ route('kinerja_iku_q3') }}",
            columns: [
            // { data:'DT_RowIndex', name:'DT_RowIndex', width:'10px',orderable:false,searchable:false},
            {data: 'KODE_SS',name:'KODE_SS'},
            {data: 'SS',name:'SS'},
            {data: 'IKU',name:'IKU'},
            {data: 'QUARTAL_TARGET_3',name:'QUARTAL_TARGET_3'},
            {data: 'QUARTAL_CAPAIAN_3',name:'QUARTAL_CAPAIAN_3'},
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
</script>
@endsection
