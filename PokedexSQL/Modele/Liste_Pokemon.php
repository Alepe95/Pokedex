<?php
/**
 * Created by PhpStorm.
 * User: alexis
 * Date: 2019-03-18
 * Time: 14:16
 */
require('./Controleur/Requete.php');

$db = connectBDD();
include("./vue/header.html");
$nbPokemon =  get_nombrePokemon();

echo "voici le nombre de Pokémon présent dans le pokédex : ".get_nombrePokemon()."<br>";
echo get_informationPokemon(1);
?>
<table class='table table-secondary'>
        <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>nom</th>
                <th>Details</th>
                <th>Supprimer</th>

            </tr>
        </thead>

        <?php
        get_allPokemon();

        if(isset($_GET['id'])){
            $pokemon_id = $_GET['id'];
            drop_Pokemon($pokemon_id);
            reload();
        }
        ?>


    </table>
