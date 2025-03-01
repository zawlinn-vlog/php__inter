[![php](https://img.shields.io/badge/PHP-000?style=for-the-badge—=ko-fi—=white)](#)

> I'm Zaw Linn Tun a Frontend Web Developer on [Zaw Linn - Vlog](https://www.github.com/zawlinn-vlog). :heart:

<!-- #### PROJECT SIMPLE &mdash; -->

<!-- ![PROJECT_IMG](./assets/img/sample.png) -->

<br/>

### How to create Class (OOP) &mdash;

PHP Access Modifier &mdash;

| #   | Access Modifiers | Description                                      |
| --- | ---------------- | ------------------------------------------------ |
| 1   | Private          | Anyone can Access                                |
| 2   | Public           | Only Access inside class - For Encapsultaion     |
| 3   | Protect          | Only Access by Member Class (Extended/ SubClass) |

<hr>
<br/>

```php
     class Car {

            var $vehical = "Toyota";

            public function getSpeed($speed=800){
                echo "This " . $this->vehical . " $speed miles per hour." . "<br/>";
            }

            private $modal = "Hiace";

            public function changeModel($mdl){
                 $this->modal = $mdl;
            }

            public function getModal(){
                return $this->modal;
            }
        }


        $obj = new Car;

        echo "This vehical name is " . $obj->vehical . "<br/>";

        $obj->getSpeed() . "<br/>";

        // $obj->changeModel('Caldina') ;

        echo "This vehical name is " . $obj->getModal() . "<br/>";

```

### Constructor Method &mdash;

- Construct is magic method
- Name constructor with tow underscore and `construct` e.g \_\_contruct
- Constructor can access Argument

### Destructor Method &mdash;

- Destructor is magic method
- Name destructor with two underscore and `destruct` e.g \_\_destruct
- Destructor can't access Argument

### HOW TO USE TRAIT &mdash;

```php
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
```

### Array to Object &mdash;

```php
        $ary = ['name' => 'Zaw Lin', 'age'=> 28, 'dob' => '12-2-1997', 'graduate'=> true];


        $aryobj = (object) $ary;


        errchk($aryobj);

        echo $aryobj -> name;

        echo "<br/>";

        echo $aryobj -> age;


        function errchk($obj){

            echo "<pre>" . print_r($obj, true) . "<br/>";
        }
```

#### Constructor Override &mdash;

```php
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
```

### Magic Methods &mdash;

| #   | Methods         | Description                                              |
| --- | --------------- | -------------------------------------------------------- |
| 1   | \_\_construct   | Auto Invoke the object is initiate                       |
| 2   | \_\_destruct    | Auto Invoke all of the class work is done                |
| 3   | \_\_get         | show error when you call undefined properties            |
| 4   | \_\_set         | show error when you set to value to undefined properties |
| 5   | \_\_isset($var) | show if a properties is set or not                       |
| 6   | \_\_unset($var) | show if a properties is unset or not                     |
| 7   | \_\_call        | Show msg if when you call a fun is exist nor not         |
| 8   | \_\_callStatic  | Show msg if when you call a static fun is exist nor not  |
| 9   | \_\_sleep       | auto invoke when serialize to an object                  |
| 10  | \_\_wakeup      | auto invoke when unserialize to an object                |
| 11  | \_\_toString    | auto invoke when you call an objct as a string           |
| 12  | \_\_invoke      | auto invoke when you call an objct as a method           |

<hr/>
<br/>

#### \_\_get() && \_\_set() Methods &mdash;

```php

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


```

### \_\_isset vs \_\_unset Methods &mdash;

```php

    class Main{

         public function __isset($el){
            echo "There is no set properties name with " . $el . "<br/>";
        }


        public function __unset($el){
            echo "There is no unset properties name with " . $el . "<br/>";
        }

    }


    $obj = new Main();

    isset($obj-> name);
    unset($obj-> graduate);

```

### \_\_call vs \_\_callStatic methods &mdash;

- These methods must have 2 arguments one for method name and one for argument array.

```php

    class Main{

         public function __call($mthd, $arg){
            echo "There is no set properties name with " . $mthd . "<br/>";

            echo $this->errchk($arg)
        }


        public static function __callStatic($mthd, $arg){
            echo "There is no unset properties name with " . $mthd . "<br/>";

            errchk($arg);
        }

        private function errchk($ary){
            echo "<pre>" . print_r($ary, true) . "</pre>";
        }

    }


    $obj = new Main();

    $obj-> getName('Aung Aung', 'Maung Kyaw');
    $obj::goHome("From Yangon", "to Mandalay");

```

### Serialize vs Unserialize &mdash;

```php

    $ary = array('firstName'=>'Zaw Linn', 'lastName' => 'Tun', 'age'=> 28, 'graduate'=> true);

    $str = serialize($ary);

    echo $str;

    $toAry = unserialize($str);

    var_dump($toAry);

    class Main{

       public function __sleep(){
            echo "Your are creating obj to string.";
            return [];
       }

       public function __wakeup(){
            echo "Your are creating string to array back.";
       }

   }


   $obj = new Main();

   $str = serialize($obj);

   unserialize($str);


```

### \_\_toString vs \_\_invoke Methods &mdash;

```php
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
```

<br>

<!-- ![Screenshot of Project](./s1.png) -->

What I use packages are &mdash;

[![My Skills](https://skillicons.dev/icons?i=mysql,npm,git,github,vscode&perline=3)](https://skillicons.dev)

<br>

[![PHP PREPROCESSOR: Introduction](https://img.shields.io/badge/PHP_PREPROCESSOR_—-000?style=for-the-badge—=ko-fi—=white)](#)

📫 Reach me out!

[![Facebook Badge](https://img.shields.io/badge/-@zawlinn_vlog-1ca0f1?style=flat&labelColor=1ca0f1&logo=facebook&logoColor=white&link=https://faebook.com/zawlinn_profile)](https://facebook.com/zawlinn.vlog)
[![youtube Badge](https://img.shields.io/badge/-zawlinn_vlog-c0392b?style=flat&labelColor=c0392b&logo=youtube&logoColor=white)](https://youtube.com/@zawlinn-vlog)
[![Gamil Badge](https://img.shields.io/badge/-zawlinn.profile-c0392b?style=flat&labelColor=c0392b&logo=gmail&logoColor=white)](mailto:zawlinn.profile@gmail.com)

<!-- TODO: Add last video link -->

<details>
    <summary>
        My Portfolio
    </summary>
    <br/>

- :earth_asia: I’m currently working at @Mae Sot Market as a sale staff
- :computer: Most used line of code git commit -m "Initial Commit"
- :brain: I’m looking for help with Outstanding Video ideas.
- :mailbox_with_mail: How to reach me: zawlinn.profile@gmail.com.
- :heart: In a relationship with React
</details>
