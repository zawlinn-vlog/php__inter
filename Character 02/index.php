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
            private $speed;

            public function __construct($ary){
                $this->ary = $ary;
            }

            public function getData(){
               $this->printAry($this->ary);
            }

            public function runningMan($speed){

                $this-> speed = $speed;
        
            }
        
            public function beatingMan(){}


            public function runningCar(){
        
            }
        
            public function CrashingCar(){}


            public function getSpeedHuman(){
                echo "<p class='text-primary'>A People can run $this->speed Mile <sup>per</sup> hours. </p> <br/>";
            }

            private function printAry($arr){
                echo "<pre>" . print_r($arr, true) . "</pre>";
            }

        }


        $person = array('Laptop', 'Phone', 'Car');


        $obj = new Game($person);

        $obj->getData();

        $obj->runningMan(2);

        $obj->getSpeedHuman();

    ?>

</div>

<?php
    include_once "./assets/view/footer.php";
?>