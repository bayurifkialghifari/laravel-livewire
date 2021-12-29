<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Avenxo Admin Theme">
    <meta name="author" content="KaijuThemes">
    <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- CSS --}}
    <link type='text/css' href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600' rel='stylesheet'>
    <link type="text/css" href="{{ asset('templates/assets/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('templates/assets/fonts/themify-icons/themify-icons.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('templates/assets/css/styles.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('templates/assets/plugins/iCheck/skins/minimal/blue.css') }}" rel="stylesheet">
	<link type="text/css" href="{{ asset('templates/assets/plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet">
	<link type="text/css" href="{{ asset('templates/assets/plugins/datatables/dataTables.themify.css') }}" rel="stylesheet">
    {{-- JAVASCRIPT --}}
    <script type="text/javascript" src="{{ asset('templates/assets/js/jquery-1.10.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/assets/js/jqueryui-1.10.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/assets/js/enquire.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/assets/plugins/velocityjs/velocity.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/assets/plugins/velocityjs/velocity.ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/assets/plugins/wijets/wijets.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/assets/plugins/codeprettifier/prettify.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/assets/plugins/bootstrap-switch/bootstrap-switch.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/assets/plugins/iCheck/icheck.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/assets/js/application.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/assets/demo/demo.js') }}"></script>
    {{-- <script type="text/javascript" src="{{ asset('templates/assets/demo/demo-switcher.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('templates/assets/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script type="text/javascript" src="{{ asset('templates/assets/plugins/datatables/dataTables.bootstrap.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ujs/1.2.3/rails.min.js"></script> --}}
</head>
<body class="animated-content">
    <div id="app">
        <header id="topnav" class="navbar navbar-fixed-top navbar-bluegray" role="banner">

            <div class="logo-area">
                <span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">
                    <a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
                        <span class="icon-bg">
                            <i class="ti ti-menu"></i>
                        </span>
                    </a>
                </span>

                <a class="navbar-brand" href="javascript:void(0)">Avenxo</a>

            </div><!-- logo-area -->

            <ul class="nav navbar-nav toolbar pull-right">

                <li class="toolbar-icon-bg hidden-xs" id="trigger-fullscreen">
                    <a href="#" class="toggle-fullscreen"><span class="icon-bg"><i class="ti ti-fullscreen"></i></span></i></a>
                </li>

                <li class="dropdown toolbar-icon-bg">
                    <a href="#" class="dropdown-toggle username" data-toggle="dropdown">
                        <img class="img-circle" src="http://placehold.it/300&text=Placeholder" alt="" />
                    </a>
                    <ul class="dropdown-menu userinfo arrow">
                        <li><a href="#/"><i class="ti ti-user"></i><span>Profile</span><!-- <span class="badge badge-info pull-right">info</span> --></a></li>
                        <li><a href="#/"><i class="ti ti-panel"></i><span>Account</span></a></li>
                        <li><a href="#/"><i class="ti ti-settings"></i><span>Settings</span></a></li>
                        <li class="divider"></li>
                        <li><a href="#/"><i class="ti ti-stats-up"></i><span>Earnings</span></a></li>
                        <li><a href="#/"><i class="ti ti-view-list-alt"></i><span>Statement</span></a></li>
                        <li><a href="#/"><i class="ti ti-money"></i><span>Withdrawals</span></a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:void(0)" onclick="(confirm('Are you sure ?')) ? $('#form-logout').submit() : ''"><i class="ti ti-shift-right"></i><span>Sign Out</span></a></li>
                    </ul>
                </li>
                <form action="{{ url('logout') }}" method="post" id="form-logout">
                    @csrf
                </form>
            </ul>
        </header>

        <main class="">
            <div id="wrapper">
                <div id="layout-static">
                    <div class="static-sidebar-wrapper sidebar-default">
                        <div class="static-sidebar">
                            <div class="sidebar">
                                <div class="widget">
                                    <div class="widget-body" style="padding-top: 50px">
                                        <div class="userinfo">
                                            <div class="avatar">
                                                <img src="http://placehold.it/300&text=Placeholder" class="img-responsive img-circle">
                                            </div>
                                            <div class="info">
                                                <span class="username">Jonathan Smith</span>
                                                <span class="useremail">jon@avenxo.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget stay-on-collapse" id="widget-sidebar">
                                    @include('layouts.navigation')
                                </div>

                                {{-- <div class="widget" id="widget-progress">
                                    <div class="widget-heading">
                                        Progress
                                    </div>
                                    <div class="widget-body">

                                        <div class="mini-progressbar">
                                            <div class="clearfix mb-sm">
                                                <div class="pull-left">Bandwidth</div>
                                                <div class="pull-right">50%</div>
                                            </div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-lime" style="width: 50%"></div>
                                            </div>
                                        </div>
                                        <div class="mini-progressbar">
                                            <div class="clearfix mb-sm">
                                                <div class="pull-left">Storage</div>
                                                <div class="pull-right">25%</div>
                                            </div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-info" style="width: 25%"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="static-content-wrapper" style="padding-top: 70px">
                        <div class="static-content">
                            <div class="page-content">
                                {{ Breadcrumbs::render(isset($view) ? $view : 'blog') }}
                                @yield('content')
                            </div> <!-- #page-content -->
                        </div>
                        <footer role="contentinfo">
                            <div class="clearfix">
                                <ul class="list-unstyled list-inline pull-left">
                                    <li><h6 style="margin: 0;">&copy; 2015 Avenxo</h6></li>
                                </ul>
                                <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="ti ti-arrow-up"></i></button>
                            </div>
                        </footer>
                        {{-- <!-- Switcher -->
                        <div class="demo-options">
                            <div class="demo-options-icon"><i class="ti ti-paint-bucket"></i></div>
                            <div class="demo-heading">Demo Settings</div>

                            <div class="demo-body">
                                <div class="tabular">
                                    <div class="tabular-row">
                                        <div class="tabular-cell">Fixed Header</div>
                                        <div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox" checked data-size="mini" data-on-color="success" data-off-color="default" name="demo-fixedheader" data-on-text="&nbsp;" data-off-text="&nbsp;"></div>
                                    </div>
                                    <div class="tabular-row">
                                        <div class="tabular-cell">Boxed Layout</div>
                                        <div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox" data-size="mini" data-on-color="success" data-off-color="default" name="demo-boxedlayout" data-on-text="&nbsp;" data-off-text="&nbsp;"></div>
                                    </div>
                                    <div class="tabular-row">
                                        <div class="tabular-cell">Collapse Leftbar</div>
                                        <div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox" data-size="mini" data-on-color="success" data-off-color="default" name="demo-collapseleftbar" data-on-text="&nbsp;" data-off-text="&nbsp;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="demo-body">
                                <div class="option-title">Topnav</div>
                                <ul id="demo-header-color" class="demo-color-list">
                                    <li><span class="demo-cyan"></span></li>
                                    <li><span class="demo-light-blue"></span></li>
                                    <li><span class="demo-blue"></span></li>
                                    <li><span class="demo-indigo"></span></li>
                                    <li><span class="demo-deep-purple"></span></li>
                                    <li><span class="demo-purple"></span></li>
                                    <li><span class="demo-pink"></span></li>
                                    <li><span class="demo-red"></span></li>
                                    <li><span class="demo-teal"></span></li>
                                    <li><span class="demo-green"></span></li>
                                    <li><span class="demo-light-green"></span></li>
                                    <li><span class="demo-lime"></span></li>
                                    <li><span class="demo-yellow"></span></li>
                                    <li><span class="demo-amber"></span></li>
                                    <li><span class="demo-orange"></span></li>
                                    <li><span class="demo-deep-orange"></span></li>
                                    <li><span class="demo-midnightblue"></span></li>
                                    <li><span class="demo-bluegray"></span></li>
                                    <li><span class="demo-bluegraylight"></span></li>
                                    <li><span class="demo-black"></span></li>
                                    <li><span class="demo-gray"></span></li>
                                    <li><span class="demo-graylight"></span></li>
                                    <li><span class="demo-default"></span></li>
                                    <li><span class="demo-brown"></span></li>
                                </ul>
                            </div>

                            <div class="demo-body">
                                <div class="option-title">Sidebar</div>
                                <ul id="demo-sidebar-color" class="demo-color-list">
                                    <li><span class="demo-cyan"></span></li>
                                    <li><span class="demo-light-blue"></span></li>
                                    <li><span class="demo-blue"></span></li>
                                    <li><span class="demo-indigo"></span></li>
                                    <li><span class="demo-deep-purple"></span></li>
                                    <li><span class="demo-purple"></span></li>
                                    <li><span class="demo-pink"></span></li>
                                    <li><span class="demo-red"></span></li>
                                    <li><span class="demo-teal"></span></li>
                                    <li><span class="demo-green"></span></li>
                                    <li><span class="demo-light-green"></span></li>
                                    <li><span class="demo-lime"></span></li>
                                    <li><span class="demo-yellow"></span></li>
                                    <li><span class="demo-amber"></span></li>
                                    <li><span class="demo-orange"></span></li>
                                    <li><span class="demo-deep-orange"></span></li>
                                    <li><span class="demo-midnightblue"></span></li>
                                    <li><span class="demo-bluegray"></span></li>
                                    <li><span class="demo-bluegraylight"></span></li>
                                    <li><span class="demo-black"></span></li>
                                    <li><span class="demo-gray"></span></li>
                                    <li><span class="demo-graylight"></span></li>
                                    <li><span class="demo-default"></span></li>
                                    <li><span class="demo-brown"></span></li>
                                </ul>
                            </div>



                        </div>
                        <!-- /Switcher --> --}}
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
