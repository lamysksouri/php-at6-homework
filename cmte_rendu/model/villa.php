<?php
require_once "immobilier.php";
class villa extends immobilier{
    private $nature='villa';
    private $surfaceEspaceCommun=Null;
    private $nbEtages;
    
    function __construct($r,$p,$l,$s,$n,$d,$nb){
        parent::__construct($r,$p,$l,$s,$n,$d);
        $this->nbEtages=$nb;
    }

    /**
     * Get the value of nbEtages
     */
    public function getNbEtages()
    {
        return $this->nbEtages;
    }

    /**
     * Set the value of nbEtages
     */
    public function setNbEtages($nbEtages): self
    {
        $this->nbEtages = $nbEtages;

        return $this;
    }

    /**
     * Get the value of surfaceEspaceCommun
     */
    public function getSurfaceEspaceCommun()
    {
        return $this->surfaceEspaceCommun;
    }

    /**
     * Get the value of nature
     */
    public function getNature()
    {
        return $this->nature;
    }
}