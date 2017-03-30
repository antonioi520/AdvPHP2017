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
        
        
        require_once './models/dbconnect.php';
        require_once './models/util.php';
        require_once './models/addressCRUD.php';
        require_once './models/validation.php';
        
        $fullname = filter_input(INPUT_POST, 'fullname');
        $email = filter_input(INPUT_POST, 'email');
        $addressline1 = filter_input(INPUT_POST, 'addressline1');
        $city = filter_input(INPUT_POST, 'city');
        $state = filter_input(INPUT_POST, 'state');
        $zip = filter_input(INPUT_POST, 'zip');
        $birthday = filter_input(INPUT_POST, 'birthday');
              
        $errors = [];
        $states = getStates();
        
        
        if (isPostRequest())
        {
            //Validate name
            if( empty($fullname) )
            {
                $errors[] = 'Full name is required.';
            }
            
            //Validate email
            if ( filter_var($email, FILTER_VALIDATE_EMAIL) == false )
            {
                $errors[] = 'Email is required.';
            }
            
            //Validate Address line 1
            if( empty($addressline1) )
            {
                $errors[] = 'Address 1 is required.';
            }
            
            //Validate City
            if( empty($city) )
            {
                $errors[] = 'City is required.';
            }
            
            //Validate State
            if( empty($state) )
            {
                $errors[] = 'State is required.';
            }
            
            //Validate Zip
            if ( !isZIPValid($zip) ) 
            {
                $errors[] = 'Sorry ZIP is not valid';
            }
            
            //Validate Date
            if ( !isDateValid($birthday) ) 
            {
                $errors[] = 'Sorry Birthday is not valid';
            }
            
            //If no errors, save to database
            if ( count($errors) === 0 )
            {
                if (createAddress($fullname, $email, $addressline1, $city, $state, $zip, $birthday))
                {
                    $message = 'Address Added';
                    $fullname = '';
                    $email = '';
                    $addressline1 = '';
                    $city = '';
                    $state = '';
                    $zip = '';
                    $birthday = '';
                }
                else
                {
                    $errors[] = 'Could not add to the database';
                }
            }
        }
        
        //Incude templates
        include './templates/nav.php';
        include './templates/errors.html.php';
        include './templates/messages.html.php';
        include './templates/add-address.html.php';
        
        
        
        ?>
    </body>
</html>
