var footsignsApp = angular.module('FootsignsApp', [], function($interpolateProvider)
{
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
});

footsignsApp.controller('ShoesCartCtrl', ['$scope', '$http', function ($scope, $http) {
	$scope.mode = 0;
	$scope.shoes = [];
	$scope.cart = [];
	$scope.hasLoaded = false;
	$scope.totalPrice = 0;

	$scope.addToCart = function(shoe) {
		$scope.cart.push(shoe);
		$scope.shoes = _.filter($scope.shoes, function(shoe2) {
			return shoe2 != shoe;
		});
		setTotalPrice();
	};

	$scope.removeFromCart = function(shoe) {
		$scope.shoes.push(shoe);
		$scope.cart = _.filter($scope.cart, function(shoe2) {
			return shoe2 != shoe;
		});
		setTotalPrice();
	};

	function setTotalPrice()
	{
		$scope.totalPrice = 0;

		for (var i = 0; i < $scope.cart.length; i++) {
			$scope.totalPrice += $scope.cart[i].price * $scope.cart[i].quantity;
		};
	}

	$http.get('/shoes').success(function(shoes)
	{
		$scope.shoes = shoes;
		$scope.hasLoaded = true;
	});
}]);