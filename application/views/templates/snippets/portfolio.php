<div class="container content">
	<div class ="row center">
		<div class="col-md-4 col-md-offset-4 padBottom">
				<h1>MY PORTFOLIO</h1>
		</div>
	</div>

	<div class="row">
	  <div class="col-xs-6 col-md-4">
	  	<?php foreach ($portfolio as $portfolio_item): ?>
	  		<h3><?php echo $portfolio_item['project_name']; ?></h3>

        <a href="<?php echo $portfolio_item['link']; ?>" class="thumbnail">
        	<img class="thumbs" src="<?php echo base_url('assets/images/'.$portfolio_item['image_url']); ?>">
        </a>
        
        <p><a href="<?php echo $portfolio_item['source']; ?>">View Source Code</a></p>

			<?php endforeach; ?>
	    
		</div>
	</div>
</div>



        
  