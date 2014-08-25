
@extends('master.layout')
@section('content')
	<div class="col-md-offset-2 col-md-8">
		<div class="panel panel-default">
			<div class="panel-body">
				{{ Form::open(['url' => '/login'])}}
				<div class="form-group input-group">
					{{ Form::label('name', 'Email*', ['class' => 'input-group-addon']) }}
					{{ Form::text('name', '', ['class' => 'form-control']) }}
				</div>
				<center>
					{{ Form::submit('Shop!', ['class' => 'btn btn-default'])}}

				</center>
			</div>
		</div>
	</div>
@stop