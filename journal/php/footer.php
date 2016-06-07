<div class="grid grid-fluid linksFooter">
	<div class="grid">
			<?php Theme::plugins('siteSidebar') ?>
	</div>
	
	<!-- Final Footer -->
	<div id="footer">
		<?php echo $Site->footer() ?> | Powered by <a href="https://www.bludit.com/">BLUDIT</a> | Theme: <a href="https://github.com/anaggh/journal">Journal</a> |
		
		<!-- Social Media Links, Sitemap and RSS -->
		<?php
			if($Site->twitter()) {
				echo '<a href="'.$Site->twitter().'"><span> Twitter</span></a> |';
			}

			if($Site->facebook()) {
				echo '<a href="'.$Site->facebook().'"><span> Facebook</span></a> |';
			}

			if($Site->instagram()) {
				echo '<a href="'.$Site->instagram().'"><span> Instagram</span></a> |';
			}

			if($Site->github()) {
				echo '<a href="'.$Site->github().'"><span> Github</span></a> |';
			}

			if( $plugins['all']['pluginRSS']->installed() ) {
				echo '<a href="'.DOMAIN_BASE.'rss.xml'.'"><span> RSS</span></a> |';
			}

			if( $plugins['all']['pluginSitemap']->installed() ) {
				echo '<a href="'.DOMAIN_BASE.'sitemap.xml'.'"><span> Sitemap</span></a> |';
			}
		?>	
		
		<!-- Go Top! Link -->
		<a href="#">Go Top!</a> |
		
		<!-- Login Button -->
		<?php 
		$html = "";
		if($Login->role()!=='admin')
			$html .= '<a href="' .$Site->url(). 'admin/" >' .$Language->get('Login'). '</a> |';
		else
			$html .= '<a href="' .$Site->url(). 'admin/logout" >' .$Language->get('Logout'). '</a> |';				
		echo $html;
		?>
	</div>
	
</div>
