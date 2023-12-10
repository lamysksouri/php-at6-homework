<?php
require_once "../model/CRUD_Appartement.php";
$crud=new CRUD_Appartement();
if(isset($_GET['ref'])){
$ref=$_GET['ref'];
$app=$crud->recupereApp($ref);
include "../view/modifierAppartement.php";
var_dump($_POST);
}
if(isset($_POST['ok'])){
    $ref=$_POST['reference'];
    $proprietaire=$_POST['proprietaire'];
    $localite=$_POST['localite'];
    $surface=$_POST['surface'];
    $nbPieces=$_POST['nbrePieces'];
    $domaineUsage=$_POST['domaineUsage'];
    $surfaceEspaceCommun=$_POST['surfaceEspaceCommun'];
    $app2=new Appartement($ref,$proprietaire,$localite,$surface,$nbPieces,$domaineUsage,$surfaceEspaceCommun);
   $res=$crud->modifierApp($app2);
   var_dump($app);
   header("location:../view/ajoutSucces.php");
}
