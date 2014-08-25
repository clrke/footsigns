@extends('master.layout')
@section('content')
	<ul class="list-group">
		<li class="list-group-item"> {{ $item->name }} </li>
		<li class="list-group-item"> {{ $item->description }} </li>
		<li class="list-group-item"> {{ $item->price }} </li>
		<li class="list-group-item"> {{ HTML::image($item->image)}} </li>
	</ul>
@stop