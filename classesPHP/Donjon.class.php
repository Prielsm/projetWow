<?php
    class Donjon {
        public $id; 
        public $nom; 
        public $emplacement;
        public $url_image;
        public $arrBossDonjon = [];

        public function rajouterBossDonjon ($arr)
        {
            $this->arrBossDonjon[] = $arr;
        }
        // $arr va se récupérer en faisant boss1 = new BossDonjon(); puis en faisant boss1->arrButinDonjon

        

 
        

    }

    

?> 