<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <form method="Post">
       Username:
       <input type="text" name="username"><br><br>
       Password:
       <input type="password" name="password"><br><br>
       <input type="submit" name="login" value="login">
     </form>
<?php
if(isset($_POST['login']))    
{
    $username=$_POST['username'];
    $username=$_POST['password'];
    if($username=="admin" && $password=="1234")
        {
            echo"Login Successful";
        }
        else
        {
            echo"Invalid username or password";
        }           
}    
?>
</body>
</html>
