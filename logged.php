<?php


if(isset($_POST['LED']))        $LED = $_POST['LED'];
if(isset($_POST['username']))        $username = $_POST['username'];
if(isset($_POST['password']))        $password = $_POST['password'];




if(isset($_POST['LED'])||($username == "GT" && $password == "R2D2")){
        echo 'You are logged in!!';
        echo '<form action="logged.php" method="POST"> Name:<br><input type="text" name="LED" maxlength="25"> <br><br> <input type="Submit" value="submit"></form>';
        }
        else 
        echo "Login failed";



if(isset($_POST['LED']))
{
        $LED = $_POST['LED'];
        $open = fopen("/var/www/design.txt","w+");
        fwrite($open,$LED);
        fclose ($open);
        echo $LED;
}
?>


