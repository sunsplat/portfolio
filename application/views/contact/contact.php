<h2><?php echo $name; ?></h2>

<?php foreach ($contact as $contact_item): ?>

        <h3><?php echo $contact_item['name']; ?></h3>
        <div class="main">
                <?php echo $contact_item['email']; ?>
        </div>
        <p><a href="<?php echo site_url('contact/'.$contact_item['slug']); ?>">View contacts</a></p>

<?php endforeach; ?>
