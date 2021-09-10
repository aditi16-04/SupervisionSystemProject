<?php 
 require('connection.php'); 
  error_reporting(0);
if($_SERVER['REQUEST_METHOD']=="POST")
{
  $visitor_fname=$_POST['visitor_fname'];
  $visitor_mname=$_POST['visitor_mname'];
  $visitor_lname=$_POST['visitor_lname'];
  $mobile_no=$_POST['mobile_no'];
  $password=$_POST['password'];
  $desig=$_POST['desig'];
  $join_dt=$_POST['join_dt'];
  $edu_qualification=$_POST['edu_qualification'];
  $dept_id=$_POST['dept_id'];
  $tal_id = $_POST['tal_id'];
  $vp_id = $_POST['vp_id'];
  $circle_id = $_POST['circle_id'];
    $sch_id = $_POST['sch_id'];
      $work_id = $_POST['work_id'];
	  $work_trans_id = $_POST['work_trans_id'];
	  $sitetype_id = $_POST['sitetype_id'];
	  $stage_id = $_POST['stage_id'];
	  
	  
   $sql1="INSERT INTO `visitor`(`visitor_fname`, `visitor_mname`, `visitor_lname`, `mobile_no`, `password`, `desig`, `join_dt`, `edu_qualification`, `dept_id`, `tal_id`,`vp_id`,`circle_id`,`sch_id`,`work_id`,`stage_id`,`sitetype_id`,`work_trans_id`) values ('$visitor_fname','$visitor_mname','$visitor_lname','$mobile_no','$password','$desig','$join_dt','$edu_qualification','$dept_id','$tal_id','$vp_id','$circle_id','$sch_id','$work_id','$stage_id','$sitetype_id','$work_trans_id')";  $work_trans_id = $_POST['work_trans_id'];
	 
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
	  <h1 align="center">ENGINEER</h1>
        <link rel="stylesheet" type="text/css" href="">
        <div class="div1">
            <table> 
                	
                               
				
                               <tr><td><h3>Engineer's First Name:</h3></td><td><input type="text" name="visitor_fname"></td></tr> 				
                                <tr><td><h3>Engineer's Middle Name:</h3></td><td><input type="text" name="visitor_mname"></td></tr>
                               <tr><td><h3>Engineer's Last Name:</h3></td><td><input type="text" name="visitor_lname"></td></tr>
							   
							    <tr><td><h3>Engineer's Mobile Number:</h3></td><td><input type="text" name="mobile_no"></td></tr>
								 <tr>
                        <td><h3>Password:</h3></td>
                       
                        <td><input type="password" name="password"><span><?php echo $pe;?></span></td>
                    </tr>
 
                               <tr><td><h3>Desination:</h3></td><td><input type="text" name="desig"></td></tr>
                               <tr><td><h3>Join Date:</h3></td><td><input type="date" name="join_dt"></td></tr>
                               <tr><td><h3>Educational Qualification:</h3></td><td><input type="text" name="edu_qualification"></td></tr>
                                
                              
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
                         <td><h3>SubDivision:</h3></td> <td><select name="tal_id"</td>
                      <option value="select" selected="select">--select--</option>
                   <?php $sqls = mysql_query("SELECT * FROM `taluka`") or die(mysql_error()); 
                      while ($row = mysql_fetch_array($sqls)) {?>
                            <option value="<?php echo $row['tal_id']?>"><?php echo $row['tal_name']?></option>
                        
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
                         <td><h3>ZP Circle:</h3></td> <td><select name="circle_id"</td>
                      <option value="select" selected="select">--select--</option>
                 <?php $sqls = mysql_query("SELECT * FROM `circle`") or die(mysql_error()); 
                      while ($row = mysql_fetch_array($sqls)) {?>
                            <option value="<?php echo $row['circle_id']?>"><?php echo $row['circle_name']?></option>
                        
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
                         <td><h3>Name Of Work:</h3></td> <td><select name="work_id"</td>
                      <option value="select" selected="select">--select--</option>
                <?php $sqls = mysql_query("SELECT * FROM `work_master`") or die(mysql_error()); 
                      while ($row = mysql_fetch_array($sqls)) {?>
                            <option value="<?php echo $row['work_id']?>"><?php echo $row['name_of_work']?></option>
                        
                <?php       } 
                    ?>
				  
                  </select>
                 </tr>
				 
				  <tr>
                         <td><h3>Work Stage:</h3></td> <td><select name="stage_id"</td>
                      <option value="select" selected="select">--select--</option>
                <?php $sqls = mysql_query("SELECT * FROM `work_stage`") or die(mysql_error()); 
                      while ($row = mysql_fetch_array($sqls)) {?>
                            <option value="<?php echo $row['stage_id']?>"><?php echo $row['stage_name']?></option>
                        
                <?php       } 
                    ?>
				  
                  </select>
                 </tr>
				 
				  <tr>
                         <td><h3>Site Type:</h3></td> <td><select name="sitetype_id"</td>
                      <option value="select" selected="select">--select--</option>
                <?php $sqls = mysql_query("SELECT * FROM `site_type`") or die(mysql_error()); 
                      while ($row = mysql_fetch_array($sqls)) {?>
                            <option value="<?php echo $row['sitetype_id']?>"><?php echo $row['sitedes']?></option>
                        
                <?php       } 
                    ?>
				  
                  </select>
                 </tr>
				 
				  <tr>
                         <td><h3>Work Transaction:</h3></td> <td><select name="work_trans_id"</td>
                      <option value="s1" selected="select">--select--</option>
                <?php $sqls = mysql_query("SELECT * FROM `work_trans`") or die(mysql_error()); 
                      while ($row = mysql_fetch_array($sqls)) {?>
                            <option value="<?php echo $row['work_trans_id']?>"><?php echo $row['visitor_fname']?></option>
                        
                <?php       } 
                    ?>
				  
                  </select>
                 </tr>
				 
				   <tr>
                         <td><h3>Start Year:</h3></td> <td><select name="year_id"</td>
                      <option value="s1" selected="select">--select--</option>
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