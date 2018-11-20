<?php 
require_once ABSPATH . 'connection.php'; 
    
    //Class to manipulate the DataBase as OOP
    class PojoCustomer {

        private $id;
        private $name;
        private $phone;
        private $cpf;
        private $adress;
        private $zip;
        private $bill;

        public function getId() {
            return $this->id;
        }
     
        public function setId($id) {
            $this->id = $id;
        }
     
        public function getName() {
            return $this->name;
        }
     
        public function setName($name) {
            $this->name = $name;
        }
     
        public function getPhone() {
            return $this->phone;
        }
     
        public function setPhone($phone) {
            $this->phone = strtolower($phone);
        }
     
        public function getCpf() {
            return $this->cpf;
        }
     
        public function setCpf($cpf) {
            $this->cpf = strtolower($cpf);
        }    
         
        public function getAdress() {
            return $this->adress;
        }
     
        public function setAdress($adress) {
            $this->adress = strtolower($adress);
        }
         
        public function getZip() {
            return $this->zip;
        }
     
        public function setZip($zip) {
            $this->zip = $zip;
        }

        public function getBill() {
            return $this->bill;
        }
     
        public function setBill($bill) {
            $this->bill = $bill;
        }

    }

?>