<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>HNG INTERN TASK</title>
    </head>
    <body>
        <?php
            $connect=mysqli_connect('localhost','root','Jesus','hng');
	
//check connection
 if(mysqli_connect_errno($connect))
 {
	echo 'Failed to connect to database: '.mysqli_connect_error();
}
else
	//echo 'Connected Successfully!!';
        $result=mysqli_query($connect,"select * from employees");

           

              
        ?>
        
        <h1>Employees</h1>
	<table width="500" cellpadding=5celspacing=5 border=1>
	<tr>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Department</th>
	<th>Email</th>
	</tr>
	<?php while($row=mysqli_fetch_array($result)):?>
	<tr>
	<td><?php echo $row['first_name'];?></td>
	<td><?php echo $row['last_name'];?></td>
	<td><?php echo $row['department'];?></td>
	<td><?php echo $row['email'];?></td>
	</tr>
	<?php endwhile;?> 
	</table>
        
        
        
        
        
    </body>
</html>
