	<div class="col-md-3 col-md-push-9 animate-box">
	<!-- Plugins Sidebar -->
	<?php Theme::plugins('siteSidebar') ?>
	
	<ul class="lastart-list unstyled-list fh5co-list-check">
	<?php
		if($Site->twitter()) {
			echo '<li><a href="'.$Site->twitter().'" class="fa-twitter"><span class="label">Twitter</span></a></li>';
		}

		if($Site->facebook()) {
			echo '<li><a href="'.$Site->facebook().'" class="fa-facebook"><span class="label">Facebook</span></a></li>';
		}

		if($Site->instagram()) {
			echo '<li><a href="'.$Site->instagram().'" class="fa-instagram"><span class="label">Instagram</span></a></li>';
		}

		if($Site->github()) {
			echo '<li><a href="'.$Site->github().'" class="fa-github"><span class="label">Github</span></a></li>';
		}

		if( $plugins['all']['pluginRSS']->installed() ) {
			echo '<li><a href="'.DOMAIN_BASE.'rss.xml'.'" class="fa-rss"><span class="label">RSS</span></a></li>';
		}

		if( $plugins['all']['pluginSitemap']->installed() ) {
			echo '<li><a href="'.DOMAIN_BASE.'sitemap.xml'.'" class="fa-sitemap"><span class="label">Sitemap</span></a></li>';
		}
	?>
	</ul>	
	</div>