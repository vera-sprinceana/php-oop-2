<?php
include __DIR__ . '/../classi/user.php';
    class CreditCard extends User{
        use Position;
        public $TypeOfBank;
        public $number;
        public $expirationMonth;
        public $expirationYear;
        public $cvv;

        public function __construct($_name,$_surname, $_TypeOfBank, $_number, $_expirationMonth, $_expirationYear, $_cvv) {
            parent::__construct($_name,$_surname);

        }
        //TYPE OF BANK
        public function setTypeOfBank($_TypeOfBank) {
            $this->TypeOfBank = $_TypeOfBank;
            return $this;
        }
        public function getTypeOfBank($_TypeOfBank) {
            return $this->TypeOfBank;
        }
        //NUMBER CARD
        public function setNumber($_number) {
            $this->number = $_number;
            return $this;
        }
        public function getNumber($_number) {
            return $this->number;
        }
        //SCADENZA MESE
        public function setExpirationMonth($_expirationMonth) {
            $this->expirationMonth = $_expirationMonth;
            return $this;
        }
        public function getExpirationMonth($_expirationMonth) {
            return $this->expirationMonth;
        }
        //SCADENZA ANNO
        public function setExpirationYear($_expirationYear) {
            $this->expirationYear = $_expirationYear;
            return $this;
        }
        public function getExpirationYear($_expirationYear) {
            return $this->expirationYear;
        }
        //CVV
        public function setCvv($_cvv) {
            $this->cvv = $_cvv;
            return $this;
        }
        public function getCvv($_cvv) {
            return $this->cvv;
        }

        public function setDataScadenza($_number){
            if(is_int($_number)){
               return $this->number;
              
            }else{
                 throw new Exception('Invalid card number'); 
            }
            
            
        }
    }
    $ippo = new CreditCard("Filippo", "Bianchi", "UBI", "023620", 09, 2022, 201);
    echo $ippo->number;
?>