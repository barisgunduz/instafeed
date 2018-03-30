<?php 
	$instagram_url = 'https://api.instagram.com/v1/users/self/media/recent/?access_token=466623664.3c2726c.90dad036b2c54118984585174dcee0b3';
	$instagram_json = file_get_contents($instagram_url);
	$instagram_array = json_decode($instagram_json, true);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		if(!empty($instagram_array)){
			foreach ($instagram_array['data'] as $image) {
				echo '<a href="'.$image['link'].'" target="_blank">';
				echo '<img src="'.$image['images']['thumbnail']['url'].'" alt ="" />';
				echo '</a>';
			}	
		}
	?>
</body>
</html>




