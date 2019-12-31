<?php
$winner = 'n';  //nobody
$box = array('','','','','','','','',''); //9 koutia oses einai oi theseis stin triliza
if (isset($_POST['submitbtn'])){
    $box[0] = $_POST["box0"];
    $box[1] = $_POST["box1"];
    $box[2] = $_POST["box2"];
    $box[3] = $_POST["box3"];
    $box[4] = $_POST["box4"];
    $box[5] = $_POST["box5"];
    $box[6] = $_POST["box6"];
    $box[7] = $_POST["box7"];
    $box[8] = $_POST["box8"];
    //print_r($box);
    if(($box[0]=='x' && $box[1]=='x' && $box[2]=='x') || //proti orizontia
    ($box[3]=='x' && $box[4]=='x' && $box[5]=='x') ||    //deyteri orizontia
    ($box[6]=='x' && $box[7]=='x' && $box[8]=='x') ||    //triti orizontia
    ($box[0]=='x' && $box[3]=='x' && $box[6]=='x') ||    //proti katheta
    ($box[1]=='x' && $box[4]=='x' && $box[7]=='x') ||    //deyteri katheta
    ($box[2]=='x' && $box[5]=='x' && $box[8]=='x') ||    //triti katheta
    ($box[2]=='x' && $box[4]=='x' && $box[6]=='x') ||    //diagonios poy ksekinaei apo kato aristera
    ($box[0]=='x' && $box[4]=='x' && $box[8]=='x') ||    //diagonios poy ksekinaei apo pano aristera
    ($box[2]=='x' && $box[6]=='x' && $box[8]=='x')) {    //sigouri niki
    $winner = 'x';
    print("</br></br><strong>X WINS THE GAME! </strong></br>");
    }    
$blank = 0; //arxikopoihsi, to xrisimopoioume san boolean
for($i=0; $i<=8; $i++){  //elgxos an oles oi theseis exoun gemisei
    if($box[$i] == ''){
            $blank = 1; //an esto mia thesi einai adeia, tote blank =1 
    }
}
if($blank ==1 && $winner =='n'){ //an esto mia thesi einai adeia, seira toy computer na paiksei
    $i = rand() % 8; //arxikopoisi i
    while($box[$i] != ''){ //mexri na vrei adeia thesi gia na paiksei o computer
        $i = rand() %8;
    }
    $box[$i] = 'o';
    if(($box[0]=='o' && $box[1]=='o' && $box[2]=='o') || //proti orizontia
    ($box[3]=='o' && $box[4]=='o' && $box[5]=='o') ||    //deyteri orizontia
    ($box[6]=='o' && $box[7]=='o' && $box[8]=='o') ||    //triti orizontia
    ($box[0]=='o' && $box[3]=='o' && $box[6]=='o') ||    //proti katheta
    ($box[1]=='o' && $box[4]=='o' && $box[7]=='o') ||    //deyteri katheta
    ($box[2]=='o' && $box[5]=='o' && $box[8]=='o') ||    //triti katheta
    ($box[2]=='o' && $box[4]=='o' && $box[6]=='o') ||    //diagonios poy ksekinaei apo kato aristera
    ($box[0]=='o' && $box[4]=='o' && $box[8]=='o') ||    //diagonios poy ksekinaei apo pano aristera
    ($box[2]=='o' && $box[6]=='o' && $box[8]=='o')) {    //sigouri niki
    $winner = 'o';
    print("</br></br><strong>O WINS THE GAME! </strong></br>");
    } 
} elseif($winner == 'n'){ //an kamia thesi den einai adeia kai winner=nobody
    $winner == 't';
    print("</br> TIED GAME."); //isopalia
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tic-Tac-Toe</title>
    <style type="text/css">
    #box {
        background-color: yellow;
        border: 1px solid;
        width: 100px;
        height: 100px;
        font-size: 90px;
        text-align: center;
    }
    #play {
        width: 200px;
        height: 50px;
        background-color: green;
        font-size: 20px;
        font-weight: bold;
    }
    #playagain {
        width: 250px;
        height: 80px;
        background-color: red;
        font-size: 20px;
        font-weight: bold;   
    }
    #goback {
        width: 350px;
        height: 80px;
        background-color: red;
        font-size: 20px;
        font-weight: bold;  
    }
    </style>
</head>
<body bgcolor="blue" align="center">
<form name="tictactoe" action="vscomputer.php" method="post">
<?php
for ($i=0; $i<=8; $i++){
printf('<input type="text" name="box%s" value="%s" id="box">',$i, $box[$i]); //dimourgia 8 koution
if($i==2 || $i==5 || $i==8){ //ana 3 koutia br gia na ftiaxtei sosta i triliza
    print('<br>');
    }
}
if($winner=='n'){ //ama nobody tote dimiourgise to play button
    print('</br><input type="submit" name="submitbtn" value="PLAY" id="play">');
}
else{ //allios an exei allaksei o winner tote kane play again button gia na ginei reset
    print('</br><input type="button" name="newgamebtn" value="PLAY AGAIN" id="playagain"
    onclick="window.location.href=\'vscomputer.php\'">'); //to reset ginetai me to na ksanafortonei tin selida
    print('</br><input type="button" name="gobackbtn" value="RETURN TO MAIN SCREEN" id="goback"
    onclick="window.location.href=\'mainscreen.php\'">'); //gia na pas piso sto main screen
} 
?>  
</form>
</body>
</html>
