<?php

include_once "./assets/view/header.php";


require_once "./assets/modal/person.php";
require_once "./assets/modal/vehical.php";

?>

<div class="container">
    <h3 class="text-primary">How to Create a Class &mdash;</h3>

    <?php

    /*

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
 */


 /*

    class Main{
        private $age = 28;
        private static $username = "zawlinn.info";
        private static $count = 1;

        public function counting(){
            return "<p class='text-primary'>Your count is - " . self::$count++ . "</p>";
        }

        public static function getUsername(){
            return "<p class='text-success'> Your username is " . self::$username . "</p>";
        }

        public static function getter(){

            $this->counting();
        }

    }



    $obj = new Main();

    // $obj::getter();

    echo $obj->counting();
    echo $obj->counting();
    echo $obj->counting();
    echo $obj->counting();

    

    echo $obj::getUsername();
 

    echo "<hr/>";

    $obj2 = new Main();
        echo $obj2-> counting();
        echo $obj2-> counting();
        echo $obj2-> counting();
        echo $obj2-> counting();
*/


class Main{
    private const DB_HOST = 'localhost';
    private const DB_NAME = 'myblog';
    private const DB_USER = 'root';
    private const DB_PASS = '';


    public static function dbconnect(){
        return self::DB_HOST . "<br/>" . self::DB_NAME . "<br/>" . self::DB_USER . "<br/>" . self::DB_PASS;
    }

    public function getHost(){
        return static::DB_HOST;
    }

}





class Second extends Main{

    public const DB_HOST = '127.0.0.1';
    
}


echo "<p class='text-danger'>Your Host is &mdash; " . Second::DB_HOST . "</p>";








$obj = new Main();

echo $obj::dbconnect();



$sec = new Second();

echo $sec->getHost();

    
    ?>

</div>

<?php
    include_once "./assets/view/footer.php";
?>