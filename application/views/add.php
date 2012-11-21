<!doctype html>

<html>
<head>
	<title>Twitter Add User</title>
</head>
<body>
	<div id="form">
		<form action='<?php echo URL::to('twitter/add_user') ?>' method='post'>
			Username: 
				<input type='text' name='username'/>
			<br />
			Real Name:
				<input type='text' name='realname' />

				<br />
				<input type='submit' name='submit' />
		</form> 
	</div>
</body>
</html>