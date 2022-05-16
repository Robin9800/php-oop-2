<?php
class Utente{
    
    public $idUser;
    public $name;
    public $surname;
    public $dateOfBirth;
    public $address;
    public $email;
    public $userDiscount;

    function __construct($_idUser,$_name,$_surname,$_dateOfBirth,$_address, $_email){
        $this->idUser = $_idUser;
        $this->name = $_name;
        $this->surname = $_surname;
        $this->dateOfBirth = $_dateOfBirth;
        $this->address = $_address;
        $this->email = $_email;
    }

    public function setDiscount($registered)
    {
        if ($registered = true) {
            $this->customerDiscount = 20;
            echo $this->userDiscount;
            $this->registered = $registered;
        } else {
            $this->userDiscount = 0;
            echo $this->userDiscount;
            $this->registered = $registered;
        }
    }
}
?>