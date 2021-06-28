<?php
if($_GET['id']==0){
    $previous= array_key_last($items);
}else{
    $previous=$_GET['id']-1;
}

if($_GET['id']==array_key_last($items)){
    $next=0;
}else{
    $next = $_GET['id']+1;
}


?>