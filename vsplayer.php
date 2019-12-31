<?php
$winner = 'n';  //nobody
$box = array('','','','','','','','',''); //9 koutia oses einai oi theseis stin triliza
if (isset($_POST['submitbtnx'])){ //an patithike to koumpi x
    $box[0] = $_POST["box0"];
    $box[1] = $_POST["box1"];
    $box[2] = $_POST["box2"];
    $box[3] = $_POST["box3"];
    $box[4] = $_POST["box4"];
    $box[5] = $_POST["box5"];
    $box[6] = $_POST["box6"];
    $box[7] = $_POST["box7"];
    $box[8] = $_POST["box8"];
    $blank = 0; //arxikopoihsi, to xrisimopoioume san boolean
    for($i=0; $i<=8; $i++){  //elgxos an oles oi theseis exoun gemisei
    if($box[$i] == ''){
            $blank = 1; //an esto mia thesi einai adeia, tote blank =1 
        }
    }
    //elegxos nikis tou x
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
    elseif($winner == 'n' && $blank == 0){ //an kamia thesi den einai adeia kai winner=nobody
        $winner == 't';
        print("</br> TIED GAME."); //isopalia
    }  
}

//an patithike to koumpi o
if (isset($_POST['submitbtno'])){
    $box[0] = $_POST["box0"];
    $box[1] = $_POST["box1"];
    $box[2] = $_POST["box2"];
    $box[3] = $_POST["box3"];
    $box[4] = $_POST["box4"];
    $box[5] = $_POST["box5"];
    $box[6] = $_POST["box6"];
    $box[7] = $_POST["box7"];
    $box[8] = $_POST["box8"];
    $blank = 0; //arxikopoihsi, to xrisimopoioume san boolean
    for($i=0; $i<=8; $i++){  //elgxos an oles oi theseis exoun gemisei
    if($box[$i] == ''){
            $blank = 1; //an esto mia thesi einai adeia, tote blank =1 
        }
    }
    //elegxos nikis tou o
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
    elseif($winner == 'n' && $blank == 0){ //an kamia thesi den einai adeia kai winner=nobody
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
<form name="tictactoe" action="vsplayer.php" method="post">
<?php
for ($i=0; $i<=8; $i++){
printf('<input type="text" name="box%s" value="%s" id="box">',$i, $box[$i]); //dimourgia 8 koution
if($i==2 || $i==5 || $i==8){ //ana 3 koutia br gia na ftiaxtei sosta i triliza
    print('<br>');
    }
}

$nox=0; //posa x exoyn patithei
$noo=0; // posa o exoun patithei
for($i=0; $i<=8; $i++){  //elegxos posa x kai o iparxoun sto board
    if($box[$i] == 'x'){
            $nox++; 
    }
    elseif($box[$i] == 'o'){
        $noo++;
    }
}

if($winner=='n' && $noo > $nox){ //an parapano o kai winner=nobody tote seira tou x na paiksei
    print('</br><input type="submit" name="submitbtnx" value="PLAY X" id="play">');
}
elseif($winner=='n' && $nox > $noo){ //an parapano x kai winner=nobody tote seira tou o na paiksei
    print('</br><input type="submit" name="submitbtno" value="PLAY O" id="play">');
     
}
elseif($winner=='n' && $noo==$nox){ //an winner=nobody kai iprxoun tosa x osa o tote einai seira tou x na paiksei 
    print('</br><input type="submit" name="submitbtnx" value="PLAY X" id="play">');
}
else{ //allios an exei allaksei o winner tote kane play again button gia na ginei reset
    print('</br><input type="button" name="newgamebtn" value="PLAY AGAIN" id="playagain"
    onclick="window.location.href=\'vsplayer.php\'">'); //to reset ginetai me to na ksanafortonei tin selida
    print('</br><input type="button" name="gobackbtn" value="RETURN TO MAIN SCREEN" id="goback"
    onclick="window.location.href=\'mainscreen.php\'">'); //gia na pas piso sto main screen
} 
?>  
</form>
</body>
</html>
