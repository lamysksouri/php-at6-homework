<?php
require_once "../model/CRUD_Villa.php";
$crud=new CRUD_Villa();
$Villa=$crud->listerVilla();
include "../view/listVilla.php";
