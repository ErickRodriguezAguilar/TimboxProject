<?php 

class Palabra{

    private $palabra=null;
    private $palabraError=null;

    function __construct()
    {
       // $this->palabra =  $new_palabra;    
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
           $this->setPalabraError('* No se Ingreso ninguna palabra en este campo.');
           $valid=false;     
        }
        return $valid;
    }

    function isPalindromo(){
        $valid=true;
            // Combierte caracteres a lowercase > Remueve los espacios en blanco > palabraOriginal
        $palabraOriginal= strtolower(str_replace(' ', '', $this->getPalabra()));
        // Combierte caracteres a lowercase > Remueve los espacios en blanco > se obtiene la palabraOriginal Invertida.
        $palabraInvertida = strtolower(str_replace(' ','', strrev($palabraOriginal)));
        if(strcmp($palabraOriginal, $palabraInvertida) ==0 ){
            
            $this->setPalabraError('* Esta palabra es un palindromo');
        }else{
            $this->setPalabraError('* Esta palabra no es un palindromo');
            $valid=false;
        }
        return $valid;
    }
}

?>