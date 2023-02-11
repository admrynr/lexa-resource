@extends('layouts.master')

@section('content')
            <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Badge</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Lexa</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">UI Elements</a></li>
                                        <li class="breadcrumb-item active">Badge</li>
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
                            <div class="col-lg-6">
                                <div class="card m-b-20">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Example</h4>
                                        <p class="text-muted m-b-30 font-14">Badges scale to match the size of the
                                            immediate parent element by using relative font sizing and <code
                                                    class="highlighter-rouge">em</code> units.</p>
        
                                        <div class="">
                                            <h1>Example heading <span class="badge badge-light">New</span></h1>
                                            <h2>Example heading <span class="badge badge-light">New</span></h2>
                                            <h3>Example heading <span class="badge badge-light">New</span></h3>
                                            <h4>Example heading <span class="badge badge-light">New</span></h4>
                                            <h5>Example heading <span class="badge badge-light">New</span></h5>
                                            <h6>Example heading <span class="badge badge-light">New</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card m-b-20">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Variations</h4>
                                        <p class="text-muted m-b-30 font-14">Add any of the below mentioned modifier
                                            classes to change the appearance of a badge.</p>
        
                                        <div>
                                            <span class="badge badge-light">Light</span>
                                            <span class="badge badge-primary">Primary</span>
                                            <span class="badge badge-success">Success</span>
                                            <span class="badge badge-info">Info</span>
                                            <span class="badge badge-warning">Warning</span>
                                            <span class="badge badge-danger">Danger</span>
                                            <span class="badge badge-dark">Dark</span>
                                        </div>
        
                                        <p class="text-muted m-b-30 font-14 m-t-40">Use the <code
                                                class="highlighter-rouge">.badge-pill</code> modifier class to make
                                            badges more rounded (with a larger <code class="highlighter-rouge">border-radius</code>
                                            and additional horizontal <code class="highlighter-rouge">padding</code>).
                                            Useful if you miss the badges from v3.</p>
        
                                        <div>
                                            <span class="badge badge-pill badge-light">Light</span>
                                            <span class="badge badge-pill badge-primary">Primary</span>
                                            <span class="badge badge-pill badge-success">Success</span>
                                            <span class="badge badge-pill badge-info">Info</span>
                                            <span class="badge badge-pill badge-warning">Warning</span>
                                            <span class="badge badge-pill badge-danger">Danger</span>
                                            <span class="badge badge-pill badge-dark">Dark</span>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
            
                    </div> <!-- container-fluid -->
@endsection