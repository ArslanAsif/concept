@extends('layout.app')

@section('content')
	<!-- CONTENT -->
	<div id="page-content">

		<div id="page-header">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">

						<div class="page-header-simbol">S</div>

					</div><!-- col -->
					<div class="col-sm-9">

						<h2>Shop</h2>

					</div><!-- col -->
				</div><!-- row -->
			</div><!-- container -->
		</div><!-- page-header -->

		<div class="container">
			<div class="row">
				<div class="col-sm-3">

					<div class="widget widget-search">

						<form name="search" method="get" action="#">
							<fieldset>
								<input type="search" name="search" placeholder="search...">
								<input type="submit" name="submit" value="">
							</fieldset>
						</form>

					</div><!-- widget-search -->

					<div class="widget widget-categories">

						<h6 class="widget-title">Categories</h6>

						<ul>
							<li><a href="#">Woman</a></li>
							<li><a href="#">Man</a></li>
							<li><a href="#">Accesories</a></li>
							<li><a href="#">Sunglasses</a></li>
							<li><a href="#">Designer Pick</a></li>
							<li><a href="#">Sales</a></li>
							<li><a href="#">Home &amp; Deco</a></li>
						</ul>

					</div><!-- widget-categories -->

					<div class="widget widget-recent-posts">

						<h6 class="widget-title">Latest Posts</h6>

						<ul>
							<li>
								<div class="post-thumbnail">
									<img src="images/shop/image-14.jpg" alt="">
									<a class="fancybox" href="images/shop/image-14.jpg">+</a>
								</div><!-- post-thumbnail -->

								<a class="post-title" href="#">Man Blazer SS15</a>

								<p class="post-price">$79,99</p>

								<a class="read-more" href="#">Shop Now</a>
							</li>
							<li>
								<div class="post-thumbnail">
									<img src="images/shop/image-15.jpg" alt="">
									<a class="fancybox" href="images/shop/image-15.jpg">+</a>
								</div><!-- post-thumbnail -->

								<a class="post-title" href="#">Classic Woman Shirt</a>

								<p class="post-price">$19,99</p>

								<a class="read-more" href="#">Shop Now</a>
							</li>
							<li>
								<div class="post-thumbnail">
									<img src="images/shop/image-16.jpg" alt="">
									<a class="fancybox" href="images/shop/image-16.jpg">+</a>
								</div><!-- post-thumbnail -->

								<a class="post-title" href="#">Unisex Sunglasses</a>

								<p class="post-price">$9,99</p>

								<a class="read-more" href="#">Shop Now</a>
							</li>
						</ul>

					</div><!-- widget-recent-posts -->

					<div class="widget widget-price-selector">

						<h6 class="widget-title">Price Filter</h6>

						<div id="slider"></div>

						<div class="slider-value">
							<span class="text-uppercase text-default-color hidden-sm">Price: </span>
							<span class="example-val" id="lower-value"></span> -
							<span class="example-val" id="upper-value"></span>
						</div><!-- slider-value -->

						<a class="btn btn-default" href="#">Filter</a>

					</div><!-- widget-price-selector -->

				</div><!-- col -->
				<div class="col-sm-9">

					<ul class="products isotope col-3">
						<li class="product isotope-item">

							<a class="product-name" href="#">
								<img src="images/shop/image-1.jpg" alt="">
								<p>Woman Classic Suite SS15 <br> Collection</p>
							</a>

							<h3 class="price">$69</h3>

							<a class="btn btn-black add_to_cart_button" href="#">Cart</a>

						</li><!-- isotope-item -->
						<li class="product isotope-item">

							<a class="product-name" href="#">
								<img src="images/shop/image-2.jpg" alt="">
								<p>Woman Classic Suite SS15 <br> Collection</p>
							</a>

							<h3 class="price">$15</h3>

							<a class="btn btn-black add_to_cart_button" href="#">Cart</a>

						</li><!-- isotope-item -->
						<li class="product isotope-item">

							<a class="product-name" href="#">
								<img src="images/shop/image-3.jpg" alt="">
								<p>Woman Classic Suite SS15 <br> Collection</p>
							</a>

							<h3 class="price">$29</h3>

							<a class="btn btn-black add_to_cart_button" href="#">Cart</a>

						</li><!-- isotope-item -->
						<li class="product isotope-item">

							<a class="product-name" href="#">
								<img src="images/shop/image-4.jpg" alt="">
								<p>Woman Classic Suite SS15 <br> Collection</p>
							</a>

							<h3 class="price">$99</h3>

							<a class="btn btn-black add_to_cart_button" href="#">Cart</a>

						</li><!-- isotope-item -->
						<li class="product isotope-item">

							<a class="product-name" href="#">
								<img src="images/shop/image-5.jpg" alt="">
								<p>Woman Classic Suite SS15 <br> Collection</p>
							</a>

							<h3 class="price">$74</h3>

							<a class="btn btn-black add_to_cart_button" href="#">Cart</a>

						</li><!-- isotope-item -->
						<li class="product isotope-item">

							<a class="product-name" href="#">
								<img src="images/shop/image-6.jpg" alt="">
								<p>Woman Classic Suite SS15 <br> Collection</p>
							</a>

							<h3 class="price">$39</h3>

							<a class="btn btn-black add_to_cart_button" href="#">Cart</a>

						</li><!-- isotope-item -->
						<li class="product isotope-item">

							<a class="product-name" href="#">
								<img src="images/shop/image-7.jpg" alt="">
								<p>Woman Classic Suite SS15 <br> Collection</p>
							</a>

							<h3 class="price">$119</h3>

							<a class="btn btn-black add_to_cart_button" href="#">Cart</a>

						</li><!-- isotope-item -->
						<li class="product isotope-item">

							<a class="product-name" href="#">
								<img src="images/shop/image-8.jpg" alt="">
								<p>Woman Classic Suite SS15 <br> Collection</p>
							</a>

							<h3 class="price">$89</h3>

							<a class="btn btn-black add_to_cart_button" href="#">Cart</a>

						</li><!-- isotope-item -->
					</ul><!-- products -->

					<ul class="pagination">
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
					</ul>

				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->

	</div><!-- PAGE CONTENT -->
@endsection
