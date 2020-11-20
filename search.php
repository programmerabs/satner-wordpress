<?php get_header();?>
	<!--================ End Header Area =================-->

    <!--================ Start Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Search</h2>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="blog.html">Search page</a>
                        <p class="text-white"><b>Search for: </b><?php the_search_query();?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog_area mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                  <?php if(have_posts()){?>
                    <div class="blog_left_sidebar">
                      <?php while(have_posts()):the_post();?>
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                      <?php the_tags('',', ','');?>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?><i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#"><?php the_date('d M, Y');?><i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                        <li><a href="#"><?php comments_number();?><i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <?php the_post_thumbnail('post-tb',['class' => 'hojoborol']);?>
                                    <div class="blog_details">
                                        <a href="<?php the_permalink();?>"><h2><?php  the_title();?></h2></a>
                                        <p><?php the_excerpt();?></p>
                                        <a href="<?php the_permalink();?>" class="primary_btn"><span>View More</span></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                      <?php endwhile;?>
                      <?php the_posts_pagination([
                        'screen_reader_text' => ' ',
                        'prev_text'          => '<span class="lnr lnr-chevron-left"></span>',
                        'next_text'          => '<span class="lnr lnr-chevron-right"></span>'
                      ]);?>

                    </div>
                  <?php }else{?>
                     <h1>kono post nei</h1>
                <?php  }?>



                </div>
                <div class="col-lg-4">
                  <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
<?php get_footer();?>
