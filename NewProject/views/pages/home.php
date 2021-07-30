<?php
use App\Services\Page;
session_start();
if(!$_SESSION["user"]){
    \App\Services\Router::redirect('/login');
}
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
    <h2 class="mt-4">Контакты</h2>
    <?php
    if($_SESSION['user']){

        $uid=$_SESSION['user']['id'];
        $sql="SELECT contacts.name,contacts.id as cid,contacts.name,users_contacts.contact_id,users_contacts.id AS userscid  FROM contacts LEFT JOIN users_contacts ON users_contacts.contact_id=contacts.id AND users_contacts.user_id=" . $uid;

    }else{

        $sql="SELECT contacts.name,contacts.id as cid,users_contacts.contact_id,users_contacts.id  userscid FROM contacts LEFT JOIN users_contacts ON users_contacts.contact_id=contacts.id";

    }
    $rows_contacts = R::getAll($sql);
    sort($rows_contacts);
    foreach ($rows_contacts as $contact){
        if($_SESSION['user']) {
            echo $contact['name'] . " " . (isset($contact['contact_id']) ? '<i title="Удалить из избранного"  style="color: red;" jscu=' .$contact['userscid'] . ' class="fas fa-minus delFromFavorite"></i>' :  '<i title="Добавить в Избранное" jsuid='.$uid.'  jscn='.$contact['cid'] .' style="color: gray;" class="fas fa-plus addToFavorite" ></i>') . '<br>';
        }else{
            echo $contact['name'] . '<br>';
        }
    }

    ?>
	
</div>
<script>
    $( ".addToFavorite" ).click(function() {
        var $contactID = $( this ).attr('jscn');


        $.ajax({
            type: "POST",
            url: "favorite/addToFavorite",
            data: {
                'contactID': $contactID,
            }
        }).done(function (data) {
            location.reload();
        });
    });
    $( ".delFromFavorite" ).click(function() {
        var $contactUID = $( this ).attr('jscu');
        console.log($contactUID);
        $.ajax({
            type: "POST",
            url: "favorite/delFavorite",
            data: {
                'contactUID': $contactUID
            }
        }).done(function (data) {
            location.reload();
        });
    });
</script>
</body>
</html>