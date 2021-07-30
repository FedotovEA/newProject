<?php


namespace App\Controllers;

use App\Services\Router;

class Favorite
{
    public function delFavorite($data)
    {
        session_start();

        $contactUID=$data["contactUID"];



            $find = \R::findOne('users_contacts', 'id = ?',[$contactUID]);
            $delete = \R::load('users_contacts', $find->id);
            \R::trash($delete);


    }

    public function addToFavorite($data)
    {
        session_start();
        $contactID=$data["contactID"];

        if(isset($contactID)){
            \R::exec( 'INSERT INTO users_contacts (user_id,contact_id)value('.$_SESSION['user']['id'].','.$contactID.')' );
        }

        Router::redirect('/home');

    }

}