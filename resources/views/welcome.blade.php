@extends('layouts.app')

@section('jumburton')
<!-- Jumbotron -->
<div class="jumbotron text-white rounded-0 mb-0">
    <div class="container text-center">
        <h1 class="display-4 font-weight-thin"><span class="font-weight-light">Tracing</span> - Room Resources</h1>
        <p class="lead mb-4">With Virtual Tour</p>
        <div class="pt-3">
            <a href="{{ route('tour.index') }}" class="btn bg-dark text-uppercase font-size-sm line-height-sm font-weight-semibold py-2 px-3 shadow  d-block d-sm-inline-block mb-3 mb-sm-0">
                Take A Virtual Tour
                <i class="icon-circle-right2 ml-2"></i>
            </a>
            <a href="{{ route('room.index') }}" class="btn bg-pink-400 text-uppercase font-size-sm line-height-sm font-weight-semibold py-2 px-3 ml-sm-4 shadow  d-block d-sm-inline-block">
                See Room Lists
                <i class="icon-library2 ml-2"></i>
            </a>
        </div>
    </div>
</div>
<!-- /jumbotron -->
@endsection
@section('content')
<!-- Main layout preview -->
<div class="section border-top pt-5">
    <div class="content container text-center">
        <div class="section-title text-center mb-4">
            <h1 class="mb-2 font-weight-light"><span class="font-weight-semibold">Tracing</span> - main starting point</h1>
            <div class="text-grey">Main layout includes a full set of elements, components, extensions, custom pages, widgets, charts and layout options. Child layouts are shells and include only layout related pages, but support all available components from the main layout. SCSS files are well structured so that you can easily find necessary one, whether it's a component or layout.</div>
        </div>
        <div class="pt-2 mb-5">
            <a href="#" class="btn bg-indigo text-uppercase font-size-sm line-height-sm font-weight-semibold d-block d-sm-inline-block py-2 px-3 mb-3 mb-sm-0 shadow" target="_blank">
                Start Tour
                <i class="icon-circle-right2 ml-2"></i>
            </a>
        </div>
        <div class="img-preview-multi">
            <img src="{{ asset('landing/img/browsers.png') }}" class="img-fluid" alt="">
        </div>
    </div>
</div>
<!-- /main layout preview -->
<!-- Project numbers -->
<div class="section gradient-8 text-white py-2">
    <div class="content container text-center">
        <div class="row">
            <div class="col-6 col-sm-3 font-weight-light my-2">
                <h1 class="font-weight-light mb-0">250+</h1>
                components and options
            </div>
            <div class="col-6 col-sm-3 font-weight-light my-2">
                <h1 class="font-weight-light mb-0">500+</h1>
                support tickets resolved
            </div>
            <div class="col-6 col-sm-3 font-weight-light my-2">
                <h1 class="font-weight-light mb-0">48+</h1>
                months of development
            </div>
            <div class="col-6 col-sm-3 font-weight-light my-2">
                <h1 class="font-weight-light mb-0">10000+</h1>
                happy customers
            </div>
        </div>
    </div>
</div>
<!-- /project numbers -->
<!-- Child layouts preview -->
<div class="section bg-white border-top pt-5 pb-4">
    <div class="content container">
        <div class="section-title text-center mb-4 pb-3">
            <h1 class="mb-2 font-weight-light"><span class="font-weight-semibold">Child</span> layouts preview</h1>
            <div class="text-grey">Child layouts include only layout related pages, this makes all layouts extremely easy to maintain and new layouts can be developed faster. Although components are not included, all styles exist in CSS files, which means all components and all options from the main layout are supported. You can use all of them in all layouts.</div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-5 mr-md-3">
                    <div class="card-img-actions mb-4 shadow">
                        <img class="card-img img-fluid" src="{{ asset('landing/img/layout_2.png') }}" alt="">
                        <div class="card-img-actions-overlay card-img">
                            <div>
                                <div class="btn-toolbar justify-content-center">
                                    <div class="btn-group">
                                        <a href="#" class="btn bg-blue font-weight-semibold font-size-sm line-height-sm text-uppercase mb-1 shadow" target="_blank">
                                            Start Tour
                                        </a>
                                        <a href="#" class="btn bg-blue font-weight-semibold font-size-sm line-height-sm text-uppercase mb-1 shadow" target="_blank">
                                            see Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="font-weight-semibold mb-2">
                    Child <span class="font-weight-light">layout #1</span>
                    </h5>
                    <span class="text-muted">The most popular modern layout with main light navbar, transparent page header and full height dark sidebar. Logo has 2 options depending on sidebar width.</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-5 ml-md-3">
                    <div class="card-img-actions mb-4 shadow">
                        <img class="card-img img-fluid" src="{{ asset('landing/img/layout_3.png') }}" alt="">
                        <div class="card-img-actions-overlay card-img">
                            <div>
                                <div class="btn-toolbar justify-content-center">
                                    <div class="btn-group">
                                        <a href="#" class="btn bg-blue font-weight-semibold font-size-sm line-height-sm text-uppercase mb-1 shadow" target="_blank">
                                            Start Tour
                                        </a>
                                        <a href="#" class="btn bg-blue font-weight-semibold font-size-sm line-height-sm text-uppercase mb-1 shadow" target="_blank">
                                            See Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="font-weight-semibold mb-2">
                    Child <span class="font-weight-light">layout #2</span>
                    </h5>
                    <span class="text-muted">Layout with full width navbar and page header. Sidebar is a part of content and can be either stretched vertically or displayed as a block element with auto height.</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /childs layouts preview -->
@endsection