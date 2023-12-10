<?php
require_once "../model/CRUD_Villa.php";
$crud=new CRUD_Villa();
if(isset($_POST['ok'])){
    $proprietaire=$_POST['proprietaire'];
    $localite=$_POST['localite'];
    $surface=$_POST['surface'];
    $nbPieces=$_POST['nbrePieces'];
    $domaineUsage=$_POST['domaineUsage'];
    $nbEtage=$_POST['nbEtage'];
    $app=new Villa(null,$proprietaire,$localite,$surface,$nbPieces,$domaineUsage,$nbEtage);
   $res=$crud->ajouterVilla($app);
   header("location:../view/ajoutSuccesVilla.php");
}
include "../view/ajoutVilla.php";