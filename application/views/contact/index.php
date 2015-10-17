<div class="jumbotron">
	<h2><?php echo $title; ?></h2>
</div>
<?php foreach ($contact as $contact_item): ?>

        <h3><?php echo $contact_item['name']; ?></h3>
        <div class="main">
                <?php echo $contact_item['email']; ?>
        </div>
        <p><a href="<?php echo site_url('contact/'.$contact_item['slug']); ?>">View Contacts</a></p>

<?php endforeach; ?>