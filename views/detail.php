<h3><?php echo $event->event_name;?></h3>
<? $this->load->view('partials/calnav'); ?>
<div class="eventcal-desc">
<?php echo $event->details; ?>
</div>
<dl class="eventcal-event">
	<dt><?php echo lang('eventcal_lbl_starts'); ?></dt>
	<dd><?php echo unix_to_human(mysql_to_unix($event->start_date.' '.$event->start_time));  ?></dd>
	
	<dt><?php echo lang('eventcal_lbl_ends'); ?></dt>
	<dd><?php echo unix_to_human(mysql_to_unix($event->end_date.' '.$event->end_time));  ?></dd>
	
<?php if ($event->location) { ?>
	<dt><?php echo lang('eventcal_lbl_locate'); ?></dt>
	<dd><?php echo $event->location; ?></dd>
<?php }	?>

</dl>


