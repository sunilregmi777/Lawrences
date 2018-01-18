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
<div class="lots">
	<div class="center clearfix">
		<div class="your-bid-left">
			<a href="lots.php">Back to Catalogue</a>
			
		</div>
		<div class="your-bid-right clearfix">
			<h1>
				February auction<br>
				<span>
					Carpets and Rugs, Textiles, Misc Collectables, Books<br>
					10am Tuesday 7th February (Lots 1 - 786)
				</span>
			</h1>
			<div class="your-bid-right1">
				<img src="images/lot-image.jpg">
						<ul class="owl-carousel slider2">
							<li>
								<a href="#"><img src="images/auction-item5.jpg"></a>
							</li>
							<li>
								<a href="#"><img src="images/auction-item6.jpg"></a>
							</li>
							<li>
								<a href="#"><img src="images/auction-item1.jpg"></a>
							</li>
							<li>
								<a href="#"><img src="images/auction-item2.jpg"></a>
							</li>
							<li>
								<a href="#"><img src="images/auction-item5.jpg"></a>
							</li>
							<li>
								<a href="#"><img src="images/auction-item6.jpg"></a>
							</li>
							<li>
								<a href="#"><img src="images/auction-item1.jpg"></a>
							</li>
							<li>
								<a href="#"><img src="images/auction-item2.jpg"></a>
							</li>


							
						</ul>
			</div>
		</div>
		<div class="your-bid-right2">
			<div class="bid-info">
				<strong>Lot number<br></strong>
				<small>#1</small>
			</div>
			<div class="bid-info">
				<strong>Estimated price<br></strong>
				<small>£200 - £300</small>
			</div>
			<div class="bid-info">
				<strong>Details<br></strong>
				<small>Tabriz carpet, having all-over floral design with multiple borders on a wine ground.</small>
			</div>
			<div class="place-order">
					<strong>Place your bid
						<input type="text" value="£">
					</strong>
					<a href="bidding-basket.php">Add to bidding basket</a>
			</div>
				
		</div>
	</div>
</div>

	<script src="owl/jquery.min.js"></script>
			<script src="owl/owl.carousel.min.js"></script>
			<script>
			    $('.slider2').owlCarousel({
			    loop:false,
			    margin:0,
			    nav:true,
			    navText: [ '<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>','<i class="fa fa-chevron-circle-left" aria-hidden="true"></i>'],
			    dots:false,
			    items:4,
			    lazyLoad:false,

			    
			})
			</script>	

<?php include 'include/footer.php' ?>
</body>
</html>