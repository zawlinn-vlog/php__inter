[![php](https://img.shields.io/badge/PHP-000?style=for-the-badge—=ko-fi—=white)](#)

> I'm Zaw Linn Tun a Frontend Web Developer on [Zaw Linn - Vlog](https://www.github.com/zawlinn-vlog). :heart:

<!-- #### PROJECT SIMPLE &mdash; -->

<!-- ![PROJECT_IMG](./assets/img/sample.png) -->

<br/>

### How to create Class (OOP) &mdash;

PHP Access Modifier &mdash;

| Access Modifiers | Description                                      |
| ---------------- | ------------------------------------------------ |
| Private          | Anyone can Access                                |
| Public           | Only Access inside class - For Encapsultaion     |
| Protect          | Only Access by Member Class (Extended/ SubClass) |

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
