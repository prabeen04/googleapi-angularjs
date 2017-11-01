myApp.factory('registerService',function($http){
	var test = {};

	test.testing = function(){
		return "testing successfull";

	}
	test.register = function(){
			var dt = {};
				$http.get("server/getuser.php")
				.success(function(data){
					//$scope.data = data;
					//$log.info(data);
					dt = data;
					
				})
				return dt;
	 			}
					
					//return msg;	
	return test;	
})