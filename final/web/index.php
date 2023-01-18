<?php
require 'layout/header.php';
require 'config/veritaban.php';

$result = $connection->query("SELECT * FROM haber");


?>

<section id="bricks">
	<div class="row masonry">
		<!-- brick-wrapper -->
		<div class="bricks-wrapper">
			<div class="grid-sizer"></div>
			<!-- silder -->
			<div class="brick entry featured-grid animate-this">
				<div class="entry-content">
					<div id="featured-post-slider" class="flexslider">
						<ul class="slides">

							<li>
								<div class="featured-post-slide">

									<div class="post-background" style="background-image:url('images/1.jpg');"></div>

									<div class="overlay"></div>

									<div class="post-content">
										<ul class="entry-meta">
											<li>September 06, 2016</li>
											<li><a href="#">Naruto Uzumaki</a></li>
										</ul>

										<h1 class="slide-title"><a href="single-standard.html" title="">Minimalism Never
												Goes Out of Style</a></h1>
									</div>

								</div>
							</li> <!-- /slide -->

							<li>
								<div class="featured-post-slide">

									<div class="post-background" style="background-image:url('images/2.jpg');"></div>

									<div class="overlay"></div>

									<div class="post-content">
										<ul class="entry-meta">
											<li>August 29, 2016</li>
											<li><a href="#">Sasuke Uchiha</a></li>
										</ul>

										<h1 class="slide-title"><a href="single-standard.html" title="">Enhancing Your
												Designs with Negative Space</a></h1>
									</div>

								</div>
							</li> <!-- /slide -->

							<li>
								<div class="featured-post-slide">

									<div class="post-background" style="background-image:url('images/3.jpg');;"></div>

									<div class="overlay"></div>

									<div class="post-content">
										<ul class="entry-meta">
											<li>August 27, 2016</li>
											<li><a href="#" class="author">Naruto Uzumaki</a></li>
										</ul>

										<h1 class="slide-title"><a href="single-standard.html" title="">Music Album
												Cover Designs for Inspiration</a></h1>
									</div>

								</div>
							</li> <!-- end slide -->

						</ul> <!-- end slides -->
					</div> <!-- end featured-post-slider -->
				</div> <!-- end entry content -->
			</div>

			<article class="brick entry format-standard animate-this">
				<?php while ($row = $result->fetch_assoc()) { ?>

					<div class="entry-thumb">
						<a class="thumb-link">
							<img src="<?php echo $row['foto']; ?>" alt="building">
						</a>
					</div>

				<?php } ?>

				<div class="entry-text">
					<div class="entry-header">

						<div class="entry-meta">
							<span class="cat-links">
								<a href="#">Design</a>
								<a href="#">Photography</a>
							</span>
						</div>

						<h1 class="entry-title"><a href="single-standard.html">Just a Standard Format Post.</a></h1>

					</div>
					<div class="entry-excerpt">
						Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident
						dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint
						in aliqua cillum in consequat consequat in culpa in anim.
					</div>
				</div>

			</article> <!-- end article -->

			<article class="brick entry format-standard animate-this">

				<div class="entry-thumb">
					<a href="single-standard.html" class="thumb-link">
						<img src="images/2.jpg" alt="ferris wheel">
					</a>
				</div>

				<div class="entry-text">
					<div class="entry-header">

						<div class="entry-meta">
							<span class="cat-links">
								<a href="#">Design</a>
								<a href="#">UI</a>
							</span>
						</div>

						<h1 class="entry-title"><a href="single-standard.html">This Is Another Standard Format Post.</a>
						</h1>

					</div>
					<div class="entry-excerpt">
						Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident
						dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint
						in aliqua cillum in consequat consequat in culpa in anim.
					</div>
				</div>

			</article> <!-- end article -->


			<div class="row">
				<nav class="pagination">
					<span class="page-numbers prev inactive">Prev</span>
					<span class="page-numbers current">1</span>
					<a href="#" class="page-numbers">2</a>
					<a href="#" class="page-numbers">3</a>
					<a href="#" class="page-numbers">4</a>
					<a href="#" class="page-numbers">5</a>
					<a href="#" class="page-numbers">6</a>
					<a href="#" class="page-numbers">7</a>
					<a href="#" class="page-numbers">8</a>
					<a href="#" class="page-numbers">9</a>
					<a href="#" class="page-numbers next">Next</a>
				</nav>
			</div>
</section> <!-- end bricks -->

<?php require 'layout/footer.php'; ?>