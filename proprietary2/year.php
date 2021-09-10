<?php
require('connection.php'); 
  error_reporting(0);  
   if($_SERVER['REQUEST_METHOD']=="POST")
   {
     $year_from=$_POST['year_from'];
$year_to=$_POST['year_to'];

     $sql1="INSERT INTO `year`(`year_from`,'year_to') VALUES (`$year_from`,'$year_to')";
     $result1=mysql_query($sql1);
      if ($result1) {
      $logerr="Year Added Successfully";
     }

    }
?>
<html>
    <body bgcolor="#FFEBCD">
        <center>
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	  <h1 align="center">YEAR</h1>
        <link rel="stylesheet" type="text/css" href="">
        <div class="div1">
            <table> 
                	
                
				<tr><td><h3>From:</h3></td><td><input type="text" name="year_from"></td><br><br></tr>
                <tr><td><h3>To:</h3></td><td><input type="text" name="year_to"></td><br><br></tr>
            </table>
                <center><input type="submit" value="SAVE">
                   
               <input type="reset" value="RETURN"></center>
           <span style="color:red"><center><h3> <?php echo $logerr;?></h3></center></span>
        </div>
        



         </center>
      </form> 
    </body>
</html>
