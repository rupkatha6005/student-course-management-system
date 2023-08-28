<?php 
session_start();
$userEmail ='';
$id ='';
    include 'connection.php';
   if (isset($_SESSION['user']) && isset($_SESSION['user_id'])) {
    $userEmail = $_SESSION['user'];
    $id = $_SESSION['user_id'];
 
   }

   $sql="SELECT * from student WHERE st_id = $id;";

   $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
   $row = mysqli_fetch_assoc($result);

   if($userEmail){
    
?>



<!DOCTYPE html>
<html>
    <head>
      <style>
        .form-container{
          display: flex;
          flex-direction: column;
          height: 50px;
        }

      </style>
    </head>
    <body>
    <form class="row g-3" method="post" action="updatefinal.php">
        <div class="col-md-6" style="margin-bottom: 18px; font-size:23px;">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputEmail4" name="email" value="<?php echo $row['email']?>" readonly required>
        </div>
        <div class="col-md-6" style="margin-bottom: 18px; font-size:23px;">
          <label for="inputEmail4" class="form-label">Name</label>
          <input type="text" class="form-control" id="inputEmail4" name="name" value="<?php echo $row['name']?>" readonly  required>
        </div>
        <div class="col-md-6" style="margin-bottom: 18px; font-size:23px;">
          <label for="inputPassword4" class="form-label">Address</label>
          <input type="text" class="form-control" id="inputPassword4" name="address" value="<?php echo $row['Address']?>" required>
        </div>

        <div class="col-12" style="margin-bottom: 18px; font-size:23px;">
          <label for="inputAddress" class="form-label">ID</label>
          <input type="text" class="form-control" id="inputAddress" name="id" value="<?php echo $row['st_id']?>" readonly required>
        </div>
        <div class="col-12" style="margin-bottom: 18px; font-size:23px;">
          <label for="inputAddress" class="form-label">CGPA</label>
          <input type="text" class="form-control" id="inputAddress" name="cgpa" value="<?php echo $row['CGPA']?>" readonly>
        </div>
        <div class="col-12" style="margin-bottom: 18px; font-size:23px;">
          <label for="inputAddress2" class="form-label">Phone</label>
          <input type="number" class="form-control" id="inputAddress2" name="phn" value="<?php echo $row['Phone']?>" >
        </div>
        <input type="hidden" name="id" value="<?php echo $row['st_id']?>" >
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Update</button>
  </div>
</form>
        </body>
</html>

<?php 
    
}else{
   header('location: index.php');
}?>