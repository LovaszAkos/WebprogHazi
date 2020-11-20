<h1><?=$record->campus?> adatlapja</h1>

<h2>Címe</h2>
<p><?=$record->hely?></p>

<h2>codeja</h2>
<p><?=$record->code?></p>

<h2>Épület</h2>
<p><?=$record->épület?></p>

<?php echo anchor('campus/delete/'.$record->code,'Törlés'); ?><br/>
<?php echo anchor('campus/edit/'.$record->code,'Szerkeszt'); ?>