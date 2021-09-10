<?php
require('connection.php'); 
  error_reporting(0);  
  if($_SERVER['REQUEST_METHOD']=="POST"){

$vill_name=$_POST['vill_name'];
$circle_id=$_POST['circle_id'];

 $sql1="INSERT INTO `vp`(`vill_name`, `circle_id`) VALUES ('$vill_name',$circle_id)";
 $result1=mysql_query($sql1);

 if($result1)
           {
            $logerr="Village Panchayat Added Successfully";
           } 
    }

?>
<html>
    <body bgcolor="#FFEBCD">
        <center>
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	  <h1 align="center">VILLAGE PANCHAYAT</h1>
        <link rel="stylesheet" type="text/css" href="">
        <div class="div1">
            <table> 
                	
                
				<tr><td><h3>Village Panchayat:</h3></td><td><input type="text" name="vill_name"></td><br><br></tr>
				<tr>
                         <td><h3>ZP Circle:</h3></td> <td><select name="circle_id"</td>
                      <option value="select" selected="select">--select--</option>
                  <?php $sqls = mysql_query("SELECT * FROM `circle`") or die(mysql_error()); 
                      while ($row = mysql_fetch_array($sqls)) {?>
                            <option value="<?php echo $row['circle_id']?>"><?php echo $row['circle_name']?></option>
                        
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