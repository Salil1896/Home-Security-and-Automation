<?php

if(isset($_POST['submit1']))
{
        $led1 = $_POST['appl1'];
        $led2 = $_POST['appl2'];
        $led3 = $_POST['appl3'];
        $led4 = $_POST['appl4'];
        $open = fopen("/var/www/design1.txt","w+");
        fwrite($open,$led1);
        fclose ($open);
        $open = fopen("/var/www/design2.txt","w+");
        fwrite($open,$led2);
        fclose ($open);
        $open = fopen("/var/www/design3.txt","w+");
        fwrite($open,$led3);
        fclose ($open);
        $open = fopen("/var/www/design4.txt","w+");
        fwrite($open,$led4);
        fclose ($open);
}


if(isset($_POST['username']))        $username = $_POST['username'];
if(isset($_POST['password']))        $password = $_POST['password'];
if(isset($_POST['submit2'])||isset($_POST['submit1'])||($username == "GT" && $password == "R2D2"))
{
        $open=fopen("/var/www/design1.txt","r");
        $l1=fread($open,filesize("/var/www/design1.txt"));
        fclose($open);
        echo "a";
        echo $l1;
        echo "b";
        $open=fopen("/var/www/design2.txt","r");
        $l2=fread($open,filesize("/var/www/design2.txt"));
        fclose($open);
        $open=fopen("/var/www/design3.txt","r");
        $l3=fread($open,filesize("/var/www/design3.txt"));
        fclose($open);
        $open=fopen("/var/www/design4.txt","r");
        $l4=fread($open,filesize("/var/www/design4.txt"));
        fclose($open);
        echo '
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="anoceanofsky.css" />
        <title>Home Security And Automation</title>
        <style type="text/css">
        .auto-style1 {
                color: #FFFFFF;
        }
        </style>
        </head>

<body>
    <div id="page">
        <div class="topNaviagationLink"><a href="index.php">Home</a></div>
        <div class="topNaviagationLink"><a href="about.php">About</a></div>
        <div class="topNaviagationLinklogout">You are currently logged in.&nbsp;<a href="index.php"><u>Logout</u></a></div>
        </div>
    <div id="mainPicture">
        <div class="picture">
                <div id="headerTitle" class="auto-style1" style="left: 10px; top: 5px">Home Security And Automation</div>
        </div>
    </div>
        <div class="contentBox">
        <div class="innerBox">
                <form action="logged1.php" method="POST">
                                <input type="submit" name="submit2" value="Refresh"/>
                </form>
                <form action="logged1.php" method="POST">
                                <br><br>
                                Controls for Home Appliances:<br><br>
				Light : <input type="radio" name="appl1" value="ON" ';
                                if($l1=="ON")
                                        echo 'checked="checked"';
                                echo '>ON
                                        <input type="radio" name="appl1" value="OFF" ';
                                if($l1=="OFF")
                                        echo 'checked="checked"';
                                echo '>OFF
                                <br><br>
                                Fan &nbsp;&nbsp; : <input type="radio" name="appl2" value="ON" ';
                                if($l2=="ON")
                                        echo 'checked="checked"';
                                echo '>ON
                                        <input type="radio" name="appl2" value="OFF" ';
                                if($l2=="OFF")
                                        echo 'checked="checked"';
                                echo '>OFF
                                <br><br>
                                Led &nbsp;&nbsp; : <input type="radio" name="appl3" value="ON" ';
                                if($l3=="ON")
                                        echo 'checked="checked"';
                                echo '>ON
                                        <input type="radio" name="appl3" value="OFF" ';
                                if($l3=="OFF")
                                        echo 'checked="checked"';
				echo '>OFF
                                <br><br>
                                Lock &nbsp; : <input type="radio" name="appl4" value="ON" ';
                                if($l4=="ON")
                                        echo 'checked="checked"';
                                echo '>ON
                                        <input type="radio" name="appl4" value="OFF" ';
                                if($l4=="OFF")
                                        echo 'checked="checked"';
                                echo '>OFF
                                <br><br>
                                <input type="submit" name="submit1" value="Submit"/> 
                        </form>
        </div>

    </body>
</html>';

}
else
{
        echo 'Login Failed!!!';
        header ('Location: index.php');
}

?>



