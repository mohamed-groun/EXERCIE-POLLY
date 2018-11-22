<?php
/**
 * Created by PhpStorm.
 * User: groune mohamed
 * Date: 22/11/2018
 * Time: 11:24
 */

class Textile extends Produit
{
    private $taille;
    private $couleur;
    private $tva;

    /**
     * Textile constructor.
     * @param $taille
     * @param $couleur
     * @param $tva
     */
    public function __construct( $DesignationDuproduit, $prixHt, $reference ,$taille, $couleur, $tva)
    {
        parent::__construct( $DesignationDuproduit, $prixHt, $reference ,$taille, $couleur, $tva);
        $this->taille = $taille;
        $this->couleur = $couleur;
        $this->tva = $tva;
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
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * @param mixed $taille
     */
    public function setTaille($taille): void
    {
        $this->taille = $taille;
    }

    /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @param mixed $couleur
     */
    public function setCouleur($couleur): void
    {
        $this->couleur = $couleur;
    }

    /**
     * @return mixed
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * @param mixed $tva
     */
    public function setTva($tva): void
    {
        $this->tva = $tva;
    }
    public function affichage()
    {
        echo " Nom produit : $this->DesignationDuproduit <br> Prix :$this->prixHt <br> Reference :$this->reference <br> Taille :$this->taille <br> Couleur : $this->couleur <br> TVA: $this->tva <br>";
    }
    function calculTotalPrix () {

        return  $this->getPrixHt() - ($this->getPrixHt() *$this->getTva()/100) ;


    }
}
