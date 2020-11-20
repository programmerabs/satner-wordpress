<?php
/*
Template Name: Front Page
*/

?>
<?php get_header(); ?>

	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="banner_content">
							<h3 class="text-uppercase"><?php echo get_post_meta(get_the_ID(),'b_tilte',true)?></h3>
							<h1 class="text-uppercase"><?php echo get_post_meta(get_the_ID(),'b_heading',true)?></h1>
							<h5 class="text-uppercase"><?php echo get_post_meta(get_the_ID(),'b_s_heading',true)?></h5>
							<div class="d-flex align-items-center">
								<a class="primary_btn" href="<?php echo get_post_meta(get_the_ID(),'b_bt_1_url',true)?>"><span><?php echo get_post_meta(get_the_ID(),'b_bt_1_title',true)?></span></a>
								<a class="primary_btn tr-bg" href="<?php echo get_post_meta(get_the_ID(),'b_bt_2_url',true)?>"><span><?php echo get_post_meta(get_the_ID(),'b_bt_2_title',true)?></span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="home_right_img">
							<img class="" src="<?php echo get_template_directory_uri();?>/img/banner/home-right.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<!--================ Start About Us Area =================-->
	<section class="about_area section_gap">
		<div class="container">
			<div class="row justify-content-start align-items-center">
				<div class="col-lg-5">
					<div class="about_img">
						<img class="" src="<?php echo get_template_directory_uri();?>/img/about-us.png" alt="">
					</div>
				</div>

				<div class="offset-lg-1 col-lg-5">
					<div class="main_title text-left">
						<h2>let’s <br>
							Introduce about <br>
							myself</h2>
						<p>
							Whose given. Were gathered. There first subdue greater. Bearing you Whales heaven
							midst their. Beast creepeth. Fish days.
						</p>
						<p>
							Is give may shall likeness made yielding spirit a itself together created after sea
							is in beast beginning signs open god you're gathering whose gathered cattle let.
							Creature whales fruit unto meat the life beginning all in under give two.
						</p>
						<a class="primary_btn" href="#"><span>Download CV</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End About Us Area =================-->

	<!--================ Srart Brand Area =================-->
	<section class="brand_area section_gap_bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="<?php echo get_template_directory_uri();?>/img/brands/logo1.png" alt="">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="<?php echo get_template_directory_uri();?>/img/brands/logo2.png" alt="">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="<?php echo get_template_directory_uri();?>/img/brands/logo3.png" alt="">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="<?php echo get_template_directory_uri();?>/img/brands/logo4.png" alt="">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="<?php echo get_template_directory_uri();?>/img/brands/logo5.png" alt="">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="<?php echo get_template_directory_uri();?>/img/brands/logo6.png" alt="">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="<?php echo get_template_directory_uri();?>/img/brands/logo7.png" alt="">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="<?php echo get_template_directory_uri();?>/img/brands/logo8.png" alt="">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-brand-item d-table">
								<div class="d-table-cell text-center">
									<img src="<?php echo get_template_directory_uri();?>/img/brands/logo9.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="offset-lg-2 col-lg-4 col-md-6">
					<div class="client-info">
						<div class="d-flex mb-50">
							<span class="lage">10</span>
							<span class="smll">Years Experience Working</span>
						</div>
						<div class="call-now d-flex">
							<div>
								<span class="fa fa-phone"></span>
							</div>
							<div class="ml-15">
								<p>call us now</p>
								<h3>(+1)-800-555-6789</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Brand Area =================-->

	<!--================ Start Features Area =================-->
<?php
$qr =new WP_Query([
	'post_type' => 'service',
	'posts_per_page' =>-1
]);
if($qr->have_posts()){ 	?>

	<section class="features_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="main_title">
						<h2>service offers </h2>
						<p>
							Is give may shall likeness made yielding spirit a itself togeth created
							after sea <br> is in beast beginning signs open god you're gathering ithe
						</p>
					</div>
				</div>
			</div>
			<div class="row feature_inner">
				<?php
				// $i=1;
				// $sum = 0;
				 while ($qr->have_posts()) {
			   $qr->the_post();

 			 	// 	$col = '';
				// 	if($sum == 1){
				// 		$col = 12;
				// 	}elseif ($sum == 2) {
				// 		$col = 6;
				// 	}elseif ($sum == 3) {
				// 		$col = 4;
				// 	}elseif ($sum == 4) {
				// 		$col = 3;
				// 	}else{
				// 		$col = 3;
				// 	}
				// ?>
					<div class="col-lg-3 col-md-6">
						<div class="feature_item">
							<?php the_post_thumbnail();?>
							<h4><?php the_title();?></h4>
							<p><?php the_excerpt();?></p>
						</div>
					</div>

			<?php }?>




			</div>
		</div>
	</section>
<?php }
?>





	<!--================ End Features Area =================-->

	<!--================Start Portfolio Area =================-->
	<?php $ptf =new WP_Query([
		'post_type' => 'project',
		'posts_per_page' =>-1
	]);
	if($ptf->have_posts()){?>
	<section class="portfolio_area" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title text-left">
						<h2>quality work <br>
							Recently done project </h2>
					</div>
				</div>
			</div>
			<div class="filters portfolio-filter">
				<ul>
					<li class="active" data-filter="*">all</li>
					<?php
					$terms = get_terms( 'pcategory', array(
					    'hide_empty' => false,
					) );
					foreach ($terms as $cat) {
						echo "<li data-filter='.$cat->name'>$cat->name</li>";
					}
					?>
<!--
					<li data-filter=".popular">popular</li>
					<li data-filter=".latest"> latest</li>
					<li data-filter=".following">following</li>
					<li data-filter=".upcoming">upcoming</li> -->
				</ul>
			</div>

			<div class="filters-content">
				<div class="row portfolio-grid justify-content-center">

				<?php	while ($ptf->have_posts()) {
					$ptf->the_post();
					?>
					<div class="col-lg-4 col-md-6 all <?php echo strip_tags(get_the_term_list($post->ID,'pcategory','',' ','')); ?>">
						<div class="portfolio_box">
							<div class="single_portfolio">
								<?php the_post_thumbnail('post-thumbnail', ['class'=>'img-fluid w-100']);?>
								<div class="overlay"></div>
								<a href="<?php the_post_thumbnail_url(); ?>" class="img-gal">
									<div class="icon">
										<span class="lnr lnr-cross"></span>
									</div>
								</a>
							</div>
							<div class="short_info">
								<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
								<p><?php echo get_the_term_list($post->ID,'ptag','',', ',''); ?></p>
							</div>
						</div>
					</div>
				<?php }?>


				</div>
			</div>
		</div>
	</section>
<?php }?>
	<!--================End Portfolio Area =================-->

	<!--================ Start Testimonial Area =================-->
	<?php $rv =new WP_Query([
		'post_type' => 'review',
		'posts_per_page' =>-1
	]);
	if($rv->have_posts()){?>
	<div class="testimonial_area section_gap_bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="main_title">
						<h2>client say about me</h2>
						<p>Is give may shall likeness made yielding spirit a itself togeth created after sea is in beast <br>
							 beginning signs open god you're gathering ithe</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="testi_slider owl-carousel">
					<?php	while ($rv->have_posts()) {
						$rv->the_post();
						?>
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">
        						<?php the_post_thumbnail(); ?>
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4><?php the_title();?></h4>
									<p><?php the_content();?> </p>
        						</div>
        					</div>
        				</div>
        			</div>
						<?php }?>
        		</div>
			</div>
		</div>
	</div>
	<?php }?>
	<!--================ End Testimonial Area =================-->

	<!--================ Start Newsletter Area =================-->
	<section class="newsletter_area">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-12">
					<div class="subscription_box text-center">
						<h2 class="text-uppercase text-white">get update from anywhere</h2>
						<p class="text-white">
							Bearing Void gathering light light his eavening unto dont afraid.
						</p>
						<div class="subcribe-form" id="mc_embed_signup">
							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
								<input name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" type="email">
								<div style="position: absolute; left: -5000px;">
									<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
								</div>
								<button class="primary-btn hover d-inline">Get Started</button>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Newsletter Area =================-->

	<?php get_footer();?>
