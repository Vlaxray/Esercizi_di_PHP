<?php 
$today =new DateTime();
$event = new DateTime('2026-03-29 12:00');
$countdown = $today->diff($event);

$earlybird = new DateTime();
$interval = new DateInterval('P2M');
$earlybird->add($interval);
?>

<p><b>Countdown to event:</b></p>
<?= $countdown->format('%y years %m months %d days') ?>
</p><br>
<p><b>discount 60%:</b></p>
<?= $earlybird->format('D d M Y, g:i a') ?>
</p>

