<?php 

class Criminels{

    private $_nom_r;
    private $_prenom_r;
    private $_date_naissance_r;
    private $_signe_distintif_r;
    private $_profil_psy_r;
    private $_niveau_accreditation;
    private $_nom_photo_r;
    private $_informations_r;
    private $_derniere_adresse_r;


    /**
     * Get the value of _nom_r
     */ 
    public function get_nom_r()
    {
        return $this->_nom_r;
    }

    /**
     * Set the value of _nom_r
     *
     * @return  self
     */ 
    public function set_nom_r($_nom_r)
    {
        $this->_nom_r = $_nom_r;

        return $this;
    }

    /**
     * Get the value of _prenom_r
     */ 
    public function get_prenom_r()
    {
        return $this->_prenom_r;
    }

    /**
     * Set the value of _prenom_r
     *
     * @return  self
     */ 
    public function set_prenom_r($_prenom_r)
    {
        $this->_prenom_r = $_prenom_r;

        return $this;
    }

    /**
     * Get the value of _date_naissance_r
     */ 
    public function get_date_naissance_r()
    {
        return $this->_date_naissance_r;
    }

    /**
     * Set the value of _date_naissance_r
     *
     * @return  self
     */ 
    public function set_date_naissance_r($_date_naissance_r)
    {
        $this->_date_naissance_r = $_date_naissance_r;

        return $this;
    }

    /**
     * Get the value of _signe_distintif_r
     */ 
    public function get_signe_distintif_r()
    {
        return $this->_signe_distintif_r;
    }

    /**
     * Set the value of _signe_distintif_r
     *
     * @return  self
     */ 
    public function set_signe_distintif_r($_signe_distintif_r)
    {
        $this->_signe_distintif_r = $_signe_distintif_r;

        return $this;
    }

    /**
     * Get the value of _profil_psy_r
     */ 
    public function get_profil_psy_r()
    {
        return $this->_profil_psy_r;
    }

    /**
     * Set the value of _profil_psy_r
     *
     * @return  self
     */ 
    public function set_profil_psy_r($_profil_psy_r)
    {
        $this->_profil_psy_r = $_profil_psy_r;

        return $this;
    }

    /**
     * Get the value of _niveau_accreditation
     */ 
    public function get_niveau_accreditation()
    {
        return $this->_niveau_accreditation;
    }

    /**
     * Set the value of _niveau_accreditation
     *
     * @return  self
     */ 
    public function set_niveau_accreditation($_niveau_accreditation)
    {
        $this->_niveau_accreditation = $_niveau_accreditation;

        return $this;
    }

    /**
     * Get the value of _nom_photo_r
     */ 
    public function get_nom_photo_r()
    {
        return $this->_nom_photo_r;
    }

    /**
     * Set the value of _nom_photo_r
     *
     * @return  self
     */ 
    public function set_nom_photo_r($_nom_photo_r)
    {
        $this->_nom_photo_r = $_nom_photo_r;

        return $this;
    }

    /**
     * Get the value of _informations_r
     */ 
    public function get_informations_r()
    {
        return $this->_informations_r;
    }

    /**
     * Set the value of _informations_r
     *
     * @return  self
     */ 
    public function set_informations_r($_informations_r)
    {
        $this->_informations_r = $_informations_r;

        return $this;
    }

    /**
     * Get the value of _derniere_adresse_r
     */ 
    public function get_derniere_adresse_r()
    {
        return $this->_derniere_adresse_r;
    }

    /**
     * Set the value of _derniere_adresse_r
     *
     * @return  self
     */ 
    public function set_derniere_adresse_r($_derniere_adresse_r)
    {
        $this->_derniere_adresse_r = $_derniere_adresse_r;

        return $this;
    }
}