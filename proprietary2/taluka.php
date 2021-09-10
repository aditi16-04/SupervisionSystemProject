<?php
   
  require('connection.php'); 
  error_reporting(0);
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
          $tal_name=$_POST['tal_name'];
          $dist_id=$_POST['dist_id'];
          
          $sql1="INSERT INTO `taluka`(`tal_name`, `dist_id`) VALUES ('$tal_name',$dist_id)";
          $result1=mysql_query($sql1);
          if ($result1) {
            $logerr="SubDivision Added Successfully";
          
          
          
        }
        }
?>
<html>
    <body bgcolor="#FFEBCD">
        <center>
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	  <h1 align="center">SUBDIVISION</h1>
        <link rel="stylesheet" type="text/css" href="">
        <div class="div1">
            <table> 
                	
               
				<tr><td><h3>SubDivision:</h3></td><td><input type="text" name="tal_name"></td><br><br></tr>
				<tr>
                         <td><h3>District:</h3></td> <td><select name="dist_id"</td>
                      <option value="select" selected="select">--select--</option>
                 
                   <?php $sqls = mysql_query("SELECT * FROM `dist` ORDER BY `dist`.`dist_id` ASC") or die(mysql_error()); 
                      while ($row = mysql_fetch_array($sqls)) {?>
                            <option value="<?php echo $row['dist_id']?>"><?php echo $row['dist_name']?></option>
                        
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