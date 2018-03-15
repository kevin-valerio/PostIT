<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>PostIT</title>
    <meta charset="utf-8">
    <meta name="author" content="Kevin VALERIO">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="style/wireframe.css">
    <link rel="stylesheet" href="style/postit.css">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script type="text/javascript" src="/script/create.js"></script>
    <script type="text/javascript" src="/script/postit.js"></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link  href="http://fonts.googleapis.com/css?family=Reenie+Beanie:regular" rel="stylesheet" type="text/css">
</head>

<body class="text-center bg-dark">
<div class="p-3 h-100 d-flex flex-column">
    <div class="container mb-auto">
        <div class="row">
            <div class="mx-auto col-md-9">
                <nav class="navbar navbar-expand-md navbar-dark">
                    <div class="container">
                        <img id="logo" src="/images/postit.png">

                        <a class="navbar-brand" href="index.php"><b>PostIT</b></a>
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
                            <?php require_once 'head.php'; ?>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="center-block" style="margin-top: 1px;">
        <div id="potential-alert" style="display: none;" class="alert alert-info"></div>
    </div>

    <div class="container" style="align-content: center;">
        <form method="post" id="create-div" class="h-100 row align-items-center" style="display: none" >
            <input id="mail" type="hidden" name="mail" type="text" value="<?php echo $_SESSION['sessUsername']; ?>">

            <!-- Text input-->
            <div class="col-md-3">
                <input id="title" name="title" type="text" placeholder="Titre du postit" class="form-control input-left">

            </div>
            <br>
            <!-- Textarea -->
            <div class="col-md-4">
                <input id="contenu" name="contenu" type="text" placeholder="Contenu du postit" class="form-control input-left">
            </div>
            <br>
            <div class="col-md-3">
                <input id="date" name="date" type="text" placeholder="Date jj/mm/year " class="form-control input-left">
            </div>
            <br>
            <div class="col-md-2">
                <input id="heure" name="heure" type="text" placeholder="Heure hh:mm" class="form-control input-left">
            </div>
            <!-- Button -->
            <br><br>


                <div class="col-md-12">
                    <div style="text-align: center;">
                     <a style="cursor: pointer;" class="btn btn-info" role="button" id="submit" name="submit""><b>Créer</b></a>
                    </div>
                </div>

        </form>



        <div class="row">

            <h2>Vous pouvez <a style="color: #c69500;" href="#" id="creer-postit" alt="Cliquez ici pour créer un post-it ! "><b>créer</b></a>, éditer, supprimer ou modifier vos post-it ici !</h2>
            <div id="postit-list" class="col-md-8 mx-auto">

                <!-- Début de l'affichage des post-it



                <!-- Fin de l'affichage des post-it-->


            </div>
        </div>

    </div>

    <div class="container mt-auto">
        <div class="row">
            <div class="col-md-12">
                <p class="mt-auto text-secondary">Copyright
                    <a href="#" class="text-white">Kevin VALERIO</a>, coded with fun for
                    <a href="#" class="text-white"> a J(S)Query project</a>.</p>
            </div>
        </div>
    </div>
</div>
</body>

</html>