        <div class="header">
            <h1 class="brand-title"><?php echo $Site->title() ?></h1>
            <h2 class="brand-tagline"><?php echo $Site->slogan() ?></h2>

            <nav class="nav">
                <ul class="nav-list">
				<li class="nav-item""><a class="pure-button pure-button-primary" href="<?php echo $Site->url() ?>">Home page</a></li>
				<?php
					$parents = $pagesParents[NO_PARENT_CHAR];
					foreach($parents as $Parent) {
						echo '<li class="nav-item"><a class="pure-button pure-button-primary" href="'.$Parent->permalink().'">'.$Parent->title().'</a></li> ';
					}
				?>
				</ul>

                </ul>
            </nav>
        </div>
		
