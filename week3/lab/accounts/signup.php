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
        //validation would be here
        include './autoload.php';
        
        $util = new Util();
        $accounts = new Accounts();
        
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');

        if ( $util->isPostRequest() ){
            
            if( $accounts->signup($email, $password) ){
                echo "signup worked"; //dont use echos
                $util->redirect("login.php", array("email"=>$email));
            } else{
                echo "did not work";
            }
            
        }
        
        
        include './views/signup.html.php';
        
        ?>
    </body>
</html>
