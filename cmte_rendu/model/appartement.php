<?php
require_once "immobilier.php";
class appartement extends immobilier{
    private $nature='appartement';
    private $surfaceEspaceCommun;
    private $nbEtages=Null;
    
    function __construct($r,$p,$l,$s,$n,$d,$surf){
        parent::__construct($r,$p,$l,$s,$n,$d);
        $this->surfaceEspaceCommun=$surf;
    }
    /**
     * Get the value of surfaceEspaceCommun
     */
    public function getSurfaceEspaceCommun()
    {
        return $this->surfaceEspaceCommun;
    }

    /**
     * Set the value of surfaceEspaceCommun
     */
    public function setSurfaceEspaceCommun($surfaceEspaceCommun): self
    {
        $this->surfaceEspaceCommun = $surfaceEspaceCommun;

        return $this;
    }

    /**
     * Get the value of nature
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * Get the value of nbEtage
     */
    public function getNbEtages()
    {
        return $this->nbEtages;
    }
}