<?php
try
{
    $bdd = new PDO('myataDeDNamesql:host=HostSuyo;dbname=NameSuDataBase', 'root', '');
 //  echo 'No F<br>';
}
catch(Exception $ex)
{
    die('Erreur: '.$ex->getMessage());
}
