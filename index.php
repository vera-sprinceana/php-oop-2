//prima classe PRODUCTS
//classi figlie  MANGIME, CUCCE, GIOCHI, ANTIPILCI, SCHAMPOO 


//seconda classe USER 
//classi figlie UTENTE REGISTRATO, UTENTE NON REGISTRATO
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

        
    }

    //istanziamo
    $AlmoNature= new Products("https://www.villaggionatura.com/shop/5359-large_default/almo-nature-dog-holistic-extra-smallsmall-puppy-con-pollo-fresco-2-kg.jpg", "Almo-Nature", "Crochette Al Pollo", 1.5, 19.99);
    echo "<img src=". $AlmoNature -> img .  ">";
    echo "<h1>" . $AlmoNature-> brand . "</h1>";
    echo "<h2>" . $AlmoNature-> type . "</h2>";
     echo "<h3>" . $AlmoNature-> size . " KG </h3>";
    echo "<h2>" . $AlmoNature-> price . " € </h2>";

    $AlmoNatureUmido= new Products("data:image/jpeg;base64,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", 
    "Almo-Nature", 
    "Misto Mare",
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

    $Exclusion= new Products("data:image/jpeg;base64,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", 
    "Exclusion ", 
    "Mediterraneo Monoprotein Formula",
     1.5, 
     13);
    echo "<img src=". $Exclusion -> img .  ">";
    echo "<h1>" . $Exclusion-> brand . "</h1>";
    echo "<h2>" . $Exclusion-> type . "</h2>";
    echo "<h3>" . $Exclusion-> size . " KG </h3>";
    echo "<h2>" . $Exclusion-> price . " € </h2>";
?>