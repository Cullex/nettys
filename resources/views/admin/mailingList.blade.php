<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/admin_dashboard/assets/img/484fe0bc-4f5c-4bbf-8d28-be1cca006026 1.png') }}">
    <title>Netty's Culinary School</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin_dashboard/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/admin_dashboard/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_dashboard/assets/css/style.css')}}">
<!--[if lt IE 9]>
    <script src="{{asset('admin_dashboard/assets/js/html5shiv.min.js')}}"></script>
    <script src="{{asset('admin_dashboard/assets/js/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body>
<div class="main-wrapper">
    <div class="header">
        <div class="header-left">
            <a href="/dashboard" class="logo">
                <img src="{{ asset('/admin_dashboard/assets/img/484fe0bc-4f5c-4bbf-8d28-be1cca006026 1.png') }}" width="35" height="35" alt=""> <span>Netty's Culinary School</span>
            </a>
        </div>
        <ul class="nav user-menu float-right">
            <li class="nav-item dropdown has-arrow">
                <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
							<img class="rounded-circle" src="{{asset('admin_dashboard/assets/img/user.jpg')}}" width="24" alt="Admin">
							<span class="status online"></span>
						</span>
                </a>
                <div class="dropdown-menu">

                    <a id="navbarDropdown" class="nav-menu" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}

                    </a>

                    <div class="nav-menu" aria-labelledby="navbarDropdown">
                        <a class="nav-menu" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">Main</li>
                    <li class="active">
                        <a href="/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="/allApplications"><i class="fa fa-user-md"></i> <span>Applications</span></a>
                    </li>
                    <li>
                        <a href="/allQueries"><i class="fa fa-question"></i> <span>Queries</span></a>
                    </li>
                    <li>
                        <a href="/mailingList"><i class="fa fa-question"></i> <span>Mailing List</span></a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="dash-widget">
                        <span class="dash-widget-bg1"><i class="fa fa-question" aria-hidden="true"></i></span>
                        <div class="dash-widget-info text-right">
                            <h3>{{ $totalQueries }}</h3>
                            <span class="widget-title1">Queries <i class="fa fa-check" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="dash-widget">
                        <span class="dash-widget-bg2"><i class="fa fa-user-o"></i></span>
                        <div class="dash-widget-info text-right">
                            <h3>{{ $totalApplications }}</h3>
                            <span class="widget-title2">Applications <i class="fa fa-check" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="dash-widget">
                        <span class="dash-widget-bg3"><i class="fa fa-bars" aria-hidden="true"></i></span>
                        <div class="dash-widget-info text-right">
                            <h3>{{ $totalUsers }}</h3>
                            <span class="widget-title3">Users <i class="fa fa-check" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="dash-widget">
                        <span class="dash-widget-bg4"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                        <div class="dash-widget-info text-right">
                            <h3>Welcome</h3>
                            <span class="widget-title4">{{ Auth::user()->name }} <i class="" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12 col-md-6 col-lg-12 col-xl-12">
                    <div class="card">

                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="d-none">
                                    <tr>
                                        <th>Email</th>
                                        <th>Date Received</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(isset($emails))
                                        @foreach($emails as $email)
                                            <tr>
                                                <td style="min-width: 200px;">
                                                    <a class="avatar" href="">#</a>
                                                    <h2><a href="">{{ $email->email }} </a></h2>
                                                </td>
                                                <td>
                                                    <h5 class="time-title p-0">Date Received</h5>
                                                    <p>{{ $email->created_at }}</p>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<div class="sidebar-overlay" data-reff=""></div>
<script src="{{asset('admin_dashboard/assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('admin_dashboard/assets/js/popper.min.js')}}"></script>
<script src="{{asset('admin_dashboard/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin_dashboard/assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('admin_dashboard/assets/js/Chart.bundle.js')}}"></script>
<script src="{{ asset('admin_dashboard/assets/js/chart.js') }}"></script>
<script src="{{asset('admin_dashboard/assets/js/app.js"')}}"></script>

</body>



</html>

