<!DOCTYPE html>
<html>
<head>
	<title>lawrences</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="fa/font-awesome.min.css">
	<link rel="stylesheet" href="owl/owl.theme.default.min.css">
	<link rel="stylesheet" href="owl/owl.carousel.min.css">
</head>
<body>
<?php include 'include/header.php' ?>
<div class="slider">
	<div class="center">


		<div class="owl-carousel owl-theme first">
			<img src="images/toystory.jpg">
			<img src="images/nemo.jpg">
			<img src="images/up.jpg">
			<img src="images/walle.jpg">
			
		</div>
		<div class="next-sale">
			<h1>
				Next sale <br>
				19th, 20th & 21st June
			</h1>
		</div>
		<div class="browse">
			<a href="#">browse catalogue</a>

		</div>
		<div class="arrow">
			<a href="#"><img src="images/arrow-white-btn.png"></a>
		</div>
		
		<script src="owl/jquery.min.js"></script>
		<script src="owl/owl.carousel.min.js"></script>
		<script>
		    $('.first').owlCarousel({
		    loop:false,
		    margin:0,
		    nav:true,
		    navText: [ '', '' ],
		    dots:true,
			lazyLoad:false,
		    animateOut: 'fadeOut',
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:1
		        },
		        1000:{
		            items:1
		        }
		    }
		})
		</script>

	</div>


</div>
<div class="news">
	<div class="center clearfix">
		<div class="left">
			<div class="video">
				<img src="images/homepic-video.jpg">
				<a href="#"><span><img src="images/arrow-white.jpg"></span></a>
				<div class="content">
					<h2>Video</h2>
					<p>
						To bid live at our saleroom without attending, register at www.the-saleroom.com Please note that all purchases made live will be subject to an additional 3% charge (plus vat)
					</p>
				</div>
			</div>
			<div class="video">
				<img src="images/homepic-valuations.jpg">
				<a href="#"><span><img src="images/arrow-white.jpg"></span></a>
				<div class="content">
					<h2>Valuations</h2>
					<p>
						Our Bletchingley saleroom is open from 9am to 5pm Monday to Friday. We are always available to carry out a verbal valuation on items brought in to us during these hours. The service is free of charge and without obligation.
					</p>
				</div>
			</div>
			<div class="video">
				<img src="images/homepic-buyingnselling.jpg">
				<a href="#"><span><img src="images/arrow-white.jpg"></span></a>
				<div class="content">
					<h2>Buying & selling</h2>
					<p>
						All items offered for auction are on view on the Friday and Saturday prior to the mid-week sale. Anyone can attend either the viewing or the sale itself.
					</p>
				</div>
			</div>
			
		</div>
		<div class="news-right clearfix">
			<h3>Latest news</h3>
			<div class="container">
				<span><img src="images/homepic-buyingnselling.jpg"></span>
				<div class="text">
					<p>
						Post and Packing can be arranged but is entirely at the cost and ris...
					</p>
					<a href="read-more.php">Read more</a>
				</div>
			</div>
			<div class="container middle">
				<span><img src="images/homepic-buyingnselling.jpg"></span>
				<div class="text">
					<p>
						Post and Packing can be arranged but is entirely at the cost and ris...
					</p>
					<a href="read-more.php">Read more</a>
				</div>
			</div>
			<div class="container">
				<span><img src="images/homepic-buyingnselling.jpg"></span>
				<div class="text">
					<p>
						Post and Packing can be arranged but is entirely at the cost and ris...
					</p>
					<a href="read-more.php">Read more</a>
				</div>
			</div>
		</div>
		
	</div>
</div>
<?php include 'include/footer.php' ?>

</body>
</html>