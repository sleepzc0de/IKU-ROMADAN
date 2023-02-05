@extends('layouts.master')

@section('css')
 <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
@endsection


@section('content')
<div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h4 class="card-title text-center">Progres Capaian IKU <br> 2023</h4>
                                <div id="basic-bar" style="height:400px;"></div>
                            </div>
                        </div>
                    </div>

                 
</div>
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
                                                <th>TARGET Q1</th>
                                                <th>REALISASI Q1</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                        {{-- <tfoot>
                                            <tr>
                                                <th>KODE SS/IKU</th>
                                                <th>SS</th>
                                                <th>IKU</th>
                                                <th>TARGET Q1</th>
                                                <th>REALISASI Q1</th>
                                            </tr>
                                        </tfoot> --}}
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
        var targets = Object.keys(target);
        var capaians = Object.keys(capaian);
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
                },
                toolbox: {
                    show : true,
                    feature : {

                        // magicType : {show: true, type: ['line', 'bar']},
                        restore : {show: true},
                        saveAsImage : {show: true}
                    }
                },
                color: ["#ff9229", "#76f74f"],
                calculable : true,
                xAxis : [
                    {
                        type : 'category',
                        data : labels
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
            // scrollY: "300px",
            scrollCollapse: true,
            paging: false,
            searching:false,
            processing: true,
            serverSide: true,
            ajax: "{{ route('grafik.iku') }}",
            columns: [
            // { data:'DT_RowIndex', name:'DT_RowIndex', width:'10px',orderable:false,searchable:false},
            {data: 'KODE_SS',name:'KODE_SS'},
            {data: 'SS',name:'SS'},
            {data: 'IKU',name:'IKU'},
            {data: 'QUARTAL_TARGET_1',name:'QUARTAL_TARGET_1'},
            {data: 'QUARTAL_CAPAIAN_1',name:'QUARTAL_CAPAIAN_1'},
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
