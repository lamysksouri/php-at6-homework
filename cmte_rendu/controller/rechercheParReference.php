<?php
require_once "../model/CRUD_Appartement.php";
$crud=new CRUD_Appartement();
include "../view/rechercheParReference.php";
if(isset($_POST['ok'])){
    $ref=$_POST['recherche'];
    $app=$crud->recupereApp($ref);
    if($app){
        foreach ($app as $key => $value) {
echo $value."<br>";
        }
    }
    else{
        echo "refernce non trouvable";
    }
}