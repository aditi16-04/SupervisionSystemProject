<?php
require('connection.php'); 
  error_reporting(0);    
   if($_SERVER['REQUEST_METHOD']=="POST")
   {
     $stage_name=$_POST['stage_name'];
     $sql1="INSERT INTO `work_stage`(`stage_name`) VALUES ('$stage_name')";
     $result1=mysql_query($sql1);
     if ($result1) {
      $logerr="Work Stage Added Successfully";
     }

    }
?>
<html>
    <body bgcolor="#FFEBCD">
        <center>
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	  <h1 align="center">WORK STAGE</h1>
        <link rel="stylesheet" type="text/css" href="">
        <div class="div1">
            <table> 
                	
                
				<tr><td><h3>Stage Name:</h3></td><td><input type="text" name="stage_name"></td><br><br></tr>
                
            </table>
                <center><input type="submit" value="SAVE">
                   
               <input type="reset" value="RETURN"></center>
           <span style="color:red"><center><h3> <?php echo $logerr;?></h3></center></span>
        </div>
        



         </center>
      </form> 
    </body>
</html>