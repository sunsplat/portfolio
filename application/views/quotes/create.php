<h2>Add a Quote</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('quotes/create'); ?>

		<label for="quote">Quote</label>
    <textarea name="quote"></textarea><br />

    <label for="author">By</label>
    <input type="input" name="author" /><br />

    <input type="submit" name="submit" value="Add my quote" />

</form>