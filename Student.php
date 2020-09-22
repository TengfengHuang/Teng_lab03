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
        echo 'There is lab03';
        
        function __construct() { 
            $this->surname = ''; 
            $this->first_name = ''; 
            $this->emails = array(); 
            $this->grades = array(); 
        }
        
        function add_email($which,$address) { 
            $this->emails[$which] = $address; 
        }
        function add_grade($grade) { 
            $this->grades[] = $grade; 
        }
        ?>
    </body>
</html>
