<?php 
class User{
    private $name=null;
    private $email=null;
    private $website=null;
    private $rfc=null;
    private $password=null;

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
}
?>