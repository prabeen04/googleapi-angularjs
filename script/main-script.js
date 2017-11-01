	
	$('.ui.dropdown').dropdown();
	$('.ui.accordion').accordion();
/*
	$('#sidebar-icon').click(function(){
	$('.sidebar.menu').sidebar('toggle');
});*/


  $(document)
    .ready(function() {

      // fix menu when passed
      $('.mast')
        .visibility({
          once: false,
          onBottomPassed: function() {
            $('.fixed.menu').transition('fade in');
          },
          onBottomPassedReverse: function() {
            $('.fixed.menu').transition('fade out');
          }
        })
      ;

/*      $('.fluid.accordion')
  .transition('fly up',5000)
;*/
var city =	[
	{ title: "Mumbai", description: "Maharastra", image: './images/png/camaro.png'},
	{ title: "Delhi", description: "Delhi", image: './images/png/diamond.png'},
	{ title: "Bengaluru", description: "Karnataka", image: './images/png/safe-box.png'},
	{ title: "Ahmedabad", description: "Gujurat", image: './images/png/hourglass.png'},
	{ title: "Mumbai", description: "Maharastra", image: './images/png/audi.png'},
	{ title: "Cuttack", description: "Odisha", image: './images/png/banana.png'},
	{ title: "Chennai", description: "Tamilnadu", image: './images/png/battery.png'},
	{ title: "Hydrabad", description: "Telengana", image: './images/png/bike.png'},
	{ title: "Vizak", description: "Andhra Pradesh", image: './images/png/bird.png'},
	{ title: "Rourkela", description: "Odisha", image: './images/png/bird-nest.png'},
	{ title: "Raipur", description: "Chattishgarh", image: './images/png/boat.png'},
	{ title: "Patna", description: "Bihar", image: './images/png/dragon.png'},
	{ title: "Ranchi", description: "Jharkhand", image: './images/png/elephant.png'},
	{ title: "Berhampur", description: "Odisha", image: './images/png/green-apple.png'},
	{ title: "Lucknow", description: "Uttar Pradesh", image: './images/png/horse.png'},
	{ title: "Indore", description: "Madhya Pradesh", image: './images/png/leaf.png'},
	{ title: "Bhopal", description: "Madhya Pradesh", image: './images/png/lemon.png'},
	{ title: "Sundargarh", description: "Odisha", image: './images/png/michael-jackson.png'},
	{ title: "Kolkata", description: "West Bengal", image: './images/png/mini-van.jpg'},
	{ title: "Manali", description: "North East", image: './images/png/orange.png'},
	{ title: "Deheradun", description: "Uttarakhand", image: './images/png/power.png'},
	{ title: "Puri", description: "Odisha", image: './images/png/pretty-women.jpg'},
	{ title: "Chandigarh", description: "Punjab", image: './images/png/redfruit.png'},
	{ title: "Gurugram", description: "Hariyana", image: './images/png/refugee.jpg'},
	{ title: "Jaipur", description: "Rjasthan", image: './images/png/save-tree.png'},
	{ title: "Sambalpur", description: "Odisha", image: './images/png/sphere.png'},
	{ title: "Sringar", description: "Jammu & Kashmir", image: './images/png/sports-ball.png'},
	{ title: "Maldives", description: "Lakshyadeep Island", image: './images/png/swan.jpg'},
 	{title: "Bhubaneswar", description: "Odisha", image: './images/png/dnd.png'}
				];

var content = [
  { title: 'Andorra' },
  { title: 'United Arab Emirates' },
  { title: 'Afghanistan' },
  { title: 'Antigua' },
  { title: 'Anguilla' },
  { title: 'Albania' },
  { title: 'Armenia' },
  { title: 'Netherlands Antilles' },
  { title: 'Angola' },
  { title: 'Argentina' },
  { title: 'American Samoa' },
  { title: 'Austria' },
  { title: 'Australia' },
  { title: 'Aruba' },
  { title: 'Aland Islands' },
  { title: 'Azerbaijan' },
  { title: 'Bosnia' },
  { title: 'Barbados' },
  { title: 'Bangladesh' },
  { title: 'Belgium' },
  { title: 'Burkina Faso' },
  { title: 'Bulgaria' },
  { title: 'Bahrain' },
  { title: 'Burundi' }
  // etc
];
$('.ui.search')
  .search({
    source: city
  })
;
    });
