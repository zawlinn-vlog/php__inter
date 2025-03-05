<?php

include_once "./assets/view/header.php";

require_once "./vendor/autoload.php";


?>

<div class="container">
    <h3 class="text-primary">How to Create a Class &mdash;</h3>

    <?php

    class Employee {

        public function __construct(){
            $per1 = new assets\modal\Person('Zawlinn Tun');

            echo "My Name is &mdash; " .  $per1->getUsername();

            $vel1 = new assets\modal\Vehical('Toyota');

            echo "My Car name is &mdash; " . $vel1->getVelname();
        }

    
    }


    new Employee();


    ?>


</div>

<?php
    include_once "./assets/view/footer.php";
?>