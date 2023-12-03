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

 .container { 
        padding: 25px; 
        background-color: lightblue;
    } 
</style> 
</head>  
<body>  
    <center> <h1> Delete User</h1> </center> 
    <form action="<?php echo base_url('Delete_User/delete'); ?>" method="POST" >
        <div class="container"> 
            <label>Provide Username to Delete:</label> 
            <input type="text" placeholder="Enter Username" name="username" required>
            <button type="submit">Delete User</button> 
            <button type="button" class="cancelbtn" onclick="window.location.href='<?php echo base_url('Signup/index'); ?>'">Signup</button>

        </div> 
    </form>   
</body>   
</html>

 
