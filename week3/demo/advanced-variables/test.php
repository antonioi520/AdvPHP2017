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
            class Dog
            {
                public $name = 'dog';
                
                public function __construct($name)
                {
                    $this->name = $name;
                }
                
                public function bark()
                {
                    echo $this->name.' is barking <br />';
                }
            }
            $class = 'Dog';
            $dog = new $class('Gabe');
            $varName = 'name';
            $funcName = 'bark';
            
            $dog->$funcName();
            echo $dog->$varName;
        
        ?>
    </body>
</html>
