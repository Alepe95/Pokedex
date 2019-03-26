<?php session_start();
/**
 * Created by PhpStorm.
 * User: alexis
 * Date: 2019-03-18
 * Time: 10:39
 */



function ConnectBDD(){
    $user = "pokegame";
    $password = "pokegame";

    try{
        // Connexion à la base de données
        $db = new PDO('mysql:host=localhost;dbname=pokemone', $user, $password);
    }
    catch(Exception $e){
        echo "Échec : " . $e->getMessage();
    }
    return $db;
}



function get_allPokemon(){
    $db = connectBDD();

        $res = $db->prepare("SELECT id FROM pokemon_type");
        $res->execute();
        $res = $res->fetchAll(PDO::FETCH_ASSOC);

       // $_SESSION['student'] = $res;
        echo($res);
        return $res;

   // }
}

function get_nomPokemon(){
    $db = connectBDD();

        $res = $db->prepare("SELECT id,nom FROM pokemon_type ");
        $res->execute();
        $res = $res->fetchAll();
        print_r($res);
        return $res;

}


function get_nombrePokemon(){
    $db = connectBDD();

    $res = $db->prepare("SELECT count(nom) FROM pokemon_type");
    $res->execute();
    $res = $res->fetchColumn();
    return $res;

}

function get_informationPokemon($id){
    $db = connectBDD();

    $res = $db->prepare("SELECT * FROM elementary_type where id = $id");
    $res->execute();
    $res = $res->fetchColumn();
    return $res;

}

?>

