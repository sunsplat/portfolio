<h2>Add a Quote</h2>
<div class="container">
	<div class="row quotes">
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
		</div> <!-- col -->
	</div> <!-- row -->

</div> <!-- container -->