<?php 
include 'session.php';

if(isset($_POST['email']) && $_POST['password']){
    try{
        $pdo= new PDO('mysql:host=localhost;dbname=exo_connection','root','');
        $query = 'SELECT * FROM `user` WHERE `email`='.$pdo->quote($_POST['email']);
        $result = $pdo->prepare($query);
        $result->execute();
        $row= $result->fetch(PDO::FETCH_OBJ);  
    }catch(Exception $e){
        die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
    }
}
if($row!=''){
    if(password_verify($_POST['password'],$row->password)){
        echo 'connexion réussi';
    }else{
        echo 'mauvais mdp';
    }
    // if(password_verify($_POST['password'],$row->password)){
    //     $_SESSION['user']=$row;
    //     header('location: ../views/pokedex.php');
    // }else{
    //     header('location: ../views/pokedex.php');
  
    // }
}else{
    echo 'mauvais mail';
}
// else{
//     //METTRE UNE ERREUR
//     header('location: ../views/pokedex.php');
// }
// header('location: ../views/pokedex.php');

?>