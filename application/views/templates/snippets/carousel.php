<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="5000">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <a href="#"></a>
        <div class="container">
        </div>
      <img src="<?php echo base_url('assets/images/carousel-1.png'); ?>" alt="contact" class="img-responsive center-block">
      <div class="carousel-caption">
        <h2>Connect with me!</h2>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url('assets/images/carousel-2.png'); ?>" alt="image-2" class="img-responsive center-block">
      <div class="carousel-caption">
        <h1></h1>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url('assets/images/carousel-3.png'); ?>" alt="image-3" class="img-responsive center-block">
      <div class="carousel-caption">
        <h2>Resources</h2>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>