myApp.controller("aboutController",function($scope, $location, $http, $log){

	var tp = 'atm';
	$scope.googleapi = function(){
		$http.post('api_server_call/google_location_api.php',
		{
			'location': $scope.location
		})
		.success(function(data){
			$log.info('workssss');
			$log.info(data);
			var lat = data.results[0].geometry.location.lat;
	 		var lng = data.results[0].geometry.location.lng;
	 		$scope.lat = lat;
	 		$scope.lng = lng;

		 	$http.post(
				"api_server_call/place_detail.php",
				{
					'lat' :$scope.lat,
					'lng' : $scope.lng,
					'type' : 'bar'
				})
			.success(function(data){
				$scope.msg = "data inserted";
				alert(data);
				$log.info(data);
				$log.info("data inserted");
			})

		})

	}

	$scope.getDetail = function(){
	 				$http.post(
	 					"api_server_call/place_detail.php",
	 					{
	 						/*'lat' :85.8245398,
	 						'lng' : 20.2960587,*/
	 						'type' : 'bar'
	 					})
	 				.success(function(data){
	 					$scope.msg = "data inserted";
	 					alert(data);
	 					$log.info(data);
	 					$log.info("data inserted");
	 				})

	 			}
})