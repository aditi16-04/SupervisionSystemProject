<?php
include('connection.php');
error_reporting(0);
?>
<html>
    <body bgcolor="#FFEBCD">
        <center> 
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	  <h1 align="center">YEARWISE REPORT</h1>
        <link rel="stylesheet" type="text/css" href="">
        <div class="div1">
		
		
		
			<h3><a href="data.php">Data Entry</a></h3>
<h3><a href="select.php">SubDivisionwise Report</a></h3>
<h3><a href="select1.php">ZP Circlewise Report</a></h3>
<h3><a href="select2.php">SiteNamewise Report</a></h3>
<h3><a href="select3.php">Village Panchayatwise Report</a></h3>
<h3><a href="select4.php">Engineerwise Report</a></h3>
<h3><a href="select5.php">Yojanawise Report</a></h3>
<h3><a href="select6.php">Mapped Report</a></h3>
<h3><a href="select7.php">Unmapped Report</a></h3>
<h3><a href="select8.php">Yearwise Report</a></h3>


            <table> 
                	
                
				<tr>
                         <td><h3>Select Start Year:</h3></td> <td><select name="year_from"</td>
                      <option value="select" selected="select">--select--</option>
                 <?php $sqls = mysql_query("SELECT * FROM `year`") or die(mysql_error()); 
                      while ($row = mysql_fetch_array($sqls)) {?>
                            <option value="<?php echo $row['year_id']?>"><?php echo $row['year_from']?></option>
                        
                <?php       } 
                    ?>                           
 
                 
                  </select>
                 </tr>
                
            </table>
                <input type="submit" value="SUBMIT">
                   
               
         
        </div>
      <?php
  if($_SERVER['REQUEST_METHOD']=="POST"){
   $year_from=$_POST['year_from'];
	
  $sql= mysql_query("SELECT visitor_fname,name_of_work,year_from,completion_flag FROM `visitor` as v,year as y,work_master as w Where v.year_id = y.year_id and w.year_id = y.year_id and w.work_id = v.work_id and v.year_id=$year_from")or die(mysql_error());

    if(mysql_num_rows($sql) > 0)
    {
      echo "</br></br></br>";
     echo "<div>";
    echo "<table>";
    echo "<tr>";
    echo "<th width='100px'>"."Start Year"."</th>";
    echo "<th width='100px'>"."Engineer"."</th>";
   
    echo "<th width='300px'>"."Site Name"."</th>";
    echo "<th width='100px'>"."Completion Status"."</th>";
    echo "</tr>";
         
    while($row=mysql_fetch_array($sql))  
    {
           echo"<tr>".
          "<td>".$row['year_from']."</td>". 
         "<td>".$row['visitor_fname']."</td>". 
          "<td>".$row['name_of_work']."</td>".
          "<td>".$row['completion_flag']."</td>";

      echo"</tr>";
       
        
    }


    }
    else
    {
         echo "<center><h3>Information Not Found</h3></center>";
    }

           
        
   
    echo "</table>";
    echo "</div>";
    
	}
?>

      </form> 
	  </center> 
    </body>
</html>