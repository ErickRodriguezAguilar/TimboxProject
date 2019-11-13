<?php 

class Palabra{

    private $palabra=null;
    private $palabraError=null;

    function __construct($new_palabra)
    {
        $this->palabra =  $new_palabra;    
    }

////////////////////////////Getter and Setters//////////////////////////////
    /**
     * Get the value of palabra
     */ 
    public function getPalabra()
    {
        return $this->palabra;
    }

    /**
     * Set the value of palabra
     *
     * @return  self
     */ 
    public function setPalabra($palabra)
    {
        $this->palabra = $palabra;

        return $this;
    }

    /**
     * Get the value of palabraError
     */ 
    public function getPalabraError()
    {
        return $this->palabraError;
    }

    /**
     * Set the value of palabraError
     *
     * @return  self
     */ 
    public function setPalabraError($palabraError)
    {
        $this->palabraError = $palabraError;

        return $this;
    }

///////////// Business Logic //////////
    function isValid(){
        $valid=true;
        if ($this->getPalabra() == null){
           $this->setPalabraError('*La No ingreso ninguna palabra');
           $valid=false;     
        }if(ctype_alpha($this->getPalabra())){
            $this->setPalabraError('*La palabra no debe de contener numeros');
            $valid=false;
        }
        return $valid;
    }

    function isPalindromo(){
        return true;
    }


}

?>