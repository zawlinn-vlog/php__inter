<?php

include_once "./assets/view/header.php";

?>

<div class="container">
    <h3 class="text-primary">How to Create a Class &mdash;</h3>

    <?php

        class Car {

            var $vehical = "Toyota";
            public $t = 0;
            private $modal = "Hiace";

            public function __construct($name){
                // echo "Hello my Friend is " .$name . "<br/>";
                echo "I am constructor and class work is done. <br/>" ;
            }
           
            public function getSpeed($speed=800){
                echo "This " . $this->vehical . " $speed miles per hour." . "<br/>";
            }

            public function changeModel($mdl){
                 $this->modal = $mdl;
            }

            public function getModal(){
                return $this->modal;
            }

            public function loopIt(){
                for($i = 0; $i < 1000; $i++){
                    $this-> t += $i;
                }
            }

            public function __destruct(){
                echo "I am destructor and class work is done and t value is " . $this-> t ;
            }
        }


        $obj = new Car('Zaw Linn');

        echo "This vehical name is " . $obj->vehical . "<br/>";

        $obj->getSpeed() . "<br/>";

        // $obj->changeModel('Caldina') ;

        $obj-> loopIt();

        echo "This vehical name is " . $obj->getModal() . "<br/>"; 


        class Member{

            var $name = "Saram";
            var $age = 30;
            var $subject;
            function friendCount(){
                echo "I am friend count method!";
            }
        }


        class Goldmember extends Member{

        }

        class myTest extends Member{

        }


        $member = new Goldmember();

        echo $member-> name;

        echo "<br/>";

        $member -> friendCount();


    ?>

</div>

<?php
    include_once "./assets/view/footer.php";
?>