<?php
	Theme::charset('utf-8');
	Theme::viewport('width=device-width, initial-scale=1');

	Theme::title();
	Theme::description();

	Theme::favicon('favicon.png');
?>

<link rel="stylesheet" href="<?php echo HTML_PATH_THEME ?>assets/css/siimple.css">
<link rel="stylesheet" href="<?php echo HTML_PATH_THEME ?>assets/css/style.css">
<!-- Syntax Highlighting - Highlight.js v9.6 (Automatic detection) -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.6.0/styles/default.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.6.0/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<!-- Smooth Scroll v9.3.1 -->
<script src="<?php echo HTML_PATH_THEME ?>assets/js/smooth-scroll.min.js"></script>
<script>smoothScroll.init();</script>

<?php

// Load plugins, hook: Site head
Theme::plugins('siteHead');

?>
