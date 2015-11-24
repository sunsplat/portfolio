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
	  		<div class="main">
                <img src="<?php echo base_url('assets/images/'.$portfolio_item['image_url']); ?>">
        </div>
        
        <p><a href="<?php echo $portfolio_item['link']; ?>" class="thumbnail">View Demo</a></p>

			<?php endforeach; ?>
	    
	</div>
</div>



        
  