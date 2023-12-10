<?php
require_once "../model/CRUD_Villa.php";
$crud=new CRUD_Villa();
if(isset($_GET['ref'])){
$ref=$_GET['ref'];
$villa=$crud->recupereVilla($ref);
include "../view/modifierVilla.php";
var_dump($_POST);
}
if(isset($_POST['ok'])){
    $ref=$_POST['reference'];
    $proprietaire=$_POST['proprietaire'];
    $localite=$_POST['localite'];
    $surface=$_POST['surface'];
    $nbPieces=$_POST['nbrePieces'];
    $domaineUsage=$_POST['domaineUsage'];
    $nbEtages=$_POST['nbEtages'];
    $v2=new Villa($ref,$proprietaire,$localite,$surface,$nbPieces,$domaineUsage,$nbEtages);
   $res=$crud->modifierVilla($v2);
   
   header("location:../controller/listVilla.php");
}
