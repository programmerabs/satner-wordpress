<?php get_header(); ?>

    <!--================ Start Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2><?php the_title(); ?></h2>
                    <h1> <?php echo get_post_meta(get_the_ID(),'my_name',true);
                      
                    ?>
                     </h1>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area section_gap">
        <div class="container">
            <?php the_content();?>
        </div>
    </section>
  <?php get_footer();?>
