<div class="container">
	<div class="row quotes">
		<div class="col-md-6 col-md-offset-3">
			<h1>Quotes</h1>
			<h3>"<?php echo $quotes[0]['quote']; ?>"</h3>
				<p><?php echo $quotes[0]['author']; ?></p>

			<!-- <?php foreach ($quotes as $quotes_item): ?>

         <h3><?php echo $quotes_item['quote']; ?></h3>
         <div class="main">
                 <?php echo $quotes_item['author']; ?>
         </div>

			 <?php endforeach; ?> -->
			
		</div>
	</div> <!-- row quotes -->
	<div class="center">
		<a href="<?php echo site_url('pages/quotes'); ?>" class="quotebutton">View more quotes.</a></p>
	</div>
<div> <!-- container -->


<script>
	

	$('button').click(function() {
		var url = "quotes/callme" // the url to the controller and method
		$.get({
			url: url
		})
	})
</script>

