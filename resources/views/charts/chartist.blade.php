@extends('layouts.simple.master')

@section('title', 'Chartist Chart')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/chartist.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Chartist Chart</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.default_dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Charts</li>
                        <li class="breadcrumb-item active">Chartist Chart</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Advanced SMIL Animations</h5>
                    </div>
                    <div class="card-body">
                        <div class="ct-6 flot-chart-container"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>SVG Path animation</h5>
                    </div>
                    <div class="card-body">
                        <div class="ct-7 flot-chart-container"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Animating a Donut with Svg.animate</h5>
                    </div>
                    <div class="card-body">
                        <div class="ct-8 flot-chart-container"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Bi-polar Line chart with area only</h5>
                    </div>
                    <div class="card-body">
                        <div class="ct-5 flot-chart-container"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Line chart with area</h5>
                    </div>
                    <div class="card-body">
                        <div class="ct-4 flot-chart-container"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Bi-polar bar chart</h5>
                    </div>
                    <div class="card-body">
                        <div class="ct-9 flot-chart-container"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Stacked bar chart</h5>
                    </div>
                    <div class="card-body">
                        <div class="ct-10 flot-chart-container"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Horizontal bar chart</h5>
                    </div>
                    <div class="card-body">
                        <div class="ct-11 flot-chart-container"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Extreme responsive configuration</h5>
                    </div>
                    <div class="card-body">
                        <div class="ct-12 flot-chart-container"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Simple line chart</h5>
                    </div>
                    <div class="card-body">
                        <div class="ct-1 flot-chart-container"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Holes in data</h5>
                    </div>
                    <div class="card-body">
                        <div class="ct-2 flot-chart-container"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12 col-sm-12 box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Filled holes in data</h5>
                    </div>
                    <div class="card-body">
                        <div class="ct-3 flot-chart-container"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/chart/chartist/chartist.js') }}"></script>
    <script src="{{ asset('assets/js/chart/chartist/chartist-plugin-tooltip.js') }}"></script>
    <script src="{{ asset('assets/js/chart/chartist/chartist-custom.js') }}"></script>
@endsection
