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
        include './views/session-access.html.php';
        include './views/nav_loggedIn.php';
        include './autoload.php';
        $util = new Util();
        $accounts = new Accounts();
        //$userInfo = $accounts->getUserInfo()
     
        ?>   
        <h1>Admin Page</h1>
        
        <?php 
        $user_id = $_SESSION['user_id'];
        echo "User ID: ".$user_id;
        
        
        
        ?>
        
      
        
    </body>
</html>
