<?php
/**
 * Created by PhpStorm.
 * User: groune mohamed
 * Date: 22/11/2018
 * Time: 11:08
 */

class Electromenager extends Produit
{
    private $consommation;
    private $taxeConsommation;

    /**
     * Electromenager constructor.
     * @param $consommation
     * @param $taxeConsommation
     */
    public function __construct($DesignationDuproduit, $prixHt,$reference,$consommation,$taxeConsommation)
    {
        parent::__construct($DesignationDuproduit, $prixHt, $reference,$consommation,$taxeConsommation);
        $this->consommation = $consommation;
        if ($consommation < 100) {
            $this->taxeConsommation = 0;
        }
        elseif (($consommation >= 100) && ($consommation < 300)) {
            $this->taxeConsommation = 10;
        }
        else {
            $this->taxeConsommation = 35;
        }
    }

    /**
     * @return mixed
     */
    public function getConsommation()
    {
        return $this->consommation;
    }

    /**
     * @param mixed $consommation
     */
    public function setConsommation($consommation): void
    {
        $this->consommation = $consommation;
    }

    /**
     * @return mixed
     */
    public function getTaxeConsommation()
    {
        return $this->taxeConsommation;
    }

    /**
     * @param mixed $taxeConsommation
     */
    public function setTaxeConsommation($taxeConsommation): void
    {
        $this->taxeConsommation = $taxeConsommation;
    }
    public function affichage()
    {
        echo " Nom produit : $this->DesignationDuproduit <br> Prix :$this->prixHt <br> Reference :$this->reference <br> Consomation :$this->consommation <br> Taxe : $this->taxeConsommation <br>";
    }
    function calculTotalPrix () {

        return  $this->getPrixHt()- ($this->getPrixHt() *$this->getTaxeConsommation()/100) ;


}
}

