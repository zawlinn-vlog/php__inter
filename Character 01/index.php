<?php

include_once "./assets/view/header.php";

?>

<div class="container">
    <h3 class="text-primary">How to Create a Class &mdash;</h3>

    <?php

    /*

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
            public function friendCount(){
                echo "I am friend count method! and I am ". $this->name;
            }
        }


        class Goldmember extends Member{

            public $name = "Zaw Linn"; // override

        }

        class myTest extends Member{

        }




        $member = new Goldmember();

        echo $member-> name;

        echo "<br/>";

        $member -> friendCount();




        trait Student{
            public $school = 'BESH 3';
            public $city = 'Yangon';

            public function shinfo(){
                echo $this-> school . " is in ". $this->city . "<br/>";
            }
        }


        trait Grade{
            public $grade = 12;
            public $classified = 'girl';

            public function stdInfo(){
                echo "It is only school for $this->classified and you can attend grade $this->grade";
            }
        }

        class Person {

            use Student;
            use Grade;

        } 


        $objstd = new Person();

        echo "<br/>";

        echo "School name is &mdash; " . $objstd -> school;
        echo "<br/>";
        echo $objstd -> grade;
        echo "<br/>";
        echo $objstd -> city;
        echo "<br/>";

        $objstd -> shinfo();

        // $objstd ->info();
        $objstd ->stdInfo();

        
        $ary = ['name' => 'Zaw Lin', 'age'=> 28, 'dob' => '12-2-1997', 'graduate'=> true];


        $aryobj = (object) $ary;


        errchk($aryobj);

        echo $aryobj -> name;
        echo "<br/>";
        echo $aryobj -> age;

        

        


    */

    function errchk($obj){

        echo "<pre>" . print_r($obj, true) . "<br/>";
    }

    /*
    class Vehical{

        public function __construct(){
            echo "This is main constructor." . "<br/>";
        }

    }


    class Car extends Vehical{

        public function __construct(){

            parent:: __construct();

            echo "This is sub constructor." . "<br/>";
        }
    }


    $obj = new Car();

    */


    class Vehical{

        public function __get($el){
            echo "You are pull out <b> $el </b> variable." . "<br/>";
        }

        public function __set($el, $mtd){

            echo "Your are set variable <b> $el </b> to value of <b> $mtd </b>. <br/>";
        }

    }


    $obj = new Vehical();

    echo $obj-> brand;

    $obj->productYear = 1991;
    




    ?>

</div>

<?php
    include_once "./assets/view/footer.php";
?>