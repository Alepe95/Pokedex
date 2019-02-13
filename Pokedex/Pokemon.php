<?php
/**
 * Created by PhpStorm.
 * User: alexis
 * Date: 2019-02-12
 * Time: 14:19
 */

/**
 * Class Pokemon
 * Permet de créer un Pokémon
 */
class Pokemon{
     private $id;
     private $nom;
     private $courbeXp;
     private $evolution;
     private $type1;
     private $type2;

    /**
     * Pokemon constructor.
     * @param $id
     * @param $nom
     * @param $courbeXp
     * @param $evolution
     * @param $type1
     * @param $type2
     */

    function __construct( $id,$nom, $courbeXp,$evolution,$type1,$type2 ){
         $this->id = $id;
         $this->nom = $nom;
         $this->courbeXp = $courbeXp;
         $this->evolution = $evolution;
         $this->type1 = $type1;
         $this->type2 = $type2;
     }



    public function getId(){
         return $this->id;
    }
     public function getNom(){
         return $this->nom;
    }

    public function getCourbeXp(){
         return $this->courbeXp;
    }

    public function getEvolution(){
         return $this->evolution;
    }

    public function getType1(){
         return $this->type1;
    }

    public function getType2(){
        return $this->type2;
    }


}