<!doctype html>
<html>
<head>
	<title>Twitter Search Results</title>
</head>
<body>
	<p>You searched for: <?php echo $search_term ?>
		<div id="results">
			<?php
				echo '<ul>';
				foreach($tweets as $tweet) {
					echo '<li>';
					echo '<img src="'.$tweet->user->profile_image_url.'" />';
					echo $tweet->text;
					echo '<div class="date">'.$tweet->created_at.'</div>';
					echo '<div style="clear:both;"></div>';
					echo '</li>';
				}
				echo '</ul>';
			?>

		</div>	
</body>
</html>