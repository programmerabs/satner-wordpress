<?php get_header(); ?>

    <!--================ Start Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Blog Details</h2>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="blog.html">Blog</a>
                        <a href="single-blog.html">Blog Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
                                  <?php the_post_thumbnail('full',['class' => 'img-fluid']);?>
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-3">
                            <div class="blog_info text-right">
															<div class="post_tag">
																<?php the_tags('',', ','');?>
															</div>
                                <ul class="blog_meta list">
                                    <li><a href="#"><?php echo the_author();?><i class="lnr lnr-user"></i></a></li>
                                    <li><a href="#"><?php echo get_the_date('d M, Y');?><i class="lnr lnr-calendar-full"></i></a></li>
                                    <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#"><?php comments_number();?><i class="lnr lnr-bubble"></i></a></li>
                                </ul>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 blog_details">
                            <h2><?php the_title();?></h2>
                            <?php the_content(); ?>
                        </div>

                    </div>
                    <div class="navigation-area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                <?php previous_post_link();?>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                <?php next_post_link();?>
                            </div>
                        </div>
                    </div>
                  <?php
										comments_template();
									?>
                </div>
                <div class="col-lg-4">
                  <?php get_sidebar();?>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

  <?php get_footer();?>
