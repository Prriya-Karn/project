	
<?php
	

	include 'food.php';

	?>



	

	<!DOCTYPE html>
	<html>
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>My Food Website</title>

		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

		 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<link rel="stylesheet" type="text/css" href="food4.css">
	</head>
	<body>

		
		<header>
			<nav class="navbar mb-5">
				<div class="logo">
				<a href="#"><img src="images\logo.png" style="width:100px;height: 60px; background: white;"></a>
			</div>

				<ul>
					<li>
						<a href="#home">Home</a>
					</li>
					<li>
						<a href="#dishes">Dishes</a>
					</li>
					<li>
						<a href="#about">About</a>
					</li>
					<li>
						<a href="#menu">Menu</a>
					</li>
					<li>
						<a href="#order">Order</a>
					</li>
					
				</ul>

				<button class="btn" style="background:#1a2a52ed; color: white;">
					+918368744279
				</button>
			</nav>
		</header>

		<!-- order now section -->
		<section class="mb-5" >
			
		<div class="main" id="home">
			<div class="main-content">
				<h1 class="text-capitalize"><span class="auto-type"></span></h1>
		
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
				<button class="btn">
					Order Now
				</button>

			</div>

			<div class="main-image">
				<img src="images\matarpaneer.jpg" class="img-fluid">
			</div>
		</div>
	
</section>

<!-- end order now section -->

<!-- start popular dishes section -->
<div class="popular-dish" id="dishes">
<section class="container">

	<div class="dish-main mb-5" >
		<p class="mt-5">Our Dishes</p>
		<h1>popular dishes</h1>
	</div>

	<div class="dish-menu">
		
		<div class="dish-menu-1">
		
			<img src="images\kachauri.jpg" class="img-fluid" >
			<h3>Kachauri</h3>
			<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<p>$15.99</p>
<button class="btn text-white">Add To Cart</button>

		</div>
		<div class="dish-menu-2">
			<img src="images\dhokla.jpg" class="img-fluid" >
			<h3>Dhokla</h3>
			<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<p>$15.99</p>
<button class="btn text-white">Add To Cart</button>
		</div>
		<div class="dish-menu-3"><img src="images\dal makhani.jpg" class="img-fluid">
			<h3>Daal Makhani</h3>
			<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<p>$15.99</p>
<button class="btn text-white">Add To Cart</button>
</div>
		<div class="dish-menu-4"><img src="images\cholemasala.jpg" class="img-fluid">
			<h3>Chole Masala</h3>
			<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<p>$15.99</p>
<button class="btn text-white">Add To Cart</button>
</div>
		<div class="dish-menu-5"><img src="images\kheer.jpg" class="img-fluid">
			<h3>Kheer</h3>
			<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<p>$15.99</p>
<button class="btn text-white">Add To Cart</button>
</div>
		<div class="dish-menu-6"><img src="images\gulabjamun.jpg" class="img-fluid">
			<h3>Gulab Jamun</h3>
			<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<p>$15.99</p>
<button class="btn text-white">Add To Cart</button>
</div>

	</div>

</section>
</div>
<!-- end popular dishes section -->

<!-- start about us section -->
<div class="About" id="about">
<section class="container">

	<div class="about-head mb-5">
	<h3>About Us</h3>
	<h1 style="color:#1a2a52ed;">Why choose us?</h1>
</div>

<div class="about-main">
	<div class="about-image">
		<img src="images\ghewar.jpg" class="img-fluid">
	</div>

	<div class="about-content">

		<h1 class="text-capitalize" style="    color: #845f5f;">best food in the country</h1>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

		<div class="about-button">
			<button class="btn text-white text-center">
			<i class='fas fa-shipping-fast' style='font-size:20px;color:white;margin: 5px;'></i> Free Delivery
			</button>

		<button class="btn text-white"><i class="fa fa-dollar" style="font-size:20px;color: white; margin: 5px;'"></i>Easy Payments</button>
		<button class="btn text-white">
			<i class='fas fa-headset' style='font-size:20px;color: white;margin: 5px;'></i>24/7 Services</button>
	</div>

	<div class="about-button-1">
		<button class="btn text-white bg-secondary" style="width: 140px;">Learn More</button>
</div>
	</div>
</div>

</section>
</div>
<!-- end about us section -->

<!-- start slogan section -->

<div class="main-slogan mb-5 mt-5">
	<section class="container-fluid">
		<div class="back-image">
			<h1 class="text-capitalize">
				When a man stomach is full it makes no  </h1>
				<h1>difference whether he is rich or poor
			</h1>
			<p>
				<p style="color:white;">
				Healthy foods are those that provide you with the nutrients you need to sustain your body’s well-being and retain energy. Water, carbohydrates, fat, protein, vitamins, and minerals are the key nutrients that make up a healthy, balanced diet.
			</p>
			</p>

		
				
			
			<button class="btn text-white text-center">
				Read More
			</button>
		</div>
	</section>
	
</div>
<!-- end slogan section -->

<!-- start explore foods section -->

<div class="main-explore mb-5" id="menu">
	<section class="container">

		<div class="head-explore mb-5">
			<h1 class="text-capitalize text-center mt-5" style="color: #1a2a52ed;">Explore our foods</h1>
			<div class="head-1-explore">
			<h3 class="text-center" style="color:#845f5f">Healthy foods are those that provide you with the nutrients you need to sustain your body’s well-being and retain energy. Water, carbohydrates, fat, protein, vitamins, and minerals are the key nutrients that make up a healthy, balanced diet.
			</h3>
		</div>
		</div>

		<div class="foods-explore">
			<div class="explore-1">
				<img src="images\kheer.jpg" class="img-fluid mb-2">
				<h4 class="text-capitalize">Kheer</h4>
				<span>$10.50</span>
				<span class="strike"><s>11.70$</s></span>
				<div class="explore-btn">
				<button class="btn text-white text-center">Order Now</button>
			</div>
			</div>
			<div class="explore-2">
				<img src="images\gulabjamun.jpg" class="img-fluid mb-2">
				<h4 class="text-capitalize">Gulab Jamun</h4>
				<span>$10.50</span>
				<span class="strike"><s>11.70$</s></span>
				<div class="explore-btn">
				<button class="btn text-white text-center">Order Now</button>
			</div>
			</div>
			<div class="explore-3">
				<img src="images\cholemasala.jpg" class="img-fluid mb-2" style="overflow: hidden;">
				<h4 class="text-capitalize">Chole Masala</h4>
				<span>$10.50</span>
				<span class="strike"><s>11.70$</s></span>
				<div class="explore-btn">
				<button class="btn text-white text-center">Order Now</button>
			</div>
			</div>
		</div>

	</section>
</div>

<!-- end explore foods section -->


 <!-- start FAQ section -->
 <div class = "main-faq mb-5">
 	<section class="container">
 		<div class="faq-head mb-5">
 			<h1 class="text-capitalize text-center" style="color: #1a2a52ed;">Frequently Asked questions</h1>
 		</div>

 		<div class="faq-que">
 			<div class="faq-1">
 				<h4 class="text-capitalize text-center">~is foodies bread really baked fresh each day?</h4>
 				<p>
 					<p>Lorem ipsum dolor sit amet. Ab consectetur omnis non veritatis culpa ut repudiandae ducimus qui omnis aliquid. In esse ratione et odio blanditiis qui accusamus laboriosam ad porro saepe sit ducimus eligendi  </p>
</p>
 			</div>
 			<div class="faq-2">
 				<h4 class="text-capitalize text-center">~do you bake breads containing animal fats or products?</h4>
 				<p>
 					<p>Lorem ipsum dolor sit amet. Ab consectetur omnis non veritatis culpa ut repudiandae ducimus qui omnis aliquid. In esse ratione et odio blanditiis qui accusamus laboriosam ad porro saepe sit ducimus eligendi  </p>
</p>
 			</div>
 			<div class="faq-3">
 				<h4 class="text-capitalize text-center">~can i order your products online?</h4>
 				<p>
 					<p>Lorem ipsum dolor sit amet. Ab consectetur omnis non veritatis culpa ut repudiandae ducimus qui omnis aliquid. In esse ratione et odio blanditiis qui accusamus laboriosam ad porro saepe sit ducimus eligendi  </p>
</p>
 			</div>
 			<div class="faq-4">
 				<h4 class="text-capitalize text-center">~when are you opening a shop near me?</h4>
 				<p>
 					<p>Lorem ipsum dolor sit amet. Ab consectetur omnis non veritatis culpa ut repudiandae ducimus qui omnis aliquid. In esse ratione et odio blanditiis qui accusamus laboriosam ad porro saepe sit ducimus eligendi  </p>
</p>
 			</div>
 		</div>
 	</section>
 	
 </div>
<!--  end faq section -->


<div class="pr-1 mb-5">

			<h1 class="text-capitalize text-center text-whites" style="color:#1a2a52ed;">baked fresh daily by bakers with passion.</h1>
		</div>
<div class="pr-main  mb-5">
	
		<img src="images\food1.jpg" class="img-fluid">
	
	<section class="container-fluid">
</section>
</div>


<!-- start order now form section -->

<div class="order-main" id="order">
	<section class="container">

		<div class="order-head ">
			<h4 class="text-capitalize mt-5" style="color:green">order now</h4>
			<br>
			<h1>Free and fast</h1>
		</div>

		<div class="order-form">


			<div class="order-inner-1">
				
		<form method="POST">
  <div class="form-group">
    <label for="text">Your Name</label>
    <input type="text" class="form-control" placeholder="enter your name" id="name" name="Name" required>
  </div>
  <div class="form-group">
    <label for="order">Your Order</label>
    <input type="text" class="form-control" placeholder="enter food name" id="order" name="Order" required>
  </div>
  <div class="form-group">
    <label for="quantity">How Much</label>
    <input type="text" class="form-control" placeholder="how many orders" id="quantity" name="Quantity" required>
  </div>
  <div class="form-group mb-5">
    <label for="text">Your Address</label>
   <textarea class="form-control" placeholder="enter your address" name="Address" required></textarea>
  </div>
  
<button class="btn" name="submit">Submit</button>
<!-- </form> -->



</div>
			
    <div class="order-inner-2" class="fast">
				
		
  <div class="form-group">
    <label for="number">Your Number</label>
    <input type="number" class="form-control" placeholder="enter your number" id="number" name="Number" required>
  </div>
  <div class="form-group">
    <label for="extra">Additional Food</label>
    <input type="text" class="form-control" placeholder="extra with food" id="extra" name="Add_food" required>
  </div>
  <div class="form-group">
    <label for="date">Date And Time</label>
    <input type="date" class="form-control" placeholder="dd-mm-yyyy" id="dt" name="date" required>
  </div>

  
 
</form>



			</div>
			
		</div>
		
	</section>
	
</div>



<!-- end order now form section -->


<!-- start footer section -->

<div class="main-footer bg-dark">
	<section class="container-fluid">
		<div class="footer">
			<a href="https://www.facebook.com/healthyfoodguide/"><i class="fab fa-facebook-f" style="font-size:40px"></i></a>
			<a href="https://www.instagram.com/healthy.indianfood/"><i class="fab fa-instagram" style="font-size:40px"></i></a>
			<a href="https://www.youtube.com/watch?v=oBD0iAkxtFI"><i class="fab fa-youtube"
				style="font-size:40px"></i></a>
			<a href="https://www.linkedin.com/in/priya-k-1374211b1/"><i class="fab fa-linkedin" style="font-size:40px"></i>
		</a>
			
			
			
			
	</div>

	</section>

</div>

 <!-- Copyright -->
  <div class="footer-copyright text-center py-3 bg-white">© 2020 Copyright:
    <a href="https://www.linkedin.com/in/priya-k-1374211b1/"> Priya Healthy Food.com</a>
  </div>
  <!-- Copyright -->

<!-- end footer section -->

<!-- auto type -->

<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
var type = new Typed('.auto-type',{
	strings : ["Mumma's world best special thali","Good food choices are good investments"],
	typeSpeed : 150,
	backSpeed : 50,
	loop : true
})
</script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
</body>
	</html>

