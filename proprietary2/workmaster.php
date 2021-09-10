<?php  require('connection.php'); 
  error_reporting(0);

if($_SERVER['REQUEST_METHOD']=="POST")
{
 $name_of_work=$_POST['name_of_work'];
$est_amt=$_POST['est_amt'];
$adm_no=$_POST['adm_no'];
$adm_date=$_POST['adm_date'];
$adm_amt=$_POST['adm_amt'];
$ts_date=$_POST['ts_date'];
$completion_date=$_POST['completion_date'];
$expenditure_amt=$_POST['expenditure_amt'];
$completion_flag=$_POST['completion_flag'];
$dept_id=$_POST['dept_id'];
$sch_id=$_POST['sch_id'];
$vp_id=$_POST['vp_id'];
$year_id=$_POST['year_id'];

   $sql1="INSERT INTO  `work_master`(`name_of_work`, `est_amt`, `adm_no`, `adm_date`, `adm_amt`, `ts_date`, `completion_date`, `expenditure_amt`, `completion_flag`, `dept_id`, `sch_id`, `vp_id`, `year_id`) VALUES ('$name_of_work','$est_amt','$adm_no','$adm_date','$adm_amt','$ts_date','$completion_date','$expenditure_amt','$completion_flag','$dept_id','$sch_id','$vp_id','$year_id')";
   $result1=mysql_query($sql1);
    if ($result1) {
            $logerr="Information Added Successfully";
		  }
          
   }
?>
<html>
    <body bgcolor="#FFEBCD">
        <center>
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	  <h1 align="center">WORK MASTER</h1>
        <link rel="stylesheet" type="text/css" href="">
        <div class="div1">
            <table> 
                	
                
				<tr><td><h3>Name Of Work:</h3></td><td><input type="text" name="name_of_work"></td></tr>
				<tr><td><h3>Estimated Amount:</h3></td><td><input type="text" name="est_amt"></td></tr>
				<tr><td><h3>Adm No.:</h3></td><td><input type="text" name="adm_no"></td></tr>
				<tr><td><h3>Adm Date:</h3></td><td><input type="date" name="adm_date"></td></tr>
				<tr><td><h3>Adm Amount:</h3></td><td><input type="text" name="adm_amt"></td></tr>
				<tr><td><h3>TS Date:</h3></td><td><input type="date" name="ts_date"></td></tr>
				<tr><td><h3>Completion Date:</h3></td><td><input type="date" name="completion_date"></td></tr>
				<tr><td><h3>Expenditure Amount:</h3></td><td><input type="text" name="expenditure_amt"></td></tr>
				
				 <tr>
                         <td><h3>Completion Status:</h3></td> <td><select name="completion_flag"</td>
                      <option value="select" selected="select">--select--</option>
                  <option value="y">y</option>
				  <option value="n">n</option>
                 
                  </select>
                 </tr>
				 
				<tr>
                         <td><h3>Department:</h3></td> <td><select name="dept_id"</td>
                      <option value="select" selected="select">--select--</option>
                  <?php $sqls = mysql_query("SELECT * FROM `dept`") or die(mysql_error()); 
                      while ($row = mysql_fetch_array($sqls)) {?>
                            <option value="<?php echo $row['dept_id']?>"><?php echo $row['dept_name']?></option>
                        
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
				 <tr>
                         <td><h3>Village Panchayat:</h3></td> <td><select name="vp_id"</td>
                      <option value="select" selected="select">--select--</option>
                   <?php $sqls = mysql_query("SELECT * FROM `vp`") or die(mysql_error()); 
                      while ($row = mysql_fetch_array($sqls)) {?>
                            <option value="<?php echo $row['vp_id']?>"><?php echo $row['vill_name']?></option>
                        
                <?php       } 
                    ?>
				 
                 
                 
                  </select>
                 </tr>
				 <tr>
                         <td><h3>Start Year:</h3></td> <td><select name="year_id"</td>
                      <option value="select" selected="select">--select--</option>
                 <?php $sqls = mysql_query("SELECT * FROM `year`") or die(mysql_error()); 
                      while ($row = mysql_fetch_array($sqls)) {?>
                            <option value="<?php echo $row['year_id']?>"><?php echo $row['year_from']?></option>
                        
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