<!--================Footer Area =================-->
<footer class="footer_area">
  <div class="container">
    <?php if(is_active_sidebar('foo-wd')){?>
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="footer_top flex-column">
          <?php dynamic_sidebar('foo-wd');?>
          <!-- <div class="footer_logo">
            <a href="#">
              <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="">
            </a>
            <h4>Follow Me</h4>
          </div>
          <div class="footer_social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-behance"></i></a>
          </div> -->
        </div>
      </div>
    </div>
  <?php }?>
    <div class="row footer_bottom justify-content-center">
      <p class="col-lg-8 col-sm-12 footer-text">
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> <?php
global $redux_demo;
echo $redux_demo['cptext'];

?>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
    </div>
  </div>
</footer>
<!--================End Footer Area =================-->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<!--gmaps Js-->
<script src="<?php echo get_template_directory_uri();?>/https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>

<?php wp_footer();?>
</body>

</html>
