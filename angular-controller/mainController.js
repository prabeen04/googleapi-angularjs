myApp.controller("mainController",function($scope,$location,$http,$log){
		$scope.msg5 = "this is main 5";

		$scope.search = function(){
				NProgress.start();
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
					'type' : $scope.type
				})
			.success(function(data){
				$scope.msg = "data inserted";
				//alert(data);
				$log.info(data);
				$log.info("data inserted");
				$scope.dt = data.results ;
				NProgress.done();
			})

		})

	}

	$scope.getDetails = function(place_id){
			$scope.place_id = place_id;
			$log.info($scope.place_id);
				$http.post(
				"api_server_call/get_more_detail.php",
				{
					'place_id' :$scope.place_id
				})
			.success(function(data){
				$scope.msg = "data inserted";
				//alert(data);
				$log.info(data);
				$log.info("detailed received");
				$scope.dtl = data.result;
				//$log.info(dtl.url);
				var photo = data.result.photos[0].photo_reference;
				$scope.photo = photo;

				$http.post(
				"api_server_call/get_photo.php",
				{
					'photo' :$scope.photo
					
				})
			.success(function(data){
				//$scope.msg = "data inserted";
				//alert(data);
				$log.info(data);
				$log.info("photo inserted");
				$scope.pht = data;
				//NProgress.done();
			})


			})
	}

})