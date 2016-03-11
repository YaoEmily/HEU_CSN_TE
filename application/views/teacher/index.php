<h2><?php echo $title; ?></h2>

<?php foreach ($all as $someone): ?>

    <h3><?php echo $someone['id']; ?></h3>
    <div class="main">
        <?php echo $someone['name']; ?>
    </div>
    <?php echo $someone['tel']; ?>

<?php endforeach; ?>