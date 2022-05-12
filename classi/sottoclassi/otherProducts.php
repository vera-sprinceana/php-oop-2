<?php 
class otherProducts extends Products{
    public $year;
    public $typeOfAnimal;

     public function __construct($_img, $_brand, $_type, $_size, $_price, $_year, $_typeOfAnimal){
         parent::__construct($_img, $_brand, $_type, $_size, $_price);
         $this  -> setYear($_year);
         $this -> setTypeOfAnimal($_typeOfAnimal);
     }

     public function setYear($_year){
         $this  -> year= $_year;
         return $this;
     }
     public function getYear($_year){
         return $this -> year;
     }
     public function setTypeOfAnimal($_typeOfAnimal){
         $this -> typeOfAnimal= $_typeOfAnimal;
         return $this;
     }
     public function getTypeOfAnimal($_typeOfAnimal){
        return $this -> typeOfAnimal;
          
     }
     
 }

 
?>