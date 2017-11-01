<!DOCTYPE html>
<html ng-app = "myModule">
<head>
	<title>Angular JS Project</title>
	<link rel="shortcut icon" href="http://lorempixel.com/32/32/">
	<link rel="stylesheet" type="text/css" href="node_modules/semantic-ui/dist/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="node_modules/wow.js/css/libs/animate.css">
	<link rel="stylesheet" type="text/css" href="node_modules/nprogress/nprogress.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<!-- <base href="/angular" /> -->
</head>

<body>
<!-- website header and navbar -->
	<div class="ui secondary  top tiny pointing menu main-nav" style="margin-bottom: 0px;">

			<div>
				<a id="sidebar-icon" class="left item"><i class="sidebar large teal icon"></i></a>
			</div>

			<div class="ui teal ">
				<a href="#/main" class="left item logo"><h1 class="my-logo">Prabeen</h1></a>
			</div>

		<div class="right item nav-menu">
				<a class="item" href="#/home">Home</a>
				<a class="item" href="#/about">About</a>
				<a class="item" href="#/projects">Projects</a>
				<a class="item" href="#/contact">Contact</a>
				<a class="item" href="#/fancy">Fancy</a>
		<div>
			<div class="ui buttons">
				<a href="#/signin" class="ui button black">
					<i class="signin icon"></i>Login
				</a>
			<div class="or"></div>
				<a href="#/signup" class="ui button green">
					<i class="signin icon"></i>Sign Up
				</a>
			</div>
		</div>
      <div ng-show="isLoggedin" class="ui simple dropdown item">
	        Prabeen <i class="dropdown icon"></i>
	        <div class="menu">
	          <a class="item" href="#">Profile</a>
	          <a class="item" href="#">Photos</a>
	          <div class="divider"></div>
	          <div class="header">Settings</div>
	          <a class="item" href="#">Log Out</a>
	        </div>
	      </div>

		</div>
	</div>

	<div class="ui sidebar menu large compact container icon labeled vertical">
		<a class="item" href="#/main"><i class="global icon"></i>Main</a>
		<a class="item" href="#/contact"><i class="car icon"></i>Contact</a>

		<div class="ui buttons">
			<button class="ui button black">
				<i class="signin icon"></i>Login
			</button>
				<div class="or"></div>
			<button class="ui button green">
				<i class="signin icon"></i>Sign Up
			</button>
		</div>
	</div>
<!-- website header and navbar -->
<!-- Following Menu -->
<div class="ui large top fixed hidden menu">
  <div class="ui container">
    <a class="active item" href="#">Main</a>
    <a class="item" href="#">Home</a>
    <a class="item" href="#">About</a>
    <a class="item" href="#">Project</a>
    <div class="right menu">
      <div class="item">
        <a class="ui button" href="#">Log in</a>
      </div>
      <div class="item">
        <a class="ui primary button" href="#">Sign Up</a>
      </div>
    </div>
  </div>
</div>

<!-- Following Menu -->    	
<!--<ng-view>

</ng-view> -->

    <div ng-view>
	<div class="ui segment">
  <div class="ui active inverted dimmer" style="margin: 100px">
    <div class="ui large text loader">Loading</div>
  </div>

</div>
	</div>	



  <div class="ui inverted vertical footer segment">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="three wide column">
          <h4 class="ui inverted header">About</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Sitemap</a>
            <a href="#" class="item">Contact Us</a>
            <a href="#" class="item">Religious Ceremonies</a>
            <a href="#" class="item">Gazebo Plans</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Services</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Banana Pre-Order</a>
            <a href="#" class="item">DNA FAQ</a>
            <a href="#" class="item">How To Access</a>
            <a href="#" class="item">Favorite X-Men</a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Footer Header</h4>
          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="node_modules/semantic-ui/dist/semantic.min.js"></script>

<!-- 
 <script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.1/angular.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.16/angular-route.min.js"></script> 
 -->
       
<script type="text/javascript" src="node_modules/angular/angular.min.js"></script>
<script type="text/javascript" src="node_modules/angular/angular-route.min.js"></script>
<script type="text/javascript" src="node_modules/wow.js/dist/wow.min.js"></script>
<script type="text/javascript" src="node_modules/nprogress/nprogress.js"></script>
<script type="text/javascript" src="./angular-script/script.js"></script>
<!-- angular controller files -->
<script type="text/javascript" src="./angular-controller/mainController.js"></script>
<script type="text/javascript" src="./angular-controller/homeController.js"></script>
<script type="text/javascript" src="./angular-controller/aboutController.js"></script>
<script type="text/javascript" src="./angular-controller/projectController.js"></script>
<script type="text/javascript" src="./angular-controller/signinController.js"></script>
<script type="text/javascript" src="./angular-controller/signupController.js"></script>
<script type="text/javascript" src="./angular-controller/contactController.js"></script>
<!-- angular service files -->
<script type="text/javascript" src="./angular-services/registerService.js"></script>

<script type="text/javascript">
	//$('.ui.dropdown').dropdown();

	$('#sidebar-icon').click(function(){
	$('.sidebar.menu').sidebar('toggle');
	});

</script>
 <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
  </script>

</body>
</html>