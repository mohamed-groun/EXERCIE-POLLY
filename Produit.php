<?php
/**
 * Created by PhpStorm.
 * User: groune mohamed
 * Date: 22/11/2018
 * Time: 10:54
 */

class Produit
{
    protected $DesignationDuproduit ;
    protected $prixHt ;
    protected $reference ;

    /**
     * Produit constructor.
     * @param $DesignationDuproduit
     * @param $prixHt
     * @param $reference
     */
    public function __construct($DesignationDuproduit, $prixHt, $reference)
    {
        $this->DesignationDuproduit = $DesignationDuproduit;
        $this->prixHt = $prixHt;
        $this->reference = $reference;
    }

    /**
     * @return mixed
     */
    public function getDesignationDuproduit()
    {
        return $this->DesignationDuproduit;
    }

    /**
     * @param mixed $DesignationDuproduit
     */
    public function setDesignationDuproduit($DesignationDuproduit): void
    {
        $this->DesignationDuproduit = $DesignationDuproduit;
    }

    /**
     * @return mixed
     */
    public function getPrixHt()
    {
        return $this->prixHt;
    }

    /**
     * @param mixed $prixHt
     */
    public function setPrixHt($prixHt): void
    {
        $this->prixHt = $prixHt;
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param mixed $reference
     */
    public function setReference($reference): void
    {
        $this->reference = $reference;
    }


}