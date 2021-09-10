<?php
 require('connection.php'); 
  error_reporting(0);
if($_SERVER['REQUEST_METHOD']=="POST")
{

$circle_name=$_POST['circle_name'];
$tal_id=$_POST['tal_id'];
$sql1="INSERT INTO `circle`(`circle_name`, `tal_id`) VALUES ('$circle_name',$tal_id)";
$result1=mysql_query($sql1);
if ($result1) {
  $logerr="ZP Circle Added Successfully";
}
}
?>


<html>
    <body bgcolor="#FFEBCD">
        <center>
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	  <h1 align="center">CIRCLE</h1>
        <link rel="stylesheet" type="text/css" href="">
        <div class="div1">
            <table> 
                	
              
				<tr><td><h3>ZP Circle:</h3></td><td><input type="text" name="circle_name"></td><br><br></tr>
				
				
				 
				<tr>
                         <td><h3>SubDivision:</h3></td> <td><select name="tal_id"</td>
                      <option value="select" selected="select">--select--</option>
					  <?php $sqls = mysql_query("SELECT * FROM `taluka`") or die(mysql_error()); 
                      while ($row = mysql_fetch_array($sqls)) {?>
                            <option value="<?php echo $row['tal_id']?>"><?php echo $row['tal_name']?></option>
                        
                <?php       } 
                    ?>
                 
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