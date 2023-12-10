<?php
require_once "../model/CRUD_Appartement.php";
$crud=new CRUD_Appartement();
if(isset($_GET['ref'])){
    $ref=$_GET['ref'];
    $crud->supprimerApp($ref);
    header("location:listAppartement.php");
}