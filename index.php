<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tic-Tac-Toe Login</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>

<!-- php code --------------------------------------------------------------------------------------------------------------------------> 
<?php
include "config.php";

if(isset($_POST['submitb'])){ // an patithei to submit

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);  //gia na empodisoume sql injection
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){ //an diaforo tou kenou
        //kane count kataxoriseis me uname kai passwd idio me ayta poy patithikan
        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'"; 
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];
        //an vreis esto 1 tote peta ton stin main screen
        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: mainscreen.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>
<!-- php code ends here----------------------------------------------------------------------------------------------------------------->

<div class="container">
    <form method="post" action="">
        <div id="divlogin">
            <h1>Login</h1>
            <div>
                <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
            </div>
            <div>
                <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
            </div>
            <div >
                <input type="submit" value="Submit" name="submitb" id="submitb" />
            </div>
        </div>
    </form>
</div>
 
</body>
</html>