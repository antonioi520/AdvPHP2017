<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <!-- The data encoding type, enctype, MUST be specified as below -->
        <div class="col-md-4"></div>
       
        <form enctype="multipart/form-data" action="models/upload.php" method="POST">
            <!-- MAX_FILE_SIZE must precede the file input field -->
            <!-- <input type="hidden" name="MAX_FILE_SIZE" value="30000" /> -->
            <!-- Name of input element determines name in $_FILES array -->
             <div class="col-md-4">
                 <h2 style="text-align: center;">Upload a file:</h2>
            <input style="padding-left:13%;" class="center-block" name="upfile" type="file" /><br/>            
            <input class="center-block" type="submit" value="Submit" />
            </div>
        </form>
        

        <!-- display imaged
        <img src="uploads/img_30420d1a9afb2bcb60335812569af4435a59ce17.jpg" /> -->
    </body>
</html>