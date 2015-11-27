<div class="container content">
	<div class ="row center">
		<div class="col-md-6 col-md-offset-3 padBottom">
				<h2>MY PORTFOLIO</h2>
		</div>
	</div>

	<div class="row">
	  <?php foreach ($portfolio as $portfolio_item): ?>
	  	<div class="col-md-4">
	  		<h3><?php echo $portfolio_item['project_name']; ?></h3>

        <a href="<?php echo $portfolio_item['link']; ?>" class="thumbnail">
        	<img class="thumbs" src="<?php echo base_url('assets/images/'.$portfolio_item['image_url']); ?>">
        </a>
        
        <p><a href="<?php echo $portfolio_item['source']; ?>">View Source Code</a></p>

      </div>
		<?php endforeach; ?>
	    
		
	</div>
</div>



        
  