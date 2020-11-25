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
