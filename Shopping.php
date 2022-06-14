<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport content=" width="device-width, initial-scale=1.0">
	<title> Shop </title>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" 
	integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" 
	integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" 
	crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<link rel="stylesheet" href="style.css">
	
	<style>
		.product img{
			width: 100%;
			height: auto;
			box-sizing: border-box;
			object-fit: cover;
		}
		
		#featured > div.row.mx-auto.container > nav > ul > li.page-item.active > a{
			background-color: LightGreen;
		}
		
		#featured > div.row.mx-auto.container > nav > ul > li:nth-child(n):hover>a{
			background-color: green;
			color: #fff;
		}
		
		.pagination a{
			color: lightGreen;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
		<div class="container">
			<img src="img/logo.jpg" alt="">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i  id="bar" class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
		
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home</a>
					</li>
		
					<li class="nav-item">
						<a class="nav-link active" href="Shop.php">Shop</a>
					</li>
		
					<li class="nav-item">
						<a class="nav-link" href="blog.php">Blog</a>
					</li>
		
					<li class="nav-item">
						<a class="nav-link" href="About-page.php">About</a>
					</li>
			
					<li class="nav-item">
						<a class="nav-link" href="contact-page.php">Contact Us</a>
					</li>
			
					<li class="nav-item">
						<div class="row">
							<div class="col-sm"><i class="fas fa-search"></i></div>
						</div>	
					</li>
				</ul>	
			</div>
		</div>
	</nav>
	
	
<section id="featured" class="my-5 py-5">
	<div class="container mt-5 py-5">
		<h2 class="font-weight-bold">Our Products</h2>
		<hr>
		<p>Here you can check out our main products with fair price.</p>
	</div>
</section>

<section class="shop container">
	<div class="shop-content">
		<div class = "product-box">
			<img src ="img/cabbage.jpg" alt="" class="product-img">
			<h2 class="product-title">Cabbage</h2>
			<span class="price">R10</span>
			<i class='fas fa-shopping-bag'></i>
		</div>
	</div>
	
	<div class="shop-content">
		<div class = "product-box">
			<img src ="img/chili_peppers.JPG" alt="" class="product-img">
			<h2 class="product-title">Chili pepper</h2>
			<span class="price">R45</span>
			<i class='fas fa-shopping-bag'></i>
		</div>
	</div>
</section>

<footer class="mt-5 py-5">
	<div class="row container mx-auto pt-5"> 
		<div class="footer-one col-lg-3 col-mg-6 col-12 mb-3">
			<img src="img/logo.jpg" alt="">
			<p>
			a family owned commercial farm <br>
			that a is part of Ngcwembe Investments.
			<br>It was acquired in 2018 and has
			been undergoing<br> development in order 
			to commercialize and gain profit. 
			</p>
		</div>
		
		<div class="footer-two col-lg-3 col-mg-6 col-12 mb-3">
			<h5  class="pb-2">Featured</h5>
			<ul class="text-uppercase list-unstyled">
				<li><a href="#">currently empty</a></li>
				<li><a href="#">currently empty</a></li>
				<li><a href="#">currently empty</a></li>
				<li><a href="#">currently empty</a></li>
				<li><a href="#">currently empty</a></li>
			</ul>
		</div>
		
		<div class="footer-three col-lg-3 col-mg-6 col-12 mb-3">
			<h5  class="pb-2">Contact Us</h5>
			<div>
				<h6 class="text-uppercase">Address</h6>
				<p>10 YELLOWWOOD, BREIDBACH, KINGS WILLAIM TOWN</p>
			</div>
			
			<div>
				<h6 class="text-uppercase">Phone</h6>
				<p>082 921 7788</p>
			</div>
			
			<div>
				<h6 class="text-uppercase">Email</h6>
				<p>123@Kweshi@gmail.com</p>
			</div>
		</div>
		
		<div class="footer-four col-lg-3 col-md-6 col-12">
			<h5  class="pb-2">pics</h5>
				<div class="row">
					<img class="img-fluid w-25 h-100 m-2" src="img/Working_girl.jpg" alt="">
					<img class="img-fluid w-25 h-100 m-2" src="img/(1).JPG" alt="">
					<img class="img-fluid w-25 h-100 m-2" src="img/(2).JPG" alt="">
					<img class="img-fluid w-25 h-100 m-2" src="img/(3).JPG" alt="">
					<img class="img-fluid w-25 h-100 m-2" src="img/(4).JPG" alt="">
				</div>
		</div>
	
		<div class="copyright mt-5">
			<div class="row container mx-auto">
				<div class="col-lg-4 col-md-6 col-12 text-nowrap mb-4" >
					<p> Lihle eCommerce © 2022. All Rights Reserved</p>
				</div>
				
		</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src="shopping-cart.js"></script>
</body>
</html>