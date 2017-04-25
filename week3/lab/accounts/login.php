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
        <link rel="stylesheet" href="css/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/css/bootstrap.css">
    </head>
    <body>
        <?php
        // put your code here
        session_start();
        include './autoload.php';
        
        $util = new Util();
        $accounts = new Accounts();
        
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        
        if ( $util->isPostRequest() ){
            $loginInfo = $accounts->login($email, $password);
            if ( $loginInfo > 0 ){
                $_SESSION['user_id'] = $loginInfo;
                $util->redirect("admin.php");
            } else {
                echo "please try again";
            }
        }
        include './views/nav.php';
        include './views/login.html.php';
        
        ?>
    </body>
</html>
