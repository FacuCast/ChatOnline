<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=sis', 'root', '');
 //  echo 'No F<br>';
}
catch(Exception $ex)
{
    die('Erreur: '.$ex->getMessage());
}