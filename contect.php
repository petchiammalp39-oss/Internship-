<html>
<body>
    <form method="post">
        Name:
        <input type="text" name="name"><br><br>
        Mobile:
        <input type="text" name="mobile"><br><br>
        Message:
        <text area name="message"></text area><br><br>
        <input type="submit" name="submit" value="send">
    </form>
<?php
if(isset($_POST['submit']))
    {
        echo"message sent successful";
    
    }
?>
</body>
</html>