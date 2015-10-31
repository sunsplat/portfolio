<section id="quotemain">
	<div class="container">
		<div class="row quotes">
			<div class="col-md-6 col-md-offset-3">
				<h1>Quotes</h1>
				<h3><?php shuffle($quotes); ?></h3>

				<h3>"<?php echo $quotes[0]['quote']; ?>"</h3>
					<p><?php echo $quotes[0]['author']; ?></p>
				
			</div>
		</div> <!-- row quotes -->
		<div class="center">
			<a href="<?php echo site_url('pages/quotes'); ?>" class="quotebutton">View more quotes.</a></p>
		</div>
	</div> <!-- container -->
</section>


