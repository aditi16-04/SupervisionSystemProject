<?php
require('connection.php'); 
  error_reporting(0);  
if($_SERVER['REQUEST_METHOD']=="POST"){

$dept_name=$_POST['dept_name'];
$sitetype_id=$_POST['sitetype_id'];
$sch_id=$_POST['sch_id'];

$sql1="INSERT INTO `dept`(`dept_name`,`sitetype_id`,`sch_id`) VALUES ('$dept_name',$sitetype_id,$sch_id)";
$result1=mysql_query($sql1);
if ($result1) {
  $logerr="Department Added Successfully";
}
    }
?>
<html>
    <body bgcolor="#FFEBCD">
        <center>
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	  <h1 align="center">DEPARTMENT</h1>
        <link rel="stylesheet" type="text/css" href="">
        <div class="div1">
            <table> 
                	
               
				<tr><td><h3>Department:</h3></td><td><input type="text" name="dept_name"></td><br><br></tr>
				<tr>
                         <td><h3>Site Design:</h3></td> <td><select name="sitetype_id"</td>
                      <option value="select" selected="select">--select--</option>
                  <?php $sqls = mysql_query("SELECT * FROM `site_type`") or die(mysql_error()); 
                      while ($row = mysql_fetch_array($sqls)) {?>
                            <option value="<?php echo $row['sitetype_id']?>"><?php echo $row['sitedes']?></option>
                        
                <?php       } 
                    ?>
				  
                 
                  </select>
                 </tr>

<tr>
                         <td><h3>Scheme:</h3></td> <td><select name="sch_id"</td>
                      <option value="select" selected="select">--select--</option>
                 <?php $sqls = mysql_query("SELECT * FROM `scheme`") or die(mysql_error()); 
                      while ($row = mysql_fetch_array($sqls)) {?>
                            <option value="<?php echo $row['sch_id']?>"><?php echo $row['sch_name']?></option>
                        
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