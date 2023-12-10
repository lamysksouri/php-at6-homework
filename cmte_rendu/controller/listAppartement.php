<?php
require_once "../model/CRUD_Appartement.php";
$crud=new CRUD_Appartement();
$lesAppartements=$crud->listerApp();
include "../view/listAppartement.php";
