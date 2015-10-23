<div class="container">
	<div class="row quotes">
		<div class="col-md-6 col-md-offset-3">
			<h1>Quotes</h1>

			<?php foreach ($quotes as $quotes_item): ?>

        <h3><?php echo $quotes_item['quote']; ?></h3>
        <div class="main">
                <?php echo $quotes_item['author']; ?>
        </div>

			<?php endforeach; ?>

			<div class="col-md-5">

				<?php echo validation_errors(); ?>

				<?php echo form_open('quotes/create'); ?>
					<div class="form-group">
						<label for="quote">Quote</label>
				    <textarea name="quote"></textarea><br />
				  </div>
				  <div class="form-group">
				    <label for="author">Author</label>
				    <input type="input" name="author" /><br />
				  </div>
				  <div class="form-group">
			    	<input type="submit" name="submit" value="Add new quote" />
			    </div>

				</form>

			</div>
		</div>
	</div> <!-- row quotes -->
<div> <!-- container -->

<div class="container">
        <p><a href="<?php echo site_url('quotes/'.$quotes_item['slug']); ?>">View more quotes.</a></p>
</div>
<div></div>

