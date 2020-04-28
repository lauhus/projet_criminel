<?php

class Temoignages{

    private $_id_temoignage;
    private $_localisation_t;
    private $_nature_t;
    private $_temoin_t;
    private $_numero_tel_temoin;
    private $_adresse_temoin_t;
    private $_date_s;

    /**
     * Get the value of _id_temoignage
     */ 
    public function get_id_temoignage()
    {
        return $this->_id_temoignage;
    }

    /**
     * Set the value of _id_temoignage
     *
     * @return  self
     */ 
    public function set_id_temoignage($_id_temoignage)
    {
        $this->_id_temoignage = $_id_temoignage;

        return $this;
    }

    /**
     * Get the value of _localisation_t
     */ 
    public function get_localisation_t()
    {
        return $this->_localisation_t;
    }

    /**
     * Set the value of _localisation_t
     *
     * @return  self
     */ 
    public function set_localisation_t($_localisation_t)
    {
        $this->_localisation_t = $_localisation_t;

        return $this;
    }

    /**
     * Get the value of _nature_t
     */ 
    public function get_nature_t()
    {
        return $this->_nature_t;
    }

    /**
     * Set the value of _nature_t
     *
     * @return  self
     */ 
    public function set_nature_t($_nature_t)
    {
        $this->_nature_t = $_nature_t;

        return $this;
    }

    /**
     * Get the value of _temoin_t
     */ 
    public function get_temoin_t()
    {
        return $this->_temoin_t;
    }

    /**
     * Set the value of _temoin_t
     *
     * @return  self
     */ 
    public function set_temoin_t($_temoin_t)
    {
        $this->_temoin_t = $_temoin_t;

        return $this;
    }

    /**
     * Get the value of _numero_tel_temoin
     */ 
    public function get_numero_tel_temoin()
    {
        return $this->_numero_tel_temoin;
    }

    /**
     * Set the value of _numero_tel_temoin
     *
     * @return  self
     */ 
    public function set_numero_tel_temoin($_numero_tel_temoin)
    {
        $this->_numero_tel_temoin = $_numero_tel_temoin;

        return $this;
    }

    /**
     * Get the value of _adresse_temoin_t
     */ 
    public function get_adresse_temoin_t()
    {
        return $this->_adresse_temoin_t;
    }

    /**
     * Set the value of _adresse_temoin_t
     *
     * @return  self
     */ 
    public function set_adresse_temoin_t($_adresse_temoin_t)
    {
        $this->_adresse_temoin_t = $_adresse_temoin_t;

        return $this;
    }

    /**
     * Get the value of _date_s
     */ 
    public function get_date_s()
    {
        return $this->_date_s;
    }

    /**
     * Set the value of _date_s
     *
     * @return  self
     */ 
    public function set_date_s($_date_s)
    {
        $this->_date_s = $_date_s;

        return $this;
    }
}