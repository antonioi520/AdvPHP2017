<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./css/css/bootstrap.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="./css/css/bootstrap-theme.min.css">
    </head>
    <body>
        <?php
        
        include './models/dbconnect.php';
        include './models/addressCRUD.php';
        
        $addresses = readALLAddress();
        include './templates/nav.php';
        include './templates/view-address.html.php';
        
        

        
        ?>
    </body>
</html>
