# Tic-Tac-Toe Game 

Ο κωδικας ειναι για μια τριλιζα η οποια εχει 2 επιλογες:
1. player vs player
2. player vs human  


# index.php

Το index.php περιεχει την φορμα login, η οποια εμπεριεχει το config.php, εχω φτιαξει ενα πινακα users με login στοιχεια,
ενδεικτικα καποια ειναι :
1. testuser testpass
2. user1    pass1
3. gkapsas	 gkapsas

Αμα πατηθουν επιτυχως θα ανοιξει το mainscreen, αλλιως θα βγαλει μηνυμα λαθους.

## mainscreen.php

Στο main screen εχεις 3 επιλογες να πατησεις:
1. Play vs player
2. Play vs computer 
3. Logout 

Το logout σε επιστρεφει πισω στο index.php 

## Play vs Computer

Το κουμπι Play vs Computer σου ανοιγει το παιχνιδι για να παιξεις εναντια στον υπολογιστη 
(δεν ειναι εκπαιδευμενος να κανει εξυπνες κινησεις, απλα νομιμες κινησεις)
.
## Play vs Player

Το κουμπι Play vs Player σου ανοιγει το παιχνιι για να παιξεις εναντια σε εναν αλλον player.

## Endgame

Και στα δυο παιχνιδια, οτν τελειωσει το παιχνιδι εμφανιζεται αναλογο μηνυμα νικης ή ισοπαλιας και εμαφανιζονται 2 κουμπια
Αν πατησεις το ενα κουμπι επιστρεφεις πισω στο main screen και το αλλο κουμπι κανει reset το παιχνιδι


