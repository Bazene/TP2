<?php
class carnet_adresse {
    private $nom;
    private $adresse;
    private $numTel;
    private $adresseMail;

    public function __construct($nom, $adresse, $numTel, $adresseMail) {
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->numTel = $numTel;
        $this->adresseMail = $adresseMail;
    }

    public function enregistrerAbonne() {
        global $db;
        $resultat = false;

        $nom = $this->nom;
        $adresse = $this->adresse;
        $numTel = $this->numTel;
        $adresseMail = $this->adresseMail;
        $requete = "INSERT INTO carnet_adresse(noms, adresse, numTel, adresseMail) VALUES (:nom, :adresse, :numTel, :adresseMail)";

        $stetment = $db->prepare($requete); // Preparer la requete pour l'execution

        $execution = $stetment->execute([
                ':nom' => $nom,
                ':adresse' => $adresse,
                ':numTel' => $numTel,
                ':adresseMail' => $adresseMail
            ]
        );
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of numTel
     */ 
    public function getNumTel()
    {
        return $this->numTel;
    }

    /**
     * Set the value of numTel
     *
     * @return  self
     */ 
    public function setNumTel($numTel)
    {
        $this->numTel = $numTel;

        return $this;
    }

    /**
     * Get the value of adresseMail
     */ 
    public function getAdresseMail()
    {
        return $this->adresseMail;
    }

    /**
     * Set the value of adresseMail
     *
     * @return  self
     */ 
    public function setAdresseMail($adresseMail)
    {
        $this->adresseMail = $adresseMail;

        return $this;
    }
}

?>