<?php

if(isset($_POST['username']) && isset($_POST['password']))
{
        $username = $_POST['username'];
        $password = $_POST['password'];

/*      if($username == "GT" && $password == "R2D2"){
                header ('Location: logged1.php');

        }
        else {
        echo "Login failed";
        }*/
}

?>


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
        </div>
    <div id="mainPicture">
        <div class="picture">
                <div id="headerTitle" class="auto-style1" style="left: 40px; top: 8px">Home Security And Automation</div>
            <div id="headerSubtext" style="left: 50px; top: 12px">Local Page to control Appliances</div>
        </div>
    </div>
        <div class="contentBox">
        <div class="innerBox">
                <form action="logged1.php" method="POST">
                        Enter User Credentials :<br><br>
                        Username:<br> <input type="text" name="username" maxlength="25"> <br> <br>
                        Password:<br> <input type="password" name="password" maxlength="25"> <br> <br> 
                        <input type="Submit" value="Login">
                </form>
        </div>

    </body>
</html>


