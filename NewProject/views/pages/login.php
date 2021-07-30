<?php
use App\Services\Page;
session_start();
?>
<!DOCTYPE html>
<html>
<?php
Page::part('head');
?>
<body>
<?php
Page::part('menu');
?>
<div class="container">
		<h2 class="mt-4">Вход</h2>
		<form class="mt-4" method="post" action="/auth/login">
		<div class="form-group">
			<label for="exampleInputEmail1" class="form-label">Email address</label>
			<input type="email" name="email" class="form-control" id="email">
			<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1" class="form-label">Password</label>
			<input type="password" name="password" class="form-control" id="password">
		</div>
		
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	
</div>
</body>
</html>