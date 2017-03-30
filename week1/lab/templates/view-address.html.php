<!-- View table of saved addresses --> 
<?php if ( is_array($addresses) && count($addresses) > 0 ) : ?>
<div class="container">
<h1>Addresses</h1>
<table class="table table-striped table-hover" >
    <tr>
        <td>Full Name</td>
        <td>Email</td>
        <td>Address Line 1</td>
        <td>City</td>
        <td>State</td>
        <td>Zip</td>
        <td>Date</td>
    </tr>
<?php foreach( $addresses as $row ) : ?>
    <tr>
        <td><?php echo $row['fullname']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['addressline1']; ?></td>
        <td><?php echo $row['city']; ?></td>
        <td><?php echo $row['state']; ?></td>
        <td><?php echo $row['zip']; ?></td>
        <td><?php echo date("F j, Y", strtotime($row['birthday'])); ?></td>
    </tr>
<?php endforeach; ?>
</table>
<?php endif; ?>
</div>