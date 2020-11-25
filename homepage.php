<?php
/*
Template Name: Front Page
*/

?>
<?php
 get_header(); ?>

	<!--================ Start Home Banner Area =================-->

	<?php
$layout = $redux_demo['tgtoggle']['enabled'];
if ( $layout ): foreach ( $layout as $key => $value ) {
    switch($key) {
        case 'banner': get_template_part( 'tempart/banner' );
        	break;
        case 'about': get_template_part( 'tempart/about' );
        	break;
				case 'brand': get_template_part( 'tempart/brand' );
        	break;
				case 'feature': get_template_part( 'tempart/feature' );
        	break;
				case 'portfolio': get_template_part( 'tempart/portfolio' );
        	break;
				case 'testmonial': get_template_part( 'tempart/testmonial' );
        	break;
				case 'newsletter': get_template_part( 'tempart/newslater' );
        	break;

    }
}
endif;

	 ?>
	<?php get_footer();?>
