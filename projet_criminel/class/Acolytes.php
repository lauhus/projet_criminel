<?php

class Acolytes{

    private $_recherchers_id_r;
    private $_recherches_id_r1;
    private $_coopere;

    /**
     * Get the value of _recherchers_id_r
     */ 
    public function get_recherchers_id_r()
    {
        return $this->_recherchers_id_r;
    }

    /**
     * Set the value of _recherchers_id_r
     *
     * @return  self
     */ 
    public function set_recherchers_id_r($_recherchers_id_r)
    {
        $this->_recherchers_id_r = $_recherchers_id_r;

        return $this;
    }

    /**
     * Get the value of _recherches_id_r1
     */ 
    public function get_recherches_id_r1()
    {
        return $this->_recherches_id_r1;
    }

    /**
     * Set the value of _recherches_id_r1
     *
     * @return  self
     */ 
    public function set_recherches_id_r1($_recherches_id_r1)
    {
        $this->_recherches_id_r1 = $_recherches_id_r1;

        return $this;
    }

    /**
     * Get the value of _coopere
     */ 
    public function get_coopere()
    {
        return $this->_coopere;
    }

    /**
     * Set the value of _coopere
     *
     * @return  self
     */ 
    public function set_coopere($_coopere)
    {
        $this->_coopere = $_coopere;

        return $this;
    }
}