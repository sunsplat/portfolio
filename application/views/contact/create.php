<h2><?php echo $name; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('contact/create'); ?>

    <label for="name">Name</label>
    <input type="input" name="name" /><br />

    <label for="email">Email</label>
    <textarea name="email"></textarea><br />

    <label for="message">Message</label>
    <textarea name="message"></textarea><br />

    <input type="submit" name="submit" value="Submit" />

</form>