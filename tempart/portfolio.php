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
