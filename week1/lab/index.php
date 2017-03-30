<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <!-- Optional theme -->
        <link rel="stylesheet" href="./css/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="./css/css/bootstrap.css">
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
