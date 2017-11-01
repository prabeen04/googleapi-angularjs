
<!-- Following Menu -->

<div class="ui large top fixed hidden menu">
  <div class="ui container">
  <a class="item" href="#/home">Home</a>
  <a class="item" href="#/about">About</a>
  <a class="item" href="#/projects">Projects</a>
  <a class="item" href="#/contact">Contact</a>
    <div class="right menu">
      <div class="item">
        <a href="#/signin" class="ui button">Log in</a>
      </div>
      <div class="item">
        <a href="#/signup" class="ui primary button">Sign Up</a>
      </div>
    </div>
  </div>
</div>

<!-- Following Menu -->    	
<!-- main content -->

	<div class="ui vertical aligned center segment landing inverted mast">
		<div class="transbg">

<!-- 			<div class="ui container">
				<div class="ui secondary inverted top large pointing menu">
					<div>
						<a id="sidebar-icon" class="left item"><i class="sidebar icon"></i></a>
					</div>
					<div class="right item">
						<a class="item" href=""><i class="global icon"></i>Home</a>
						<a class="item" href=""><i class="global icon"></i>Cities</a>
						<a class="item" href=""><i class="car icon"></i>Get a Ride</a>

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
				</div>
			</div>
 -->    
			<div class="ui container text">
				<h1 class="ui header centered inverted wow bounceInDown landing-text" data-wow-duration="2s" data-wow-delay="300ms">Explore Everything near You</h1>
				 <div class="main-margin">
				<div class="container fluid findbg">
					<form class="ui form">
						<div class="field">
							<div class="fields">
								<div class="eleven wide field wow bounceInLeft " data-wow-duration="2s" data-wow-delay="300ms">
									<div class="ui search location">
										<div class="ui left icon input">
											<i class="inverted circular blue map icon"></i>
												<input class="" type="text" name="location" ng-model="location" placeholder="Enter Your Location" id="srch" />
										</div>
									</div>
								</div>

								<div class="five wide field wow bounceInRight " data-wow-duration="2s" data-wow-delay="300ms">

												<select class="ui fluid search dropdown" name="" ng-model="type">
            <option value="">Select Type</option>
            <option value="bar">Bar</option>
            <option value="restaurant">Restaurant</option>
            <option value="atm">Atm</option>
            <option value="hindu_temple">Temple</option>
            <option value="hospital">Hospital</option>
            <option value="bank">Bank</option>
            <option value="beauty_salon">Beauty Salon</option>
            <option value="book_store">Book Store</option>
            <option value="clothing_store">Clothing Store</option>
            <option value="doctor">Doctor</option>
            <option value="university">University</option>
            <option value="shopping_mall">Shopping Mall</option>
            <option value="university">University</option>
            <option value="school">School</option>
            <option value="pharmacy">Pharmacy</option>
            <option value="park">Park</option>
            <option value="movie_theater">Movie Theater</option>
            <option value="meal_delivery">Meal Delivery</option>
            <option value="liquor_store">Liquor Store</option>
            <option value="local_government_office">Government Office</option>
          </select>

								</div>
							</div>
						</div>
						<div class="field wow bounceInUp " data-wow-duration="2s" data-wow-delay="300ms">
							<button ng-click="search(location,type)" class="ui submit green container animated button" tabindex="0" id="open-alert">
								<div class="visible content">Lets GO</div>
								<div class="hidden content">Get an Amazing Ride 
									<i class="taxi icon"></i>
								</div>
							</button>
						</div>
					</form>


<div ng-show="dt != null" class="ui success message">
  <i class="close icon"></i>
  <br>
  <div class="header">
    Scroll Down to view the results
  </div><br>
</div>
				</div>
			</div>
		</div>






	</div>
	</div>
<br>
<!--  <div id="map"></div> -->
    <script>
      var map;
      function initMaps() {
        var uluru = {lat: 85.824, lng: 20.296};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
<div class="ui grid">
<div class="five wide column qwert" ng-repeat = "user in dt | filter:searchUser">
  <div class="ui icon message">
  <img src="{{user.icon}}">
  <div class="content">
    <div class="header">
   {{ user.name }} 
    </div>
    <p id="btn1"> {{ user.vicinity}} </p>
  </div>
  <form>
  <input type="hidden" ng-model="user.place_id" value="user.place_id">
  <button  ng-click="getDetails(user.place_id)">Get Detail</button></form>
</div>
</div>
</div>


  <hr/>
<div class="ui modal">
  <div class="header">Header</div>
  <div class="scrolling content">
    <p>Very long content goes here</p>
  </div>
</div>
  
     <p>{{ dtl.website }} </p>

 <div class="ui vertical stripe quote segment wow slideInLeft" data-wow-duration="0.5s" data-wow-delay="300ms">
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
        <div class="column">
          <h3 class="teal-color">"What a Company"</h3>
          <p class="light-color">That is what they all say about us</p>
        </div>
        <div class="column">
          <h3 class="teal-color">"I shouldn't have gone with their competitor."</h3>
          <p class="light-color">
            <i class="in flag"></i><b>Nan</b> Chief Fun Officer Acme Toys
          </p>
        </div>
      </div>
    </div>
  </div>
<br>
<div class="ui container">	
  <div class="ui segment light-text wow slideInRight" data-wow-duration="0.5s" data-wow-delay="300ms">

    <img class="ui large left floated rounded image" src="./images/jpg/shampion.jpeg">

    <h2 class=" ui center aligned container">The Ultimate Security </h2>
    <p>Te eum doming eirmod, nominati pertinacia argumentum ad his. Ex eam alia facete scriptorem, est autem aliquip detraxit at. Usu ocurreret referrentur at, cu epicurei appellantur vix. Cum ea laoreet recteque electram, eos choro alterum definiebas in. Vim dolorum definiebas an. Mei ex natum rebum iisque.</p>

    <p>Te eum doming eirmod, nominati pertinacia argumentum ad his. Ex eam alia facete scriptorem, est autem aliquip detraxit at. Usu ocurreret referrentur at, cu epicurei appellantur vix. Cum ea laoreet recteque electram, eos choro alterum definiebas in. Vim dolorum definiebas an. Mei ex natum rebum iisque.</p>

    <p>Te eum doming eirmod, nominati pertinacia argumentum ad his. Ex eam alia facete scriptorem, est autem aliquip detraxit at. Usu ocurreret referrentur at, cu epicurei appellantur vix. Cum ea laoreet recteque electram, eos choro alterum definiebas in. Vim dolorum definiebas an. Mei ex natum rebum iisque.</p>
       <p>Te eum doming eirmod, nominati pertinacia argumentum ad his. Ex eam alia facete scriptorem, est autem aliquip detraxit at. Usu ocurreret referrentur at, cu epicurei appellantur vix. Cum ea laoreet recteque electram, eos choro alterum definiebas in. Vim dolorum definiebas an. Mei ex natum rebum iisque.</p>
  </div>
</div>
<br>

<div class="ui container">	

 <div class="ui segment light-text">
    <img class="ui  large right floated rounded image" src="./images/jpg/canon.jpg">

    <h2 class=" ui center aligned container">The Ultimate Speed </h2>
    <p class="">Audiam quaerendum eu sea, pro omittam definiebas ex. Te est latine definitiones. Quot wisi nulla ex duo. Vis sint solet expetenda ne, his te phaedrum referrentur consectetuer. Id vix fabulas oporteat, ei quo vide phaedrum, vim vivendum maiestatis in.</p>

     <p>Eu quo homero blandit intellegebat. Incorrupte consequuntur mei id. Mei ut facer dolores adolescens, no illum aperiri quo, usu odio brute at. Qui te porro electram, ea dico facete utroque quo. Populo quodsi te eam, wisi everti eos ex, eum elitr altera utamur at. Quodsi convenire mnesarchum eu per, quas minimum postulant per id.</p>

    <p>Te eum doming eirmod, nominati pertinacia argumentum ad his. Ex eam alia facete scriptorem, est autem aliquip detraxit at. Usu ocurreret referrentur at, cu epicurei appellantur vix. Cum ea laoreet recteque electram, eos choro alterum definiebas in. Vim dolorum definiebas an. Mei ex natum rebum iisque.</p>

  </div>
</div>
<br>


<div class="ui container light-text">
	<div class="ui grid">
	  <div class="row">
	    <div class="eight wide column"></div>
	    <div class="eight wide column"></div>
	  </div>
	</div>	
</div>



<div class="ui  modal abt1">
  <i class="close icon"></i>
  <div class="header">fhfg
   {{ dtl.name }} 
  </div>
  <div class="image content">
    <div class="ui medium image">
      <img src="https://maps.googleapis.com/maps/api/place/photo?maxwidth=400&photoreference={{  photo}}&key=AIzaSyAYl3tV8A0nsXc7TVHUTEFFHPE9fBmy03s">
    </div>
    <div class="description">
      <div class="ui header">We've auto-chosen a profile image for you.</div>
      <p>We've grabbed the following image from the <a href="https://www.gravatar.com" target="_blank">gravatar</a> image associated with your registered e-mail address.</p>
      <p> {{ dtl.international_phone_number }} </p>
      <p> {{ dtl.website }} </p>
      <p> {{ dtl.rating }} </p>
    </div>
  </div>
  <div class="actions">
    <div class="ui black deny button">
      Nope
    </div>
    <div class="ui positive right labeled icon button">
      Yep, that's me
      <i class="checkmark icon"></i>
    </div>
  </div>
</div>



<script type="text/javascript" src="./script/main-script.js"></script>
<script type="text/javascript">
  function initMap(){
    var input = document.getElementById('srch');
    var autocomplete = new google.maps.places.Autocomplete(input);
  }

  $('.message .close')
  .on('click', function() {
    $(this)
      .closest('.message')
      .transition('fade')
    ;
  })
;
</script>
<script type="text/javascript">
  $('#btn1').click(function(){
    alert('ggjgfjgfj');
     $('.ui.modal.abt1')
      .modal('show');
  });
  /*

  */

    $(document).on("click", ".qwert", function() {
      //alert('yo oy');
   //your code here...
 $('.ui.modal.abt1')
      .modal('show');
  });
</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYl3tV8A0nsXc7TVHUTEFFHPE9fBmy03s&libraries=places&callback=initMap&callback=initMaps"></script>
