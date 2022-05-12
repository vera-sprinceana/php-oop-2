<?php

include __DIR__ . '/../classi/sottoclassi/otherProducts.php';
include __DIR__ . '/user.php';
    class Products{
        public $img;
        public $brand;
        public $type;
        public $size;
        public $price;

        //function construct
        public function __construct($_img, $_brand, $_type, $_size, $_price){
            $this->setImg($_img);
            $this-> setBrand($_brand);
            $this-> setType($_type);
            $this-> setSize($_size);
            $this-> setPrice($_price);
        }
        //setter img
        public function setImg($_img){
            $this->img =$_img;
            return $this;
        }
        //getter img
        public function getImg($_img){
            return $this->img;
        }
        //setter brand
        public function setBrand($_brand){
            $this->brand =$_brand;
            return $this;
        }
        //getter brand
        public function getBrand($_brand){
            return $this->brand;
        }
        //setter type
        public function setType($_type){
            $this->type =$_type;
            return $this;
        }
        //getter type
        public function getType($_type){
            return $this->type;
        }

        //setter size
        public function setSize($_size){
            $this->size =$_size;
            return $this;
        }
        //getter size
        public function getSize($_size){
            return $this->size;
        }
        //setter price
        public function setPrice($_price){
            $this->price =$_price;
            return $this;
        }
        //getter price
        public function getPrice($_price){
            return $this->price;
        }   
    };
?>
