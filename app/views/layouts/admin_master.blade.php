<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Wpa12 Bookshop Dashboard</title>
		{{ HTML::style('dashboard/ckeditor/contents.css')}}

	{{ HTML::style('dashboard/css/bootstrap.min.css') }}
	{{ HTML::style('dashboard/font-awesome/css/font-awesome.min.css') }}
	{{ HTML::style('dashboard/css/sb-admin.css') }}
	{{ HTML::style('dashboard/css/datepicker.css') }}
	{{ HTML::style('dashboard/css/basic.css');}}
	{{ HTML::style('dashboard/css/dropzone.css');}}
	{{ HTML::style('dashboard/css/custom_style.css');}}
	{{ HTML::script('dashboard/js/dropzone.js') }}
	{{ HTML::script('dashboard/ckeditor/ckeditor.js') }}

</head>
<body>
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{ URL::to("/admin") }}">Wpa 12 Bookshop Dashboard</a>
				</div>
				<!-- /.navbar-header -->
				<ul class="nav navbar-top-links navbar-right">
					<li>
						<a href="{{ URL::to("/admin") }}"><span class="glyphicon glyphicon-home"></span></a>
					</li>
					<li>
						<a href="" target="_blank"><span class="glyphicon glyphicon-transfer"></span></a>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
						</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li>
								<a href="#">
									<div>
										<i class="fa fa-comment fa-fw"></i> New Comment
										<span class="pull-right text-muted small">4 minutes ago</span>
									</div>
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">
									<div>
										<i class="fa fa-twitter fa-fw"></i> 3 New Followers
										<span class="pull-right text-muted small">12 minutes ago</span>
									</div>
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">
									<div>
										<i class="fa fa-envelope fa-fw"></i> Message Sent
										<span class="pull-right text-muted small">4 minutes ago</span>
									</div>
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">
									<div>
										<i class="fa fa-tasks fa-fw"></i> New Task
										<span class="pull-right text-muted small">4 minutes ago</span>
									</div>
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">
									<div>
										<i class="fa fa-upload fa-fw"></i> Server Rebooted
										<span class="pull-right text-muted small">4 minutes ago</span>
									</div>
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a class="text-center" href="#">
									<strong>See All Alerts</strong>
									<i class="fa fa-angle-right"></i>
								</a>
							</li>
						</ul>
						<!-- /.dropdown-alerts -->
					</li>
					<!-- /.dropdown -->
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
							<li><a href="logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
							</li>
						</ul>
						<!-- /.dropdown-user -->
					</li>
					<!-- /.dropdown -->
				</ul>
				<!-- /.navbar-top-links -->
			</nav>
			<!-- /.navbar-static-top -->
			<!-- End of Head menu -->
			<nav class="navbar-default navbar-static-side" role="navigation">
				<div class="sidebar-collapse">
					<ul class="nav" id="side-menu">
						<li class="sidebar-search">
							<div class="input-group custom-search-form">
								<input type="text" class="form-control" placeholder="Search...">
								<span class="input-group-btn">
									<button class="btn btn-default" type="button">
										<i class="fa fa-search"></i>
									</button>
								</span>
							</div>
							<!-- /input-group -->
						</li>
						<li>
							<a href="{{ URL::to("/admin") }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard </a>
						</li>
						<li>
							<a href="{{ URL::to("/admin") }}"><span class="glyphicon glyphicon-th-list"></span> Order</a>
						</li>
						<li>
							<a href="#"><span class="glyphicon glyphicon-th-list"></span> Books 									      <span class="caret"></span>
</a>
							<ul class="nav nav-second-level">
								<li>
									<a href="{{ URL::to("/admin/allbook") }}"> All books</a>
								</li>
								<li>
									<a href="{{ URL::to('/admin/addbook')}}"> Add books</a>
								</li>
							</ul>    
						</li>

						<li>
							<a href="{{ URL::to("admin/allcustomer") }}"><span class="glyphicon glyphicon-user"></span> Customer 									      <span class="caret"></span>
</a>
							<ul class="nav nav-second-level">
								<li>
									<a href="{{ URL::to("admin/allcustomer") }}">All Customer </a>

								</li>
								<li>
									<a href="#">Online Customer</a>
								</li>
							</ul>
							<!-- /.nav-second-level -->

						</li>
					</ul>
					<!-- /#side-menu -->
				</div>
				<!-- /.sidebar-collapse -->
			</nav>
			<!-- /.navbar-static-side -->			
			@yield('content')
			<!-- Core Scripts - Include with every page -->
			{{ HTML::script('dashboard/js/jquery.js') }}
			{{ HTML::script('dashboard/js/bootstrap.js') }}
			{{ HTML::script('dashboard/js/jquery.metisMenu.js') }}
			{{ HTML::script('dashboard/js/jquery.tablesorter.min.js') }}
			{{ HTML::script('dashboard/js/sb-admin.js') }}
			{{ HTML::script('dashboard/js/bootstrap-datepicker.js') }}

		</div>
	</div>
	<script type="text/javascript">
		$(function(){
			$("#myTable").tablesorter();
		});
	</script>
	<script>
                CKEDITOR.replace( 'ckeditor' );
	</script>
</body>
</html>