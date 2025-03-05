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


/*

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


*/

class Best{

}

class Index{
    public function showResult(int $num): string{ // string, bool, float, int, array

        return $num;


        /*
        if(is_int($num)){
            echo "<p class='text-primary'>Your Data type is <span class='text-danger'>Number</span> </p>";

        }else if(is_string($num)){
            echo "<p class='text-primary'>Your Data type is <span class='text-danger'>String</span> </p>";
        }

        else if(is_bool($num)){
            echo "<p class='text-primary'>Your Data type is <span class='text-danger'>Boolean</span> </p>";
        }
        else if(is_float($num)){
            echo "<p class='text-primary'>Your Data type is <span class='text-danger'>Float</span> </p>";
        }
        else if(is_null($num)){
            echo "<p class='text-primary'>Your Data type is <span class='text-danger'>Null</span> </p>";
        }
        
        else{
            die("<p class='text-danger'> Your Data type must be Number, String, null, Boolean!</span> </p>");
        }*/
    }
}

$b = new Best();

$ind = new Index();

// $ind->showResult($b);
// $ind-> showResult([2,4]);
echo "<br/>";
// $ind-> showResult(['firstName'=> 'Zawlinn', 'lastName'=>'Tun']);
echo $ind-> showResult(300);
// $ind-> showResult(300.55);
// $ind-> showResult('Zaw linn');
// $ind-> showResult(true);
// $ind-> showResult(NULL);



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


/*

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


*/

/*

class Index{
    public function showResult($num){

        if(is_int($num)){
            echo "<p class='text-primary'>Your Data type is <span class='text-danger'>Number</span> </p>";

        }else if(is_string($num)){
            echo "<p class='text-primary'>Your Data type is <span class='text-danger'>String</span> </p>";
        }

        else if(is_bool($num)){
            echo "<p class='text-primary'>Your Data type is <span class='text-danger'>Boolean</span> </p>";
        }
        else if(is_float($num)){
            echo "<p class='text-primary'>Your Data type is <span class='text-danger'>Float</span> </p>";
        }
        else if(is_null($num)){
            echo "<p class='text-primary'>Your Data type is <span class='text-danger'>Null</span> </p>";
        }
        
        else{
            die("<p class='text-danger'> Your Data type must be Number, String, null, Boolean!</span> </p>");
        }
    }
}

$ind = new Index();

// $ind-> showResult([2,4]);
$ind-> showResult(300);
$ind-> showResult(300.55);
$ind-> showResult('Zaw linn');
$ind-> showResult(true);
$ind-> showResult(NULL);


*/

/*

function errPrint($arr){
    echo "<pre class='text-danger h6'>" . print_r($arr, true) . "</pre>";
}




class Driver implements Person{
    private $name, $age, $family, $martrialStatus;

    public function __construct(string $name, int $age, array $family, bool $martrialStatus){

        $this-> name = $name;

        $this-> age = $age;

        $this-> family = $family;

        $this-> martrialStatus = $martrialStatus;

    }

    public function getname():string{
        return $this-> name;
    }
    public function getage() :int{
        return $this-> age;
    }
    public function getfamily() :array{
        return $this-> family;
    }
    public function getmartrialStatus() :int{
        return $this-> martrialStatus;
    }
   
}


class Car implements Vehical{
    private $name, $productYear, $type, $grade;

    public function __construct(string $name,int $productYear,string $type,string $grade){

        $this->name = $name;
        $this->productYear = $productYear;
        $this->type = $type;
        $this->grade = $grade;

    }

    public function getcarname() :string{
        return $this->name;
    }
    public function getproductYear() :int{
        return $this->productYear;
    }
    public function gettype() :string{
        return $this->type;
    }
    public function getgrade():string{
        return $this->grade;
    }


}

class Rent{
    private $driver, $car;

    public function __construct(Driver $driver, Car $car){
        $this->driver = $driver;
        $this->car = $car;
    }

    public function getdriver(){
        return $this->driver;
    }

    public function getCar(){
        return $this->car;
    }
}

$driver1 = new Driver('Zawlinn', 28, ['father'=>"U Sein Linn", 'mother'=> "Dar Ohnmar"],  false);
$driver2 = new Driver('Saram', 34, ['father'=>"Alduman", 'mother'=> "Iasha"], true);
$car1 = new Car('Alphat', 2008, 'Mini Bus', 'grade G');
$car2 = new Car('Macedes', 2020, 'Luxury', 'grade F');

errPrint($driver1);
errPrint($driver2);
errPrint($car1);
echo $car1->getcarname();
errPrint($car2);

$rent1 = new Rent($driver1, $car1);
$rent2 = new Rent($driver2, $car2);

$rentlist = [$rent1, $rent2];


errPrint($rentlist);
errPrint($rentlist[0]->getCar()->getcarname());
errPrint($rentlist[1]->getCar()->getcarname());
errPrint($rentlist[0]->getDriver());
errPrint($rentlist[0]->getDriver()->getname());
errPrint($rentlist[1]->getDriver());
echo "<h4 class='text-primary'> The Name of Driver 1 is &mdash; " . $rentlist[1]->getDriver()->getname() . ".</h4>";


// echo $rentlist[0]->getCar();



*/

    
?>

</div>

<?php
    include_once "./assets/view/footer.php";
?>