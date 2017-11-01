		myApp.controller("projectController",function($scope,$log,$http){
			$scope.msg3 = "this is 3";

			$scope.displayUsers = function(){
				$http.get("server/getuser.php")
				.success(function(data){
					$scope.data = data;
					$log.info(data);
				})
			}
			$scope.getSource = function(){
				$http.get("https://newsapi.org/v1/sources")
				.success(function(data){
					$scope.sources = data.sources;
					$log.info(data);
					$log.info(sources[0].name);
				})
			}
			$scope.getNews = function(source){
				var source = source;
				var ns ="https://newsapi.org/v1/articles?source=" +source+ "&sortBy=top&apiKey=d1cfbf5cf1e74757a5fad5cc65fd17eb";

				$http.get(ns)
				.success(function(data){
					$scope.dt = data.articles;
					$log.info(dt);
				})
			}
			$scope.deleteUser = function(id){
				//$log.info('data');
				$http.post("server/deleteUser.php",{'id':id})
				.success(function(data){
					$log.info(data);
					$scope.displayUsers();
				})
			}

		})