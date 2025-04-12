<?php
$start = new DateTime('2025-01-01 00:00');
$end = date_create_from_format('Y-m-d H:i', '2021-02-01 00:00');
?>


<p><b> Sale starts:</b>
<?= $start->format('l, jS M Y H:i') ?></p>
<p><b>Sale ends:</b>
<?= $end->format('l, jS M Y') ?>
<?= $end->format('H:i') ?></p>
