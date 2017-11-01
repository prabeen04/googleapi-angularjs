       myApp.controller("contactController",function($scope, $http, $log, registerService){
				var testing = registerService.testing();
				$log.info(testing);
				var register = registerService.register();
				$log.info(register);
/*	 			$scope.register = function(){
	 				$http.post(
	 					"server/question.php",
	 					{
	 						'username' : $scope.username,
	 						'email' : $scope.email,
	 						'password' : $scope.password
	 					})
	 				.success(function(data){
	 					$scope.msg = "data inserted";
	 					alert(data);
	 					$log.info(data);
	 				})

	 			}*/
		});