<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Screen</title>
    <style>
    #play {
        width: 250px;
        height: 80px;
        background-color: blue;
        font-size: 20px;
        font-weight: bold;   
    }
    </style>
</head>
<body bgcolor="green" align="center">
<form name="choose" action="mainscreen.php" method="post">
<?php
print('</br><input type="button" name="vscomp" value="PLAY VS COMPUTER" id="play"
    onclick="window.location.href=\'vscomputer.php\'">'); //gia na paikseis me computer
printf('</br>');    
print('</br><input type="button" name="vsplay" value="PLAY VS PLAYER" id="play"
    onclick="window.location.href=\'vsplayer.php\'">'); //gia na paikseis me allon player
printf('</br>');      
print('</br><input type="button" name="logout" value="LOG OUT" id="play"
    onclick="window.location.href=\'index.php\'">'); //gia na aposindetheis 
?>

</form>
</body>
</html>