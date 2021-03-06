<!DOCTYPE html>
<html>
<head>
	<title>P2IG: Admin Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	 <!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="{{ url('css') }}/bootstrap.min.css"/>
	<!-- Custom CSS -->
	<link href="{{ url('css') }}/style.css" rel='stylesheet' type='text/css' />
	<!-- Graph CSS -->
	<link href="{{ url('css') }}/lines.css" rel='stylesheet' type='text/css' />
	<link href="{{ url('css') }}/font-awesome.css" rel="stylesheet"> 
	<!-- jQuery -->
	<script src="{{ url('js') }}/jquery.min.js"></script>
	<!----webfonts--->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
	<!---//webfonts--->  
	<!-- Nav CSS -->
	<link href="{{ url('css') }}/custom.css" rel="stylesheet">
	<!-- Metis Menu Plugin JavaScript -->
	<script src="{{ url('js') }}/metisMenu.min.js"></script>
	<script src="{{ url('js') }}/custom.js"></script>
	<!-- Graph JavaScript -->
	<script src="{{ url('js') }}/d3.v3.js"></script>
	<script src="{{ url('js') }}/rickshaw.js"></script>
</head>
<body>
<div id="wrapper">
	<!-- navigation -->
	<nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">P2IG UNTAN</a>
		</div>
		<ul class="nav navbar-nav navbar-right">
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/1.png"><span class="badge">9</span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>Account</strong>
						</li>
					<li class="m_2"><a href="#"><i class="fa fa-bell-o"></i> Updates <span class="label label-info">42</span></a></li>
					<li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i> Messages <span class="label label-success">42</span></a></li>
					<li class="m_2"><a href="#"><i class="fa fa-tasks"></i> Tasks <span class="label label-danger">42</span></a></li>
					<li><a href="#"><i class="fa fa-comments"></i> Comments <span class="label label-warning">42</span></a></li>
					<li class="dropdown-menu-header text-center">
						<strong>Settings</strong>
					</li>
					<li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
					<li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Settings</a></li>
					<li class="m_2"><a href="#"><i class="fa fa-usd"></i> Payments <span class="label label-default">42</span></a></li>
					<li class="m_2"><a href="#"><i class="fa fa-file"></i> Projects <span class="label label-primary">42</span></a></li>
					<li class="divider"></li>
					<li class="m_2"><a href="#"><i class="fa fa-shield"></i> Lock Profile</a></li>
					<li class="m_2"><a href="#"><i class="fa fa-lock"></i> Logout</a></li>	
	        	</ul>
	      	</li>
		</ul>
		<form class="navbar-form navbar-right">
            <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
        </form>
        <div class="navbar-default sidebar" role="navigation">
        	<div class="sidebar-nav navbar-collapse">
        		<ul class="nav" id="side-menu">
        			<li>
                    	<a href="index.html"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                    </li>
                    <li>
                    	<a href="#"><i class="fa fa-question nav_icon"></i>Kuesioner<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Kategori</a>
                                <a href="#">Pertanyaan</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                    	<a href="#"><i class="fa fa-map-marker nav_icon"></i>Daerah</a>
                    </li>
                    <li>
                    	<a href="#"><i class="fa fa-users nav_icon"></i>Data Responden</a>
                    </li>
                    <li>
                    	<a href="#"><i class="fa fa-comments nav_icon"></i>Tanggapan</a>
                    </li>
        		</ul>
        	</div>
        </div>
	</nav>
	<!-- navbar -->
	<div id="page-wrapper">
		<div class="graphs">
			@yield('content')	
		</div>
		<div class="copy">
        	<p>Copyright &copy; 2016 P2IG Untan | Design by <a href="https://github.com/fxlik" target="_blank">Felik</a> </p>
	    </div>
	</div>
	<!-- page-wrapper -->
</div>
<!-- wrapper -->

	<script src="{{ url('js') }}/bootstrap.min.js"></script>
</body>
</html>