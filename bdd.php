<?php

/**
 * declaration de la class Bdd
 */
class Bdd
{
    //  methode static
    public static function Connexion()
    {
        try {
            $bdd = new PDO("mysql:host=localhost;dbname=ccstdb", "root", "root");
            //   $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $bdd;
        } catch (Exception $e) {
            die('erreur de connexion à la bdd <br> $e');
        }
    }
}
