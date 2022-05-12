<?php
    include __DIR__ . "/../index.php";


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
    class RegisteredUsers extends User{
        public $email;
        public $sconto;
        public function __construct($_name,$_surname, $_carta, $_email, $_sconto){
            parent::__construct($_name,$_surname, $_carta);
            $this->setEmail($_email);
            $this->setSconto($_sconto);
        }
        public function setEmail($_email){
            $this->email= $_email;
            return $this;
        }
        public function getEmail($_email){
            return $this-> email;
        }
        public function setSconto($_sconto){
            $this->sconto= $_sconto;
            return $this;
        }
        public function getSconto($_sconto){
            return $this->sconto;
        }
    }
    //PALLINA
    $pallinaPerCane =new otherProducts("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTglch1V7s6b5IM9FiNwtpZAei-DRH2ptAZzw&usqp=CAU",
        "ZooPlus",
        "Pallina",
        "Piccola",
        2.50,
        0.5,
        "per Cani");
        echo "<img src=". $pallinaPerCane -> img .  ">";
        echo "<h1>" . $pallinaPerCane-> brand . "</h1>";
        echo "<h2>" . $pallinaPerCane-> type . "</h2>";
        echo "<h3>" . $pallinaPerCane-> size . " G </h3>";
        echo "<h2>" . $pallinaPerCane-> price . " € </h2>";
        echo "<h2> Da " ." " . $pallinaPerCane-> year . " ".  "anni  in su </h2>";
        echo "<p> Questo gioco è adatto " . $pallinaPerCane-> typeOfAnimal . "</p>";

    //SPAZZOLA
        $spazzola =new otherProducts("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTg_XC3MxHCcUZ_bz_yfCC18E5hIAkj5zTGIg&usqp=CAU",
        "TuttoZoo",
        "Spazzola",
        "Compatta",
        10.50,
        "Tutte le età",
        "per Cani e Gatti");
        echo "<img src=". $spazzola -> img .  ">";
        echo "<h1>" . $spazzola-> brand . "</h1>";
        echo "<h2>" . $spazzola-> type . "</h2>";
        echo "<h3>" . $spazzola-> size . " G </h3>";
        echo "<h2>" . $spazzola-> price . " € </h2>";
        echo "<h2>"  . $spazzola-> year .  "</h2>";
        echo "<p> Questo prodotto è adatto " . $spazzola-> typeOfAnimal . "</p>";
    //TIRAGRAFFI
        $tiragraffi =new otherProducts("https://m.media-amazon.com/images/I/71PQ7m+-OcL._AC_SY450_.jpg",
        "Amazon Brand",
        "Tiragraffi",
        " Altezza 106cm",
        45,
        "Tutte le età",
        "per Gatti");
        echo "<img src=". $tiragraffi -> img .  ">";
        echo "<h1>" . $tiragraffi-> brand . "</h1>";
        echo "<h2>" . $tiragraffi-> type . "</h2>";
        echo "<h3>" . $tiragraffi-> size . " </h3>";
        echo "<h2>" . $tiragraffi-> price . " € </h2>";
        echo "<h2>"  . $tiragraffi-> year .  "</h2>";
        echo "<p> Questo prodotto è adatto " . $tiragraffi-> typeOfAnimal . "</p>";
    //SPAZOLINO
        $setCuraDeiDenti =new otherProducts("https://m.media-amazon.com/images/I/61C-nezDwxL._AC_SY679_.jpg",
        "Vet's Best ",
        "Set cura dei denti",
        "140g",
        12.99,
        "Consogliato per gatti adulti",
        "per Gatti");
        echo "<img src=". $setCuraDeiDenti -> img .  ">";
        echo "<h1>" . $setCuraDeiDenti-> brand . "</h1>";
        echo "<h2>" . $setCuraDeiDenti-> type . "</h2>";
        echo "<h3>" . $setCuraDeiDenti-> size . " </h3>";
        echo "<h2>" . $setCuraDeiDenti-> price . " € </h2>";
        echo "<h2>"  . $setCuraDeiDenti-> year .  "</h2>";
        echo "<p> Questo prodotto è adatto " . $setCuraDeiDenti-> typeOfAnimal . "</p>";

         //LETTIERA
         $lettiera =new otherProducts("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRL_ourOIOLsFgxDnr0qBJmMyWrWLtjKhN6-A&usqp=CAU",
         "Puffy ",
         "Lettiera autopulente",
         "1 KG",
         60,
         "Per tutte le età",
         "per Gatti");
         echo "<img src=". $lettiera -> img .  ">";
         echo "<h1>" . $lettiera-> brand . "</h1>";
         echo "<h2>" . $lettiera-> type . "</h2>";
         echo "<h3>" . $lettiera-> size . " </h3>";
         echo "<h2>" . $lettiera-> price . " € </h2>";
         echo "<h2>"  . $lettiera-> year .  "</h2>";
         echo "<p> Questo prodotto è adatto " . $lettiera-> typeOfAnimal . "</p>";

         //GIOCO
         $topolino =new otherProducts("https://i.ebayimg.com/images/g/GnkAAOSw07xdQsp9/s-l300.jpg",
         "Games For Animals ",
         "Acchiappa topolino",
         "250 G",
         25.70,
         "Per tutte le età",
         "per Gatti");
         echo "<img src=". $topolino -> img .  ">";
         echo "<h1>" . $topolino-> brand . "</h1>";
         echo "<h2>" . $topolino-> type . "</h2>";
         echo "<h3>" . $topolino-> size . " </h3>";
         echo "<h2>" . $topolino-> price . " € </h2>";
         echo "<h2>"  . $topolino-> year .  "</h2>";
         echo "<p> Questo prodotto è adatto " . $topolino-> typeOfAnimal . "</p>";

         //CROCHETTE PER DENTI
         $dentalLife =new otherProducts("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2ZejRWdJMVLb41I86BEvHgHahu2wfJ2EW6Fy6z3UW8z0A94DAfNX7RT7-eP4bqSBFx0k&usqp=CAU",
         "Dental Life ",
         "Igiene orale",
         "40 G",
         7.80,
         "Per tutte le età",
         "per Gatti");
         echo "<img src=". $dentalLife -> img .  ">";
         echo "<h1>" . $dentalLife-> brand . "</h1>";
         echo "<h2>" . $dentalLife-> type . "</h2>";
         echo "<h3>" . $dentalLife-> size . " </h3>";
         echo "<h2>" . $dentalLife-> price . " € </h2>";
         echo "<h2>"  . $dentalLife-> year .  "</h2>";
         echo "<p> Questo prodotto è adatto " . $dentalLife-> typeOfAnimal . "</p>";

          //OSSO PER DENTI
          $osso =new otherProducts("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ705VZSoKqrlIJuDftzYT4wwGwWVqY4kvyDg&usqp=CAU",
            "Best Bon",
            "Igiene orale : ossa da masticare",
            "800 G",
            11,
            "Per tutte le età",
            "per Cani");
            echo "<img src=". $osso -> img .  ">";
            echo "<h1>" . $osso-> brand . "</h1>";
            echo "<h2>" . $osso-> type . "</h2>";
            echo "<h3>" . $osso-> size . " </h3>";
            echo "<h2>" . $osso-> price . " € </h2>";
            echo "<h2>"  . $osso-> year .  "</h2>";
            echo "<p> Questo prodotto è adatto " . $osso-> typeOfAnimal . "</p>";

            //ANTIPULCI
          $antiulciGatto =new otherProducts("https://www.teriaka.it/9025-medium_default/frontline-combo-spoton-g3-pip.jpg",
          "Frontline",
          "Antiparassitario",
          "5 ml x 3",
          17.50,
          "Per tutte le età",
          "per Gatti");
          echo "<img src=". $antiulciGatto -> img .  ">";
          echo "<h1>" . $antiulciGatto-> brand . "</h1>";
          echo "<h2>" . $antiulciGatto-> type . "</h2>";
          echo "<h3>" . $antiulciGatto-> size . " </h3>";
          echo "<h2>" . $antiulciGatto-> price . " € </h2>";
          echo "<h2>"  . $antiulciGatto-> year .  "</h2>";
          echo "<p> Questo prodotto è adatto " . $antiulciGatto-> typeOfAnimal . "</p>";

            //ANTIPULCI CANE
            $antiulciCane =new otherProducts("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNXJTKrwBuR_tH4Huyf9uRp9zq52bTkAlpvA&usqp=CAU",
            "Frontline Combo",
            "Antiparassitario Tri-Act",
            "5 ml x 3",
            18.50,
            "Da 5 a 10 kg",
            "per Cani");
            echo "<img src=". $antiulciCane -> img .  ">";
            echo "<h1>" . $antiulciCane-> brand . "</h1>";
            echo "<h2>" . $antiulciCane-> type . "</h2>";
            echo "<h3>" . $antiulciCane-> size . " </h3>";
            echo "<h2>" . $antiulciCane-> price . " € </h2>";
            echo "<h2>"  . $antiulciCane-> year .  "</h2>";
            echo "<p> Questo prodotto è adatto " . $antiulciCane-> typeOfAnimal . "</p>";

            //ERBA GATTA
            $erbaGatta =new otherProducts("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRs9jlE-sk1v_netPVi-rrVeuK9B9NuIH0I4A&usqp=CAU",
            "Tutto Zoo",
            "Erba gatta in vaso",
            "300 g",
            8.50,
            "Tutte le età",
            "per Gatti");
            echo "<img src=". $erbaGatta -> img .  ">";
            echo "<h1>" . $erbaGatta-> brand . "</h1>";
            echo "<h2>" . $erbaGatta-> type . "</h2>";
            echo "<h3>" . $erbaGatta-> size . " </h3>";
            echo "<h2>" . $erbaGatta-> price . " € </h2>";
            echo "<h2>"  . $erbaGatta-> year .  "</h2>";
            echo "<p> Questo prodotto è adatto " . $erbaGatta-> typeOfAnimal . "</p>";

             //PETTORINA
             $pettorina =new otherProducts("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6qWZvOFJtUlzZU2khcQGeYBuKqhGOshFv2Q&usqp=CAU",
             "Juilius ",
             "Pettorina per cani piccoli",
             "30 g",
             20,
             "1 anno",
             "per Cani");
             echo "<img src=". $pettorina -> img .  ">";
             echo "<h1>" . $pettorina-> brand . "</h1>";
             echo "<h2>" . $pettorina-> type . "</h2>";
             echo "<h3>" . $pettorina-> size . " </h3>";
             echo "<h2>" . $pettorina-> price . " € </h2>";
             echo "<h2>"  . $pettorina-> year .  "</h2>";
             echo "<p> Questo prodotto è adatto " . $pettorina-> typeOfAnimal . "</p>";

             //PETTORINA GATTO
             $pettorinaGatto =new otherProducts("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmctqlArFFvNYQ3Umr742YD2mdfgTymy_VwQ&usqp=CAU",
             "Catty",
             "Pettorina per gatti",
             "10 g",
             15,
             "2 anni",
             "per Gatti");
             echo "<img src=". $pettorinaGatto -> img .  ">";
             echo "<h1>" . $pettorinaGatto-> brand . "</h1>";
             echo "<h2>" . $pettorinaGatto-> type . "</h2>";
             echo "<h3>" . $pettorinaGatto-> size . " </h3>";
             echo "<h2>" . $pettorinaGatto-> price . " € </h2>";
             echo "<h2>"  . $pettorinaGatto-> year .  "</h2>";
             echo "<p> Questo prodotto è adatto " . $pettorinaGatto-> typeOfAnimal . "</p>";

             $lucio= new RegisteredUsers("Lucio", "Zama", "11/22", "lucio@email.com", 20);
             echo "<h2>" . $lucio-> name . " </h2>";
             echo "<h2>" . $lucio-> surname . " </h2>";
             echo "<h2>" . $lucio-> carta . "</h2>";
             echo "<h2>" . $lucio-> email . " </h2>";
             echo "<h2>" . $lucio->sconto . " </h2>";

             $silvia= new RegisteredUsers("Silvia", "Budda", "1/23", "silviao@email.com", 20);
             echo "<h2>" . $silvia-> name . " </h2>";
             echo "<h2>" . $silvia-> surname . " </h2>";
             echo "<h2>" . $silvia-> carta . "</h2>";
             echo "<h2>" . $silvia-> email . " </h2>";
             echo "<h2>" . $silvia->sconto . " </h2>";
?>
