<?php





$file = 'https://pokeapi.co/api/v2/pokemon/?offset=0&limit=30';
$data = file_get_contents($file);
$tabItemPokemon = [];
$arrayJson = json_decode($data);
$officialArtwork = 'official-artwork';

foreach ($arrayJson->results as $value) {
    echo '<br>';
    $data = file_get_contents($value->url);
    $jsonPokemon = json_decode($data);
    // echo $jsonPokemon->name;
    // echo ' - #';
    // echo $jsonPokemon->order;
    // echo ' - ';
    // echo $jsonPokemon->sprites->front_default;
    // echo ' -- ';
    // echo $jsonPokemon->sprites->other->$officialArtwork->front_default;
    // echo ' ----- TYPE : ';
    // // foreach($jsonPokemon->types as $content){
    // //     echo $content->type->name;
    // //     echo ' ';
    // // }
    // echo $jsonPokemon->types[0]->type->name;
    // if(count($jsonPokemon->types)==2){
    //     echo ' ';
    //     echo $jsonPokemon->types[1]->type->name;  
    // }

//    if($key == 'results'){
//        foreach ($value as $itemPokemon=> $propertyPokemon){
//            $propertyPokemon->
//            $tabItemPokemon [] = [
//                $propertyPokemon->name,
//
//            ]
//            }
//            }
////    }
}

?>