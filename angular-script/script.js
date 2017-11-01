var myApp = angular.module("myModule", ['ngRoute'])
		.config(['$routeProvider',function($routeProvider) {
		    $routeProvider
		    .when("/main", {
		        templateUrl : "templates/main.php",
		        controller : "mainController"
		    })
		    .when("/home", {
		        templateUrl : "templates/home.php",
		        controller : "homeController"
		    })
		    .when("/about", {
		        templateUrl : "templates/about.php",
		        controller : "aboutController"
		    })
		    .when("/projects", {
		        templateUrl : "templates/projects.php",
		        controller : "projectController"
		    })
		    .when("/contact", {
		        templateUrl : "templates/contact.php",
		        controller : "contactController"
		    })
		    .when("/signin", {
		        templateUrl : "templates/signin.php",
		        controller : "signinController"
		    })
		     .when("/signup", {
		        templateUrl : "templates/signup.php",
		        controller : "signupController"
		    })

		    .otherwise({ redirectTo: '/main' })
	
		}])