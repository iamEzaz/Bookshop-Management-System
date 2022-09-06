

<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php
session_start();
?>

<?php  
 $message = "";  
 $error = "";  
 if ($_SERVER["REQUEST_METHOD"] == "POST") 
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }
      else if(empty($_POST["e-mail"]))  
      {  
           $error = "<label class='text-danger'>Enter an email</label>";  
      }  
      else if(empty($_POST["username"]))  
      {  
           $error = "<label class='text-danger'>Enter a username</label>";  
      }  
      else if(empty($_POST["password"]))  
      {  
           $error = "<label class='text-danger'>Enter a password</label>";  
      }
      else if(empty($_POST["cpassword"]))  
      {  
           $error = "<label class='text-danger'>Confirm password field cannot be empty</label>";  
      } 
      else if(empty($_POST["gender"]))  
      {  
           $error = "<label class='text-danger'>Gender cannot be empty</label>";  
      } 
        else if(empty($_POST["address"]))  
      {  
           $error = "<label class='text-danger'>address cannot be empty</label>";  
      } 
       else if(empty($_POST["nid"]))  
      {  
           $error = "<label class='text-danger'>nid cannot be empty</label>";  
      } 
      else if(empty($_POST["phoneno"]))  
      {  
           $error = "<label class='text-danger'>phoneno cannot be empty</label>";  
      } 
      else  
      {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                     'e-mail'          =>     $_POST["e-mail"],  
                     'username'     =>     $_POST["username"],  
                     'gender'     =>     $_POST["gender"],  
                     'dob'     =>     $_POST["dob"],  
                     'password'=>   $_POST["password"],
                     'cpassword'=>   $_POST["cpassword"],
                     'address'=>   $_POST["address"],
                     'nid'=>   $_POST["nid"],
                     'phoneno'=>   $_POST["phoneno"]
                     
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?> 
<br>

  <fieldset>
  <fieldset>
  <div class="container" style="width:2200px;">  
                 <legend align="left"><b> REGISTRATION</b></legend>                
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?> 			
<br>
<tr>
<td><label for="name">First Name:</label></td> 
<td><input type="text" name="name"><br></td>
</tr>

<hr>
<tr>
<td><label for="e-mail">Email:</label></td>
<td><input type="e-mail" name="e-mail"></td>
</tr>
<br>
<hr>
<tr>
<td><label for="un">User Name:</label></td>
<td><input type="text" name="username"placeholder="Example:xxx2626"></td>
</tr>
<br>
<hr>
<tr>
<td><label for="password">Password:</label></td>
<td><input type="password" name="password"placeholder="At least 6 digit"></td>
</tr>
<br>
<hr>
<tr>
<td><label for="cpass">Confirm Password:</label></td>
<td><input type="password" name="cpassword"></td><?php if(isset($_SESSION["wrong"])){echo $_SESSION["wrong"];unset($_SESSION["wrong"]);} ?>
</tr>
<br>
<hr>
<tr>
<fieldset>
<td><label for="address">Address:</label></td>
<td><input type="text" name="address"></td>
</fieldset>
<hr>
<fieldset>
<td><label for="phoneno">Phone number:</label></td>
<td><input type="number" name="phoneno"></td>
</fieldset>
<hr>
<fieldset>
<td><label for="nid">National Id no:</label></td>
<td><input type="number" name="nid"></td>
</fieldset>
<hr>
<fieldset>
<legend align="left">Gender</legend>
</tr>
<input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
</fieldset>
<hr>
<fieldset>
<legend align="left">Type of user</legend>
</tr>
<input type="radio" id="buyer" name="type" value="buyer">
  <label for="buyer">Buyer</label>
  <input type="radio" id="seller" name="type" value="seller">
  <label for="seller">Seller</label>
 
</fieldset>

<hr>

<fieldset>
  <legend align="left">Date of Birth</legend>
  <input type="date" name="dob"><label for="Name" required></label>
  </fieldset>
  <fieldset>
<legend align="left">Profile Picture</legend> 
<label for="img">Profile Pic:</label>
<input type="file" enctype="multipart/form-data" name="image" id="img" required>

</fieldset>
  <hr>
<hr>
<fieldset>
<br>
 <input type="submit" name="submit" value="SUBMIT" class="btn btn-info" /><br />                      
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>


<input type="Reset"> <br>

<br/>
<tr><th><a href="login.php">Go to login page</a></th>



</form> 

</table>
</table>
</table>

</head>
                    </body>
</html>
</form>
