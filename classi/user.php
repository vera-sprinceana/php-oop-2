<?php 
//include __DIR__ . '/../classi/sottoclassi/creditCard.php';
include __DIR__ . '/../traits.php';
class User{
    
    use Position;
    public $registered;
    public $sconto;
    public function __construct($_name,$_surname, $_registered){
        $this->setName($_name);
        $this->setSurname($_surname);
        $this->setRegistered($_registered);
    }
    //NAME
    public function setName($_name) {
        $this->name = $_name;
        return $this;
    }
    public function getName($_name) {
        return $this->name;
    }
    //SURNAME
    public function setSurname($_surname) {
        $this->surname = $_surname;
        return $this;
    }
    public function getSurname($_surname) {
        return $this->surname;
    }
    //REGISTERED USERS
    public function setRegistered($_registered) {
        $this->registered = $_registered;
        return $this;
        
    }
    public function getRegistered() {
        return $this->registered;
       
    }

    public function setSconto(){
      $this -> sconto=20;
    }
    public function getSconto(){
         return $this->sconto;

    }
    public function setAddSconto($_registered ){
        if($_registered == "utente registrato"){
             $this -> sconto=20;
        }else{
            $this -> sconto=0;
        }
       
    }
   
}


?>