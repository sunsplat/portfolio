<div class="container content">
	<div class ="row center">
		<div class="col-md-4 col-md-offset-4 padBottom">
				<h1>MY PORTFOLIO</h1>
		</div>
	</div>

	<div class="row">
	  <div class="col-xs-6 col-md-4">
	    <a href="https://stormy-ridge-1166.herokuapp.com/" class="thumbnail">
	      <img class="thumbs" src="<?php echo base_url('assets/images/hapsit.jpg') ?>" alt="thumb">
	    </a>
	    <a class="center" href="https://github.com/sunsplat/simplecode_saas">Source Code</a>
	  </div>
	  <div class="col-xs-6 col-md-4">
	    <a href="https://tts2.herokuapp.com/" class="thumbnail">
	      <img class="thumbs" src="<?php echo base_url('assets/images/movielist.jpg') ?>" alt="...">
	    </a>
	    <a class="center" href="https://github.com/sunsplat/tts">Source Code</a>
	  </div>
	  <div class="col-xs-6 col-md-4">
	    <a href="#" class="thumbnail">
	      <img src="<?php echo base_url('assets/images/thumb192x200.png') ?>" alt="...">
	    </a>
	  </div>
	</div>
</div>

<?php foreach ($portfolio_item as $portfolio_items): ?>

        <h3><?php echo $portfolio_items['project_name']; ?></h3>
        <div class="main">
                <?php echo $portfolio_items['thumbnail']; ?>
        </div>
        <p><a href="<?php echo site_url($portfolio_items['link']); ?>">View article</a></p>

<?php endforeach; ?>