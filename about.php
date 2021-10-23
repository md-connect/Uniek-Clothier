<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>About</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon2.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body class="animsition">

	<!-- Header -->
	<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						Free shipping for standard order around Okokomaiko Axis
					</div>

					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Help & FAQs
						</a>

						<?php if (isset($_SESSION['username'])) {
							$customer = $_SESSION['username'];
							echo "<a href='account.php' class='flex-c-m p-lr-10 trans-04'>
                            $customer
                        </a>";
						} else {
							echo "<a href='login.php' class='flex-c-m p-lr-10 trans-04'>
                            My Account
                        </a>";
						} ?>

						<!-- <a href="#" class="flex-c-m trans-04 p-lr-25">
							EN
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							USD
						</a> -->
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">

					<!-- Logo desktop -->
					<a href="#" class="logo">
						<img src="images/icons/uniek.png">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="index.php">Home</a>
							</li>

							<li>
								<a href="product.php">Shop</a>
							</li>

							<li class="label1" data-label1="hot">
								<a href="blog.php">Blog</a>
							</li>

							<li class="active-menu">
								<a href="about.php">About Us</a>
							</li>

							<li>
								<a href="contact.php">Contact Us</a>
							</li </ul> </div> <!-- Icon header -->
							<div class="wrap-icon-header flex-w flex-r-m">
								<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
									<i class="zmdi zmdi-search"></i>
								</div>

								<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="<?php
																																			if (isset($_SESSION['cart_item'])) {
																																				echo count($_SESSION['cart_item']);
																																			} else {
																																				echo "0";
																																			} ?>">
									<i class="zmdi zmdi-shopping-cart"></i>
								</div>

								<ul>
									<li>
										<?php
										if (isset($_SESSION['username'])) {
											$id = $_SESSION['cus_id'];
										?>
											<div class="dropdown">
												<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="zmdi zmdi-account-o" style="color: green;"></i>
												</a>
												<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
													<a class="dropdown-item" href="account.php">My Account</a>
													<a class="dropdown-item" href="account.php">My Orders</a>
													<a class="dropdown-item" href="change-password.php?id=<?php echo $id; ?>">Change Password</a>
													<a class="dropdown-item" href="logout.php">Log Out</a>
												</div>
											</div>

										<?php
										} else {
										?>
											<div class="dropdown">
												<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="zmdi zmdi-account-o" style="color: orange;"></i>
												</a>
												<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
													<a class="dropdown-item" href="login.php">Sign in</a>
													<a class="dropdown-item" href="login.php">Sign Up</a>
												</div>
											</div>
										<?php
										}
										?>
									</li>
								</ul>
							</div>
				</nav>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->
			<div class="logo-mobile">
				<a href="index.php"><img src="images/icons/uniek.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="<?php
																															if (isset($_SESSION['cart_item'])) {
																																echo count($_SESSION['cart_item']);
																															} else {
																																echo "0";
																															} ?>">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

				<ul>
					<li>
						<?php
						if (isset($_SESSION['username'])) {
							$id = $_SESSION['cus_id'];
						?>
							<div class="dropdown">
								<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="zmdi zmdi-account-o" style="color: green;"></i>
								</a>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
									<a class="dropdown-item" href="account.php">My Account</a>
									<a class="dropdown-item" href="account.php">My Orders</a>
									<a class="dropdown-item" href="change-password.php?id=<?php echo $id; ?>">Change Password</a>
									<a class="dropdown-item" href="logout.php">Log Out</a>
								</div>
							</div>

						<?php
						} else {
						?>
							<div class="dropdown">
								<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="zmdi zmdi-account-o" style="color: orange;"></i>
								</a>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
									<a class="dropdown-item" href="login.php">Sign in</a>
									<a class="dropdown-item" href="login.php">Sign Up</a>
								</div>
							</div>
						<?php
						}
						?>

					</li>
				</ul>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping for standard order around Okokomaiko Axis
					</div>

					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Help & FAQs
						</a>

						<?php if (isset($_SESSION['username'])) {
							$customer = $_SESSION['username'];
							echo "<a href='account.php' class='flex-c-m p-lr-10 trans-04'>
                            $customer
                        </a>";
						} else {
							echo "<a href='login.php' class='flex-c-m p-lr-10 trans-04'>
                            My Account
                        </a>";
						} ?>
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="index.php">Home</a>
				</li>

				<li>
					<a href="product.php">Shop</a>
				</li>

				<li class="label1" data-label1="hot">
					<a href="blog.php">Blog</a>
				</li>

				<li class="active-menu">
					<a href="about.php">About Us</a>
				</li>

				<li>
					<a href="contact.php">Contact Us</a>
				</li>

				<!-- <li>
					<a href="login.php">Login | Sign Up</a>
				</li> -->
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>
	<?php
	if (isset($_SESSION["cart_item"])) {
		$total_quantity = 0;
		$total_price = 0;
	?>
		<!-- Cart -->
		<div class="wrap-header-cart js-panel-cart">
			<div class="s-full js-hide-cart"></div>

			<div class="header-cart flex-col-l p-l-65 p-r-25">
				<div class="header-cart-title flex-w flex-sb-m p-b-8">
					<span class="mtext-103 cl2">
						Your Cart
					</span>

					<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
						<i class="zmdi zmdi-close"></i>
					</div>
				</div>
				<div class="header-cart-content flex-w js-pscroll">
					<ul class="header-cart-wrapitem w-full">
						<?php
						foreach ($_SESSION["cart_item"] as $item) {
							$item_price = $item["quantity"] * $item["price"];
						?>
							<li class="header-cart-item flex-w flex-t m-b-12">
								<div class="header-cart-item-img">
									<img src="./images/<?php echo $item["image"]; ?>" alt="IMG">
								</div>

								<div class="header-cart-item-txt p-t-8">
									<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
										<?php echo $item["name"]; ?>
									</a>

									<span class="header-cart-item-info">
										<?php echo $item["quantity"] . "x N " . $item["price"]; ?>
									</span>
								</div>
							</li>

						<?php
							$total_quantity += $item["quantity"];
							$total_price += ($item["price"] * $item["quantity"]);
						}
						?>
					</ul>

					<div class="w-full">
						<div class="header-cart-total w-full p-tb-40">
							Total: <?php echo "N " . number_format($total_price, 2); ?>
						</div>

						<div class="header-cart-buttons flex-w w-full">
							<a href="shoping-cart.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
								View Cart
							</a>

							<?php
							$items = "";
							$qty = 0;
							$num_item = ($_SESSION["cart_item"]);
							// die();
							foreach ($_SESSION["cart_item"] as $item) {
								if (count($num_item) == 1) {
									$items = $item["code"];
									$qty += $item["quantity"];
								} else {
									$items .= '+' . $item["code"];
									$qty += $item["quantity"];
								}
							}

							?>
							<form method="POST" action="initialize.php">
								<div class="flex-w flex-m m-r-20 m-tb-5">
									<input hidden class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="cus_email" placeholder="Customer's Email" value="<?php echo $cus_email; ?>">
									<input hidden class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="cus_phone" placeholder="Customer's Phone" value="<?php echo $cus_phone; ?>">
									<input hidden class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="items" placeholder="Customer's Items" value="<?php echo $items; ?>">
									<input hidden class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="quantity" placeholder="Quantity" value="<?php echo $qty; ?>">
									<input hidden class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="amount" placeholder="Amount" value="<?php echo $total_price; ?>">
								</div>
								<button name="pay" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10" type="submit">
									Check Out
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php
	} else {
	?>
		<div class="wrap-header-cart js-panel-cart">
			<div class="s-full js-hide-cart"></div>
			<div class="header-cart flex-col-l p-l-65 p-r-25">
				<div class="header-cart-title flex-w flex-sb-m p-b-8">
					<span class="mtext-103 cl2">
						Your Cart
					</span>

					<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
						<i class="zmdi zmdi-close"></i>
					</div>
				</div>

				<div class="no-records">Your Cart is Empty</div>
				<div class="header-cart-buttons flex-w w-full">
					<a href="product.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
						Shop Now
					</a>

					<!-- <a href="initialize.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a> -->
				</div>
			</div>
		</div>

	<?php
	}
	?>

	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			About Us
		</h2>
	</section>


	<!-- Content page -->
	<section class="bg0 p-t-75 p-b-120">
		<div class="container">
			<div class="row p-b-148">
				<div class="col-md-7 col-lg-8">
					<div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">

						<!-- <p class="stext-113 cl6 p-b-26">
							Donec gravida lorem elit, quis condimentum ex semper sit amet. Fusce eget ligula magna. Aliquam aliquam imperdiet sodales. Ut fringilla turpis in vehicula vehicula. Pellentesque congue ac orci ut gravida. Aliquam erat volutpat. Donec iaculis lectus a arcu facilisis, eu sodales lectus sagittis. Etiam pellentesque, magna vel dictum rutrum, neque justo eleifend elit, vel tincidunt erat arcu ut sem. Sed rutrum, turpis ut commodo efficitur, quam velit convallis ipsum, et maximus enim ligula ac ligula.
						</p>

						<p class="stext-113 cl6 p-b-26">
							Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
						</p> -->
					</div>
				</div>

				<!-- <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
					<div class="how-bor1 ">
						<div class="hov-img0">
							<img src="images/about-01.jpg" alt="IMG">
						</div>
					</div>
				</div>
			</div> -->

				<div class="row">
					<div class="order-md-2 col-md-7 col-lg-8 p-b-30">
						<div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
							<h3 class="mtext-111 cl2 p-b-16">
								About Uniek Clothier
							</h3>
							<p class="stext-113 cl6 p-b-26">
							Uniek Clothier is a clothing brand basically into the design and production of corporate wear, casual corporate wear, and jumpsuits for ladies at all levels.
							Our customers rely on us to fashion their outfit and showcase their beauty at  decent prices.<br> Uniek clothings are identified with quality materials transformed to  excellent outfits with well defined seams appearance that attracts all viewers. Our clothings are meant to give you an edge and make you unique among the crowd.
							Our customers service  is second to none. A core feature of our customer service is timely delivery which translates to the most satisfying customer experience ever for you. </p>
							<h3 class="mtext-111 cl2 p-b-16">
								Our Mission
							</h3>
							<p class="stext-113 cl6 p-b-26">
								We aim to intrigue our ladies with our fashion pieces whle also identifying with the uniqueness in each of them.  </p>
							<h3 class="mtext-111 cl2 p-b-16">
								Our Vision
							</h3>
							<p class="stext-113 cl6 p-b-26">
								Our vision is to bring service to the doorstep of our clients. </p>
							<p class="stext-113 cl6 p-b-26">
								<div class="bor16 p-l-29 p-b-9 m-t-22">
									<p class="stext-114 cl6 p-r-40 p-b-11">
										Whether you are petite, regular or plus size and happy, there are different ways to rock your unique shape.
									</p>

									<span class="stext-111 cl8">
										- Quote
									</span>
								</div>
						</div>
					</div>

					<div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
						<div class="how-bor2">
							<div class="hov-img0">
								<img src="images/about-02.jpg" alt="IMG">
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>



	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Categories
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Women
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Men
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Shoes
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Watches
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Help
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Track Order
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Returns
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Shipping
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								FAQs
							</a>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						GET IN TOUCH
					</h4>

					<p class="stext-107 cl7 size-201">
					Any questions? Let us know in office at 46, Araromi street, Onike, Yaba, Lagos or call us
						on 07035238303
					</p>

					<div class="p-t-27">
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-whatsapp"></i>
						</a>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Newsletter
					</h4>

					<form>
						<div class="wrap-input1 w-full p-b-4">
							<input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
							<div class="focus-input1 trans-04"></div>
						</div>

						<div class="p-t-18">
							<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								Subscribe
							</button>
						</div>
					</form>
				</div>
			</div>

			<div class="p-t-40">
				<div class="flex-c-m flex-w p-b-18">
					<a class="m-all-1">
						<img src="images/icons/icon-pay-01.png" alt="ICON-PAY">
					</a>

					<a class="m-all-1">
						<img src="images/icons/icon-pay-02.png" alt="ICON-PAY">
					</a>

					<a class="m-all-1">
						<img src="images/icons/icon-pay-03.png" alt="ICON-PAY">
					</a>

					<a class="m-all-1">
						<img src="images/icons/icon-pay-04.png" alt="ICON-PAY">
					</a>

					<a class="m-all-1">
						<img src="images/icons/icon-pay-05.png" alt="ICON-PAY">
					</a>
				</div>

				<p class="stext-107 cl6 txt-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;
					<script>
						document.write(new Date().getFullYear());
					</script> All rights reserved | Developer
					07082614612</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

				</p>
			</div>
		</div>
	</footer>

	</p>
	</div>
	</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function() {
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
	<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function() {
			$(this).css('position', 'relative');
			$(this).css('overflow', 'hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function() {
				ps.update();
			})
		});
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>