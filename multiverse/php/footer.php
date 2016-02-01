<div class="inner split">
	<div>
		<section>
			<?php foreach ($pages as $Page):
				if ($Page->position() == 1) {
					echo '<h2>'.$Page->title().'</h2>';
					echo $Page->content();
				} 
			endforeach; ?>
		</section>
		<section>
			<h2>Follow me on ...</h2>
			<ul class="icons">
				<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
				<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
				<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
			</ul>
		</section>
		<p class="copyright">
			&copy; Unttled. Design: <a href="http://html5up.net">HTML5 UP</a>.
		</p>
	</div>
	<div>
		<section>
			<?php foreach ($pages as $Page):
				if ($Page->position() == 2) {
					echo '<h2>'.$Page->title().'</h2>';
					echo $Page->content();
				} 
			endforeach; ?>
		</section>
	</div>
</div>
