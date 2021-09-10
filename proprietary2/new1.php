<?php
require('connection.php'); 
  error_reporting(0);  
   if($_SERVER['REQUEST_METHOD']=="POST")
   {
     $date_time=$_POST['date_time'];
     $longitude=$_POST['longitude'];
     $latitude=$_POST['latitude'];
     $remark1=$_POST['remark1'];
     $image_photo=$_POST['image_photo'];
     $visitor_fname=$_POST['visitor_id'];
     $sql1="INSERT INTO `work_trans`(date_time,longitude,latitude,remark1,image_photo,visitor_id) VALUES ('$date_time','$longitude','$latitude','$remark1','$image_photo','$visitor_fname')";
     
	 $result1=mysql_query($sql1)or die(mysql_error());
     if ($result1) {
      $logerr="Work Transaction Added Successfully";
     }
    }
?>
<html>
    <body bgcolor="#FFEBCD">
        <center>
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	  <h1 align="center">WORK TRANSACTION</h1>
        <link rel="stylesheet" type="text/css" href="">
        <div class="div1">
            <table> 
                	
                              
				
                               <tr><td><h3>Date-Time:</h3></td><td><input type="text" name="date_time"></td></tr> 				
                                <tr><td><h3>Longitude:</h3></td><td><input type="text" name="longitude"></td></tr>
								<tr><td><h3>Latitude:</h3></td><td><input type="text" name="latitude"></td></tr>
                               <tr><td><h3>Remark:</h3></td><td><input type="text" name="remark1"></td></tr>
 
                              
                                <tr>
                      <td><h3>Image:</h3></td>
                        
                        <td><input type="file" name="file"></textarea></td>
				
    <button>Upload</button>
	  </tr>			 
				 <tr>
                         <td><h3>Engineer:</h3></td> <td><select name="visitor_id"</td>
                      <option value="select" selected="select">--select--</option>
                   <?php $sqls = mysql_query("SELECT * FROM `visitor`") or die(mysql_error()); 
                      while ($row = mysql_fetch_array($sqls)) {?>
                            <option value="<?php echo $row['visitor_id']?>"><?php echo $row['visitor_fname']?></option>
                        
                <?php       } 
                    ?>
				  
                  </select>
                 </tr>

            </table>
                <center><input type="submit" value="SAVE">
                   
               <input type="reset" value="RETURN"></center>
         <span style="color:red"><center><h3> <?php echo $logerr;?></h3></center></span>
        </div>
        



         </center>
      </form> 
    </body>
</html>