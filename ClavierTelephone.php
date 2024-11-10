<?php

// je crée une classe ClavierTelephone
class ClavierTelephone
{
    /**
     * Propriété array qui recevra chaque lettre du mot fourni
     *
     * @var array
     */
    private array $_motTableau = [];

    /**
     * Propriété string qui recevra chaque élément de la réponse attendue
     *
     * @var string
     */
    private string $_resultat = "";

    /**
     * Constructeur étant exécuté dès qu'une instance sera créée
     *
     * @param string $message
     */
    public function __construct(string $message)
    {
        // strtolower pour que tous les caractères reçus soient en minuscule
        $message = strtolower($message);
        // appel à la fonction 'setTraduction()'
        $this->setTraduction($message);
    }

    /**
     * Fonction setter (commutateur), remplissant la propriété "$this->_resultat" de chaque élément de la réponse attendue
     *
     * @param string $message
     * @return void
     */
    public function setTraduction(string $message)
    {
        // je place indépendamment chaque lettre du mot fourni dans la propriété array '$_motTableau'
        $this->_motTableau = str_split($message);
        // boucle 'foreach()' qui va parcourir la propriété array '$_motTableau'
        foreach ($this->_motTableau as $value) {
            // structure conditionnelle qui va vérifier chaque valeur du tableau et voir à quelle caractère cette dernière correspond et assigner ou concaténer à la propriété string '$_resultat' le résultat correspondant
            if ($value === "a" || $value === "b" || $value === "c") {
                $this->_resultat .= "2";
            } elseif ($value === "d" || $value === "e" || $value === "f") {
                $this->_resultat .= "3";
            } elseif ($value === "g" || $value === "h" || $value === "i") {
                $this->_resultat .= "4";
            } elseif ($value === "j" || $value === "k" || $value === "l") {
                $this->_resultat .= "5";
            } elseif ($value === "m" || $value === "n" || $value === "o") {
                $this->_resultat .= "6";
            } elseif ($value === "p" || $value === "q" || $value === "r" || $value === "s") {
                $this->_resultat .= "7";
            } elseif ($value === "t" || $value === "u" || $value === "v") {
                $this->_resultat .= "8";
            } elseif ($value === "w" || $value === "x" || $value === "y" || $value === "z") {
                $this->_resultat .= "9";
            } elseif ($value === " ") {
                $this->_resultat .= " ";
            } else {
                return $this->_resultat = "Merci de n'entrer que des lettres";
            }
        }
    }

    /**
     * Fonction getter (accesseur) qui retourne la propriété string '$_resultat'
     *
     * @return string
     */
    public function getTraduction() : string
    {
        return $this->_resultat;
    }
}