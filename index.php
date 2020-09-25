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
        
        include('Student.php'); 
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
        //Add Your First Student 
        
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
        //Add Your Second Student 
        
        $third = new Student();
        $third->surname = "Tengfeng";
        $third->first_name = "Huang";
        $third->add_email('home', 'GDPT@dongguan.com');
        $third->add_email('work', 'A01160035@bcit.ca');
        $third->add_grade(3);
        $students['A01160035']=$third;
        
        $fourth = new Student();
        $fourth->surname = 'Xing';
        $fourth->first_name = "Huang";
        $fourth->add_email('home', 'GDPT@Set3.com');
        $fourth->add_email('work', 'A01160040@bict.ca');
        $fourth->add_grade(3);
        $students['A01160040']=$fourth;
        
        ksort($students); // one of the many sort functions 
        
        foreach($students as $student) 
            echo $student->toString();  //Back to the Homepage        
        ?>
        
       
    </body>
</html>
