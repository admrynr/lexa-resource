@extends('layouts.master')

@section('css')
        <!-- ION Slider -->
        <link href="{{ URL::asset('assets/plugins/ion-rangeslider/ion.rangeSlider.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('assets/plugins/ion-rangeslider/ion.rangeSlider.skinModern.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
            <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Range Slider</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Lexa</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">UI Elements</a></li>
                                        <li class="breadcrumb-item active">Range Slider</li>
                                    </ol>
            
                                    <div class="state-information d-none d-sm-block">
                                        <div class="state-graph">
                                            <div id="header-chart-1"></div>
                                            <div class="info">Balance $ 2,317</div>
                                        </div>
                                        <div class="state-graph">
                                            <div id="header-chart-2"></div>
                                            <div class="info">Item Sold 1230</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card m-b-20">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">ION Range slider</h4>
                                        <p class="text-muted m-b-30 font-14">Cool, comfortable, responsive and easily customizable range slider</p>
        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="p-3">
                                                    <h5 class="font-16 m-b-20 mt-0">Default</h5>
                                                    <input type="text" id="range_01">
                                                </div>
                                            </div>
        
                                            <div class="col-md-6">
                                                <div class="p-3">
                                                    <h5 class="font-16 m-b-20 mt-0">Min-Max</h5>
                                                    <input type="text" id="range_02">
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="p-3">
                                                    <h5 class="font-16 m-b-20 mt-0">Prefix</h5>
                                                    <input type="text" id="range_03">
                                                </div>
                                            </div>
        
                                            <div class="col-md-6">
                                                <div class="p-3">
                                                    <h5 class="font-16 m-b-20 mt-0">Range</h5>
                                                    <input type="text" id="range_04">
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="p-3">
                                                    <h5 class="font-16 m-b-20 mt-0">Step</h5>
                                                    <input type="text" id="range_05">
                                                </div>
                                            </div>
        
                                            <div class="col-md-6">
                                                <div class="p-3">
                                                    <h5 class="font-16 m-b-20 mt-0">Custom Values</h5>
                                                    <input type="text" id="range_06">
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="p-3">
                                                    <h5 class="font-16 m-b-20 mt-0">Prettify Numbers</h5>
                                                    <input type="text" id="range_07">
                                                </div>
                                            </div>
        
                                            <div class="col-md-6">
                                                <div class="p-3">
                                                    <h5 class="font-16 m-b-20 mt-0">Disabled</h5>
                                                    <input type="text" id="range_08">
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="p-3">
                                                    <h5 class="font-16 m-b-20 mt-0">Extra Example</h5>
                                                    <input type="text" id="range_09">
                                                </div>
                                            </div>
        
                                            <div class="col-md-6">
                                                <div class="p-3">
                                                    <h5 class="font-16 m-b-20 mt-0">Use decorate_both option</h5>
                                                    <input type="text" id="range_10">
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="p-3">
                                                    <h5 class="font-16 m-b-20 mt-0">Postfixes</h5>
                                                    <input type="text" id="range_11">
                                                </div>
                                            </div>
        
                                            <div class="col-md-6">
                                                <div class="p-3">
                                                    <h5 class="font-16 m-b-20 mt-0">Hide</h5>
                                                    <input type="text" id="range_12">
                                                </div>
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
            

                    </div> <!-- container-fluid -->
@endsection

@section('script')
        <!-- Range slider js -->
        <script src="{{ URL::asset('assets/plugins/ion-rangeslider/ion.rangeSlider.min.js')}}"></script>
        <script src="{{ URL::asset('assets/pages/rangeslider-init.js')}}"></script>
@endsection