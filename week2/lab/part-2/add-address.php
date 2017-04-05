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
        
        
        require_once './autoload.php';
        
        $addresses = new Crud();
        $util = new Util();
        $validator = new Validator();
        
        
        $fullname = filter_input(INPUT_POST, 'fullname');
        $email = filter_input(INPUT_POST, 'email');
        $addressline1 = filter_input(INPUT_POST, 'addressline1');
        $city = filter_input(INPUT_POST, 'city');
        $state = filter_input(INPUT_POST, 'state');
        $zip = filter_input(INPUT_POST, 'zip');
        $birthday = filter_input(INPUT_POST, 'birthday');
              
        $errors = [];
        $states = $util->getStates();
        
        
        
        if ($util->isPostRequest())
        {
            //Validate name
            if( empty($fullname) )
            {
                $errors[] = 'Full name is required.';
            }
            
            //Validate email
            if ( $validator->emailIsValid($email) ) 
            {
                //is valid
            } else {
                $errors[] = 'Email is NOT Valid';
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
            if ( $validator->isZIPValid($zip) ) 
            {
                //is valid
            } else {
                $errors[] = 'Zip is NOT Valid';
            }
            
            //Validate Date
            if ( $validator->isDateValid($birthday) ) 
            {
                //is valid
            } else {
                $errors[] = 'Date is NOT Valid';
            }
            
            //If no errors, save to database
            if ( count($errors) === 0 )
            {
                if ($addresses->createAddress($fullname, $email, $addressline1, $city, $state, $zip, $birthday))
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
