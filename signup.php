<?php 

    include('dbconnection/dbconn.php');
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $password = $_POST['password'];

       
        $conn->query("INSERT INTO user(name, email, address, password)VALUES ('$name','$email','$address','$password')")
        or die(mysqli_error());
            header('Location: index.php');
        

    }
   


 ?>


 <!DOCTYPE html>
<html>
     
      <?php include('templates/signupheader.php'); ?>


<section class="container grey-text">
     <h4 class="center" style="color: black;"><b>Sign Up</b></h4>
      <form class="white" action="" method="POST">
      
            <label>Name</label>
            <input type="text" name="name" value="">
    
            <label>Email</label>
            <input type="email" name="email" value="">
            
            <label>Address</label>
            <input type="text" name="address" value="">
           
             <label>password</label>
            <input type="password" name="password" value="">
            
            <div class="center">
                <input type="submit" name="submit" value="Register" class="btn brand z-depth-0">
            </div>

</form>

 </section>

      <?php include('templates/footer.php'); ?>



</html>
