<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Tracing Room Resources - A Project By Nazrul Islam</title>
        <!-- Global stylesheets -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
        <link href="{{ asset('global_assets/css/icons/icomoon/styles.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('landing/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('landing/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('landing/css/layout.min.css') }}" rel="stylesheet" type="text/css">
        @section('css')
        <link href="{{ asset('landing/css/components.min.css') }}" rel="stylesheet" type="text/css">
        @show
        <link href="{{ asset('landing/css/colors.min.css') }}" rel="stylesheet" type="text/css">
        <!-- /global stylesheets -->
    </head>
    <body>
        <!-- Page content -->
        <div class="page-content">
            <!-- Main content -->
            <div class="content-wrapper">
                <!-- Hero unit -->
                <div class="section gradient-1">
                    <!-- Main navbar -->
                    <div class="navbar navbar-expand-md navbar-dark" style="background-color: rgba(0,0,0,0.075); border-bottom-color: rgba(255,255,255,0.35)">
                        <div class="container">
                            <div class="navbar-brand wmin-0 mr-5">
                                <a href="{{ route('welcome') }}" class="d-inline-block">
                                    <img src="{{ asset('global_assets/images/logo_light.png') }}" alt="">
                                </a>
                            </div>
                            <div class="d-md-none">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                                <i class="icon-tree5"></i>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse" id="navbar-mobile">
                                <ul class="navbar-nav ml-md-auto">
                                    <li class="nav-item">
                                        <div class="header-elements">
                                            <form action="#">
                                                <div class="form-group form-group-feedback form-group-feedback-right">
                                                    <input type="search" class="form-control wmin-md-300" placeholder="Search">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-search4 font-size-sm text-muted"></i>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /main navbar -->
                    @section('jumburton')
                    @show
                </div>
                <!-- /hero unit -->

                @section('content')
                    @show

                <!-- Footer -->
                <div class="section gradient-6 text-white">

                    <div class="navbar navbar-expand-lg navbar-dark bg-dark-alpha border-0">
                        <div class="container">
                            <div class="text-center d-lg-none w-100">
                                <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                                <i class="icon-unfold mr-2"></i>
                                Footer
                                </button>
                            </div>
                            <div class="navbar-collapse collapse" id="navbar-footer">
                                <span class="navbar-text">
                                    &copy; {{ date('Y') }} <a href="#">A Project By</a> by <a href="https://facebook.com/joycseru" target="_blank">Nazrul Islam</a>
                                </span>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /footer -->
            </div>
            <!-- /main content -->
        </div>
        <!-- /page content -->

         <!-- Core JS files -->
        <script src="{{ asset('global_assets/js/main/jquery.min.js') }}"></script>
        <script src="{{ asset('global_assets/js/main/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('global_assets/js/plugins/loaders/blockui.min.js') }}"></script>
        <!-- /core JS files -->
        <!-- Theme JS files -->
        @stack('js')
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>
        <!-- /theme JS files -->
    </body>
</html>