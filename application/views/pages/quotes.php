<div class="container">
	<div class="row quotes">
		<div class="col-md-6 col-md-offset-3">
			<h1>Quotes</h1>

			<?php foreach ($quotes as $quotes_item): ?>

        <h3><?php echo $quotes_item['quote']; ?></h3>
        <div class="main">
                <?php echo $quotes_item['author']; ?>
        </div>
        <p><a href="<?php echo site_url('quotes/'.$quotes_item['slug']); ?>">View more quotes.</a></p>

			<?php endforeach; ?>
		</div>
	</div>
<div>


