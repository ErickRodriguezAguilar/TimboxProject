<?php 
class User{
    private $name=null;
    private $email=null;
    private $telefono=null;
    private $website=null;
    private $rfc=null;
    private $password=null;
    private $direccion=null;

    private $direccionError=null;
    private $telefonoError=null;
    private $nameError=null;
    private $emailError=null;
    private $websiteError=null;
    private $rfcError=null;
    private $passwordError= null;

    function __construct(){

    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of website
     */ 
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set the value of website
     *
     * @return  self
     */ 
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get the value of rfc
     */ 
    public function getRfc()
    {
        return $this->rfc;
    }

    /**
     * Set the value of rfc
     *
     * @return  self
     */ 
    public function setRfc($rfc)
    {
        $this->rfc = $rfc;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of nameError
     */ 
    public function getNameError()
    {
        return $this->nameError;
    }

    /**
     * Set the value of nameError
     *
     * @return  self
     */ 
    public function setNameError($nameError)
    {
        $this->nameError = $nameError;

        return $this;
    }

    /**
     * Get the value of emailError
     */ 
    public function getEmailError()
    {
        return $this->emailError;
    }

    /**
     * Set the value of emailError
     *
     * @return  self
     */ 
    public function setEmailError($emailError)
    {
        $this->emailError = $emailError;

        return $this;
    }

    /**
     * Get the value of websiteError
     */ 
    public function getWebsiteError()
    {
        return $this->websiteError;
    }

    /**
     * Set the value of websiteError
     *
     * @return  self
     */ 
    public function setWebsiteError($websiteError)
    {
        $this->websiteError = $websiteError;

        return $this;
    }

    /**
     * Get the value of rfcError
     */ 
    public function getRfcError()
    {
        return $this->rfcError;
    }

    /**
     * Set the value of rfcError
     *
     * @return  self
     */ 
    public function setRfcError($rfcError)
    {
        $this->rfcError = $rfcError;

        return $this;
    }

    /**
     * Get the value of passwordError
     */ 
    public function getPasswordError()
    {
        return $this->passwordError;
    }

    /**
     * Set the value of passwordError
     *
     * @return  self
     */ 
    public function setPasswordError($passwordError)
    {
        $this->passwordError = $passwordError;

        return $this;
    }

    /**
     * Get the value of telefono
     */ 
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of telefono
     *
     * @return  self
     */ 
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get the value of telefonoError
     */ 
    public function getTelefonoError()
    {
        return $this->telefonoError;
    }

    /**
     * Set the value of telefonoError
     *
     * @return  self
     */ 
    public function setTelefonoError($telefonoError)
    {
        $this->telefonoError = $telefonoError;

        return $this;
    }

        /**
     * Get the value of direccionError
     */ 
    public function getDireccionError()
    {
        return $this->direccionError;
    }

    /**
     * Set the value of direccionError
     *
     * @return  self
     */ 
    public function setDireccionError($direccionError)
    {
        $this->direccionError = $direccionError;

        return $this;
    }

        /**
     * Get the value of direccion
     */ 
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     *
     * @return  self
     */ 
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

////////////////VALIDATION FUNCTIONS ////////////////////////////

function isValidForConfiguration(){
        $valid=true;

        if(empty($this->getName())){ 
            $valid=false;
            $this->setNameError('* Ingrese su nuevo Nombre.');
        }

        if(empty($this->getRfc())){
            $valid=false;
            $this->setRfcError('Ingrese su RFC');
        }elseif(!$this->isRfcValid()){
            $valid=false;
            $this->setRfcError('Ingrese el formato correcto de su RFC');
        }

        if(empty($this->getDireccion())){ 
            $valid=false;
            $this->setDireccionError('* Ingrese su direccion.');
        }

        if(empty($this->getTelefono())){
            $valid=false;
            $this->setTelefonoError('Ingrese su numero de telefono');
        }else if(!$this->isTelefonoValid()){
            $valid=false;
            $this->setTelefonoError('Ingrese un numero de telefono valido.');
        }

        if(empty($this->getWebsite())){ 
            $valid=false;
            $this->setWebsiteError('* Ingrese su Website');
        }else if(!$this->isWebsiteValid()){
            $valid=false;
            $this->setWebsiteError("* Ingrese un nombre de website valido");
        }


        if(empty($this->getPassword())){
            $valid=false;
            $this->setPasswordError('* Ingrese su nueva Contraseña.');
        }
        return $valid;
    }



    function isRfcValid(){
        //Expresion regular  
        $regex= '/^(([A-ZÑ&]{4})([0-9]{2})([0][1-9]|[1][0-2])([0][1-9]|[1-2][0-9]|[3][0-1])([A-Z0-9]{3}))$/';
        if(preg_match($regex,$this->getRfc())){
            return true;
        }else{
            return false;
        }
    }

    function isEmailValid(){
        return true;
    }

    function isWebsiteValid(){
        if(filter_var($this->getWebsite(), FILTER_VALIDATE_DOMAIN)){
            return true;
        } else{
            return false;
        }
    }

    function isTelefonoValid(){
        $regex= '/^[0-9]{10}$/';
        if(preg_match($regex,$this->getTelefono())){
            return true;
        }else{
            return false;
        }
    }



}
?>