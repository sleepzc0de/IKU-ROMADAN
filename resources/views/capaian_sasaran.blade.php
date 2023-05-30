@extends('layouts.master')

@section('css')
 <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="{{asset('assets/extra-libs/prism/prism.css')}}">
 
@endsection


@section('content')

@if ($capaian->count() != 0 )

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body analytics-info mt-3">
                                <h4 class="card-title text-center"><b>CAPAIAN SASARAN STRATEGIS</b></h4>
                                <div id="stacked-bar" style="height:400px;"></div>
                            </div>
                        </div>
                    </div>
    
@else

 <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body analytics-info mt-3">
                                <h4 class="card-title text-center"><b>TIDAK ADA DATA YANG DITAMPILKAN</b></h4>
                            </div>
                        </div>
                    </div>
    
@endif

                    
@endsection


@section('script')
   <!-- This Page JS -->
    <script src="{{asset('assets/libs/echarts/dist/echarts-en.min.js')}}"></script>
     <!-- This Page JS -->
     
    <script src="{{asset('assets/extra-libs/prism/prism.js')}}"></script>
    <script>
        $(function() {
    "use strict";
    
    
    // ------------------------------
    // Stacked bar chart
    // ------------------------------
    // based on prepared DOM, initialize echarts instance
        var stackedChart = echarts.init(document.getElementById('stacked-bar'));

        var cs_nama = Object.keys(capaian_strategis);
        var cs_nilai = Object.values(capaian_strategis);
        var colorIndex = 0;

function generateStaticColor() {
  // Define a list of static colors
  var colors = ['#537188', '#CBB279','#E1D4BB','#EEEEEE'];

  // Retrieve the color at the current index
  var color = colors[colorIndex];

  // Increment the index for the next color
  colorIndex = (colorIndex + 1) % colors.length;

  return color;
}


//         function generateDynamicColor() {
//   // Generate random RGB values
//   var red = Math.floor(Math.random() * 256);
//   var green = Math.floor(Math.random() * 256);
//   var blue = Math.floor(Math.random() * 256);

//   // Create the color string in RGBA format
//   var color = 'rgba(' + red + ', ' + green + ', ' + blue + ', 0.7)';

//   return color;
// }

// function generateStaticColor() {
//   // Define a list of static colors
//   var colors = ['#FF0000', '#00FF00', '#0000FF', '#FFFF00', '#00FFFF'];

//   // Generate a random index to select a color from the list
//   var randomIndex = Math.floor(Math.random() * colors.length);

//   // Retrieve the selected color
//   var color = colors[randomIndex];

//   return color;
// }

        // console.log(cs_nama);

        // specify chart configuration item and data
        var option = {
                // Setup grid
                grid: {
                    x: 220,
                    x2: 40,
                    y: 45,
                    y2: 25
                },

                // Add tooltip
                tooltip : {
                    trigger: 'axis',
                    axisPointer : {            // Axis indicator axis trigger effective
                        type : 'shadow'        // The default is a straight line, optionally: 'line' | 'shadow'
                    }
                },

                // Add legend
                // legend: {
                //     data: ['Direct access',]
                // },

                // Add custom colors
                // color: ['#537188', '#CBB279','#E1D4BB','#EEEEEE'],

                // Horizontal axis
                xAxis: [{
                    type: 'value',
                }],

                // Vertical axis
                yAxis: [{
                type: 'category',
                data: cs_nama,
                axisLabel: {
                    interval: 0, // Menampilkan semua label sumbu y
                    formatter: function(value) {
                    // Mengatur jumlah karakter maksimum yang akan ditampilkan pada setiap label sumbu y
                    var maxLength = 30;
                    if (value.length > maxLength) {
                        return value.substring(0, maxLength) + '...'; // Menggantikan teks yang terlalu panjang dengan "..."
                    } else {
                        return value;
                    }
                    },
                }
                }],
                

                // Add series
               series: [{
                        name: 'Persentase IKU',
                        type: 'bar',
                        stack: 'Total',
                        itemStyle: {
                            normal: {
                            label: {
                                show: true,
                                position: 'inside',
                                textAlign: 'center',
                                 textStyle: {
                                    color: 'black' // Mengatur warna tulisan menjadi hitam
                                }
                            }
                            }
                        },
                        data: cs_nilai.map(function(value) {
                            return {
                            value: value,
                            itemStyle: {
                                normal: {
                                color: generateStaticColor() // Memanggil fungsi pembuatan warna dinamis
                                }
                            }
                            };
                        })
                        }],

            };
        // use configuration item and data specified to show chart
        stackedChart.setOption(option);
       
    
        //***************************
       // Stacked chart
       //***************************
        
        
    
    
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
                        stackedChart.resize();
                    }, 200);
                }
            });
});
    </script>

    <script>
        var capaian_strategis = @json($capaian_strategis);
    </script>
    @endsection