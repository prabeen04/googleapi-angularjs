
	myApp.controller("signupController",function($scope,$location,$http,$log){
		$scope.s2 = "sign up controller";

	 			$scope.register = function(){
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

	 			}
		})