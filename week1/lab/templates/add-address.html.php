<!-- Add Address Form -->
<div class="container">
    <h1>Add Address</h1>
    <br />
    <form action="#" method="post">   
       <div class="form-group">
           <label class="col-lg-2 control-label">Full Name:</label> 
           <div class="col-lg-10">
           <input  class="form-control" name="fullname" value="<?php echo $fullname; ?>" /> <br />
           </div>
       </div>
      
       <div class="form-group"> 
           <label class="col-lg-2 control-label">Email:</label>
           <div class="col-lg-10">
           <input class="form-control" name="email" value="<?php echo $email; ?>" /> <br />
           </div>
       </div>
       
       <div class="form-group"> 
           <label class="col-lg-2 control-label">Address Line 1:</label>
           <div class="col-lg-10">
           <input class="form-control" name="addressline1" value="<?php echo $addressline1; ?>" /> <br />
           </div>
       </div>
       
       <div class="form-group">
           <label class="col-lg-2 control-label">City:</label>
           <div class="col-lg-10">
           <input class="form-control" name="city" value="<?php echo $city; ?>" /> <br />
           </div>
       </div>
        
       <div class="form-group">
           <label class="col-lg-2 control-label">State:</label>
           <div class="col-lg-10">
            <select class="form-control" name="state">
                 <?php foreach ($states as $key => $value): ?> 
                     <option value="<?php echo $key; ?>" <?php if ( $state == $key ): ?> selected="selected" <?php endif; ?>><?php echo $value; ?></option>
                 <?php endforeach; ?>
            </select><br/>
           </div>
       </div>
           
       <div class="form-group">    
           <label class="col-lg-2 control-label">Zip:</label>
           <div class="col-lg-10">
           <input class="form-control" name="zip" value="<?php echo $zip; ?>" /> <br />
           </div>
       </div>
           
       <div class="form-group">
           <label class="col-lg-2 control-label">Birthday:</label>
           <div class="col-lg-10">
           <input class="form-control" name="birthday" type="date" value="<?php echo $birthday; ?>" /> <br />
           </div>
       </div>
           
       <div class="form-group">
           <input type="submit" value="Submit" class="btn btn-primary" />
       </div>
       
    </form>
</div>