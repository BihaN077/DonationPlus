<?php 





 ?>


 <!DOCTYPE html>
<html>
     
      <?php include('templates/signupheader.php'); ?>


<section class="container grey-text">
     <h4 class="center" style="color: black;"><b>Sign Up</b></h4>
      <form class="white" action="" method="POST">
      
            <label>Name</label>
            <input type="text" name="name">
            
            <label>Email</label>
            <input type="text" name="email">

            <label>Address</label>
            <input type="text" name="address">

             <label>password</label>
            <input type="text" name="password">
            
            
            <div class="center">
                <input type="submit" name="submit" value="Register" class="btn brand z-depth-0">
            </div>

</form>

 </section>

      <?php include('templates/footer.php'); ?>



</html>