<html>
<body>
    <form method="post">
        Name:
        <input type="text" name="name"><br><br>
        Feedback:
        <text area name="feedback"></text area><br><br>
        <input type="submit" name="send" value="submit">
    </form>
<?php
if(isset($_POST['send']))
    {
        echo"Thank you for Feedback";
    
    }
?>
</body>
</html>