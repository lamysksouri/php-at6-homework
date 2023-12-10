<?php
include "appartement.php";
require_once "../config/connexion.php";
class CRUD_Appartement{
    private $connexion;
    function __construct(){
        $obj=new connexion();
        $this->connexion=$obj->getConnexion();
    }
    function ajouterApp($p){
        var_dump($p);
        $ref=$p->getRef();
        $proprietaire=$p->getProprietaire();
        $localite=$p->getLocalite();
        $surface=$p->getSurface();
        $nbPieces=$p->getNbPieces();
        $domaineUsage=$p->getDomaineUsage();
        $nature=$p->getNature();
        $surfaceEspaceCommun=$p->getSurfaceEspaceCommun();
        $nbEtages=$p->getnbEtages();
        $sql="insert into immobilier values (null,'$proprietaire','$localite',$surface,$nbPieces,'$domaineUsage','$nature',$surfaceEspaceCommun,'$nbEtages')";
        $res=$this->connexion->exec($sql);
        return $res;
    }
    function recupereApp($ref){
        $sql="select * from immobilier where reference=$ref";
        $res=$this->connexion->query($sql);
        return $res->fetch(PDO :: FETCH_NUM);
    }
    function SupprimerApp($ref){
        $sql="delete from immobilier where reference=$ref";
        $res=$this->connexion->exec($sql);
        return $res;
    }
    function modifierApp($p){
        var_dump($p);
        $ref=$p->getRef();
        $proprietaire=$p->getProprietaire();
        $localite=$p->getLocalite();
        $surface=$p->getSurface();
        $nbPieces=$p->getNbPieces();
        $domaineUsage=$p->getDomaineUsage();
        $nature=$p->getNature();
        $surfaceEspaceCommun=$p->getSurfaceEspaceCommun();
        $nbEtages=$p->getnbEtages();
        $sql="UPDATE immobilier SET proprietaire='$proprietaire',localite='$localite',surface=$surface,nbPiece=$nbPieces,domaineUsage='$domaineUsage',nature='$nature',surfaceEspaceCommun=$surfaceEspaceCommun,nbEtages='$nbEtages' where reference=$ref";
        $res=$this->connexion->exec($sql);
        return $res;
    }
    function listerApp(){
        $sql="select * from immobilier where nature='appartement'";
        $res=$this->connexion->query($sql);
        return $res->fetchAll(PDO :: FETCH_NUM);
    }
}
?>