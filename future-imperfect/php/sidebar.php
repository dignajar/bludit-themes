<!-- Intro -->
<section id="intro">
	<a href="#" class="logo"><img src="images/logo.jpg" alt="" /></a>
	<header>
		<h2><?php echo $Site->title() ?></h2>
		<p><?php echo $Site->description() ?></p>
	</header>
</section>

<?php Theme::plugins('siteSidebar') ?>

<!-- Footer -->
<section id="footer">
	<ul class="icons">
		<li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
		<li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
		<li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
		<li><a href="#" class="fa-rss"><span class="label">RSS</span></a></li>
		<li><a href="#" class="fa-envelope"><span class="label">Email</span></a></li>
	</ul>
	<p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
</section>