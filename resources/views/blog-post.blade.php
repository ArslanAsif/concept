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

							<h3>3d Project meant to revolution the visual field - Regular post</h3>

							<h6>
								<a href="#">Maria Smith</a> /
								<a href="#">General</a> /
								<a href="#">Jan 15, 2016</a>
							</h6>

							<p>Sed sagittis mollis ligula eget rhoncus. Nam bland it pellentesque odio.Sus pendisse metus turpis, blandit sed dolor quis,
							com modo commodo elit. Sed sagittis mollis ligula eget rhoncus. Nam bland it pellentesque odio. Phasellus nunc leo, elementum
							in lobortis quis, elementum id nulla. Nunc nunc ante, feugiat et varius a, dictum id neque. Ut quis risus consectetur, ornare
							erat id, finibus eros. Integer eu dolor auctor, interdum arcu in, pellentesque tellus. Duis ac leo viverra nulla lobortis
							ultricies. Vivamus vulputate eu est at sollicitudin. Nunc sollicitudin dictum augue, a semper mauris pellentesque efficitur.
							Aenean rhoncus urna non est volutpat tristique.</p>

							<br>

							<p class="text-default-color"><em><span class="dropcap">P</span>esent tempor vitae orci at gravida. In efficitur, nibh vel
							pretium auctor, lorem justo pharetra neque, et vestibulum dolor ante in eros. Nunc imperdiet mi at diam mattis ultrices.
							Suspendisse faucibus mattis purus, in malesuada mauris semper at. Etiam vel risus tortor. Nam ut tortor cursus diam fringilla
							fermentum. Donec tincidunt non est.</em></p>

							<br>

							<p>Praesent pulvinar dolor vitae lectus rutrum pulvinar. Morbi lectus tellus, aliquet non risus sit amet, interdum venenat
							sapien. Mauris sollicitudin leo eget tempus condimentum. Sed et sagittis ex. Morbi luctus mollis volutpat. Proin vel justo
							vitae mauris scelerisque vulputate sed ut sem luctus mollis.</p>

							<br>

							<p>Phasellus pharetra, enim eu ultricies lobortis, lacus velit porta augue, luctus imperdiet ex erat et metus. Curabitur
							ultrices pharetra dui ac ultrices. Integer elementum nibh sed mauris malesuada, at accums purus feugiat. Vestibulum
							eleifend condimentum justo, elementum cursus elit dignissim at. Class aptent taciti sociosqu ad litora torquent per conubia
							nostra, per inceptos himenaeos. Pellentesque finibus nulla a mattis condimentum. Fusce maximus eget orci varius condimentum.
							Suspendisse hendrerit eget nisi nec pharetra. Integer in lorem at ligula dictum tristique eget non lectus. Duis tincidunt
							augue at dui molestie ullamcorper. </p>

						</div><!-- blog-article-details -->

					</div><!-- blog-article -->

					<div class="blog-article-author">

						<img src="images/blog/blog-post/post-author.jpg" alt="">

						<div class="blog-article-author-details">

							<h4>
								Michael James
								<small>author</small>
							</h4>

							<p>Praesent tempor vitae orci at gravida. In efficitur, nibh vel pretium auctor, lorem justo pharetra neque, et vestibulum
							dolor ante in eros. Nunc imperdiet mi at diam mattis ul trices. Suspendisse faucibus mattis purus, in malesuada mauris
							semper at. </p>

						</div><!-- blog-article-author-details -->

					</div><!-- blog-article-author -->

					<h4 class="commentlist-title">Comments (2)</h4>

					<ul class="commentlist">
						<li class="comment depth-1">
							<div class="comment-body">

								<div class="comment-meta">

									<div class="comment-author">

										<img class="avatar" src="images/blog/blog-post/comment-author-1.jpg" alt="">
										<a class="fn" href="#">Maria Smith</a>
										<span class="says">says:</span>

									</div><!-- comment-author -->

									 <div class="comment-metadata">
										<a href="#">Jan 17, 2016</a>
									</div><!-- comment-metadata -->

								</div><!-- comment-meta -->

								<div class="comment-content">

									<p>Nunc imperdiet mi at diam mattis ultrices. Suspendisse faucibus mattis purus, in malesuadamai uris semper at.
									Etiam vel risus tortor. Nam ut tortor cursus diam fringilla fermentum.</p>

								</div><!--  comment-content -->

								<div class="reply">
									<a class="comment-reply-link" href="#">Replay</a>
								</div><!-- replay -->

							</div><!-- comment-body -->

							<ul class="children">
								<li class="comment depth-2">
									<div class="comment-body">

										<div class="comment-meta">

											<div class="comment-author">

												<img class="avatar" src="images/blog/blog-post/comment-author-2.jpg" alt="">
												<a class="fn" href="#">Michael Scot</a>
												<span class="says">says:</span>

											</div><!-- comment-author -->

											 <div class="comment-metadata">
												<a href="#">Jan 17, 2016</a>
											</div><!-- comment-metadata -->

										</div><!-- comment-meta -->

										<div class="comment-content">

											<p>Aliquam est magna, tempor ac ipsum in, dapibus mattis nulla. Quisque a finibus turpis, semper viverra
											arcu. Interdum et malesuada fames ac ant.</p>

										</div><!--  comment-content -->

										<div class="reply">
											<a class="comment-reply-link" href="#">Replay</a>
										</div><!-- replay -->

									</div><!-- comment-body -->

								</li>
							</ul>
						</li>
					</ul>

					<h4 class="commentform-title">Leave a Comment</h4>

					<form id="commentform" name="commentform" novalidate method="post" action="#">
						<fieldset>

							<p class="commentform-author">
								<input id="name" class="col-xs-12" type="text" name="name" placeholder="name">
							</p>

							<p class="commentform-email">
								<input id="email" class="col-xs-12" type="email" name="email" placeholder="e-mail">
							</p>

							<p class="commentform-url">
								<input id="url" class="col-xs-12" type="url" name="subject" placeholder="url">
							</p>

							<p class="commentform-comment">
								<textarea id="comment" class="col-xs-12" name="comment" rows="7" cols="25" placeholder="message"></textarea>
							</p>

							<p class="commentform-submit">
								<input id="submit" type="submit" name="submit" value="Submit Comment">
							</p>

						</fieldset>
					</form>

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

	</div><!-- PAGE CONTENT -->
@endsection