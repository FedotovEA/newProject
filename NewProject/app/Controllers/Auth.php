<?php

namespace App\Controllers;

use App\Services\Router;

class Auth
{
	public function login($data)
	{
		$email=$data["email"];
		$password=$data["password"];

        $user=\R::findOne('users','email =?', [$email]);
        if(!$user){
            die('Пользователь не найден ');
        }
		if(password_verify($password, $user->password)){
			session_start();
			$_SESSION["user"] = [
			"id" => $user->id,
			"username" => $user->username,
			"full_name" => $user->full_name,
			"email" => $user->email
			];
			Router::redirect('/home');
		}else{
			die($password);
		}
	}
    public function logout($data)
    {
        session_start();
        if(isset( $_SESSION["user"])){

           unset($_SESSION["user"]);
            Router::redirect('/login');
        }else{

        }
    }

	public function register($data)
	{
		$email=$data["email"];
		$username=$data["username"];
		$full_name=$data["full_name"];
		$password=$data["password"];
		$password_confirm=$data["password_confirm"];

		if($password !==$password_confirm){

		}

		$user = \R::dispense('users');
		$user->email=$email;
		$user->username=$username;
		$user->full_name=$full_name;
		$user->email=$email;
		$user->password=password_hash($password,PASSWORD_DEFAULT);
		\R::store($user);
		Router::redirect('/login');

	}
}



