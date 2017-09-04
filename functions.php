 <?php
	if (preg_match('/MSIE\s(?P<v>\d+)/i', @$_SERVER['HTTP_USER_AGENT'], $B) && $B['v'] <= 7) {
		wp_deregister_script('photoswipe');
	}
?>