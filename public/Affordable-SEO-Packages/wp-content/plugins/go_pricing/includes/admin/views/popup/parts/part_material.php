<style>
@import url(<?php echo $this->plugin_url . 'assets/lib/material/material.min.css'; ?>);
</style>
<table class="gwa-table" data-id="sc-fields" data-shortcode="<i{atts}></i>" data-parent-id="shortcode" data-parent-value="material">
<tr>
	<th><label><?php _e( 'Color', 'go_pricing_textdomain' ); ?></label></th>
	<td><label><div class="gwa-colorpicker gwa-colorpicker-inline" tabindex="0"><input type="hidden" name="material-color" data-attr="style" data-value="color:{value};" value=""><span class="gwa-cp-picker"><span></span></span><span class="gwa-cp-label">&nbsp;</span><div class="gwa-cp-popup"><div class="gwa-cp-popup-inner"></div><div class="gwa-input-btn"><input type="text" tabindex="-1" value="<?php echo esc_attr( !empty( $col_data['main-color'] ) ? $col_data['main-color'] : '' ); ?>"><a href="#" data-action="cp-fav" tabindex="-1" title="<?php _e( 'Add To Favourites', 'go_pricing_textdomain' ); ?>"><i class="fa fa-heart"></i></a></div></div></label></td>
	<td class="gwa-abox-info"><p class="gwa-info"><i class="fa fa-info-circle"></i><?php _e( 'Color of icon (optional).', 'go_pricing_textdomain' ); ?></p></td>									
</tr>
<tr>
	<th><label><?php _e( 'Size', 'go_pricing_textdomain' ); ?> <span class="gwa-info">(px)</span></label></th>
	<td><input type="text" name="material-size" data-attr="style" data-value="font-size:{value}px;"  data-type="int"></td>
	<td class="gwa-abox-info"><p class="gwa-info"><i class="fa fa-info-circle"></i><?php _e( 'Font size of the icon. (optional).', 'go_pricing_textdomain' ); ?></p></td>									
</tr>
<tr>
	<th><label><?php _e( 'Width', 'go_pricing_textdomain' ); ?> <span class="gwa-info">(px)</span></label></th>
	<td><input type="text" name="material-width" data-attr="style" data-value="width:{value}px;"  data-type="int"></td>
	<td class="gwa-abox-info"><p class="gwa-info"><i class="fa fa-info-circle"></i><?php _e( 'Width of the icon. Leave blank if want to specify auto width (optional).', 'go_pricing_textdomain' ); ?></p></td>									
</tr>
<tr>
	<th><label><?php _e( 'Aligment', 'go_pricing_textdomain' ); ?></label></th>
	<td>
		<select name="material-alignment" data-attr="style" data-value="text-align:{value};">                                
			<option value=""><?php _e( 'Left', 'go_pricing_textdomain' ); ?></option>
			<option value="center"><?php _e( 'Center', 'go_pricing_textdomain' ); ?></option>
			<option value="right"><?php _e( 'Right', 'go_pricing_textdomain' ); ?></option>
		</select>	
	<td class="gwa-abox-info"><p class="gwa-info"><i class="fa fa-info-circle"></i><?php _e( 'Alignment of the icon. You can set it when fixed with is used (optional).', 'go_pricing_textdomain' ); ?></p></td>									
</tr>
<tr class="gwa-row-fullwidth">
	<th><label><?php _e( 'Icon', 'go_pricing_textdomain' ); ?></label></th>
	<td>
	<div class="gwa-icon-picker">
		<div class="gwa-icon-picker-header">
			<div class="gwa-icon-picker-selected gwa-clearfix">
				<a href="#" class="gwa-icon-picker-icon" tabindex="-1" data-action="ip-bg-switch"></a>
				<input type="hidden" name="material-icon" data-attr="class">
			</div>
			<div class="gwa-icon-picker-search">
				<div class="gwa-input-btn gwa-search-input" data-action="ip-search"><input type="text" placeholder="<?php esc_attr_e( 'e.g. \'Icon Name\'', 'go_pricing_textdomain' ); ?>"><a href="#" tabindex="-1" title="<?php esc_attr_e( 'Search', 'go_pricing_textdomain' ); ?>"><i class="fa fa-search"></i></a><span class="gwa-info"></span></div>
			</div>		
		</div>
		<div class="gwa-icon-picker-content gwa-clearfix">
			<a href="#" class="gwa-icon-picker-icon gwa-current" data-action="ip-select-blank" tabindex="0" title="<?php esc_attr_e( 'None', 'go_pricing_textdomain' ); ?>"><i class="fa fa-ban"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-error"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-error_outline"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-warning"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-add_alert"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-album"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-av_timer"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-closed_caption"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-equalizer"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-explicit"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-fast_forward"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-fast_rewind"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-games"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-hearing"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-high_quality"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-loop"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-mic"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-mic_none"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-mic_off"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-movie"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-library_add"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-library_books"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-library_music"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-new_releases"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-not_interested"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-pause"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-pause_circle_filled"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-pause_circle_outline"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-play_arrow"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-play_circle_filled"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-play_circle_outline"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-playlist_add"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-queue"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-queue_music"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-radio"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-recent_actors"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-repeat"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-repeat_one"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-replay"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-shuffle"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-skip_next"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-skip_previous"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-snooze"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-stop"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-subtitles"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-surround_sound"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-video_collection"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-videocam"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-videocam_off"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-volume_down"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-volume_mute"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-volume_off"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-volume_up"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-web"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-hd"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-sort_by_alpha"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-airplay"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-forward_10"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-forward_30"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-forward_5"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-replay_10"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-replay_30"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-replay_5"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-business"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-call"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-call_end"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-call_made"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-call_merge"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-call_missed"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-call_received"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-call_split"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-chat"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-clear_all"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-comment"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-contacts"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-dialer_sip"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-dialpad"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-email"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-forum"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-import_export"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-invert_colors_off"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-live_help"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-location_off"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-location_on"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-message"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-chat_bubble"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-chat_bubble_outline"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-no_sim"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-phone"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-portable_wifi_off"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-contact_phone"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-ring_volume"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-speaker_phone"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-stay_current_landscape"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-stay_current_portrait"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-stay_primary_landscape"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-stay_primary_portrait"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-swap_calls"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-textsms"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-voicemail"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-vpn_key"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-phonelink_erase"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-phonelink_lock"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-phonelink_ring"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-phonelink_setup"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-present_to_all"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-add"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-add_box"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-add_circle"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-add_circle_outline"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-archive"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-backspace"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-block"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-clear"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-content_copy"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-content_cut"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-content_paste"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-create"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-drafts"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-filter_list"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-flag"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-forward"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-gesture"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-inbox"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-link"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-mail"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-markunread"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-redo"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-remove"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-remove_circle"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-remove_circle_outline"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-reply"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-reply_all"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-report"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-save"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-select_all"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-send"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-sort"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-text_format"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-undo"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-font_download"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-access_alarm"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-access_alarms"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-access_time"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-add_alarm"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-airplanemode_inactive"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-airplanemode_active"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-battery_alert"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-battery_charging_full"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-battery_full"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-battery_std"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-battery_unknown"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-bluetooth"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-bluetooth_connected"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-bluetooth_disabled"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-bluetooth_searching"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-brightness_auto"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-brightness_high"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-brightness_low"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-brightness_medium"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-data_usage"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-developer_mode"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-devices"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-dvr"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-gps_fixed"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-gps_not_fixed"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-gps_off"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-location_disabled"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-location_searching"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-graphic_eq"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-network_cell"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-network_wifi"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-nfc"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-now_wallpaper"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-now_widgets"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-screen_lock_landscape"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-screen_lock_portrait"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-screen_lock_rotation"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-screen_rotation"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-sd_storage"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-settings_system_daydream"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-signal_cellular_4_bar"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-signal_cellular_connected_no_internet_4_bar"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-signal_cellular_no_sim"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-signal_cellular_null"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-signal_cellular_off"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-signal_wifi_4_bar"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-signal_wifi_4_bar_lock"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-signal_wifi_off"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-storage"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-usb"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-wifi_lock"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-wifi_tethering"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-attach_file"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-attach_money"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-border_all"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-border_bottom"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-border_clear"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-border_color"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-border_horizontal"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-border_inner"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-border_left"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-border_outer"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-border_right"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-border_style"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-border_top"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-border_vertical"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-format_align_center"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-format_align_justify"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-format_align_left"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-format_align_right"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-format_bold"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-format_clear"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-format_color_fill"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-format_color_reset"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-format_color_text"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-format_indent_decrease"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-format_indent_increase"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-format_italic"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-format_line_spacing"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-format_list_bulleted"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-format_list_numbered"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-format_paint"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-format_quote"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-format_size"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-format_strikethrough"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-format_textdirection_l_to_r"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-format_textdirection_r_to_l"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-format_underlined"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-functions"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-insert_chart"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-insert_comment"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-insert_drive_file"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-insert_emoticon"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-insert_invitation"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-insert_link"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-insert_photo"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-merge_type"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-mode_comment"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-mode_edit"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-publish"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-space_bar"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-strikethrough_s"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-vertical_align_bottom"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-vertical_align_center"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-vertical_align_top"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-wrap_text"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-money_off"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-attachment"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-cloud"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-cloud_circle"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-cloud_done"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-cloud_download"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-cloud_off"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-cloud_queue"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-cloud_upload"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-file_download"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-file_upload"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-folder"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-folder_open"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-folder_shared"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-cast"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-cast_connected"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-computer"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-desktop_mac"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-desktop_windows"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-developer_board"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-dock"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-gamepad"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-headset"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-headset_mic"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-keyboard"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-keyboard_arrow_down"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-keyboard_arrow_left"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-keyboard_arrow_right"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-keyboard_arrow_up"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-keyboard_backspace"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-keyboard_capslock"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-keyboard_hide"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-keyboard_return"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-keyboard_tab"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-keyboard_voice"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-laptop"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-laptop_chromebook"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-laptop_mac"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-laptop_windows"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-memory"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-mouse"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-phone_android"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-phone_iphone"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-phonelink"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-phonelink_off"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-router"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-scanner"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-security"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-sim_card"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-smartphone"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-speaker"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-speaker_group"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-tablet"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-tablet_android"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-tablet_mac"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-toys"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-tv"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-watch"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-device_hub"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-power_input"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-add_to_photos"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-adjust"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-assistant"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-assistant_photo"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-audiotrack"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-blur_circular"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-blur_linear"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-blur_off"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-blur_on"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-brightness_1"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-brightness_2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-brightness_3"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-brightness_4"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-brightness_5"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-brightness_6"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-brightness_7"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-broken_image"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-brush"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-camera"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-camera_alt"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-camera_front"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-camera_rear"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-camera_roll"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-center_focus_strong"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-center_focus_weak"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-collections"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-color_lens"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-colorize"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-compare"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-control_point"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-control_point_duplicate"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-crop_16_9"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-crop_3_2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-crop"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-crop_5_4"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-crop_7_5"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-crop_din"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-crop_free"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-crop_landscape"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-crop_original"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-crop_portrait"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-crop_square"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-dehaze"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-details"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-edit"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-exposure"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-exposure_minus_1"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-exposure_minus_2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-exposure_plus_1"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-exposure_plus_2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-exposure_zero"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-filter_1"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-filter_2"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-filter_3"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-filter"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-filter_4"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-filter_5"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-filter_6"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-filter_7"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-filter_8"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-filter_9"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-filter_9_plus"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-filter_b_and_w"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-filter_center_focus"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-filter_drama"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-filter_frames"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-filter_hdr"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-filter_none"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-filter_tilt_shift"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-filter_vintage"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-flare"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-flash_auto"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-flash_off"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-flash_on"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-flip"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-gradient"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-grain"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-grid_off"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-grid_on"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-hdr_off"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-hdr_on"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-hdr_strong"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-hdr_weak"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-healing"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-image"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-image_aspect_ratio"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-iso"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-landscape"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-leak_add"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-leak_remove"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-lens"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-looks_3"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-looks"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-looks_4"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-looks_5"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-looks_6"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-looks_one"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-looks_two"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-loupe"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-monochrome_photos"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-movie_creation"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-music_note"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-nature"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-nature_people"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-navigate_before"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-navigate_next"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-palette"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-panorama"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-panorama_fish_eye"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-panorama_horizontal"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-panorama_vertical"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-panorama_wide_angle"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-photo"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-photo_album"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-photo_camera"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-photo_library"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-picture_as_pdf"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-portrait"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-remove_red_eye"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-rotate_90_degrees_ccw"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-rotate_left"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-rotate_right"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-slideshow"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-straighten"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-style"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-switch_camera"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-switch_video"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-tag_faces"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-texture"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-timelapse"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-timer_10"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-timer_3"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-timer"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-timer_off"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-tonality"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-transform"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-tune"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-view_comfortable"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-view_compact"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-wb_auto"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-wb_cloudy"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-wb_incandescent"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-wb_sunny"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-collections_bookmark"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-photo_size_select_actual"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-photo_size_select_large"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-photo_size_select_small"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-vignette"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-wb_iridescent"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-beenhere"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-directions"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-directions_bike"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-directions_bus"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-directions_car"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-directions_ferry"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-directions_subway"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-directions_railway"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-directions_transit"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-directions_walk"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-flight"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-hotel"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-layers"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-layers_clear"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-local_airport"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-local_atm"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-local_attraction"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-local_bar"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-local_cafe"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-local_car_wash"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-local_convenience_store"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-local_drink"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-local_florist"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-local_gas_station"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-local_grocery_store"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-local_hospital"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-local_hotel"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-local_laundry_service"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-local_library"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-local_mall"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-local_movies"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-local_offer"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-local_parking"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-local_pharmacy"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-local_phone"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-local_pizza"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-local_play"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-local_post_office"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-local_print_shop"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-local_restaurant"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-local_see"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-local_shipping"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-local_taxi"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-location_history"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-map"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-my_location"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-navigation"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-pin_drop"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-place"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-rate_review"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-restaurant_menu"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-satellite"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-store_mall_directory"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-terrain"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-traffic"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-directions_run"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-apps"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-arrow_back"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-arrow_drop_down"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-arrow_drop_down_circle"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-arrow_drop_up"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-arrow_forward"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-cancel"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-check"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-chevron_left"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-chevron_right"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-close"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-expand_less"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-expand_more"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-fullscreen"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-fullscreen_exit"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-menu"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-keyboard_control"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-more_vert"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-refresh"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-unfold_less"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-unfold_more"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-adb"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-bluetooth_audio"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-disc_full"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-do_not_disturb_alt"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-do_not_disturb"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-drive_eta"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-event_available"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-event_busy"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-event_note"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-folder_special"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-mms"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-more"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-network_locked"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-phone_bluetooth_speaker"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-phone_forwarded"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-phone_in_talk"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-phone_locked"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-phone_missed"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-phone_paused"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-sd_card"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-sim_card_alert"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-sms"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-sms_failed"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-sync"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-sync_disabled"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-sync_problem"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-system_update"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-tap_and_play"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-time_to_leave"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-vibration"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-voice_chat"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-vpn_lock"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-airline_seat_flat"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-airline_seat_flat_angled"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-airline_seat_individual_suite"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-airline_seat_legroom_extra"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-airline_seat_legroom_normal"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-airline_seat_legroom_reduced"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-airline_seat_recline_extra"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-airline_seat_recline_normal"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-confirmation_number"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-live_tv"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-ondemand_video"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-personal_video"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-power"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-wc"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-wifi"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-cake"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-domain"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-group"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-group_add"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-location_city"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-mood"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-mood_bad"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-notifications"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-notifications_none"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-notifications_off"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-notifications_active"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-notifications_paused"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-pages"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-party_mode"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-people"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-people_outline"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-person"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-person_add"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-person_outline"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-plus_one"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-poll"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-public"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-school"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-share"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-whatshot"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-check_box"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-check_box_outline_blank"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-radio_button_unchecked"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-radio_button_checked"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-star"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-star_half"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-star_outline"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-3d_rotation"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-accessibility"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-account_balance"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-account_balance_wallet"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-account_box"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-account_circle"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-add_shopping_cart"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-alarm"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-alarm_add"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-alarm_off"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-alarm_on"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-android"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-announcement"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-aspect_ratio"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-assessment"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-assignment"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-assignment_ind"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-assignment_late"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-assignment_return"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-assignment_returned"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-assignment_turned_in"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-autorenew"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-backup"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-book"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-bookmark"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-bookmark_outline"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-bug_report"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-build"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-cached"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-change_history"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-check_circle"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-chrome_reader_mode"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-class"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-code"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-credit_card"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-dashboard"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-delete"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-description"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-dns"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-done"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-done_all"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-event"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-exit_to_app"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-explore"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-extension"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-face"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-favorite"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-favorite_outline"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-feedback"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-find_in_page"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-find_replace"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-flip_to_back"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-flip_to_front"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-get_app"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-grade"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-group_work"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-help"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-highlight_remove"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-history"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-home"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-hourglass_empty"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-hourglass_full"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-https"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-info"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-info_outline"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-input"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-invert_colors_on"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-label"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-label_outline"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-language"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-launch"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-list"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-lock"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-lock_open"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-lock_outline"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-loyalty"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-markunread_mailbox"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-note_add"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-open_in_browser"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-open_in_new"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-open_with"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-pageview"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-payment"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-perm_camera_mic"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-perm_contact_calendar"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-perm_data_setting"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-perm_device_information"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-perm_identity"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-perm_media"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-perm_phone_msg"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-perm_scan_wifi"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-picture_in_picture"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-polymer"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-power_settings_new"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-print"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-query_builder"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-question_answer"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-receipt"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-redeem"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-report_problem"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-restore"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-room"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-schedule"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-search"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-settings"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-settings_applications"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-settings_backup_restore"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-settings_bluetooth"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-settings_cell"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-settings_brightness"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-settings_ethernet"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-settings_input_antenna"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-settings_input_component"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-settings_input_composite"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-settings_input_hdmi"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-settings_input_svideo"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-settings_overscan"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-settings_phone"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-settings_power"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-settings_remote"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-settings_voice"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-shop"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-shop_two"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-shopping_basket"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-shopping_cart"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-speaker_notes"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-spellcheck"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-stars"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-store"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-subject"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-supervisor_account"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-swap_horiz"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-swap_vert"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-swap_vertical_circle"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-system_update_alt"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-tab"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-tab_unselected"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-theaters"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-thumb_down"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-thumb_up"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-thumbs_up_down"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-toc"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-today"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-toll"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-track_changes"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-translate"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-trending_down"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-trending_neutral"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-trending_up"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-turned_in"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-turned_in_not"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-verified_user"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-view_agenda"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-view_array"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-view_carousel"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-view_column"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-view_day"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-view_headline"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-view_list"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-view_module"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-view_quilt"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-view_stream"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-view_week"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-visibility"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-visibility_off"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-card_giftcard"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-card_membership"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-card_travel"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-work"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-youtube_searched_for"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-eject"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-camera_enhance"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-help_outline"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-reorder"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-zoom_in"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-zoom_out"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-http"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-event_seat"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-flight_land"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-flight_takeoff"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-play_for_work"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-gif"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-indeterminate_check_box"></i></a>
			<a href="#" class="gwa-icon-picker-icon" data-action="ip-select" tabindex="0"><i class="material-offline_pin"></i></a>
		</div>
	</div>		
	</td>
</tr>