<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Home</title>
    <link href="assets/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
    <link type="text/css" href="assets/stylesheet/stylesheet.css" rel="stylesheet" media="screen" />
    <link type="text/css" href="assets/stylesheet/style.css" rel="stylesheet" media="screen" />
    <link type="text/css" href="assets/stylesheet/memenu.css" rel="stylesheet" media="screen" />
    <link type="text/css" href="assets/stylesheet/flexslider.css" rel="stylesheet" media="screen" />
    <link type="text/css" href="assets/stylesheet/jquery-ui.css" rel="stylesheet" media="screen" />

    <script type="text/javascript" src="assets/javascript/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/javascript/common.js"></script>
    <script type="text/javascript" src="assets/javascript/easing.js"></script>
    <script type="text/javascript" src="assets/javascript/easyResponsiveTabs.js"></script>
    <script type="text/javascript" src="assets/javascript/memenu.js"></script>
    <script type="text/javascript" src="assets/javascript/move-top.js"></script>
    <script type="text/javascript" src="assets/javascript/simpleCart.min.js"></script>
    <script type="text/javascript" src="assets/javascript/jquery.flexslider.js"></script>
    <script type="text/javascript" src="assets/javascript/jquery-ui.min.js"></script>
    <script type="application/x-javascript">
      addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <script>
    	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      	ga('create', 'UA-48014931-1', 'codyhouse.co');
      	ga('send', 'pageview');

      	jQuery(document).ready(function($){
      		$('.close-carbon-adv').on('click', function(){
      			$('#carbonads-container').hide();
      		});
      	});
    </script>
    <script type="text/javascript">
	    $(document).ready(function () {
	        $('#horizontalTab').easyResponsiveTabs({
	            type: 'default', //Types: default, vertical, accordion
	            width: 'auto', //auto or any width like 600px
	            fit: true   // 100% fit in a container
	        });

          $(".memenu").memenu();

          $(window).load(function() {
            $('.flexslider').flexslider({
              animation: "slide",
              controlNav: "thumbnails"
            });
          });

          $(function() {
              var menu_ul = $('.menu > li > ul'),
                     menu_a  = $('.menu > li > a');
              menu_ul.hide();
              menu_a.click(function(e) {
                  e.preventDefault();
                  if(!$(this).hasClass('active')) {
                      menu_a.removeClass('active');
                      menu_ul.filter(':visible').slideUp('normal');
                      $(this).addClass('active').next().stop(true,true).slideDown('normal');
                  } else {
                      $(this).removeClass('active');
                      $(this).next().stop(true,true).slideUp('normal');
                  }
              });

          });

          var defaults = {
          containerID: 'toTop', // fading element id
          containerHoverID: 'toTopHover', // fading element hover id
          scrollSpeed: 1200,
          easingType: 'linear'
          };

          $().UItoTop({ easingType: 'easeOutQuart' });

          $(window).load(function(){
          $( "#slider-range" ).slider({
                range: true,
                min: 0,
                max: 500,
                values: [ 100, 400 ],
                slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                }
          });
          $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

          });
	    });
    </script>
  </head>
  <body>
    <!--header-->
		<div class="header-info">
			<div class="container">
				<div class="header-top-in">
          <ul class="support">
            <li><a href="mailto:info@example.com"><i class="glyphicon glyphicon-envelope"> </i>info@example.com</a></li>
						<li><span><i class="glyphicon glyphicon-earphone" class="tele-in"> </i>0 462 261 61 61</span></li>
					</ul>
					<ul class=" support-right">
						<li><a href=""><i class="glyphicon glyphicon-user" class="men"> </i>Login</a></li>
						<li><a href=""><i class="glyphicon glyphicon-lock" class="tele"> </i>Create an Account</a></li>
					</ul>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div> <!-- .header-info -->

    <div class="header header5">
      <div class="header-top">
  			<div class="header-bottom">
          <div class="container">
            <div class="logo">
              <h1><a href="index.php">Our<span>Store</span></a></h1>
            </div>

            <div class="top-nav">
      				<ul class="memenu skyblue">
                <li class="active"><a href="index.php">Home</a></li>
      					<li class="grid"><a href="#">Desktop and Laptop</a>
      						<div class="mepanel">
      							<div class="row">
      								<div class="col1 me-one">
      									<h4>Shop</h4>
      									<ul>
                          <li><a href="product_all.php?id=dekstop">All Desktop and Laptop</a></li>
      									</ul>
      								</div>
                    </div>
                  </div>
                </li> <!-- .submenu -->
                <li class="grid"><a href="#">Peripherals</a></li>
                <li class="grid"><a href="#">Memory</a></li>
                <li class="grid"><a href="#">Printer</a></li>
              </ul> <!-- memenu -->

              <div class="clearfix"> </div>
            </div> <!-- .top-nav -->

              <div class="cart box_1">
                <a href="">
                  <h3> <div class="total">
                    <span class="simpleCart_total"> </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> </span>)</div>
                    <img src="images/cart2-2.png" alt=""/>
                  </h3>
                </a>
                <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                <div class="clearfix"> </div>
              </div> <!-- .cart_boc -->

              <div class="clearfix"> </div>

          </div> <!-- .container -->
          <div class="clearfix"> </div>
        </div> <!-- .header-bottom -->
      </div> <!-- .header top -->
