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
