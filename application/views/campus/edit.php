<?php echo form_open();?>

<?php echo validation_errors();?>
<?php echo form_input(['name' => 'campus'], 
                      set_value('campus', $record->campus, FALSE),
                      ['placeholder' => 'campus']);?>
<?php echo form_error('name');?>
<br/>
<?php echo form_input(['name' => 'épület'], 
                      set_value('épület', $record->épület, FALSE),
                      ['placeholder' => 'Épület neve']);?>
<?php echo form_error('épület');?>
<br/>
<?php echo form_input(['name' => 'code'], 
                      set_value('code', $record->code, FALSE),
                      ['placeholder' => 'Épület kódja']);?>
<?php echo form_error('code');?>
<br/>
<?php echo form_input(['name' => 'hely'], 
                      set_value('hely', $record->hely, FALSE),
                      ['placeholder' => 'Épület Címe']);?>
<?php echo form_error('hely');?>
<br/>
<?php echo form_submit(['name' => 'submit'], 'Mentés');?>
<?php echo form_close(); ?>