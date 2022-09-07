<?php
include('db_connect.php');
if(isset($_POST['Submit']))
{
    $v1=$_POST['f1'];
    $v2=$_POST['f2'];
    $v3=$_POST['f3'];
    $v4=$_POST['f4'];
    $v5=$_POST['f5'];
    $v6=$_POST['f6'];
    $v7=$_POST['f7'];
    $v8=$_POST['f8'];
    $v9=$_POST['f9'];
    $v10=$_POST['f10'];
    $v11=$_POST['f11'];
    $sql=mysqli_query($conn,"INSERT INTO staff values('$v1','$v2','$v3','$v4','$v5','$v6','$v7','$v8','$v9','$v10','$v11')");
    if($sql)
    {
        echo "Data Inserted Succesfully..";
    }
    else
    {
        echo "Insertion Failed";
    }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>collegeDB/staff</title>
  </head>
  <body>
    

    <div class="container d-flex justify-content-center">
        <form action="" method="post">
            <table>
                <h3>Staff Information.</h3>
                <tr>
                    <td><label for="SID">SID : </label> </td>
                    <td><input type="text" name="f1"> </td>
                </tr>
                <tr>
                    <td><label for="Name">Name : </label></td>
                    <td><input type="text" name="f2"></td>
                </tr>
                <tr>
                    <td><label for="dept">Department : </label></td>
                    <td><select name="f3" id="">
                            <option value="0">Select Dept</option>
                            <option value="CSE">CSE</option>
                        <option value="ISE">ISE</option>
                        <option value="EEE">EEE</option>
                        <option value="ENC">ENC</option>
                        <option value="MECH">MECH</option>
                        <option value="CIV">CIV</option>
                        </select></td>
                    </td>
                </tr>
                <tr>
                    <td> <label for="Mob">Mobile No. : </label></td>
                    <td><input type="number" name="f4"></td>
                </tr>
                <tr>
                    <td><label for="Email">Email : </label></td>
                    <td><input type="text" name="f5"></td>
                </tr>
                <tr>
                    <td><label for="Desig">Designation : </label></td>
                    <td><input type="text" name="f6"></td>
                </tr>
                <tr>
                    <td><label for="Quali">Qualification : </label></td>
                    <td><input type="text" name="f7"></td>
                </tr>
                <tr>
                    <td><label for="City">City : </label></td>
                    <td><input type="text" name="f8"></td>
                </tr>
                <tr>
                    <td><label for="YOJ">Year of Joining : </label></td>
                    <td><input type="number" name="f9"></td>
                </tr>
                <tr>
                    <td><label for="Spl">Specialization : </label></td>
                    <td><input type="text" name="f11"></td>
                </tr>
                <tr>
                    <td> <label for="Adrs">Address : </label></td>
                    <td><input type="text" name="f10"></td>
                </tr>
            </table>
            <input type="Submit" name="Submit" value="Submit"> 
        </form>
     </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>