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
        <h1> Students page </h1>
        <?php
            //Create 2 student as an example
            include ('student.php');
            $students = array();
            $first = new Student();
            $first->surname = "Doe";
            $first->first_name = "John";
            $first->add_email('home','john@doe.com');
            $first->add_email('work','jdoe@mcdonalds.com');
            $first->add_grade(65);
            $first->add_grade(75);
            $first->add_grade(55);
            $students['j123'] = $first;

            $second = new Student();
            $second->surname = "Einstein";
            $second->first_name = "Albert";
            $second->add_email('home','albert@braniacs.com');
            $second->add_email('work1','a_einstein@bcit.ca');
            $second->add_email('work2','albert@physics.mit.edu');
            $second->add_grade(95);
            $second->add_grade(80);
            $second->add_grade(50);
            $students['a456'] = $second;
            
            //a new student appears
            $third = new Student();
            $third->surname = "Parry";
            $third->first_name = "Jim";
            $third->add_email('work','jim_parry@bcit.ca ');
            $third->add_grade(85);
            $students['asdf'] = $third;
            
            //sort the collection of students
            ksort($students);

                

            //print out the students
            foreach ($students as $student) {
                echo "\n".$student->toString();
            }
        ?>
    </body>
</html>
