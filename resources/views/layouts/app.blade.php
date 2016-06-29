<!DOCTYPE html>
<html lang="en">
<head>
	<title>Orient Corporation</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="Magnetic is a stunning responsive HTML5/CSS3 photography/portfolio website  template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/style.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
</head>
<body>
	@include('layouts.header')
	@yield('content')
	
	<script>
	function initialize() {
	  var mapProp = {
	    center: new google.maps.LatLng(-6.177036, 106.956819),
	    zoom:15,
	    mapTypeId:google.maps.MapTypeId.ROADMAP
	  };
	  var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	<script type="text/javascript">
		$(window).scroll(function(){
			var menuHeight = $('.menu').offset().top;
			var bgHeight = $('.fixed-bg-one').offset().top - 200;
			if( menuHeight > bgHeight && menuHeight < bgHeight + 300){
				$(".menu").css("color", "#d89403");
			}else{
				$(".menu").css("color", "#454545");
			}
		});
	</script>
	<script>

		$(window).on('hashchange', function(e){
		    history.replaceState ("", document.title, e.originalEvent.oldURL);
		});

		$(document).ready(function(){
		  // Add smooth scrolling to all links
		  $("a").on('click', function(event) {
		    // Make sure this.hash has a value before overriding default behavior
		    if (this.hash !== "") {
		      // Prevent default anchor click behavior
		      event.preventDefault();

		      // Store hash
		      var hash = this.hash;

		      // Using jQuery's animate() method to add smooth page scroll
		      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
		      $('html, body').animate({
		        scrollTop: $(hash).offset().top
		      }, 800, function(){
		   
		        // Add hash (#) to URL when done scrolling (default click behavior)
		        window.location.hash = hash;
		      });
		    } // End if
		  });
		});
	</script>
</body>
</html>