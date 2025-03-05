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


    /*


    class Vehical{
        
        public function __get($el){
            echo "You are pull out <b> $el </b> variable." . "<br/>";
        }

        public function __set($el, $mtd){

            echo "Your are set variable <b> $el </b> to value of <b> $mtd </b>. <br/>";
        }
        

        public function __isset($el){
            echo "There is no set properties name with " . $el . "<br/>";
        }


        public function __unset($el){
            echo "There is no unset properties name with " . $el . "<br/>";
        }


        public function __sleep(){
            echo "Serailize is working.";
            return [];
        }

        public function __wakeup(){
            echo "Unserialize is working.";
        }

        

        public function greeting(){
            echo "Hello, There 🙋🏽‍♂️";
        }

        public function __call($mtd, $val){
            echo "There is no $mtd function that you call.";

            errchk($val);
        }



        public static function __callStatic($mthd, $arg){
            echo "There is no $mthd static function that you are calling.";

            errchk($arg);
        }
        


        public function __toString(){
            return "You are calling Object as a string.";
        }

        public function __invoke(){
            return "You are calling Object as a method.";
        }


    }


    $obj = new Vehical();

    isset($obj->name) ;

    unset($obj-> age) ;

    // echo $obj-> brand;

    // $obj->productYear = 1991;


    echo $obj;

    echo $obj();



    $arr = array('hello' => 'First Meet', 'hi'=> 'Second time', 'hey'=> 'Old Friend');

    errchk($arr);

    $str = serialize($obj); // Object

    // echo $str;

    $bcktoary = unserialize($str);

    // errchk($bcktoary);

    // $obj->goodbye("Jonny", "Helin Killer");


    // $obj::hifive("Earth", "Sun", "Moon", "Universe");

    */


    class Main{

        public function __toString(){
             return "Your are calling obj as a string.";
            
        }
 
        public function __invoke(){
             echo "Your are calling obj as a method.";
        }
 
    }
 
 
    $obj = new Main();
 
    echo $obj;
 
    $obj();
 



//    $ary = array('firstName'=>'Zaw Linn', 'lastName' => 'Tun', 'age'=> 28, 'graduate'=> true);

//     $str = serialize($ary);

//     echo $str;

//     $toAry = unserialize($str);

//     var_dump($toAry);







    


    ?>

</div>

<?php
    include_once "./assets/view/footer.php";
?>