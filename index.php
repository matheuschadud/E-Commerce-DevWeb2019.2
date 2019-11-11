<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>AllInOne</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

	<div class="super_container">

		<?php include "header.php "?>

		<!-- Menu -->

		<div class="menu menu_mm trans_300">
			<div class="menu_container menu_mm">
				<div class="page_menu_content">
								
					<div class="page_menu_search menu_mm">
						<form action="#">
							<input type="search" required="required" class="page_menu_search_input menu_mm" placeholder="Pesquisar">
						</form>
					</div>
					<ul class="page_menu_nav menu_mm">
						<li class="page_menu_item has-children menu_mm">
							<a href="index.php">Home<i class="fa fa-angle-down"></i></a>
							<ul class="page_menu_selection menu_mm">
								<li class="page_menu_item menu_mm"><a href="categories.php">Categorias<i class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item menu_mm"><a href="product.php">Produtos<i class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item menu_mm"><a href="cart.php">Carrinho<i class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item menu_mm"><a href="checkout.php">Sair<i class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item menu_mm"><a href="contact.php">Contato<i class="fa fa-angle-down"></i></a></li>
							</ul>
						</li>
						<li class="page_menu_item has-children menu_mm">
							<a href="categories.php">Categorias<i class="fa fa-angle-down"></i></a>
							<ul class="page_menu_selection menu_mm">
								<li class="page_menu_item menu_mm"><a href="categories.php">Categoria<i class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item menu_mm"><a href="categories.php">Categoria<i class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item menu_mm"><a href="categories.php">Categoria<i class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item menu_mm"><a href="categories.php">Categoria<i class="fa fa-angle-down"></i></a></li>
							</ul>
						</li>
						<li class="page_menu_item menu_mm"><a href="#">Ofertas<i class="fa fa-angle-down"></i></a></li>
						<li class="page_menu_item menu_mm"><a href="contact.php">Contato<i class="fa fa-angle-down"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>

			<div class="menu_social">
				<ul>
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>

		<!-- Ads -->

		<div class="avds">
			<div class="avds_container d-flex flex-lg-row flex-column align-items-start justify-content-between">
				<div class="avds_small">
					<div class="avds_background" style="background-image:url(images/avds_small.jpg)"></div>
					<div class="avds_small_inner">
						<div class="avds_discount_container">
							<img src="images/discount.png" alt="">
							<div>
								<div class="avds_discount">
									<div>20<span>%</span></div>
									<div>Desconto</div>
								</div>
							</div>
						</div>
						<div class="avds_small_content">
							<div class="avds_title">Smart Phones</div>
							<div class="avds_link"><a href="categories.php">Veja mais</a></div>
						</div>
					</div>
				</div>
				<div class="avds_large">
					<div class="avds_background" style="background-image:url(images/avds_large.jpg)"></div>
					<div class="avds_large_container">
						<div class="avds_large_content">
							<div class="avds_title">Câmeras Profissionais</div>
							<div class="avds_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viver ra velit venenatis fermentum luctus.</div>
							<div class="avds_link avds_link_large"><a href="categories.php">Veja Mais</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Products -->

		<div class="products">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="product_grid">

							<!-- Product -->
							<div class="product">
								<div class="product_image"><img src="images/product_1.jpg" alt=""></div>
								<div class="product_extra product_new"><a href="categories.php">Novos</a></div>
								<div class="product_content">
									<div class="product_title"><a href="product.php">Smart Phone</a></div>
									<div class="product_price">$670</div>
								</div>
							</div>
							<!-- Matheus boa noite durma bem 

								Att.
									Lameck
							-->
							<!-- Product -->
							<div class="product">
								<div class="product_image"><img src="images/product_2.jpg" alt=""></div>
								<div class="product_extra product_sale"><a href="categories.php">Sale</a></div>
								<div class="product_content">
									<div class="product_title"><a href="product.php">Smart Phone</a></div>
									<div class="product_price">$670</div>
								</div>
							</div>

							<!-- Product -->
							<div class="product">
								<div class="product_image"><img src="images/product_3.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_title"><a href="product.php">Smart Phone</a></div>
									<div class="product_price">$670</div>
								</div>
							</div>

							<!-- Product -->
							<div class="product">
								<div class="product_image"><img src="images/product_4.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_title"><a href="product.php">Smart Phone</a></div>
									<div class="product_price">$670</div>
								</div>
							</div>

							<!-- Product -->
							<div class="product">
								<div class="product_image"><img src="images/product_5.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_title"><a href="product.php">Smart Phone</a></div>
									<div class="product_price">$670</div>
								</div>
							</div>

							<!-- Product -->
							<div class="product">
								<div class="product_image"><img src="images/product_6.jpg" alt=""></div>
								<div class="product_extra product_hot"><a href="categories.php">Hot</a></div>
								<div class="product_content">
									<div class="product_title"><a href="product.php">Smart Phone</a></div>
									<div class="product_price">$670</div>
								</div>
							</div>

							<!-- Product -->
							<div class="product">
								<div class="product_image"><img src="images/product_7.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_title"><a href="product.php">Smart Phone</a></div>
									<div class="product_price">$670</div>
								</div>
							</div>

							<!-- Product -->
							<div class="product">
								<div class="product_image"><img src="images/product_8.jpg" alt=""></div>
								<div class="product_extra product_sale"><a href="categories.php">Hot</a></div>
								<div class="product_content">
									<div class="product_title"><a href="product.php">Smart Phone</a></div>
									<div class="product_price">$670</div>
								</div>
							</div>

						</div>
							
					</div>
				</div>
			</div>
		</div>

		<!-- Ad -->

		<div class="avds_xl">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="avds_xl_container clearfix">
							<div class="avds_xl_background" style="background-image:url(images/avds_xl.jpg)"></div>
							<div class="avds_xl_content">
								<div class="avds_title">Amazing Devices</div>
								<div class="avds_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus.</div>
								<div class="avds_link avds_xl_link"><a href="categories.php">See More</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Icon Boxes -->

		<div class="icon_boxes">
			<div class="container">
				<div class="row icon_box_row">
					
					<!-- Icon Box -->
					<div class="col-lg-4 icon_box_col">
						<div class="icon_box">
							<div class="icon_box_image"><img src="images/icon_1.svg" alt=""></div>
							<div class="icon_box_title">Free Shipping Worldwide</div>
							<div class="icon_box_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
							</div>
						</div>
					</div>

					<!-- Icon Box -->
					<div class="col-lg-4 icon_box_col">
						<div class="icon_box">
							<div class="icon_box_image"><img src="images/icon_2.svg" alt=""></div>
							<div class="icon_box_title">Free Returns</div>
							<div class="icon_box_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
							</div>
						</div>
					</div>

					<!-- Icon Box -->
					<div class="col-lg-4 icon_box_col">
						<div class="icon_box">
							<div class="icon_box_image"><img src="images/icon_3.svg" alt=""></div>
							<div class="icon_box_title">24h Fast Support</div>
							<div class="icon_box_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- Footer -->
		<?php include "footer.php" ?>
	</div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>