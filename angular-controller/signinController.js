myApp.controller("signinController",function($scope, $location, $log, $http, $rootScope){
		$scope.s1 = "sign in controller";
		$scope.email = '';
		$scope.password = '';
		//$rootScope.isLoggedOut = true;
		$scope.authenticate = function(email,password){
			$http.post('server/login.php',
				{'email': $scope.email,
				 'password': $scope.password
				}
			).success(function(data){
				$log.info(data);
				if (data == 'true'){
					$location.path('/main');
					$rootScope.isLoggedin = true;	
					$rootScope.isLoggedout = false;				
				}else{
					$location.path('/signin');
					$rootScope.isLoggedout = true;
					$rootScope.isLoggedin = false;
					$scope.inncorrect = true;
				}
			})
	}

})