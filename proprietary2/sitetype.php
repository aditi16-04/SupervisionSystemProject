<?php
require('connection.php'); 
  error_reporting(0);  
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
            $sitedes=$_POST['sitedes'];
            $sql1="INSERT INTO `site_type`(`sitedes`) VALUES ('$sitedes')";
            $result1=mysql_query($sql1);
            if ($result1) {
               $logerr="Site Tyep Added Successfully";
            }
        }
   ?>
<html>
    <body bgcolor="#FFEBCD">
        <center>
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	  <h1 align="center">SITETYPE</h1>
        <link rel="stylesheet" type="text/css" href="">
        <div class="div1">
            <table> 
                	
               
				<tr><td><h3>Site Design:</h3></td><td><input type="text" name="sitedes"></td><br><br></tr>
                
            </table>
                <center><input type="submit" value="SAVE">
                   
               <input type="reset" value="RETURN"></center>
         <span style="color:red"><center><h3> <?php echo $logerr;?></h3></center></span> 
        </div>
        



         </center>
      </form> 
    </body>
</html>



