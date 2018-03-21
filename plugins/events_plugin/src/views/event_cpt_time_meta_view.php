<?php
namespace yohannes\EventsFunctionality\src\views;

	//$custom = get_post_custom($post->ID);
	// Get the data if its already been entered
    $_event_cpt_startTime_event = get_post_meta($post->ID, '_event_cpt_startTime_event', true);
    $_event_cpt_endTime_event = get_post_meta($post->ID, '_event_cpt_endTime_event', true);
    $_event_cpt_date_event = get_post_meta($post->ID, '_event_cpt_date_event', true);
    

?>
<style>
	._event_cpt_admin_notice select {background-color:#ffb900}
</style>

<table>

    <tr>
        <td>
        <label><?php _e( 'Event Date and Time?', 'event_cpt' ); ?></label><br>
        <label>Date</label><input type="date"  name="_event_cpt_date_event" value="<?php echo $_event_cpt_date_event; ?>" /><br>
           <label>Start</label><input type="time"  name="_event_cpt_startTime_event" value="<?php echo $_event_cpt_startTime_event; ?>" /><br>
           <label>Finish</label><input type="time"  name="_event_cpt_endTime_event" value="<?php echo $_event_cpt_endTime_event; ?>" />
        </td>
    </tr>
</table>