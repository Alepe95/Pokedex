<?php
/**
 * Created by PhpStorm.
 * User: alexis
 * Date: 2019-02-12
 * Time: 14:02
 */
require ('Pokemon.php');

/**
 * donne le nombre de pokemon présent dans le pokedex
 */
$carapuce = new Pokemon(7,"carapuce","P",false,"EAU","");
$akwakwak = new Pokemon(55,"Akwakwak","M",true,"EAU","");
$dracaufeu = new Pokemon(6,"Dracaufeu","P",true,	"FEU","PSY");
$elektek = new Pokemon(125,	"Elektek",	"M",false,"ELECTRIK","");
$mew = new Pokemon(150,	"Mewtwo","L",false,	"PSY","");
$pokedex = array($carapuce,$akwakwak,$dracaufeu,$elektek,$mew);
$nbPokemonBase=0; //pour compter le nombre de Pokemons de Base et d'évolution
$nbType1=0; //pour compter le nombre de Pokemons de Type 1
$nbType2=0; //pour compter le nombre de Pokemons de Type 2
$nbPokemon = sizeof($pokedex);



/**
 * Création des listes de pokémon selon leurs type
 */
$typeEau = array();
$typeFeu = array();
$typePsy = array();
$typeElectrik = array();
$i = 0;
/**
 * Ajout des pokemon dans leurs liste correspondant en fonction de leurs type(eau, feu...)
 */

    while ($i < $nbPokemon) {
        if($pokedex[$i]->getType1()== "EAU" || $pokedex[$i]->getType2()== "EAU"){
            $typeEau[$i] = $pokedex[$i]->getNom();
            $i++;
        }
        elseif($pokedex[$i]->getType1()== "FEU" || $pokedex[$i]->getType2()== "FEU"){
            $typeFeu[$i] = $pokedex[$i]->getNom();
            $i++;
        }
        elseif($pokedex[$i]->getType1()== "PSY" || $pokedex[$i]->getType2()== "PSY"){
            $typePsy[$i] = $pokedex[$i]->getNom();
            $i++;
        }
        elseif($pokedex[$i]->getType1()== "ELECTRIK" || $pokedex[$i]->getType2()== "ELECTRIK"){
            $typeElectrik[$i] = $pokedex[$i]->getNom();
            $i++;
        }
        else{
            echo "erreur";
            $i++;
        }


    }

/**
 * Création du tableau permettant l'affichage de la liste des pokémon
 * la variable $affiche, permet de créer ce tableau
 */
$infoPokemon =
    "<table>
        <caption>Bienvenue sur votre Pokedex</caption>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>XP</th>
            <th>Evolution</th>
            <th>Type1</th>
            <th>Type2</th>
        </tr>";

/**
 * La boucle vas permettre d'afficher les pokemon
 * Création du lien permettant d'avoir accès aux infos du pokemon --> fichier detailPokemon.php
 * Ajout des informations concernant les nb de pokemon de type1, de type2 et le nombre d'évolution
 */

for($i=0; $i<$nbPokemon ; $i++){
    $nomPokemon = $pokedex[$i]->getNom();
    $infoPokemon= $infoPokemon.
        "<tr>
            <td>".($pokedex[$i]->getId()). "</td>
            <td>"."<a href='detailPokemon.php?param=$nomPokemon'>".$pokedex[$i]->getNom(). "</a></td>
            <td>".$pokedex[$i]->getCourbeXp()."</td>";


    if ( !empty( $pokedex[$i]->getEvolution() ) )
        $nbPokemonBase++;
    $infoPokemon=$infoPokemon."<td>".$pokedex[$i]->getEvolution()."</td>";

    if ( !empty( $pokedex[$i]->getType1() ) )
        $nbType1++;
    $infoPokemon=$infoPokemon."<td>".$pokedex[$i]->getType1()."</td>";

    if ( !empty( $pokedex[$i]->getType2() ) )
        $nbType2++;
    $infoPokemon=$infoPokemon."<td>".$pokedex[$i]->getType2()."</td>";

}

$infoPokemon=$infoPokemon."</tr> </table>";

/*while ($i++ <= $nbPokemon) {
    switch ($pokedex[$i]->getType1()) {
        case "EAU":
            $typeEau[$i] = $pokedex[$i]->getNom();
            break ;
        case "FEU":
            $typeFeu[$i] = $pokedex[$i]->getNom();
            break ;
        case "PSY":
            $typePsy[$i] = $pokedex[$i]->getNom();
            break ;
        case "ELECTRIK":
            $typeElectrik[$i] = $pokedex[$i]->getNom();
            break ;
        default:
            break ;
    }
}
*/
