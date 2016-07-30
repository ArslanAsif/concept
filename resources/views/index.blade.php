@extends('layout.app')

@section('content')
	<!-- CONTENT -->
	<div id="page-content">

		<div class="rev_slider_wrapper">
			<div class="rev_slider" data-version="5.0">
				<ul>
					<li data-transition="fade">

						<img src="images/shop/slider/bg-slide-1.jpg" alt="">

						<div class="tp-caption rectangle-2"
							 data-x="center"
							 data-y="center"
							 data-speed="700"
							 data-start="1200"
							 data-transform_in="o:0;s:700;"
							 data-transform_out="o:0;s:700;">
						</div>

						<div class="tp-caption title"
							 data-x="right"
							 data-y="235"
							 data-hoffset="20"
							 data-speed="700"
							 data-start="1500"
							 data-transform_in="x:100;s:700;"
							 data-transform_out="x:100;s:700;">
							Classic women suite
						</div>

						<div class="tp-caption big-text"
							 data-x="right"
							 data-y="295"
							 data-hoffset="180"
							 data-speed="700"
							 data-start="1800"
							 data-transform_in="y:-30;s:700;"
							 data-transform_out="y:-30;s:700;">
							Minimal &amp; modern look
						</div>

						<div class="tp-caption big-text"
							 data-x="right"
							 data-y="335"
							 data-hoffset="230"
							 data-speed="700"
							 data-start="2200"
							 data-transform_in="y:100;s:700;"
							 data-transform_out="y:100;s:700;">
							<a class="btn btn-black" href="#">Collection</a>
						</div>

					</li>
					<li data-transition="fade">

						<img src="images/shop/slider/bg-slide-2.jpg" alt="">

						<div class="tp-caption"
							 data-x="center"
							 data-y="center"
							 data-hoffset="200"
							 data-speed="700"
							 data-start="1200"
							 data-transform_in="o:0;s:700;"
							 data-transform_out="o:0;s:700;">
							<img src="images/shop/slider/slide-2-image-1.png" alt="">
						</div>

						<div class="tp-caption title"
							 data-x="left"
							 data-y="235"
							 data-hoffset="30"
							 data-speed="700"
							 data-start="1500"
							 data-transform_in="x:-100;s:700;"
							 data-transform_out="x:-100;s:700;">
							Classic man suite
						</div>

						<div class="tp-caption big-text"
							 data-x="left"
							 data-y="295"
							 data-hoffset="30"
							 data-speed="700"
							 data-start="1800"
							 data-transform_in="y:-30;s:700;"
							 data-transform_out="y:-30;s:700;">
							Minimal &amp; modern look
						</div>

						<div class="tp-caption big-text"
							 data-x="left"
							 data-y="335"
							 data-hoffset="30"
							 data-speed="700"
							 data-start="2200"
							 data-transform_in="y:100;s:700;"
							 data-transform_out="y:100;s:700;">
							<a class="btn btn-black" href="#">Collection</a>
						</div>

					</li>
					<li data-transition="slotfade-horizontal">

						<img src="images/shop/slider/bg-slide-3.jpg" alt="">

						<div class="tp-caption"
							 data-x="150"
							 data-y="0"
							 data-speed="700"
							 data-start="1200"
							 data-transform_in="x:50;o:0;s:1200;"
							 data-transform_out="x:50;o:0;s:1200;">
							<img src="images/shop/slider/slide-3-image-1.png" alt="">
						</div>

						<div class="tp-caption title"
							 data-x="right"
							 data-y="235"
							 data-hoffset="50"
							 data-speed="700"
							 data-start="1800"
							 data-transform_in="x:100;s:700;"
							 data-transform_out="x:100;s:700;">
							New man collection
						</div>

						<div class="tp-caption big-text"
							 data-x="right"
							 data-y="300"
							 data-hoffset="50"
							 data-speed="700"
							 data-start="2100"
							 data-transform_in="y:-30;s:700;"
							 data-transform_out="y:-30;s:700;">
							Minimal &amp; modern look
						</div>

						<div class="tp-caption"
							 data-x="right"
							 data-y="350"
							 data-hoffset="50"
							 data-speed="700"
							 data-start="2400"
							 data-transform_in="y:100;s:700;"
							 data-transform_out="y:100;s:700;">
							<a class="btn btn-black">Collection</a>
						</div>

					</li>
				</ul>
			</div><!-- rev_slider -->
		</div><!-- rev_slider_wrapper -->

		<div class="container">
			<div class="row">
				<div class="col-sm-12">

					<ul class="filter text-center">
						<li>
							<a class="active" href="#" data-filter="*">All</a>
						</li>
						<li>
							<a href="#" data-filter=".categ-1">ss15 collections</a>
						</li>
						<li>
							<a href="#" data-filter=".categ-2">Sales</a>
						</li>
						<li>
							<a href="#" data-filter=".categ-3">Winter collection</a>
						</li>
					</ul>

				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->

		<div class="container">
			<div class="row">
				<div class="col-sm-12">

					<ul class="products isotope col-4">
						<li class="product isotope-item categ-2">

							<a class="product-name" href="#">
								<img src="images/shop/image-1.jpg" alt="">
								<p>Woman Classic Suite SS15 <br> Collection</p>
							</a>

							<h3 class="price">$69</h3>

							<a class="btn btn-black add_to_cart_button" href="#">Cart</a>

						</li><!-- isotope-item -->
						<li class="product isotope-item categ-1 categ-3">

							<a class="product-name" href="#">
								<img src="images/shop/image-2.jpg" alt="">
								<p>Woman Classic Suite SS15 <br> Collection</p>
							</a>

							<h3 class="price">$15</h3>

							<a class="btn btn-black add_to_cart_button" href="#">Cart</a>

						</li><!-- isotope-item -->
						<li class="product isotope-item categ-2">

							<a class="product-name" href="#">
								<img src="images/shop/image-3.jpg" alt="">
								<p>Woman Classic Suite SS15 <br> Collection</p>
							</a>

							<h3 class="price">$29</h3>

							<a class="btn btn-black add_to_cart_button" href="#">Cart</a>

						</li><!-- isotope-item -->
						<li class="product isotope-item categ-1 categ-3">

							<a class="product-name" href="#">
								<img src="images/shop/image-4.jpg" alt="">
								<p>Woman Classic Suite SS15 <br> Collection</p>
							</a>

							<h3 class="price">$99</h3>

							<a class="btn btn-black add_to_cart_button" href="#">Cart</a>

						</li><!-- isotope-item -->
						<li class="product isotope-item categ-2 categ-3">

							<a class="product-name" href="#">
								<img src="images/shop/image-5.jpg" alt="">
								<p>Woman Classic Suite SS15 <br> Collection</p>
							</a>

							<h3 class="price">$74</h3>

							<a class="btn btn-black add_to_cart_button" href="#">Cart</a>

						</li><!-- isotope-item -->
						<li class="product isotope-item categ-1">

							<a class="product-name" href="#">
								<img src="images/shop/image-6.jpg" alt="">
								<p>Woman Classic Suite SS15 <br> Collection</p>
							</a>

							<h3 class="price">$39</h3>

							<a class="btn btn-black add_to_cart_button" href="#">Cart</a>

						</li><!-- isotope-item -->
						<li class="product isotope-item categ-3">

							<a class="product-name" href="#">
								<img src="images/shop/image-7.jpg" alt="">
								<p>Woman Classic Suite SS15 <br> Collection</p>
							</a>

							<h3 class="price">$119</h3>

							<a class="btn btn-black add_to_cart_button" href="#">Cart</a>

						</li><!-- isotope-item -->
						<li class="product isotope-item categ-1 categ-2">

							<a class="product-name" href="#">
								<img src="images/shop/image-8.jpg" alt="">
								<p>Woman Classic Suite SS15 <br> Collection</p>
							</a>

							<h3 class="price">$89</h3>

							<a class="btn btn-black add_to_cart_button" href="#">Cart</a>

						</li><!-- isotope-item -->
					</ul><!-- products -->

				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->

		<div class="container">
			<div class="row">
				<div class="col-sm-12">

					<div class="headline">

						<h1>Lookbook</h1>
						<h6>See all the services that we offer</h6>

					</div><!-- headline -->

				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->

		<div class="container">
			<div class="row">
				<div class="col-sm-12">

					<div class="portfolio-item portfolio-creative thumbnail-left">

						<div class="row">
							<div class="col-sm-offset-7 col-sm-5">

								<div class="portfolio-item-thumbnail">

									<img src="images/shop/image-9.jpg" alt="">

								</div><!-- portfolio-item-thumbnail -->

							</div><!-- col -->
						</div><!-- row -->

					</div><!-- portfolio-item -->

					<div class="portfolio-item portfolio-creative thumbnail-right" style="z-index:10;">

						<div class="row">
							<div class="col-sm-offset-3 col-sm-5">

								<div class="portfolio-item-thumbnail">

									<div class="owl-carousel images-slider">
										<div class="item">
											<img src="images/shop/image-10.jpg" alt="">
										</div><!-- item -->
										<div class="item">
											<img src="images/shop/image-11.jpg" alt="">
										</div><!-- item -->
										<div class="item">
											<img src="images/shop/image-12.jpg" alt="">
										</div><!-- item -->
									</div><!-- images-slider -->

									<div class="images-slider-navigation">
										<span class="prev"><i class="mt-icon-arrow-left"></i></span>
										<span class="next"><i class="mt-icon-arrow-right-2"></i></span>
									</div><!-- images-slider-navigation -->

								</div><!-- portfolio-item-thumbnail -->

							</div><!-- col -->
							<div class="col-sm-4">

								<div class="portfolio-item-details">

									<h4><a href="#">Summer Shooting</a></h4>
									<h6>ss2016</h6>

									<p>Phasellus a tempor augue. Aliquam tristique diam quis libero rutrum interdum feugiat.</p>

								</div><!-- portfolio-item-details -->

							</div><!-- col -->
						</div><!-- row -->

					</div><!-- portfolio-item -->

					<div class="portfolio-item portfolio-creative thumbnail-right">

						<div class="row">
							<div class="col-sm-5">

								<div class="portfolio-item-thumbnail">

									<img src="images/shop/image-13.jpg" alt="">

								</div><!-- portfolio-item-thumbnail -->

							</div><!-- col -->
						</div><!-- row -->

					</div><!-- portfolio-item -->

				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->

		<br><br>

		<div class="container-fluid" style="margin-bottom:-50px;">
			<div class="row">
				<div class="col-sm-6">

					<div class="image-box dark-bg" style="background-image:url(images/backgrounds/bg-2.jpg);">
						<div class="image-box-container">

							<div class="headline">

								<h1>Rethink your design</h1>
								<h6>Minimal &amp; Modern look</h6>

							</div><!-- headline -->

							<a class="btn btn-black" href="#">Discover more</a>

						</div><!-- image-box-container -->
					</div><!-- image-box -->

				</div><!-- col -->
				<div class="col-sm-6">

					<div class="image-box" style="background-image:url(images/backgrounds/bg-3.jpg);">
						<div class="image-box-container">

							<div class="headline">

								<h1>We are Milo <br> digital agency</h1>
								<h6>Revolutionary concepts</h6>

							</div><!-- headline -->

							<a class="btn btn-black" href="#">Buy Template</a>

						</div><!-- image-box-container -->
					</div><!-- image-box -->

				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container-fluid -->

	</div><!-- PAGE CONTENT -->-
@endsection