<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo base_url('bootstrap/images/carousel-1.png'); ?>" alt="image-1" class="img-responsive center-block">
      <div class="carousel-caption">
        Portfolio
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url('bootstrap/images/carousel-2.png'); ?>" alt="image-2" class="img-responsive center-block">
      <div class="carousel-caption">
        About
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url('bootstrap/images/carousel-3.png'); ?>" alt="image-3" class="img-responsive center-block">
      <div class="carousel-caption">
        Season
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