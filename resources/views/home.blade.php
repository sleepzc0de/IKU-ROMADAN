@extends('layouts.master')

@section('css')
 <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="{{asset('assets/extra-libs/prism/prism.css')}}">
 
@endsection


@section('content')
{{-- <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h4 class="card-title text-center">Progres Capaian IKU <br> 2023</h4>
                                <div id="basic-bar" class="w-100" style="height:400px;"></div>
                            </div>
                        </div>
                    </div>

                 
</div> --}}
<!-- basic table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-right mr-5"> <!-- Example single danger button -->
                                        <div class="btn-group mr-5">
                                            <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                2023
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{route('grafik.iku')}}">Tahun 2023</a>
                                            </div>
                                        </div>
                                    </div>
                                <div class="text-center"><h4><b>DAFTAR INDIKATOR KINERJA UTAMA (IKU)<br>
                                    BIRO MANAJEMEN BMN DAN PENGADAAN</b></h4></div>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered" style="text-align: center">
                                        <thead >
                                            <tr>
                                                <th>KODE SS/IKU</th>
                                                <th>SASARAN STRATEGIS</th>
                                                <th>IKU</th>
                                                <th>TARGET AKTUAL</th>
                                                <th>REALISASI AKTUAL</th>
                                                <th>DETAIL</th>
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
   <!-- This Page JS -->
    <script src="{{asset('assets/libs/echarts/dist/echarts-en.min.js')}}"></script>
     <!-- This Page JS -->
     
    <script src="{{asset('assets/extra-libs/prism/prism.js')}}"></script>
    {{-- <script src="{{asset('dist/js/pages/echarts/bar/bar.js')}}"></script> --}}

    <script>
        $(function() {
    "use strict";
    // ------------------------------
    // Basic bar chart
    // ------------------------------
    // based on prepared DOM, initialize echarts instance
        var myChart = echarts.init(document.getElementById('basic-bar'));
        
        var labels = Object.keys(label_iku);
        var targets = Object.values(target);
        var capaians = Object.values(capaian);
        // console.log(labels);

        // specify chart configuration item and data
        var option = {
                // Setup grid
                grid: {
                    left: '1%',
                    right: '2%',
                    bottom: '3%',
                    containLabel: true
                },

                // Add Tooltip
                tooltip : {
                    trigger: 'axis'
                },

                legend: {
                    data:['Target','Capaian'],
                    bottom: -5
                },
                toolbox: {
                    show : true,
                    feature : {

                        // magicType : {show: true, type: ['line', 'bar']},
                        restore : {show: true},
                        saveAsImage : {show: true}
                    }
                },
                color: ["#d6d302", "#009926"],
                calculable : true,
                xAxis : [
                    {
                        type : 'category',
                        data : labels,
                        // axisLabel: {
                        //     rotate: 90,
                        //     }
                        
                    }
                ],
                yAxis : [
                    {
                        type : 'value'
                    }
                ],
                series : [
                    {
                        name:'Target',
                        type:'bar',
                        data:targets,
                        // markPoint : {
                        //     data : [
                        //         {type : 'max', name: 'Max'},
                        //         {type : 'min', name: 'Min'}
                        //     ]
                        // },
                        // markLine : {
                        //     data : [
                        //         {type : 'average', name: 'Average'}
                        //     ]
                        // }
                    },
                    {
                        name:'Capaian',
                        type:'bar',
                        data:capaians,
                        // markPoint : {
                        //     data : [
                        //         {name : 'The highest year', value : 182.2, xAxis: 7, yAxis: 183, symbolSize:18},
                        //         {name : 'Year minimum', value : 2.3, xAxis: 11, yAxis: 3}
                        //     ]
                        // },
                        // markLine : {
                        //     data : [
                        //         {type : 'average', name : 'Average'}
                        //     ]
                        // }
                    }
                ]
            };
        // use configuration item and data specified to show chart
        myChart.setOption(option);
    
    
    
       //------------------------------------------------------
       // Resize chart on menu width change and window resize
       //------------------------------------------------------
        $(function () {

                // Resize chart on menu width change and window resize
                $(window).on('resize', resize);
                $(".sidebartoggler").on('click', resize);

                // Resize function
                function resize() {
                    setTimeout(function() {

                        // Resize chart
                        myChart.resize();
                    }, 200);
                }
            });
});
    </script>

<script>
        var label_iku = @json($label_iku);
        var target = @json($target);
        var capaian = @json($capaian);
</script>
<script src="{{asset('assets/extra-libs/DataTables/datatables.min.js')}}"></script>

<script>
    /****************************************
 *       Basic Table                   *
 ****************************************/
$('#zero_config').DataTable({
            bInfo : false,
            scrollY: "300px",
            scrollCollapse: true,
            paging: false,
            searching:false,
            order: [[0, 'asc']],
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
             {data: 'opsi',name:'opsi',orderable:false,searchable:false},
            
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
