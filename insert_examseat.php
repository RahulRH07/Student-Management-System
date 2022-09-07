<?php
include('db_connect.php');
if(isset($_POST['submit']))
{
    $v1=$_POST['f1'];
    $v2=$_POST['f2'];
    $v3=$_POST['f3'];
    $v4=$_POST['f4'];
    $v5=$_POST['f5'];
    $sql=mysqli_query($conn,"INSERT INTO exam_seat values('$v1','$v2','$v3','$v4','$v5')");
    if($sql)
    {
        echo "  Data Inserted Succesfully..";
    }
    else
    {
        echo "  Insertion Failed";
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

    <title>collegeDB/examSeat</title>
  </head>
  <body>
    

    <div class="container d-flex justify-content-center">
        <form action="" method="POST">
            <table>
                <h3>Exam Seating.</h3>
                <tr>
                    <td><label for="USN">USN : </label> </td>
                    <td><input type="text" name="f1"> </td>
                </tr>
                <tr>
                    <td><label for="date">Date : </label></td>
                    <td><input type="date" name="f2"></td>
                </tr>
                <tr>
                    <td><label for="SubName">Subject : </label></td>
                    <td><input type="text" name="f3"></td>
                </tr>
                <tr>
                    <td> <label for="blknum">Block Number : </label></td>
                    <td><input type="number" name="f4"></td>
                </tr>
                <tr>
                    <td><label for="dsknum">Desk Number : </label></td>
                    <td><input type="number" name="f5"></td>
                </tr>
                
            </table>
            <input type="submit" name="submit" value="Submit"> 
        </form>
     </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>