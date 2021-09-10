<?php
require('connection.php');
error_reporting(0);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
    </head>
    <body bgcolor=#FFEBCD>
        <?php
       // ob_start();

        session_start();
  $logerr="";
        if($_SERVER['REQUEST_METHOD']=="POST"){


        
                   $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "supervision";

                    $admin_name=$_POST['admin_name'];
                    $admin_password=$_POST['admin_password'];

                    if(empty($admin_name)||empty ($admin_password)){

                        $logerr="Username and Password Should not be Blank";
                    }
                    else{

                            $conn = mysqli_connect("localhost","root","","supervision");
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }
                               else echo"Connected";

                            $sql="SELECT * from admin where admin_name='$admin_name'";


                            $result=mysqli_query($conn,$sql);



                            if (mysqli_num_rows($result) > 0)
                                {
                                    $row=mysqli_fetch_array($result);
                                    if($admin_password==$row['admin_password'])
                                    {
                             
                                        $_SESSION["admin_name"] = $row['admin_name'];
                                        session_write_close();
                                       header("Location:report.php");
                                      
                                     //  echo"Success";
                                    }
                                    else
                                        {
                                         $logerr="Username or Password is invalid";

                                        }

                                }
                                else {
                                     $logerr="Username Dose Not Exist";
                                }


                     mysqli_close($conn);
                    }

            }
        ?>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ;?>">
		<h1 align="center">LOGIN TO YOUR ACCOUNT</h1>
		
		
		<center>
<table>
<tr>
    <td> <h2>Username:</h2></td><br><br>
<td><input type="text"name="admin_name"id="admin_name"/>
</td>
</h1>
</tr>

<tr>
<td><h2>Password:</h2></td><br><br>
<td><input type="password"name="admin_password"id="admin_password"/>
</td>
</tr>

 <tr>

    
<td>
</td>
 <td align="center"><input type="submit" value="LOGIN"></td>

</tr>

</table>
</center>




		
           
           
            <span style="color:red"> <?php echo $logerr;?></span>
			
        </form>

    </body>
</html>
