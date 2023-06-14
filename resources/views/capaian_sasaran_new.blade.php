@extends('layouts.master')

@section('css')
 <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="{{asset('assets/extra-libs/prism/prism.css')}}">
 
@endsection


@section('content')
<div class="card-body text-center">
                            <h1>Capaian Strategis ROMADAN</h1>
                            </div>
<div class="row">
    
@forelse ($new_all as $id => $item)


<div class="col-lg-6">
                        <div class="card">
                            <div class="card-body analytics-info">
                                {{-- <h4 class="card-title text-center mb-3">{{$item->SS}}</h4> --}}
                                <div id="basic-bar-{{$id + 1}}" style="height:400px;"></div>
                            </div>
                        </div>
</div>

@empty
    KOSONG
@endforelse
</div>

    


{{-- <div class="row">
<div class="col-lg-6">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h4 class="card-title text-center mb-5">{{$judul1}}</h4>
                                <div id="basic-bar" style="height:400px;"></div>
                            </div>
                        </div>
</div>

<div class="col-lg-6">
                        <div class="card">
                            <div class="card-body analytics-info">
                                <h4 class="card-title text-center mb-5">{{$judul2}}</h4>
                                <div id="basic-bar2" style="height:400px;"></div>
                            </div>
                        </div>
</div>
</div> --}}



                    
@endsection


@section('script')
   <!-- This Page JS -->
    <script src="{{asset('assets/libs/echarts/dist/echarts-en.min.js')}}"></script>
     <!-- This Page JS -->
   <script>
    $(function() {
    "use strict";
    // ------------------------------
    // Basic bar chart
    // ------------------------------
    // based on prepared DOM, initialize echarts instance
        var myChart = echarts.init(document.getElementById('basic-bar-1'));
        var myChart2 = echarts.init(document.getElementById('basic-bar-2'));
        var myChart3 = echarts.init(document.getElementById('basic-bar-3'));
        var myChart4 = echarts.init(document.getElementById('basic-bar-4'));
        var myChart5 = echarts.init(document.getElementById('basic-bar-5'));
        var myChart6 = echarts.init(document.getElementById('basic-bar-6'));
        var myChart7 = echarts.init(document.getElementById('basic-bar-7'));
        var myChart8 = echarts.init(document.getElementById('basic-bar-8'));
        var myChart9 = echarts.init(document.getElementById('basic-bar-9'));

        var SSS1 = Object.keys(SS1);
        var targets1 = Object.values(target1);
        var capaians1 = Object.values(capaian1);

        var SSS2 = Object.keys(SS2);
        var targets2 = Object.values(target2);
        var capaians2 = Object.values(capaian2);

        // console.log(targets1);

        var SSS3 = Object.keys(SS3);
        var targets3 = Object.values(target3);
        var capaians3 = Object.values(capaian3);

        var SSS4 = Object.keys(SS4);
        var targets4 = Object.values(target4);
        var capaians4 = Object.values(capaian4);

        var SSS5 = Object.keys(SS5);
        var targets5 = Object.values(target5);
        var capaians5 = Object.values(capaian5);

        var SSS6 = Object.keys(SS6);
        var targets6 = Object.values(target6);
        var capaians6 = Object.values(capaian6);

        var SSS7 = Object.keys(SS7);
        var targets7 = Object.values(target7);
        var capaians7 = Object.values(capaian7);

        var SSS8 = Object.keys(SS8);
        var targets8 = Object.values(target8);
        var capaians8 = Object.values(capaian8);

        var SSS9 = Object.keys(SS9);
        var targets9 = Object.values(target9);
        var capaians9 = Object.values(capaian9);
        

        
       

        

        // specify chart configuration item and data
             var option1 = {
                // Setup grid
                grid: {
                    left: '1%',
                    right: '2%',
                    bottom: '12%',
                    containLabel: true
                },

                // Add Tooltip
                tooltip : {
                    trigger: 'axis'
                },

                legend: {
                    data:['Target','Capaian'],
                    bottom: '0%',
                },
                color: ["#FFD700", "#23E06F"],
                calculable : true,
                xAxis : [
                    {
                        type : 'category',
                        data : SSS1,
                        axisLabel: {
      interval: 0, // Menampilkan semua label
      rotate: -30 // Memutar label sebesar -45 derajat
    }
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
                        data:targets1,
                    },
                    {
                        name:'Capaian',
                        type:'bar',
                        data:capaians1,
                    }   
                ],
                 // Add title
    title: {
        text: 'Pengelolaan Keuangan dan BMN yang Kredibel dan Akuntabel',
        // subtext: 'Grafik ini menampilkan target dan capaian',
        left: 'center',
        top: '0%', // Atur posisi judul di atas grafik dengan jarak ke atas
        textStyle: {
            fontSize: 16 // Atur ukuran font judul
        }
    },
            };
             var option2 = {
                // Setup grid
                grid: {
                    left: '1%',
                    right: '2%',
                    bottom: '12%',
                    containLabel: true
                },

                // Add Tooltip
                tooltip : {
                    trigger: 'axis'
                },

                legend: {
                    data:['Target','Capaian'],
                    bottom: '0%',
                },
                // toolbox: {
                //     show : true,
                //     feature : {

                //         magicType : {show: true, type: ['line', 'bar']},
                //         restore : {show: true},
                //         saveAsImage : {show: true}
                //     }
                // },
                color: ["#FFD700", "#23E06F"],
                calculable : true,
                xAxis : [
                    {
                        type : 'category',
                        data : SSS2,
                        axisLabel: {
      interval: 0, // Menampilkan semua label
      rotate: -30 // Memutar label sebesar -45 derajat
    }
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
                        data:targets2,
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
                        data:capaians2,
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
                ],
                title: {
        text: 'Pelayanan Publik yang Prima',
        // subtext: 'Grafik ini menampilkan target dan capaian',
        left: 'center',
        top: '0%', // Atur posisi judul di atas grafik dengan jarak ke atas
        textStyle: {
            fontSize: 16 // Atur ukuran font judul
        }
    },
            };
            var option3 = {
                // Setup grid
                grid: {
                    left: '1%',
                    right: '2%',
                    bottom: '12%',
                    containLabel: true
                },

                // Add Tooltip
                tooltip : {
                    trigger: 'axis'
                },

                legend: {
                    data:['Target','Capaian'],
                    bottom: '0%',

                },
                // toolbox: {
                //     show : true,
                //     feature : {

                //         magicType : {show: true, type: ['line', 'bar']},
                //         restore : {show: true},
                //         saveAsImage : {show: true}
                //     }
                // },
                color: ["#FFD700", "#23E06F"],
                calculable : true,
                xAxis : [
                    {
                        type : 'category',
                        data : SSS3,
                        axisLabel: {
      interval: 0, // Menampilkan semua label
      rotate: -30 // Memutar label sebesar -45 derajat
    }
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
                        data:targets3,
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
                        data:capaians3,
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
                ],
                title: {
        text: 'Penyediaan Data BMN dan Pengadaan Kemenkeu yang \n Akurat, Akuntabel, dan Berdaya Guna',
        // subtext: 'Grafik ini menampilkan target dan capaian',
        left: 'center',
        top: '0%', // Atur posisi judul di atas grafik dengan jarak ke atas
        textStyle: {
            fontSize: 16, // Atur ukuran font judul
        }
    },
            };
            var option4 = {
                // Setup grid
                grid: {
                    left: '1%',
                    right: '2%',
                    bottom: '12%',
                    containLabel: true
                },

                // Add Tooltip
                tooltip : {
                    trigger: 'axis'
                },

                legend: {
                    data:['Target','Capaian'],
                    bottom: '0%',
                },
                // toolbox: {
                //     show : true,
                //     feature : {

                //         magicType : {show: true, type: ['line', 'bar']},
                //         restore : {show: true},
                //         saveAsImage : {show: true}
                //     }
                // },
                color: ["#FFD700", "#23E06F"],
                calculable : true,
                xAxis : [
                    {
                        type : 'category',
                        data : SSS4,
                        axisLabel: {
      interval: 0, // Menampilkan semua label
      rotate: -30 // Memutar label sebesar -45 derajat
    }
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
                        data:targets4,
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
                        data:capaians4,
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
                ],
                title: {
        text: 'Penguatan Manajemen Pengelolaan BMN dan Pengadaan \n Kementerian Keuangan',
        // subtext: 'Grafik ini menampilkan target dan capaian',
        left: 'center',
        top: '0%', // Atur posisi judul di atas grafik dengan jarak ke atas
        textStyle: {
            fontSize: 16 // Atur ukuran font judul
        }
    },
            };
            var option5 = {
                // Setup grid
                grid: {
                    left: '1%',
                    right: '2%',
                    bottom: '12%',
                    containLabel: true
                },

                // Add Tooltip
                tooltip : {
                    trigger: 'axis'
                },

                legend: {
                    data:['Target','Capaian'],
                    bottom:'0%'
                },
                // toolbox: {
                //     show : true,
                //     feature : {

                //         magicType : {show: true, type: ['line', 'bar']},
                //         restore : {show: true},
                //         saveAsImage : {show: true}
                //     }
                // },
                color: ["#FFD700", "#23E06F"],
                calculable : true,
                xAxis : [
                    {
                        type : 'category',
                        data : SSS5,
                        axisLabel: {
      interval: 0, // Menampilkan semua label
      rotate: -30 // Memutar label sebesar -45 derajat
    }
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
                        data:targets5,
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
                        data:capaians5,
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
                ],
                title: {
        text: 'Pengelolaan BMN dan Pengadaan yang Memberi Nilai Tambah',
        // subtext: 'Grafik ini menampilkan target dan capaian',
        left: 'center',
        top: '0%', // Atur posisi judul di atas grafik dengan jarak ke atas
        textStyle: {
            fontSize: 16 // Atur ukuran font judul
        }
    },
            };
            var option6 = {
                // Setup grid
                grid: {
                    left: '1%',
                    right: '2%',
                    bottom: '12%',
                    containLabel: true
                },

                // Add Tooltip
                tooltip : {
                    trigger: 'axis'
                },

                legend: {
                    data:['Target','Capaian'],
                    bottom:'0%'
                },
                // toolbox: {
                //     show : true,
                //     feature : {

                //         magicType : {show: true, type: ['line', 'bar']},
                //         restore : {show: true},
                //         saveAsImage : {show: true}
                //     }
                // },
                color: ["#FFD700", "#23E06F"],
                calculable : true,
                xAxis : [
                    {
                        type : 'category',
                        data : SSS6,
                        axisLabel: {
      interval: 0, // Menampilkan semua label
      rotate: -30 // Memutar label sebesar -45 derajat
    }
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
                        data:targets6,
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
                        data:capaians6,
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
                ],
                title: {
        text: 'Organisasi dan SDM yang optimal',
        // subtext: 'Grafik ini menampilkan target dan capaian',
        left: 'center',
        top: '0%', // Atur posisi judul di atas grafik dengan jarak ke atas
        textStyle: {
            fontSize: 16 // Atur ukuran font judul
        }
    },
            };
            var option7 = {
                // Setup grid
                grid: {
                    left: '1%',
                    right: '2%',
                    bottom: '12%',
                    containLabel: true
                },

                // Add Tooltip
                tooltip : {
                    trigger: 'axis'
                },

                legend: {
                    data:['Target','Capaian'],
                    bottom:'0%',
                },
                // toolbox: {
                //     show : true,
                //     feature : {

                //         magicType : {show: true, type: ['line', 'bar']},
                //         restore : {show: true},
                //         saveAsImage : {show: true}
                //     }
                // },
                color: ["#FFD700", "#23E06F"],
                calculable : true,
                xAxis : [
                    {
                        type : 'category',
                        data : SSS7,
                        axisLabel: {
      interval: 0, // Menampilkan semua label
      rotate: -30 // Memutar label sebesar -45 derajat
    }
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
                        data:targets7,
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
                        data:capaians7,
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
                ],
                title: {
        text: 'Pengelolaan Keuangan yang Kredibel dan Akuntabel',
        // subtext: 'Grafik ini menampilkan target dan capaian',
        left: 'center',
        top: '0%', // Atur posisi judul di atas grafik dengan jarak ke atas
        textStyle: {
            fontSize: 16 // Atur ukuran font judul
        }
    },
            };
            var option8 = {
                // Setup grid
                grid: {
                    left: '1%',
                    right: '2%',
                    bottom: '12%',
                    containLabel: true
                },

                // Add Tooltip
                tooltip : {
                    trigger: 'axis'
                },

                legend: {
                    data:['Target','Capaian'],
                    bottom: '0%',
                },
                // toolbox: {
                //     show : true,
                //     feature : {

                //         magicType : {show: true, type: ['line', 'bar']},
                //         restore : {show: true},
                //         saveAsImage : {show: true}
                //     }
                // },
                color: ["#FFD700", "#23E06F"],
                calculable : true,
                xAxis : [
                    {
                        type : 'category',
                        data : SSS8,
                        axisLabel: {
      interval: 0, // Menampilkan semua label
      rotate: -30 // Memutar label sebesar -45 derajat
    }
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
                        data:targets8,
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
                        data:capaians8,
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
                ],
                title: {
        text: 'Sistem informasi yang andal',
        // subtext: 'Grafik ini menampilkan target dan capaian',
        left: 'center',
        top: '0%', // Atur posisi judul di atas grafik dengan jarak ke atas
        textStyle: {
            fontSize: 16 // Atur ukuran font judul
        }
    },
            };
            var option9 = {
                // Setup grid
                grid: {
                    left: '1%',
                    right: '2%',
                    bottom: '12%',
                    containLabel: true
                },

                // Add Tooltip
                tooltip : {
                    trigger: 'axis'
                },

                legend: {
                    data:['Target','Capaian'],
                    bottom:'0%',
                },
                // toolbox: {
                //     show : true,
                //     feature : {

                //         magicType : {show: true, type: ['line', 'bar']},
                //         restore : {show: true},
                //         saveAsImage : {show: true}
                //     }
                // },
                color: ["#FFD700", "#23E06F"],
                calculable : true,
                xAxis : [
                    {
                        type : 'category',
                        data : SSS9,
                        axisLabel: {
      interval: 0, // Menampilkan semua label
      rotate: -30 // Memutar label sebesar -45 derajat
    }
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
                        data:targets9,
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
                        data:capaians9,
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
                ],
                title: {
        text: 'Pengelolaan risiko, pengendalian, \n dan pengawasan internal yang bernilai tambah',
        // subtext: 'Grafik ini menampilkan target dan capaian',
        left: 'center',
        top: '0%', // Atur posisi judul di atas grafik dengan jarak ke atas
        textStyle: {
            fontSize: 16 // Atur ukuran font judul
        }
    },
            };

        

          
        // use configuration item and data specified to show chart
        myChart.setOption(option1);
        myChart2.setOption(option2);
        myChart3.setOption(option3);
        myChart4.setOption(option4);
        myChart5.setOption(option5);
        myChart6.setOption(option6);
        myChart7.setOption(option7);
        myChart8.setOption(option8);
        myChart9.setOption(option9);
    
    
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
                        myChart2.resize();
                    }, 200);
                }
            });
});
   </script>
   <script>
        var SS1 = @json($SS1);
        var target1= @json($target1);
        var capaian1 = @json($capaian1);
        var SS2 = @json($SS2);
        var target2= @json($target2);
        var capaian2 = @json($capaian2);
        var SS3 = @json($SS3);
        var target3= @json($target3);
        var capaian3 = @json($capaian3);
        var SS4 = @json($SS4);
        var target4= @json($target4);
        var capaian4 = @json($capaian4);
        var SS5 = @json($SS5);
        var target5= @json($target5);
        var capaian5 = @json($capaian5);
        var SS6 = @json($SS6);
        var target6= @json($target6);
        var capaian6 = @json($capaian6);
        var SS7 = @json($SS7);
        var target7= @json($target7);
        var capaian7 = @json($capaian7);
        var SS8 = @json($SS8);
        var target8= @json($target8);
        var capaian8 = @json($capaian8);
        var SS9 = @json($SS9);
        var target9= @json($target9);
        var capaian9 = @json($capaian9);
</script>
    <script src="{{asset('assets/extra-libs/prism/prism.js')}}"></script>

    @endsection