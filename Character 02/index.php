<?php

include_once "./assets/view/header.php";


require_once "./assets/modal/person.php";
require_once "./assets/modal/vehical.php";

?>

<div class="container">
    <h3 class="text-primary">How to Create a Class &mdash;</h3>

    <?php

        class Game implements Person, Vehical{

            private $ary;


            public function __construct($ary){
                $this->ary = $ary;
            }


            public function getData(){
               $this->printAry($this->ary);
            }


            public function runningMan($speed){
        
            }
        
            public function beatingMan(){}


            public function runningCar(){
        
            }
        
            public function CrashingCar(){}

            private function printAry($arr){
                echo "<pre>" . print_r($arr, true) . "</pre>";
            }

        }


        $person = array('Laptop', 'Phone', 'Car');


        $obj = new Game($person);

        $obj->getData();





    ?>

</div>

<?php
    include_once "./assets/view/footer.php";
?>