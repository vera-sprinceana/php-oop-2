
<?php
    class Products{
        public $img;
        public $brand;
        public $type;
        public $size;
        public $price;
        public $review;
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
    class User{
        public $name;
        public $surname;
        public $carta;

        public function __construct($_name,$_surname, $_carta){
            $this->setName($_name);
            $this->setSurname($_surname);
            $this->setCarta($_carta);
        }
        public function setName($_name) {
            $this->name = $_name;
            return $this;
        }
        public function getName($_name) {
            return $this->name;
        }

        public function setSurname($_surname) {
            $this->surname = $_surname;
            return $this;
        }
        public function getSurname($_surname) {
            return $this->surname;
        }

        public function setCarta($_carta) {
            $this->carta = $_carta;
            return $this;
        }
        public function getCarta($_carta) {
            return $this->carta;
        }
    }

    //istanziamo
    $AlmoNature= new Products("https://www.villaggionatura.com/shop/5359-large_default/almo-nature-dog-holistic-extra-smallsmall-puppy-con-pollo-fresco-2-kg.jpg", "Almo-Nature", "Crochette Al Pollo", 1.5, 19.99);
    echo "<img src=". $AlmoNature -> img .  ">";
    echo "<h1>" . $AlmoNature-> brand . "</h1>";
    echo "<h2>" . $AlmoNature-> type . "</h2>";
     echo "<h3>" . $AlmoNature-> size . " KG </h3>";
    echo "<h2>" . $AlmoNature-> price . " € </h2>";

    $AlmoNatureUmido= new Products("https://pharafarmaciapet.it/2121-large_default/almo-nature-gatto-hfc-jelly-sgombro-gr70.jpg", 
    "Almo-Nature", 
    "Umido gusto Sgombro",
     70, 
     1.09);
    echo "<img src=". $AlmoNatureUmido -> img .  ">";
    echo "<h1>" . $AlmoNatureUmido-> brand . "</h1>";
    echo "<h2>" . $AlmoNatureUmido-> type . "</h2>";
    echo "<h3>" . $AlmoNatureUmido-> size . " G </h3>";
    echo "<h2>" . $AlmoNatureUmido-> price . " € </h2>";

    $Hills= new Products("https://images.eprice.it/nobrand/0/Lightbox/150/209244150/science-plan-adult-indoor-hairball-pollo_1_g.jpg", 
    "Hill's", 
    "Hairball Indoor",
     10, 
     130);
    echo "<img src=". $Hills -> img .  ">";
    echo "<h1>" . $Hills-> brand . "</h1>";
    echo "<h2>" . $Hills-> type . "</h2>";
    echo "<h3>" . $Hills-> size . " KG </h3>";
    echo "<h2>" . $Hills-> price . " € </h2>";

    $Nd= new Products("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgqKDcC2LOEsh4-TPnJ7X5GZy-M5BKOnAWQw&usqp=CAU", 
    "N&D", 
    "Grain Free",
     1.5, 
     17);
    echo "<img src=". $Nd -> img .  ">";
    echo "<h1>" . $Nd-> brand . "</h1>";
    echo "<h2>" . $Nd-> type . "</h2>";
    echo "<h3>" . $Nd-> size . " KG </h3>";
    echo "<h2>" . $Nd-> price . " € </h2>";

    $Exclusion= new Products("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOdBGbmzXG6YzBk1LWhCbGYSnTaNLjktUoCg&usqp=CAU", 
    "Exclusion ", 
    "Mediterraneo Monoprotein Formula",
     1.5, 
     13);
    echo "<img src=". $Exclusion -> img .  ">";
    echo "<h1>" . $Exclusion-> brand . "</h1>";
    echo "<h2>" . $Exclusion-> type . "</h2>";
    echo "<h3>" . $Exclusion-> size . " KG </h3>";
    echo "<h2>" . $Exclusion-> price . " € </h2>";


    //USER 
    $filippo = new User("Filippo", "Bianchi", "09/20");
    echo "<h2>" . $filippo-> name . "</h2>";
    echo "<h2>" . $filippo-> surname . "</h2>";
    echo "<h2>" . $filippo-> carta . "</h2>";

    $ilaria = new User("Ilaria", "Franchi", "12/22");
    echo "<h2>" . $ilaria-> name . "</h2>";
    echo "<h2>" . $ilaria-> surname . "</h2>";
    echo "<h2>" . $ilaria-> carta . "</h2>";

    $giancarlo = new User("Giancarlo", "Tosi", "05/22");
    echo "<h2>" . $giancarlo-> name . "</h2>";
    echo "<h2>" . $giancarlo-> surname . "</h2>";
    echo "<h2>" . $giancarlo-> carta . "</h2>";
?>