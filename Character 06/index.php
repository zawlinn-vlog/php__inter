<?php

include_once "./assets/view/header.php";

require_once "./vendor/autoload.php";

use assets\modal\Circle;
use assets\modal\Square;
use assets\modal\inter\Shape;

?>

<div class="container">
    <h3 class="text-primary">How to Create a Class &mdash;</h3>

    <?php

        class Init {

            public function __construct(){

                $circle = new Circle(80);

                var_dump($circle);

                $square = new Square(30, 50);

                $this-> getprice($circle);


                $this-> getprice($square);
            }

            public function getprice(Shape $circle){
                
                // echo "success";

                $price = $circle-> getArea() * 22;

                echo "Your total amount of whole area is &mdash; " . $price * 22 .  "$ <hr/>"; 
            }
        }


        new Init();

    ?>


</div>

<?php
    include_once "./assets/view/footer.php";
?>