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
