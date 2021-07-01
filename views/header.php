<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <link rel="stylesheet" href="../style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
    <div class="en-tete">
        <div class="container-fluid flex center">
            <img src="https://i.pinimg.com/originals/50/e1/db/50e1db4684e6f697f93590950eb832f6.png" alt="pokeball.png" height="80px" width="auto" class="bigLogo">
            <h2 class="pokemonTitle">Pokémon</h2>
            <div class="en-tete-title">
                <h1>Pokedex plus officiel que pokemon.com</h1>
            </div>
            <?php if(!isset($_SESSION['user'])){ ?>
            <!-- FOUTRE UNE MODAL ICI -->
                <a class="btn btn-primary btn-perso1" data-bs-toggle="modal" data-bs-target="#exampleModal">Connexion</a>
                <p class="whiteConn">Vous n'avez pas encore de compte ? <a href="register.php">Créez-en un !</a></p>
            <?php }?>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Se Connecter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="center g-3" action="../controllers/connect.php" method="post">
                    <div id="message" class="modal-body">
                        <div class="col-auto">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                        
                        <div class="col-auto">
                            <label for="password">Mot de Passe</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>                    
                    </div>
                    <div class="modal-footer">
                        <button id="confirmation" type="submit" class="btn btn-primary" >Connexion</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="container">
    
        