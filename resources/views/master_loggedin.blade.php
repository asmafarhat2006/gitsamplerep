<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@section('title') Tribu @show</title>
	
	 <!-- Bootstrap Core CSS -->
	<link rel="stylesheet"
       href="{{asset('assets/css/bootstrap.min.css')}}"/>
    <!-- MetisMenu CSS -->
	<link rel="stylesheet"
       href="{{asset('assets/css/metisMenu.min.css')}}"/>
    <!-- Timeline CSS -->
	<link rel="stylesheet"
       href="{{asset('assets/css/timeline.css')}}"/>
    <!-- Custom CSS -->
	<link rel="stylesheet"
       href="{{asset('assets/css/sb-admin-2.css')}}"/>
    <!-- Morris Charts CSS -->
	<link rel="stylesheet"
       href="{{asset('assets/css/morris.css')}}"/>
    <!-- Custom Fonts -->
	<link rel="stylesheet"
       href="{{asset('assets/css/font-awesome.min.css')}}"/>
  
    @yield('styles')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
  <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

			<!-- /.navbar-sidemenu -->
		   @section('leftmenu')
			@include('partials.leftnav')
			@show
			<!-- /.navbar-static-side -->
        </nav>

@yield('pagewrapper')
</div>
@yield('footer')
<!-- /#wrapper -->

<!-- Scripts -->
	<!-- jQuery -->
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- Metis Menu Plugin JavaScript -->
	<script src="{{asset('assets/js/metisMenu.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->
	<script src="{{asset('assets/js/raphael-min.js')}}"></script>
	<script src="{{asset('assets/js/morris.min.js')}}"></script>
	<script src="{{asset('assets/js/morris-data.js')}}"></script>
	<script src="{{asset('assets/js/sb-admin-2.js')}}"></script>


@yield('scripts')

</body>
</html>