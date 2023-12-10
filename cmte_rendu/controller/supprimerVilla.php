<?php
require_once "../model/CRUD_Villa.php";
$crud=new CRUD_Villa();
if(isset($_GET['ref'])){
    $ref=$_GET['ref'];
    $crud->supprimerVilla($ref);
    header("location:listVilla.php");
}