<?php

$start = new DateTime('2025-1-1');
$end = new DateTime('2026-1-1'); 
$interval = new DateInterval('P1D');
$period = new DatePeriod($start, $interval, $end);
?>

<p>
<?php foreach ($period as $event) { ?>
    <b><?= $event->format('1') ?></b>
    <?= $event->format('M j Y') ?></><br>
    <?php } ?>
</p>