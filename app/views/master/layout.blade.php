<?php use Carbon\Carbon; ?>

<html ng-app="FootsignsApp">
	<head>
		<title> Footsigns </title>
		{{ HTML::style('bootstrap.css')}}
		{{ HTML::style('main.css')}}
	</head>
	<body ng-controller="ShoesCartCtrl" style="background-color:rgb(0,38,58)">
		<br/>
		<div class="container row">
			<div class="col-md-offset-2 col-md-10">
				<div class="panel panel-default row">
					<img src="/footsigns1.jpg" style="padding:5px" class="img-responsive img-rounded col-md-6">
					<div class="panel-body col-md-6" style="height:243px">
						<h1> {{Carbon::now()->subDays(10)->format('M d, Y')}} </h1>
						@if(isset($user))
							<b>Shopper Email:</b> {{ $user }}
						@endif
						
					</div>
				</div>
			</div>
		</div>
		<div class="container row">
			<div class="col-md-offset-2 col-md-10">
				<div class="panel panel-default">
					<div class="panel-body">
						@yield('content')
					</div>
				</div>
			</div>
		</div>
		{{ HTML::script('angular.min.js') }}
		{{ HTML::script('underscore.min.js') }}
		@yield('js')
	</body>
</html>