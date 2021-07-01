<?php 

include '../controllers/session.php';

include('header.php');
?>
        </div>
        <div class="container flex center">
        <form class="center g-3" action="../controllers/createAccount.php" method="post">
            <h2 class="font">Créer un compte </h2>
            <div class="row">
                <div class="col-auto">
                    <label for="firstName">Prénom</label>
                    <input type="text" class="form-control" id="firstName" name="firstName">
                </div>
                <div class="col-auto">
                    <label for="lastName">Nom</label>
                    <input type="text" class="form-control" id="lastName" name="lastName">
                </div>
            </div>
            <div class="row">
                <div class="col-auto">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="col-auto">
                    <label for="password">Mot de Passe</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
            </div>
            <div class="flex center mt-4">
                <button type="submit" class="btn btn-primary larger-btn">Envoyer</button>
            </div>
        </form>
        </div>
        <div class="container"> 

<?php 
include('footer.php');
?>