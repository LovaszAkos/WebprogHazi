<?php echo form_open();?>

<?php echo validation_errors();?>
<?php echo form_input(['name' => 'campus'], 
                      set_value('campus', '', FALSE),
                      ['placeholder' => 'Campus']);?>
<?php echo form_error('campus');?>
<br/>

<?php echo form_input(['name' => 'code'], 
                      set_value('code', '', FALSE),
                      ['placeholder' => 'Épület kódja']);?>
<?php echo form_error('code');?>
<br/>

<?php echo form_input(['name' => 'épület'], 
                      set_value('épület', '', FALSE),
                      ['placeholder' => 'Épület neve']);?>
<?php echo form_error('épület');?>
<br/>

<?php echo form_input(['name' => 'hely',], 
                      set_value('hely','',FALSE), 
                      ['placeholder' => 'Épület Címe']);?>
<?php echo form_error('hely');?>
<br/>
<?php echo form_submit(['name' => 'submit'], 'Mentés');?>
<?php echo form_close(); ?>