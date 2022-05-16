<?php
    class Ecommerce{
        public $name;
        public $address;
        public $phoneNumber;

        function _construct($name, $address,$phoneNumber){
            $this->name = $name;
            $this->address = $address;
            $this->phoneNumber = $phoneNumber;
        }

        public function ecommerceInfo(){
            return "
            <div>
                <h2>" . $this->name . "</h2>
                <p>" . $this->address . "</p>
                <img src=". $this->phoneNumber .">
            </div>
        ";
        }
    }

?>