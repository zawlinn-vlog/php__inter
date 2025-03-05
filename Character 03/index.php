<?php

include_once "./assets/view/header.php";

require_once "./assets/controller/control.php";


?>

<div class="container">
    <h3 class="text-primary">How to Create a Class &mdash;</h3>

    <?php

    function add ($arg1, $arg2, $callback){

        $sum = $arg1 + $arg2;
        $callback($sum);

    }

    $res = function ($arg){
        echo "Total Result is &mdash; " .$arg ;
    };

    add(20, 30, $res);

    // clouser fun

    $num = 50;


    $res2 = function() use ($num){
        echo "The value of Number is &mdash; " . $num;
    };

    $res2();

    $a = 100;

    function getValue(&$num){
        $num = 200;
        echo "The value of Number is &mdash; " . $num;

    }

    echo "<hr/>";

    echo $a;

    echo "<hr/>";

    getValue($a);

    echo "<hr/>";

    echo $a;

    echo "<br/>";


    // variadic

    $i = 0;
    $j = 0;


    function varia(...$arr){

        // $arr = $arr ?? array();

        var_dump($arr);

      

        global $i, $j;

        while($i < count($arr)){

            echo "This is value of index ".++$j." &mdash; ".$arr[$i] . "<br/>";

            $i++;
        }
    };

    varia('father' ,'mother', 'son', 'daughter');
    varia([1,2,4,5]);

    echo "<hr/>";



    class Oneplus {
        
        public $total;

        public function sumAll($arr, $callback){
            for($i = 0; $i < count($arr); $i++){
                $this->total += $arr[$i];
            }

            $this->$callback($this->total);

        }


        public function showRes($res){
            echo "Sum Result of all numbers &mdash; " . $res;
        }


    }



    $one = new Oneplus();


    $one->sumAll([2200, 4000, 1231, 453,500], 'showRes');

    echo "<br/>";

    // error_reporting(0);

    try{
        if(fopen('test.txt', 'r')) echo "Success";
        else throw new Exception('We got Error');
    }catch(Exception $error){
        echo $error->getMessage();
    }

    echo "<hr/>";

    // require_once "./assets/modal/Person.php";
    

    class Emp{

        public function __construct(){

            Control::load('person');

            $per = new assets\modal\Person('Zaw Linn');

            echo "My name is &mdash; " .  $per->getUsername();
        }


    }


$getD = new Emp();

    



    ?>


</div>

<?php
    include_once "./assets/view/footer.php";
?>