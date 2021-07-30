<?php
use App\Services\Page;
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
		<h2 class="mt-4">Регистрация</h2>
		<form class="mt-4" action="/auth/register" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="email" class="form-label">Email</label>
			<input type="email" name="email" class="form-control" id="email">			
		</div>
		<div class="form-group">
			<label for="username" class="form-label">Логин</label>
			<input type="text" name="username" class="form-control" id="username">			
		</div>
		<div class="form-group">
			<label for="full_name" class="form-label">Имя</label>
			<input type="text" name="full_name" class="form-control" id="full_name">			
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1" class="form-label">Пароль</label>
			<input type="password" name="password" class="form-control" id="password">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1" class="form-label">Повторите Пароль</label>
			<input type="password" name="password_confirm" class="form-control" id="password_confirm">
		</div>			
		<button type="submit" class="btn btn-primary">Выполнить</button>
	</form>
	
</div>
</body>
</html>