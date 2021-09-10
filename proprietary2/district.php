<?php
require('connection.php');
error_reporting(0);

        if($_SERVER['REQUEST_METHOD']=="POST")
        {
           $dist_name=$_POST['dist_name'];
           
             $sql1="INSERT INTO dist(dist_name) VALUES ('$dist_name')";
           $result1=mysql_query($sql1);
           if($result1)
           {
            $logerr="District Added Successfully";
           } 
           
           
        }

       

?>
<html>
    <body bgcolor="#FFEBCD">
        <center>
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	  <h1 align="center">DISTRICT</h1>
        <link rel="stylesheet" type="text/css" href="">
        <div class="div1">
            <table> 
                	
               
				<tr><td><h3>District:</h3></td><td><input type="text" name="dist_name"></td><br><br></tr>
                
            </table>
                <center><input type="submit" value="SAVE">
                   
               <input type="reset" value="RETURN"></center>
         <span style="color:red"><center><h3> <?php echo $logerr;?></h3></center></span> 
        </div>
        



         </center>
      </form> 
    </body>
</html>