<?php
include('db_connect.php');
if(isset($_POST['submit']))
{
    $v1=$_POST['f1'];
    $sql=mysqli_query($conn,"select * from student where usn='$v1'");
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

    <title>collegeDB/delete/student</title>
  </head>
  <body>
    <div class="container-fluid">
    <h3>Update Student Infromation.</h3>
    <form action="" method="POST">
        <table>
        <tr>
            <td><label for="USN">USN : </label> </td>
            <td><input type="text" name="f1"> </td>
        </tr>
        </table>

        <input type="submit" name="submit" value="Submit" >
    </form>

    <div class="tab" id="tab_data">
    <table  class="table table-bordered">
    <thead>
    <tr>
      <th>USN</th>
      <th>Name</th>
      <th>Branch</th>
      <th>SEM</th>
      <th>Phone</th>
      <th>E-Mail</th>
      <th>City</th>
      <th>Address</th>
    </tr>
    </thead>

<?php
    while($row=mysqli_fetch_array($sql))
    {
        $v1=$row['usn'];
        $v2=$row['name'];
        $v3=$row['branch'];
        $v4=$row['sem'];
        $v5=$row['phone'];
        $v6=$row['email'];
        $v7=$row['city'];
        $v8=$row['address']; 
    }    
    
    ?>

    <tbody>
    <tr>
        <td> <input type="text" name="f1" value="<?php echo $v1;?>"> </td>
        <td> <input type="text" name="f2" value="<?php echo $v2;?>"> </td>
        <td> <input type="text" name="f3" value="<?php echo $v3;?>"> </td>
        <td> <input type="text" name="f4" value="<?php echo $v4;?>"> </td>
        <td> <input type="text" name="f5" value="<?php echo $v5;?>"> </td>
        <td> <input type="text" name="f6" value="<?php echo $v6;?>"> </td>
        <td> <input type="text" name="f7" value="<?php echo $v7;?>"> </td>
        <td> <input type="text" name="f8" value="<?php echo $v8;?>"> </td>
    </tr>
    </tbody>


</table>
    </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>