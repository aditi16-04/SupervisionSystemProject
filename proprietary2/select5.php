<?php
include('connection.php');
error_reporting(0);
?>
<html>
    <body bgcolor="#FFEBCD">
       <center>  
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	  <h1 align="center">SCHEMEWISE REPORT</h1>
        <link rel="stylesheet" type="text/css" href="">
        <div class="div1">
		
		
				<h3><a href="data.php">Data Entry</a></h3>
<h3><a href="select.php">SubDivisionwise Report</a></h3>
<h3><a href="select1.php">ZP Circlewise Report</a></h3>
<h3><a href="select2.php">SiteNamewise Report</a></h3>
<h3><a href="select3.php">Village Panchayatwise Report</a></h3>
<h3><a href="select4.php">Engineerwise Report</a></h3>
<h3><a href="select5.php">Schemewise Report</a></h3>
<h3><a href="select6.php">Mapped Report</a><input type="submit" value="DISPLAY"></h3>
<h3><a href="select7.php">Unmapped Report</a><input type="submit" value="DISPLAY"></h3>
<h3><a href="select8.php">Yearwise Report</a></h3>


            <table> 
                	
                
				<tr>
                         <td><h3>Select Scheme:</h3></td> <td><select name="sch_name"</td>
                      <option value="select" selected="select">--select--</option>
                   <?php $sqls = mysql_query("SELECT * FROM `scheme`") or die(mysql_error()); 
                      while ($row = mysql_fetch_array($sqls)) {?>
                            <option value="<?php echo $row['sch_id']?>"><?php echo $row['sch_name']?></option>
                        
                <?php       } 
                    ?>             
                 
                  </select>
                 </tr>
                
            </table>
                <input type="submit" value="SUBMIT">
                   
               
         
        </div>
       <?php
  if($_SERVER['REQUEST_METHOD']=="POST"){
    $sch_name=$_POST['sch_name'];

   $sql= mysql_query("SELECT visitor_fname,vill_name,circle_name,name_of_work,stage_name,date_time,longitude,latitude,image_photo FROM  `visitor` as v,vp as v1,circle as c,work_master as w,work_stage as ws,work_trans as wt  Where v.vp_id = v1.vp_id and c.circle_id = v.circle_id and w.work_id = v.work_id and ws.stage_id = v.stage_id and wt.visitor_id = v.visitor_id and v.sch_id=$sch_name")or die(mysql_error());
    if(mysql_num_rows($sql) > 0)
    {
      echo "</br></br></br>";
     echo "<div>";
    echo "<table>";
    echo "<tr>";
     echo "<th width='100px'>"."Engineer"."</th>";
    echo "<th width='100px'>"."Panchayat"."</th>";
    echo "<th width='100px'>"."ZP Circle"."</th>";
   
    echo "<th width='200px'>"."Site Name"."</th>";
  
    echo "<th width='100px'>"."Process"."</th>";
    echo "<th width='100px'>"."DateTime"."</th>"; 
   
    echo "</tr>";
         
    while($row=mysql_fetch_array($sql))  
    {
           echo"<tr>".
          "<td>".$row['visitor_fname']."</td>". 
          "<td>".$row['vill_name']."</td>".       
          "<td>".$row['circle_name']."</td>".
         
          "<td>".$row['name_of_work']."</td>".
        
          "<td>".$row['stage_name']."</td>".
          "<td>".$row['date_time']." </td> ";
        

      echo"</tr>";
       
        
    }


    }
    else
    {
         echo "<center><h3>No Visitor Found</h3></center>";
    }

           
        
   
    echo "</table>";
    echo "</div>";
    
	}
?>
      </form> 
	  </center> 
    </body>
</html>