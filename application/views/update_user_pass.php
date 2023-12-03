<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html> 
<html> 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Login Page </title>
<style> 
Body {
  font-family: Calibri, Helvetica, sans-serif;
  background-color: pink;
}
button { 
       background-color: #4CAF50; 
       width: 100%;
        color: orange; 
        padding: 15px; 
        margin: 10px 0px; 
        border: none; 
        cursor: pointer; 
         } 
 form { 
        border: 3px solid #f1f1f1; 
    } 
 input[type=text], input[type=password] { 
        width: 100%; 
        margin: 8px 0;
        padding: 12px 20px; 
        display: inline-block; 
        border: 2px solid green; 
        box-sizing: border-box; 
    }
 button:hover { 
        opacity: 0.7; 
    } 
  .cancelbtn { 
        width: auto; 
        padding: 10px 18px;
        margin: 10px 5px;
    } 
      
   
 .container { 
        padding: 25px; 
        background-color: lightblue;
    } 
</style> 
</head>  
<body>  
    <center> <h1> Update User Information </h1> </center> 
    <form action="<?php echo base_url('Update_User_Pass/update'); ?>" method="POST" >
        <div class="container"> 
            <label>New Full Name : </label> 
            <input type="text" placeholder="Enter New Full Name" name="fullname" required>
            <label>Old Username : </label> 
            <input type="text" placeholder="Enter Old Username" name="old-username" required>
            <label>New Username : </label> 
            <input type="text" placeholder="Enter New Username" name="new-username" required>
            <label>New Password : </label> 
            <input type="password" placeholder="Enter New Password" name="password" required>
            <label>Confirm Password : </label> 
            <input type="password" placeholder="Confirm Password" name="password" required>
            <button type="submit">Update</button> 
            <button type="button" class="cancelbtn"> Cancel</button>
            <button type="button" class="cancelbtn" onclick="window.location.href='<?php echo base_url('Signup/index'); ?>'">Signup</button>
        </div> 
    </form>   
</body>   
</html>

 
