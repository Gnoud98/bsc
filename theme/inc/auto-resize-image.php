<?php
add_filter('wp_handle_upload_prefilter', 'bsc_validate_image_limit');
function bsc_validate_image_limit($file)
{
	$image_size = $file['size'] / 1024;
	$limit = 10000;
	$is_image = strpos($file['type'], 'image');
	if (($image_size > $limit) && ($is_image !== false)) {
		$file['error'] = __('Hình ảnh quá lớn. Giới hạn là ', 'bsc') . '' . $limit . 'KB';
		return $file;
	} else
		return $file;
}

add_action('wp_handle_upload', 'bsc_upload_resize');
function bsc_upload_resize($image_data)
{
	bsc_resize_error_log("**-start--resize-image-upload");
	$compression_level = 90;
	$max_width  = 1920;
	$max_height = 1080;
	$fatal_error_reported = false;
	$valid_types = array('image/gif', 'image/png', 'image/jpeg', 'image/jpg');
	if (empty($image_data['file']) || empty($image_data['type'])) {
		bsc_resize_error_log("--non-data-in-file-( " . print_r($image_data, true) . " )");
		$fatal_error_reported = true;
	} else if (!in_array($image_data['type'], $valid_types)) {
		bsc_resize_error_log("--non-image-type-uploaded-( " . $image_data['type'] . " )");
		$fatal_error_reported = true;
	}
	bsc_resize_error_log("--filename-( " . $image_data['file'] . " )");
	$image_editor = wp_get_image_editor($image_data['file']);
	$image_type = $image_data['type'];
	if ($fatal_error_reported || is_wp_error($image_editor)) {
		bsc_resize_error_log("--wp-error-reported");
	} else {
		$to_save = false;
		$resized = false;
		bsc_resize_error_log("--resizing-enabled");
		$sizes = $image_editor->get_size();
		if ((isset($sizes['width']) && $sizes['width'] > $max_width) || (isset($sizes['height']) && $sizes['height'] > $max_height)) {
			$image_editor->resize($max_width, $max_height, false);
			$resized = true;
			$to_save = true;
			$sizes = $image_editor->get_size();
			bsc_resize_error_log("--new-size--" . $sizes['width'] . "x" . $sizes['height']);
		} else {
			bsc_resize_error_log("--no-resizing-needed");
		}
		if ($image_type == 'image/jpg' || $image_type == 'image/jpeg') {
			$to_save = true;
			bsc_resize_error_log("--compression-level--q-" . $compression_level);
		} elseif (!$resized) {
			bsc_resize_error_log("--no-forced-recompression");
		}
		if ($to_save) {
			$image_editor->set_quality($compression_level);
			$saved_image = $image_editor->save($image_data['file']);
			bsc_resize_error_log("--image-saved");
		} else {
			bsc_resize_error_log("--no-changes-to-save");
		}
	}
	bsc_resize_error_log("**-end--resize-image-upload\n");
	return $image_data;
}
function bsc_resize_error_log($message)
{
	global $DEBUG_LOGGER;
	if ($DEBUG_LOGGER) {
		error_log(print_r($message, true));
	}
}
