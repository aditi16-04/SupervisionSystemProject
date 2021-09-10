
<!DOCTYPE html>
<html>
<head>
<title> GPS based Supervision System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Proprietary a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>	
<!-- font files -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css">
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- /font files -->
<!-- css files -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/update.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/photoGallery.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/progressbar.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css files -->
	
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<!-- navigation -->
<div class="navbar-wrapper">
    <div class="container">
		<nav class="navbar navbar-inverse navbar-static-top cl-effect-21">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html"><h1><span>S</span>upervision System</h1></a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php">Home</a></li>
						<li><a href="#about">About</a></li>
						
						
						<li><a href="login.php">Login</a></li>
						
						
					</ul>
				</div>
			</div>
        </nav>
    </div>
</div>
<!-- /navigation -->
<!-- banner section -->
<div class='header'>
</div>
<!-- /banner section -->

<!-- gallery section -->


<!-- /gallery section -->


<!-- footer section -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h4>Location</h4>
                    <p>VPKBIET <br>Pune, 413102</p>
                </div>
               
                <div class="footer-col col-md-4">
                    <h4>About Us</h4>
                    <p>GPS based supervision system provides authority to Chief Executive Officer to supervise various work sites with the help of GPS based mobile app which provides access to engineers with their allocated tasks.</p>
                </div>
				
				 <div class="footer-col col-md-4">
                    <h4>Contact Us</h4>
                    <p>aditichaudhari46@gmail.com <br>cholkhanepallavi@gmail.com<br>pradnyabhosale50@gmail.com</p>
                </div>
            </div>
        </div>
	</div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>© 2016 GPS based Supervision System. All Rights Reserved | Design by <a href="http://www.vpkbiet.org/" target="_blank">VPKBIET</a>|Under guidance of G.J.Chajjed </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /footer section -->
<a href="#0" class="cd-top">Top</a>
<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<!-- js for banner section -->
<script src="js/bgfader.js"></script>
<script>
var myBgFader = $('.header').bgfader([
  'images/aditi.jpg',
  'images/pals.jpg',
  'images/amy.jpg',
  'images/pallavi.jpg',
], {
  'timeout': 2000,
  'speed': 2000,
  'opacity': 0.4
})

myBgFader.start()
</script>
<!-- /js for banner section -->
<!-- js for skill section -->
<script src="js/progressbar.js"></script>
<script>
    // Display the progress bar calling progressbar.js
	$('.progressbarPhp').progressBar({
		shadow : true,
		percentage : false,
		animation : true,
		animateTarget : true,
		barColor : "rgb(49, 112, 143)",
	});
	//Menu
	$(".spinDown").click(function() {
		var target = $(this).data("target");
		var scrollFix = -80;
		target = "#" + target;
		$("html,body").animate({
			scrollTop : $(target).offset().top + scrollFix
		}, 1000);
		return false;
	});
</script>
<!-- /js for skill section -->
<!-- js for gallery -->
<script type="text/javascript" src="js/photoGallery.js"></script>
<script type="text/javascript">
	$(function(){
		var photoGallery = new PhotoGallery();
	});
</script>
<!-- /js for gallery -->
<!-- js for back to top -->
<script src="js/main.js"></script> 
<!-- /js for back to top -->
<!-- js for smooth navigation -->
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, section.our-updates a, footer a[href='#myPage']").on('click', function(event) {

  // Store hash
  var hash = this.hash;

  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 900, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
    });
  });
})
</script>
<!-- /js for smooth navigation -->
<!-- js for slide animations -->
<script>
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>
<!-- /js for slide animations -->
<!-- /js files -->
</body>
</html>