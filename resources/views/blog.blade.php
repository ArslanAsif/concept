@extends('layout.app')

@section('content')
	<!-- CONTENT -->
	<div id="page-content">

		<div id="page-header">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">

						<div class="page-header-simbol">B</div>

					</div><!-- col -->
					<div class="col-sm-9">

						<h2>Blog</h2>

					</div><!-- col -->
				</div><!-- row -->
			</div><!-- container -->
		</div><!-- page-header -->

		<div class="container">
			<div class="row">
				<div class="col-sm-9">

					<div class="blog-article style-1">

						<div class="blog-article-thumbnail">

							<img src="images/blog/image-10.jpg" alt="">

							<div class="social-media">

								<a class="behance" href="#"><i class="mt-icon-behance"></i></a>
								<a class="twitter" href="#"><i class="mt-icon-twitter"></i></a>
								<a class="google" href="#"><i class="mt-icon-google-plus"></i></a>
								<a class="facebook" href="#"><i class="mt-icon-facebook"></i></a>

							</div><!-- social-media -->

						</div><!-- blog-article-thumbnail -->

						<div class="blog-article-details">

							<h3><a href="blog-post-right-sidebar.html">3d Project meant to revolution the visual field - Regular post</a></h3>

							<h6>
								<a href="#">Maria Smith</a> /
								<a href="#">General</a> /
								<a href="#">Jan 15, 2016</a>
							</h6>

							<p>Sed tincidunt tempus ex, a hendrerit leo aliquet commodo. Curabitur et ultrices justo. Donec fringilla, felis nec sus
							cipit sollicitudin, dolor nulla lobortis. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
							doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>

							<a class="btn btn-black" href="blog-post-right-sidebar.html">Read More</a>

						</div><!-- blog-article-details -->

					</div><!-- blog-article -->

					<div class="blog-article style-1">

						<div class="blog-article-thumbnail">

							<div class="owl-carousel images-slider">
								<div class="item">
									<img src="images/blog/image-11.jpg" alt="">
								</div><!-- item -->
								<div class="item">
									<img src="images/blog/image-12.jpg" alt="">
								</div><!-- item -->
								<div class="item">
									<img src="images/blog/image-13.jpg" alt="">
								</div><!-- item -->
							</div><!-- images-slider -->

							<div class="images-slider-navigation">
								<span class="prev"><i class="mt-icon-arrow-left"></i></span>
								<span class="next"><i class="mt-icon-arrow-right-2"></i></span>
							</div><!-- images-slider-navigation -->

						</div><!-- blog-article-thumbnail -->

						<div class="blog-article-details">

							<h3><a href="blog-post-right-sidebar.html">Regular blog post with slider</a></h3>

							<h6>
								<a href="#">Maria Smith</a> /
								<a href="#">Company</a> /
								<a href="#">Jan 14, 2016</a>
							</h6>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla enim erat, elementum ornare metus eu, varius feugiat massa.
							Nam augue lorem, suscipit ut velit quis, laoreet faucibus nisl. Integer eget velit vel lectus rutrum vulputate sit amet sed
							mauris. Nunc ultrices congue est eget dignissim.</p>

							<a class="btn btn-black" href="blog-post-right-sidebar.html">Read More</a>

						</div><!-- blog-article-details -->

					</div><!-- blog-article -->

					<div class="blog-article style-1">

						<div class="blog-article-details">

							<h3><a href="blog-post-right-sidebar.html">Text blog post without picture.</a></h3>

							<h6>
								<a href="#">Maria Smith</a> /
								<a href="#">UI Design</a> /
								<a href="#">Jan 12, 2016</a>
							</h6>

							<p>Etiam volutpat odio quis commodo fringilla. Integer tempor condimentum orci in feugiat. Cras dapibus porta mi, eget
							dapibus arcu fermentum et. Vestibulum nec eros mi. Integer maximus non sapien et malesuada. Nulla facilisi. Proin in
							ultricies erat. Nulla bibendum vitae lacus vel facilisis. Nulla scelerisque eu turpis vel tincidunt. Lorem ipsum dolor sit
							amet, consectetur adipiscing elit. Duis enim sem, malesuada tincidunt velit quis, ultrices porta nulla.</p>

							<a class="btn btn-black" href="blog-post-right-sidebar.html">Read More</a>

						</div><!-- blog-article-details -->

					</div><!-- blog-article -->

					<div class="blog-article style-1">

						<div class="blog-article-thumbnail">

							<div class="embed-responsive embed-responsive-16by9">
								<iframe src="https://player.vimeo.com/video/27377314" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							</div><!-- embed-responsive -->

						</div><!-- blog-article-thumbnail -->

						<div class="blog-article-details">

							<h3><a href="blog-post-right-sidebar.html">Regular blog post with video</a></h3>

							<h6>
								<a href="#">Maria Smith</a> /
								<a href="#">General</a> /
								<a href="#">Jan 11, 2016</a>
							</h6>

							<p>Aliquam in tempus risus. Maecenas vehicula neque at risus viverra consectetur. In ac vestibulum massa. Lorem ipsum dolor
							sit amet, consectetur adipiscing elit. Curabitur hendrerit orci vitae quam imperdiet maximus ut quis elit. Quisque dictum
							faucibus nibh, non vestibulum dui tincidunt nec.</p>

							<a class="btn btn-black" href="blog-post-right-sidebar.html">Read More</a>

						</div><!-- blog-article-details -->

					</div><!-- blog-article -->

				</div><!-- col -->
				<div class="col-sm-3">

					<div class="widget widget-search">

						<form name="search" method="get" action="#">
							<fieldset>
								<input type="search" name="search" placeholder="search...">
								<input type="submit" name="submit" value="">
							</fieldset>
						</form>

					</div><!-- widget-search -->

					<div class="widget widget-recent-posts">

						<h6 class="widget-title">Latest Posts</h6>

						<ul>
							<li>
								<div class="post-thumbnail">
									<img src="images/blog/blog-post/post-1.jpg" alt="">
									<a class="fancybox" href="images/blog/blog-post/post-1.jpg">+</a>
								</div><!-- post-thumbnail -->

								<a class="post-title" href="#">Mock-up project</a>

								<p class="post-date">Jan 12, 2016</p>

								<a class="read-more" href="#">Read more</a>
							</li>
							<li>
								<div class="post-thumbnail">
									<img src="images/blog/blog-post/post-2.jpg" alt="">
									<a class="fancybox" href="images/blog/blog-post/post-2.jpg">+</a>
								</div><!-- post-thumbnail -->

								<a class="post-title" href="#">2016 Design Reunion</a>

								<p class="post-date">Jan 11, 2016</p>

								<a class="read-more" href="#">Read more</a>
							</li>
							<li>
								<div class="post-thumbnail">
									<img src="images/blog/blog-post/post-3.jpg" alt="">
									<a class="fancybox" href="images/blog/blog-post/post-3.jpg">+</a>
								</div><!-- post-thumbnail -->

								<a class="post-title" href="#">Design at it’s best</a>

								<p class="post-date">Jan 10, 2016</p>

								<a class="read-more" href="#">Read more</a>
							</li>
						</ul>

					</div><!-- widget-recent-posts -->

					<div class="widget widget-categories">

						<h6 class="widget-title">Categories</h6>

						<ul>
							<li><a href="#">Photography</a></li>
							<li><a href="#">Music</a></li>
							<li><a href="#">Web Design</a></li>
							<li><a href="#">Travel &amp; Living</a></li>
							<li><a href="#">Video</a></li>
							<li><a href="#">Lifestyle</a></li>
							<li><a href="#">Uncategorized</a></li>
						</ul>

					</div><!-- widget-categories -->

					<div class="widget widget-instagram">

						<h6 class="widget-title">Instagram</h6>

						<div id="instafeed" data-user="2000086078" data-number="8" data-accesstoken="2000086078.1677ed0.bd2c323b815b445fa0027cb85c99918d"></div>

					</div><!-- widget-instagram -->

					<div class="widget widget-text">

						<h6 class="widget-title">Quote</h6>

						<div>
							<blockquote>
								<p><em>&quot;Phasellus nunc leo, elemen tum in lobortis quis, element um id nulla. Nunc nunc ante, feugiat et varius a, dictum id neque. Ut quis risus consectet ur, ornare erat id, finibus eros. Integer eu dolor auctor, int erdum arcu.&quot;</em></p>
							</blockquote>
						</div>

					</div><!-- widget-text -->

					<div class="widget widget-tags">

						<h6 class="widget-title">Tags</h6>

						<div>

							<a href="#">photography</a>
							<a href="#">design</a>
							<a href="#">lifestyle</a>
							<a href="#">music</a>
							<a href="#">logo</a>
							<a href="#">video</a>
							<a href="#">concept</a>
							<a href="#">text</a>

						</div>

					</div><!-- widget-tags -->

				</div><!-- col -->
			</div><!-- row -->
		</div><!-- container -->

		<div class="container">
			<div class="row">
				<div class="col-sm-12">

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