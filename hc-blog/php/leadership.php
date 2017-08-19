<?php									
	$profilePictureSrc = HTML_PATH_ADMIN_THEME_IMG.'default.png';
	if(file_exists(PATH_UPLOADS_PROFILES.$username.'.png'))
		$profilePictureSrc = HTML_PATH_UPLOADS_PROFILES.$username.'.png';
		
	if($field['twitter'] !='')
		$twitter = '<li><a href="https://twitter.com/' .$field['twitter']. '"><i class="icon-twitter"></i></a></li>';
	else 
		$twitter = '';
		
	if($field['facebook'] !='')
		$facebook = '<li><a href="https://www.facebook.com/' .$field['facebook']. '"><i class="icon-facebook"></i></a></li>';
	else
		$facebook = '';
		
	if($field['googlePlus'] !='')
		$googlePlus = '<li><a href="https://plus.google.com/' .$field['googlePlus']. '"><i class="icon-google"></i></a></li>';					else
		$googlePlus = '';	
		
	if($field['role']==='admin')
		$role = $Language->get('Administrator');					
	else
		$role = $Language->get($field['role']);									    			
?>