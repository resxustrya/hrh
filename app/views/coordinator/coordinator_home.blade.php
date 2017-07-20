@extends('layouts.app')
@section('content')
    <div class="main-content-inner">
        <div class="page-content">
            <div class="row">
                <div style="padding: 20px">
                    <p>
                        <span class="label label-warning" style="background-color: darkgreen">DDTB</span>
                        <span class="label label-warning" style="background-color: darkblue">NDP</span>
                        <span class="label label-warning" style="background-color: darkcyan">RHMPP</span>
                        <span class="label label-warning" style="background-color: darkgoldenrod">DDP</span>
                        <span class="label label-warning" style="background-color: darksalmon">MTDP</span>
                        <span class="label label-warning" style="background-color: darkmagenta">PHA DP</span>
                        <span class="label label-warning" style="background-color: darkred">UHCI DP</span>
                    </p>
                </div>
                <div class="col-xs-12">
                    <!-- BAR CHART -->
                    <div class="widget-box">
                        <div class="widget-header widget-header-blue widget-header-flat">
                            <h4 class="widget-title lighter">Bar Chart</h4>
                        </div>
                        <div class="widget-body">
                            <div class="box-body chart-responsive">
                                <div class="chart" id="bar-chart" style="height: 300px;"></div>
                                {{--<canvas id="barChart" style="height:230px"></canvas>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="widget-box">
                        <div class="widget-header widget-header-blue widget-header-flat">
                            <h4 class="widget-title lighter">Grand Total</h4>
                        </div>
                        <div class="widget-body">
                            <div class="box-body chart-responsive">
                                <div class="chart" id="sales-chart" style="height: 300px; position: relative;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.page-content -->
    </div>
    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
@endsection
@section('js')
    <script>
        $(function () {
            //DONUT CHART
            var donut = new Morris.Donut({
                element: 'sales-chart',
                resize: true,
                colors: ['darkgreen', 'darkblue','darkcyan','darkgoldenrod','darksalmon','darkmagenta','darkred'],
                data: [
                    {label: "DDTB", value: 100},
                    {label: "NDP", value: 90},
                    {label: "RHMPP", value: 80},
                    {label: "DDP", value: 70},
                    {label: "MTDP", value: 60},
                    {label: "PHA DP", value: 50},
                    {label: "UHCI DP", value: 40}
                ],
                hideHover: 'auto'
            });
            //BAR CHART
            var bar = new Morris.Bar({
                element: 'bar-chart',
                resize: true,
                data: [
                    {y: 'Jan', a: 100, b: 90,c:80,d:70,e:60,f:50,g:40},
                    {y: 'Feb', a: 100, b: 90,c:80,d:70,e:60,f:50,g:40},
                    {y: 'Mar', a: 100, b: 90,c:80,d:70,e:60,f:50,g:40},
                    {y: 'Apr', a: 100, b: 90,c:80,d:70,e:60,f:50,g:40},
                    {y: 'May', a: 100, b: 90,c:80,d:70,e:60,f:50,g:40},
                    {y: 'Jun', a: 100, b: 90,c:80,d:70,e:60,f:50,g:40},
                    {y: 'Jul', a: 100, b: 90,c:80,d:70,e:60,f:50,g:40},
                    {y: 'Aug', a: 200, b: 90,c:80,d:70,e:60,f:50,g:40},
                    {y: 'Sep', a: 100, b: 90,c:80,d:70,e:60,f:50,g:40},
                    {y: 'Oct', a: 100, b: 90,c:80,d:70,e:60,f:50,g:40},
                    {y: 'Nov', a: 100, b: 90,c:80,d:70,e:60,f:50,g:40},
                    {y: 'Dec', a: 100, b: 90,c:80,d:70,e:60,f:50,g:40}
                ],
                barColors: ['darkgreen', 'darkblue','darkcyan','darkgoldenrod','darksalmon','darkmagenta','darkred'],
                xkey: 'y',
                ykeys: ['a','b','c','d','e','f','g'],
                labels: ['DDTB', 'NDP','RHMPP','DDP','MTDP','PHA DP','UHCI DP'],
                hideHover: 'auto'
            });

        });
    </script>

@endsection

