<div class="grid grid-fluid divBeforeFooter">
	<hr class="soft"> 
	<!-- siteSidebar Hack since it returns both Taglist and Pagelist by default -->
	<a id="goToTags"><a>

	<div class="grid beforeFooter">
		<div class="row">
			<div class="col-6 tagslist">
				<?php Theme::plugins('siteSidebar') ?>
			</div>
			
			<div class="col-6 pageslist">
				<?php Theme::plugins('siteSidebar') ?>
			</div>
		</div>
	</div>
</div>

<!-- Footer -->
<section id="footer">
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
</section>