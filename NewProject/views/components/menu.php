<?php

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/home">Главная</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="/favorites">Избранное</a>        
      </div>

    </div>
    <div class="d-flex">
        <?php
        if(!$_SESSION["user"]) { ?>
            <a class="nav-link active" href="/login">Вход</a>
            <a class="nav-link active" href="/register">Регистрация</a>
        <?php }else{ ?>
            <form action="/auth/logout" method="post">
                <button class="btn btn-warning" type="submit">Выход</button>
            </form>

        <?php } ?>
    </div>
  </div>
</nav>