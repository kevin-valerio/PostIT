<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="script/logout.js"></script>

<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link active" href="index.php"><b>Accueil</b></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/register.php"><b>S'enregistrer</b></a>
    </li>

    <?php
    session_start();
    require 'engine/utils.php';
    if(isConnected()) {
        ?>
        <form method="POST" id="form-logout">
            <li class="nav-item">
                <a href="javascript:{}" onclick="document.getElementById('form-logout').submit();" class="nav-link" ><b>Se déconnecter</b></a>
            </li>
        </form>


    <?php
        }
        else{

    ?>
            <li class="nav-item">
                <a class="nav-link" href="/login.php"><b>Se connecter</b></a>
            </li>
    <?php

        }
    ?>

</ul>