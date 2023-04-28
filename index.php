<!DOCTYPE html>
<?php
include("include/connect.php");
?>

<html lang="en">
<?php include("include/header.php"); ?>

<body>

	<div class="loader-container circle-pulse-multiple">
		<div class="loader">
			<div id="loading-center-absolute">
				<div class="object" id="object_four"></div>
				<div class="object" id="object_three"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_one"></div>
			</div>
			<h2 class="l-text">Secondhand Shop For Student</h2>
		</div>
	</div>

	
	<div class="offcanvas_menu_click">
		<div class="off_menu_inner">
		<span class="cross-btn cross"><i class="lnr lnr-cross"></i></span>
		<div class="off_menu_relative">
			<ul>
				<li><a href="http://mtj.world/others/categories.php/Watches/MTY=">How it Works?</a></li>
				<li><a href="<?php echo $web; ?>contact.php">Contact Us</a></li>
				<li><a href="<?php echo $web; ?>#aboutus">About Us</a></li>
			</ul>
		</div>
		</div>
	</div>

	<header class="main_menu_area full_pad">
		<nav class="navbar navbar-default">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- <a class="navbar-brand" href="<?php echo $web; ?>index.php"><img src="img/logo.png" alt="" width="155px"></a> -->
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav menu">
					<li class="active"><a href="<?php echo $web; ?>index.php">Home</a></li>
					<li  class="dropdown submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Products</a>
						<ul class="dropdown-menu">
							<li><a href="http://mtj.world/others/categories.php/Watches/MTY=">Mobile and Tablet</a></li>
							<li><a href="<?php echo $web; ?>customized-jewelery.php">Computer & laptop</a></li>
							<li><a href="<?php echo $web; ?>bezel-details.php">Electronic Appliances</a></li>
							<li><a href="<?php echo $web; ?>bezel-details.php">Books & Novels</a></li>
							<li><a href="<?php echo $web; ?>bezel-details.php">Stationery</a></li>
							<li><a href="<?php echo $web; ?>bezel-details.php">Music, sports & gym</a></li>
							<li><a href="<?php echo $web; ?>bezel-details.php">bags-Luggage</a></li>
						</ul>
					</li>
					</li>
					<li><a href="<?php echo $web; ?>contact.php">Contact</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="search_dropdown"><a href="#"><i class="fa fa-call"></i></a></li>
				</ul>
			</div>
		</nav>
	</header>
<section class="main_slider nav-space">
	<div class="slider_bg_inner">
		<div class="slider_bg owl-carousel">
		<?php
				/*$sql=mysqli_query($link,"select * from slider where type='1'");
				while($row=mysqli_fetch_array($sql)){
					$data .='<div class="item">
								<img src="http://mtj.world/onhome-slider/'.$row['image'].'" alt="">
							</div>'; 
							
					$detail.='<div class="item">
								<h2>'.$row['content'].'</h2>
							</div>';
				} 
				echo $data; */
			?>
		</div>
	</div>
	<div class="text_slider_area">
		<div class="container">
			<div class="text_slider_inner">
				<!--div class="text_slider owl-carousel">
					<?php //echo $detail; ?>
				</div-->
				<div class="home_screen_nav">
					<i class="fa fa-angle-left testi_prev" aria-hidden="true"></i>
					<i class="fa fa-angle-right testi_next" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	</div>
	<div class="offcanvus_menu">
	
	<div class="nav-button">
	<div class="nav_inner">
	<span></span>
	<span></span>
	</div>
	</div>
</div>
</section>
	
	<!-- Container -->
	<section class="about-area"  id="aboutus">

		<div class="about-inner row m0">
			<div class="container">
				<div class="row">
					<div class="col-md-6 about-content">
						<div class="about-title">
							<h2>About Secondhand Shop</h2>
						</div>
						<div class="row">
							<div class="col-md-6 about-text">
								<p>A new era has begun in the field of Diamond Goods, a venture which is highly focused on not just making stuffs filled with diamonds but we also highly focus on its perfection. A decade of perspiration, a decade of inspiration, a decade of dedication, combined and we put on our passion into a venture called MTJ World.</p>
								<p>We do not focus on bulk categories but instead we believe in perfection on what we provide to the world, more and more high end good are been added to our inventory every time we perfect a product. We work for ultra-luxury product and does not compromise on our quality no matter what it takes, “Unless you deliver the best you cannot be the best” is one of our key slogans we follow.
</p>
							</div>
							<div class="col-md-6 about-text">
								<p>We mainly work on customizing Luxury brand products such as Rolex, Audemars Piguet, patek philippe etc which has already set a benchmark in their own field, we also create custom jewellery as per customer’s requirement and mainly we target to cover the whole product with the finest and the most precious stone on earth i.e. Diamonds.</p>
								<p>As previously mentioned quality is on the top of our priority list and we never ever compromise in delivering so, this cannot be fulfilled with just using any kind of Diamonds on our products. Even Diamonds are categorized according to their quality, that too matters to us! Using the best possible diamonds with required colour and clarity also plays a vital role in overall product output quality. There you go, this is MTJ World for you.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="about-img">
							<img src="http://localhost/mtj.world/img/about-sec/laptop-student.jpg" width="570px" height="688px" alt="About MTJ World">
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php 
			/*$csql=mysqli_query($link,"select * from slider where type='2' and status='1' order by rank");
			while($getcdata = mysqli_fetch_array($csql)){
				
				// $getcatname = mysqli_query($link,"select * from categories where cid='".$getcdata['cid']."'");
				// $getcatdata = mysqli_fetch_array($getcatname);
				
				if(mysqli_num_rows($csql)>0){
					
					$catdata.='<div class="item">
							<img src="http://www.mtj.world/cat-slider/'.$getcdata['image'].'" alt="">
						</div>';
					$catdetail.='<div class="item" style=" text-align: justify;">
									'.$getcdata['content'].'</br></br>
									<div class="form-btn col-md-12">
										<a href="'.$web1.'categories.php/Watches/MTY="><center><button type="submit" value="submit" class="btn submit_btn">Explore Now</button></center></a>
									</div>
								</div>';
				}
			} */
			
		?>
		<div class="full-about-sec full_pad">
			<div class="about-slider-left">
				<div class="about-slider owl-carousel">
					<!-- <?php echo $catdata;?> -->
				</div>
				<div class="slider_nav">
				<i class="fa fa-angle-left testi_prev" aria-hidden="true"></i>
				<i class="fa fa-angle-right testi_next" aria-hidden="true"></i>
				</div>
			</div>
			<div class="about-slider-right">
				<div class="text-slider about-text owl-carousel">
					<!-- <?php echo $catdetail;?> -->
					
				</div>
			</div>
		</div>
	</section>

<?php include("include/footer.php"); ?>

</body>

</html>