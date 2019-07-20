@extends('layouts.master')

@section('css')
<style>

</style>

@endsection

@section('content')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
            </ul>
        </div>
        <h1 class="page-title"> Dashboard
        </h1>
        <!-- END PAGE TITLE-->
        <!-- END PAGE HEADER-->
        {{-- <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 margin-bottom-10">
                    <div class="dashboard-stat blue">
                        <div class="visual">
                            <i class="fa fa-briefcase fa-icon-medium"></i>
                        </div>
                        <div class="details">
                            <div class="number"> Rp 11.900.000 </div>
                            <div class="desc"> Total Penjualan  </div>
                        </div>
                        <a class="more" href="javascript:;"> View more
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="dashboard-stat red">
                        <div class="visual">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="details">
                            <div class="number"> Rp 1.200.000 </div>
                            <div class="desc"> Total Keuntungan </div>
                        </div>
                        <a class="more" href="javascript:;"> View more
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="dashboard-stat green">
                        <div class="visual">
                            <i class="fa fa-group fa-icon-medium"></i>
                        </div>
                        <div class="details">
                            <div class="number"> 23315 </div>
                            <div class="desc"> Total Produk Terjual Perbulan </div>
                        </div>
                        <a class="more" href="javascript:;"> View more
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
            </div> --}}
        <div class="row">

            <div class="col-md-12">
                <!-- Begin: life time stats -->
                <!-- BEGIN PORTLET-->


                <div class="portlet light bordered">
                    <div class="portlet-title tabbable-line">
                        <div class="caption">
                            <i class="icon-globe font-red"></i>
                            <span class="caption-subject font-red bold uppercase">Balok SKDN</span>
                        </div>
                        <div class="filter col-md-3 pull-right">
                            <form action="" method="POST">
                                <select class="form-control">
                                    <option>Kecamatan Sukmajaya</option>
                                    <option>Kecamatan Beji</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="tab-content">
                            <canvas id="myChart1"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-12">
                <!-- Begin: life time stats -->
                <!-- BEGIN PORTLET-->


                <div class="portlet light bordered">
                    <div class="portlet-title tabbable-line">
                        <div class="caption">
                            <i class="icon-globe font-red"></i>
                            <span class="caption-subject font-red bold uppercase">Grafik</span>
                        </div>
                        <ul class="nav nav-tabs">
                            <li>
                                <a href="#portlet_ecommerce_tab_2" id="statistics_orders_tab" data-toggle="tab">Peserta
                                    KB Baru </a>
                            </li>
                            <li class="active">
                                <a href="#portlet_ecommerce_tab_1" data-toggle="tab"> Kadarzi </a>
                            </li>
                            <li>
                                <a href="#portlet_ecommerce_tab_2" id="statistics_orders_tab" data-toggle="tab"> PHBS
                                </a>
                            </li>
                            <li class="active">
                                <a href="#portlet_ecommerce_tab_1" data-toggle="tab"> Cakupan Pelayanan </a>
                            </li>
                            <li>
                                <a href="#portlet_ecommerce_tab_2" id="statistics_orders_tab" data-toggle="tab">
                                    Imunisasi </a>
                            </li>
                            <li class="active">
                                <a href="#portlet_ecommerce_tab_1" data-toggle="tab"> Keluarga Sejahtera </a>
                            </li>
                        </ul>
                    </div>
                    <div class="portlet-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="portlet_ecommerce_tab_1">
                                <canvas id="myChart2"></canvas>
                            </div>
                            {{-- <div class="tab-pane" id="portlet_ecommerce_tab_2">
                                <canvas id="myChart1"></canvas>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->

@endsection

@section('script')
<script src="http://kla.depok.go.id/js/Chart.min.js"></script>
<script>
    var ctx = document.getElementById("myChart1");

    var listkec = ['Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember',
    ];
    var data_kec1 = [15,
        6,
        2,
        7,
        1,
        14,
        1,
        39,
        1,
        11,
        8,
        1
    ];
    var data_kec2 = [8,
        6,
        2,
        7,
        1,
        14,
        1,
        39,
        1,
        11,
        8,
        2
    ];
    var data_kec3 = [4,
        6,
        2,
        7,
        1,
        14,
        1,
        39,
        1,
        11,
        8,
        3
    ];
    var data_kec4 = [4,
        6,
        2,
        7,
        1,
        14,
        1,
        39,
        1,
        11,
        8,
        5
    ];
    var data_kec5 = [4,
        6,
        2,
        7,
        1,
        14,
        1,
        39,
        1,
        11,
        8,
        3
    ];
    var data_kec6 = [1,
        6,
        2,
        7,
        1,
        14,
        1,
        39,
        1,
        11,
        8,
        7
    ];
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: listkec,
            datasets: [{
                label: 'S',
                backgroundColor: "rgb(239, 55, 55)",
                data: data_kec1,
                borderWidth: 0
            }, {
                label: 'K',
                backgroundColor: "rgb(239, 104, 55)",
                data: data_kec2,
                borderWidth: 0
            }, {
                label: 'D',
                backgroundColor: "rgb(239, 177, 55)",
                data: data_kec3,
                borderWidth: 0
            }, {
                label: 'N',
                backgroundColor: "rgb(211, 239, 55)",
                data: data_kec4,
                borderWidth: 0
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

</script>

<script>
    var ctx = document.getElementById("myChart2");

    var listkec = ['Beji',
        'Bojongsari',
        'Cilodong',
        'Cimanggis',
        'Cinere',
        'Cipayung',
        'Limo',
        'Pancoran Mas',
        'Sawangan',
        'Sukmajaya',
        'Tapos',
    ];
    var data_kec1 = [15,
        6,
        2,
        7,
        1,
        14,
        1,
        9,
        1,
        11,
        8,
    ];
    var data_kec2 = [8,
        4,
        1,
        3,
        1,
        13,
        5,
        4,
        4,
        2,
        2,
    ];
    var data_kec3 = [4,
        7,
        2,
        1,
        2,
        3,
        4,
        3,
        2,
        0,
        3,
    ];
    var data_kec4 = [4,
        4,
        3,
        4,
        4,
        16,
        4,
        6,
        4,
        4,
        1,
    ];
    var data_kec5 = [4,
        5,
        2,
        4,
        8,
        16,
        2,
        7,
        4,
        1,
        3,
    ];
    var data_kec6 = [1,
        3,
        2,
        1,
        5,
        4,
        5,
        3,
        4,
        3,
        1,
    ];
    var data_kec7 = [1,
        3,
        1,
        1,
        1,
        4,
        1,
        3,
        1,
        2,
        1,
    ];
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: listkec,
            datasets: [{
                label: 'IUD',
                backgroundColor: "rgb(239, 55, 55)",
                data: data_kec1,
                borderWidth: 0
            }, {
                label: 'MOW',
                backgroundColor: "rgb(239, 104, 55)",
                data: data_kec2,
                borderWidth: 0
            }, {
                label: 'MOP',
                backgroundColor: "rgb(239, 177, 55)",
                data: data_kec3,
                borderWidth: 0
            }, {
                label: 'Kondom',
                backgroundColor: "rgb(211, 239, 55)",
                data: data_kec4,
                borderWidth: 0
            }, {
                label: 'Implan',
                backgroundColor: "rgb(116, 239, 55)",
                data: data_kec5,
                borderWidth: 0
            }, {
                label: 'Suntik',
                backgroundColor: "rgb(55, 239, 150)",
                data: data_kec6,
                borderWidth: 0
            }, {
                label: 'Pil',
                backgroundColor: "rgb(50, 239, 150)",
                data: data_kec7,
                borderWidth: 0
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

</script>
@endsection
