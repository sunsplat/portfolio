<div class="jumbotron">
	<h2><?php echo $title; ?></h2>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="alert alert-warning"><?php echo validation_errors(); ?></div>
			<?php echo form_open('contact/create'); ?>
				<div class="form-group">
				    <label for="name" class="control-label">Name</label>
				    <input type="input" class="form-control" id="name" name="name" /><br />
				</div>
				<div class="form-group">
				    <label for="email" class="control-label">Email</label>
				    <input type="text" class="form-control" id="email" name="email"></textarea><br />
				</div>
				<div class="form-group">
				    <label for="message" class="control-label">Message</label>
				    <textarea name="message" id="message" class="form-control" name="message"></textarea><br />
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<input type="submit" name="submit" class="btn btn-primary" value="Send Message" />
			   </div>
			</form>
		</div>
	</div>
</div>