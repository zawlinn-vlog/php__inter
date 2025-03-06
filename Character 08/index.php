<?php

use assets\app\control\Adl;

require_once "./vendor/autoload.php";

class Main{

    public function __construct(){

        $db = new Adl();

        $db-> getsingledata(2);

        // $db-> insertsingledata('saram', 'Havard@317');


        // $db-> insertmulti();

        $db-> singledel(3);

       
    }



}

$main = new Main();




include_once "./assets/view/header.php";
include_once "./assets/view/navbar.php";
// include_once "./assets/view/carousel.php";
?>

<div class="container py-5">

        <!-- <div class="row gy-4 justify-content-center justify-content-md-start">
            <div class="col-9 col-xl-3 col-lg-4 col-md-6 col-sm-8">
                <div class="card">
                    <img src="https://placehold.co/100" alt="" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title">HTML</h4>
                        <p class="card-txt">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis totam quasi quos fugiat omnis dicta ullam numquam, voluptas possimus exercitationem </p>
                        
                        <div class="d-grid">
                            <button class="btn btn-primary">Detail</button>
                        </div>
                    </div>
                </div>
            </div>            
        </div> -->
    
</div>





<?php

include_once "./assets/view/modal.php";

include_once "./assets/view/footer.php";

?>




