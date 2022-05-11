<?php
    include __DIR__ . "/../index.php";


    class otherProducts extends Products{
       public $year;
       public $typeOfAnimal;

        public function __construct($_img, $_brand, $_type, $_size, $_price, $_year, $_typeOfAnimal){
            parent::__construct($_img, $_brand, $_type, $_size, $_price);
            $this  -> year= $_year;
            $this -> typeOfAnimal= $_typeOfAnimal;
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
          $antiulciGatto =new otherProducts("data:image/jpeg;base64,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",
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
?>
