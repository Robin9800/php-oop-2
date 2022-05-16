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
    }

?>