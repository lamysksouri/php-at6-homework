<?php
require_once "../model/CRUD_Appartement.php";
$crud=new CRUD_Appartement();
if(isset($_POST['ok'])){
    $proprietaire=$_POST['proprietaire'];
    $localite=$_POST['localite'];
    $surface=$_POST['surface'];
    $nbPieces=$_POST['nbrePieces'];
    $domaineUsage=$_POST['domaineUsage'];
    $surfaceEspaceCommun=$_POST['surfaceEspaceCommun'];
    $app=new Appartement(null,$proprietaire,$localite,$surface,$nbPieces,$domaineUsage,$surfaceEspaceCommun);
   $res=$crud->ajouterApp($app);
   header("location:../view/ajoutSucces.php");
}
include "../view/ajoutAppartement.php";