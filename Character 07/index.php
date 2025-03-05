
<?php

include_once "./assets/view/header.php";


require_once "./vendor/autoload.php";

use assets\App\Auth\Auth;
use assets\App\Post;
use assets\App\Members;
use assets\App\Vehical;

?>

<div class="container">
    <h3 class="text-primary">How to Create a Class &mdash;</h3>


    <?php

        class Main{

            public function __construct(){

               $auth = new Auth('Zaw Linn', 'Tun');

            //    var_dump($auth);

               $post = new Post($auth, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');

               echo $post-> getPost();
                
               new Members();

               new Vehical();

            }

        }

        new Main();


    ?>
</div>

<?php

include_once "./assets/view/footer.php";
