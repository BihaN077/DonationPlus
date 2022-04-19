<?php 

 
    include('dbconnection/dbconn.php');  

    if(isset($_POST['submit'])){
    $email = $_POST['email'];  
    $password = $_POST['password'];  
      
         
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($conn, $email);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1><center> Login failed. Invalid username or password.</center></h1>";  
        }  

        }   

?>  








 <!DOCTYPE html>
<html>
     
      <?php include('templates/signinheader.php'); ?>

   
   <section class="container grey-text">  

    <h4 class="center" style="color: black;"><b>Sign in</b></h4>

      <form name="login" class="white" action="login.php" onsubmit="return validation()" method="POST">
   
      
        
            <label>Your Email</label>
            <input type="text" id="email" name="email">
            
            <label>Password</label>
            <input type="password" id="password" name="password">
            
            
            <div class="center">
                <input type="submit" name="submit" value="Sign in to DonationPlus" class="btn brand z-depth-0">
            </div>
            <script> 

            function validation()  
            {  
                var em=document.login.email.value;  
                var ps=document.login.password.value;  
                if(em.length=="" && ps.length=="") {  
                    alert("User email and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(email.length=="") {  
                        alert("User email is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</form>
 </section>


      <?php include('templates/footer.php'); ?>



</html>
