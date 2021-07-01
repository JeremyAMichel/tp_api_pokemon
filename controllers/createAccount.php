<?php 

if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['password'])){
    try{
        $pdo= new PDO('mysql:host=localhost;dbname=exo_connection','root','');
        $query = 'INSERT INTO `user`(`firstName`, `lastName`, `email`, 
        `password`, `created_at`, `last_connected_at`)
         VALUES ('.$pdo->quote($_POST['firstName']).','.$pdo->quote($_POST['lastName']).
         ','.$pdo->quote($_POST['email']).','.$pdo->quote(password_hash($_POST['password'],PASSWORD_DEFAULT)).'
         ,'.$pdo->quote(date("Y-m-d")).','.$pdo->quote(date("Y-m-d")).')';
        
        $result = $pdo->prepare($query);
        $result->execute();
       
    }catch(Exception $e){
        die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
    }
}
header('location: ../views/pokedex.php');

?>