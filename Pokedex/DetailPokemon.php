<?php session_start();
/**
 * Created by PhpStorm.
 * User: alexis
 * Date: 2019-02-13
 * Time: 00:34
 */
require 'Liste_Pokemon.php';
$param = $_GET['param'];


for ($i=0; $i<$nbPokemon ;$i++){

    if ( ($pokedex[$i]->getNom()) == $param ){
        $detailPokemon="Le pokemon ".$pokedex[$i]->getNom().
            "<br>A pour Id: ".$pokedex[$i]->getId().
            "<br>Possède une courbe d'XP : ".$pokedex[$i]->getCourbeXp().
            "<br>Evolue ? (1 pour oui, rien pour non) ".$pokedex[$i]->getEvolution().
            "<br>A en type 1 : ".$pokedex[$i]->getType1().
            "<br>A en type 2 : ".$pokedex[$i]->getType2();

        echo $detailPokemon;
        break;
    }
}
?>
<div>

    <p>retour <a href="Liste.php">retour à la liste</a></p>

</div>

