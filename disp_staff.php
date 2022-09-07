<?php
include('db_connect.php');
$sql=mysqli_query($conn,"SELECT * FROM staff");

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>collegeDB/display/staff</title>
  </head>
  <body>
    
  <div class="container">
  <h1>Staff Information...</h1> <br>
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
        $v1=$row['s_id'];
        $v2=$row['name'];
        $v3=$row['dept'];
        $v4=$row['phone'];
        $v5=$row['email'];
        $v6=$row['designation'];
        $v7=$row['qualification'];
        $v8=$row['city']; 
        $v9=$row['year_of_joining'];
        $v10=$row['postal_address'];
        $v11=$row['specialization'];
    ?>

    <tbody>
    <tr>
        <td><?php echo $v1;?></td>
        <td><?php echo $v2;?></td>
        <td><?php echo $v3;?></td>
        <td><?php echo $v4;?></td>
        <td><?php echo $v5;?></td>
        <td><?php echo $v6;?></td>
        <td><?php echo $v7;?></td>
        <td><?php echo $v8;?></td>
    </tr>
    </tbody>
    <?php
}
?>

</table>


  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>