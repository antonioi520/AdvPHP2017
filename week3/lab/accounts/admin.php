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
        $userInfo = $accounts->getUserInfo()
     
        ?>   
        <h1>Admin Page</h1>
        <?php foreach( $userInfo as $row ) : ?>
            <tr>
                <td><?php echo $row['user_id']; ?></td>
                <td><?php echo $row['email']; ?></td>               
            </tr>
        <?php endforeach; ?>
        
      
        
    </body>
</html>
