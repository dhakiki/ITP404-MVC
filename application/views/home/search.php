<!doctype html>
<html>
<head>
	<title>Twitter Search App</title>
</head>
<body>
	<div id="container">
		<h1>Twitter Search Page</h1>
		<form action="<?php echo URL::to('twitter/results') ?>" method="get">
			<input type= "text" name= "search-term">
			<input type="submit" value="Search">
		</form>

	</div>

	<div class="users">
		<?php
			foreach($users as $user)
			{
				echo '<p><a href="results?search-term=' . $user->username . '">' . $user->realname . '</a> </p>';
			}
		?>
	</div>

</body>
</html>