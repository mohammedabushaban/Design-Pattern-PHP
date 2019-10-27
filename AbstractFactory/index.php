<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        spl_autoload_register(function($className){
            include_once $className . '.php';
        });

         $aCourse1 = Course::getaCourse();
        $aCourse1->setaDegree(new BscDegree());
        $aCourse1->view("SW Engineering 2", "Introduces design patterns ...","Abdelkareem Alashqar<br>");
        echo "<br>";
        $aCourse2 = Course::getaCourse();
         $aCourse2->setaDegree(new MscDegree());
         $aCourse2->view("SW Engineering 2", "Introduces design patterns ...","Ahmad Maher<br>");
           echo "<br>";
          $aCourse3 = Course::getaCourse();
         $aCourse3->setaDegree(new PhdDegree());
         $aCourse3->view("Software Security", "Introduces main Concepts of ...","Huda Naser<br>");

        ?>
    </body>
</html>


