<?php
include('connection.php');
error_reporting(0);
?>
<html>
    <body bgcolor="#FFEBCD">
     <center>  
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	  <h1 align="center">UNMAPPED REPORT</h1>
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
         
        </div>
       <?php
  if($_SERVER['REQUEST_METHOD']=="POST"){
  $name_of_work=$_POST['name_of_work'];
   $sql= mysql_query("SELECT name_of_work,tal_name FROM work_master as w,taluka as t Where w.tal_id = t.tal_id")or die(mysql_error());
    if(mysql_num_rows($sql) > 0)
    {
      echo "</br></br></br>";
  
    echo "<div>";
    echo "<table>";
    echo "<tr>";
   
   
	 echo "<th width='100px'>"."Taluka"."</th>";
	  echo "<th width='200px'>"."Site Name"."</th>";
  
    echo "</tr>";
         
    while($row=mysql_fetch_array($sql))  
    {
           echo"<tr>".
          
 
        
		   "<td>".$row['tal_name']."</td>".
           "<td>".$row['name_of_work']."</td>";

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