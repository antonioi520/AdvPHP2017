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
        <link rel="stylesheet" href="./css/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="./css/css/bootstrap.css">
    </head>
    <body>
        <?php
        // load classes
        require_once './autoload.php';
        
        
        
        $addresses = new Crud();
        $allAddresses = $addresses->getAllAddresses();
        
        include './templates/nav.php';
        include './templates/view-address.html.php';
        
        
        
        
        ?>
    </body>
</html>
