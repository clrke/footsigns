@extends('master.layout')
@section('content')

	<form class="form-group">
		<div class="form-inline pull-right">
			<b> Search: </b>
			{{ Form::text('name', 'value', ['ng-model' => 'search', 'class' => 'form-control'])}}
		</div>
		{{ Form::button('Shoes', ['class' => 'btn', 'ng-class' => "mode == 0 ? 'btn-primary' : 'btn-default'", 'ng-click' => 'mode = 0']) }}
		{{ Form::button('Cart', ['class' => 'btn', 'ng-class' => "mode == 1 ? 'btn-primary' : 'btn-default'", 'ng-click' => 'mode = 1']) }}	
	</form>

	<div class="panel panel-default" ng-show="mode == 0">
		<div class="panel-body">
			<table class="table table-striped">
				<tr>
					<th> Picture </th>
					<th> Name </th>
					<th> Description </th>
					<th> Price (Php) </th>
					<th> Quantity </th>
					<th> Action </th>
				</tr>
				<tr ng-hide="hasLoaded">
					<td colspan="6" ng-hide="shoes.length > 0"> <i> <center> Loading...</center> </i> </td>
				</tr>
				<tr ng-show="hasLoaded">
					<td colspan="6" ng-hide="shoes.length > 0"> <i> <center> No Data. </center> </i> </td>
				</tr>
				<tr ng-repeat="shoe in shoes | filter:search"> 
					<td> <center> <img ng-src="/<%shoe.image%>" style = "width:30px"> </center> </td>
					<td> <% shoe.name %> </td>
					<td> <% shoe.description %> </td>
					<td> <% shoe.price.toFixed(2) %> </td>
					<td ng-init="shoe.quantity = 0"> <input type="number" ng-model="shoe.quantity" class="form-control" style="width:80px" min="0"> </td>
					<td> 
						<button class="btn btn-success" ng-class="shoe.quantity > 0? '' : 'disabled'" ng-click="addToCart(shoe);"> 
							Add to Cart 
						</button>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="panel panel-default" ng-show="mode == 1">
		<div class="panel-body">
			<table class="table table-striped">
				<tr>
					<th> Picture </th>
					<th> Name </th>
					<th> Description </th>
					<th> Price (Php) </th>
					<th> Quantity </th>
					<th> Action </th>
				</tr>
				<tr ng-hide="cart.length > 0">
					<td colspan="6"> <i> <center> No data </center> </i> </td>
				</tr>
				<tr ng-repeat="item in cart | filter:search">
					<td> <center> <img ng-src="/<%item.image%>" style = "width:30px"> </center> </td>
					<td> <% item.name %> </td>
					<td> <% item.description %> </td>
					<td> <% item.price.toFixed(2) %> </td>
					<td> <% item.quantity%> </td>
					<td> 
						<button class="btn btn-danger"ng-click="removeFromCart(item);"> 
							Remove 
						</button>
					</td>
				</tr>
			</table>
			<div class="col-md-12">
				<center>
					<b> Total Price:</b> Php <% totalPrice.toFixed(2) %> <br/> <br/>
					<button class="btn btn-default"> Buy all! </button>
				</center>
			</div>
		</div>
	</div>
@stop

@section('js')
	{{ HTML::script('shoecart.js') }}
@stop