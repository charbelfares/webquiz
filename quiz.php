<html>
    <head>
    <link rel="stylesheet" href="styles/quiz.css">
        <?php
        ini_set('display_errors',0);
        include"database.php";
        $db=connect();
        $id=$_GET['id'];
        $ints = $id/10;
        $diff=(int)$ints; //difficulte
        $decimal=$ints-$diff;
        $lang= substr($decimal, 2); // langage
        $qry = mysqli_query($db,"SELECT * FROM question WHERE idlangage='$lang' AND niveau='$diff'");
        $data1=mysqli_fetch_assoc($qry);
        $data2=mysqli_fetch_assoc($qry);
        $data3=mysqli_fetch_assoc($qry);
        $data4=mysqli_fetch_assoc($qry);
        $data5=mysqli_fetch_assoc($qry);

        $noquestion1=$data1['noquestion'];
        $qry2=mysqli_query($db,"SELECT * FROM reponse WHERE noquestion='$noquestion1'");
        $rep1=mysqli_fetch_assoc($qry2);
        $rep2=mysqli_fetch_assoc($qry2);
        $rep3=mysqli_fetch_assoc($qry2);
        $rep4=mysqli_fetch_assoc($qry2);

        $noquestion2=$data2['noquestion'];
        $qry3=mysqli_query($db,"SELECT * FROM reponse WHERE noquestion='$noquestion2'");
        $rep5=mysqli_fetch_assoc($qry3);
        $rep6=mysqli_fetch_assoc($qry3);
        $rep7=mysqli_fetch_assoc($qry3);
        $rep8=mysqli_fetch_assoc($qry3);

        $noquestion3=$data3['noquestion'];
        $qry4=mysqli_query($db,"SELECT * FROM reponse WHERE noquestion='$noquestion3'");
        $rep9=mysqli_fetch_assoc($qry4);
        $rep10=mysqli_fetch_assoc($qry4);
        $rep11=mysqli_fetch_assoc($qry4);
        $rep12=mysqli_fetch_assoc($qry4);

        $noquestion4=$data4['noquestion'];
        $qry5=mysqli_query($db,"SELECT * FROM reponse WHERE noquestion='$noquestion4'");
        $rep13=mysqli_fetch_assoc($qry5);
        $rep14=mysqli_fetch_assoc($qry5);
        $rep15=mysqli_fetch_assoc($qry5);
        $rep16=mysqli_fetch_assoc($qry5);

        $noquestion5=$data5['noquestion'];
        $qry6=mysqli_query($db,"SELECT * FROM reponse WHERE noquestion='$noquestion5'");
        $rep17=mysqli_fetch_assoc($qry6);
        $rep18=mysqli_fetch_assoc($qry6);
        $rep19=mysqli_fetch_assoc($qry6);
        $rep20=mysqli_fetch_assoc($qry6);


        
        
        
        
        
        
        ?>
        </head>
    <body>
    <h1 class="title">WEB QUiZ</h1><form>
        <div class="quiz">
        Question:<span name="question" class="question"><?php echo $data1['enonce']; ?></span><br><br>
        <input type="radio" name="answer1" value="<?php echo $rep1['correct']?>">
            <label for="html"><?php echo  htmlspecialchars($rep1['texte']); ?></label><br><br>
        <input type="radio" name="answer1" value="<?php echo $rep2['correct']?>">
            <label for="html"><?php echo  htmlspecialchars($rep2['texte']); ?></label><br><br>
        <input type="radio" name="answer1" value="<?php echo $rep3['correct']?>">
            <label for="html"><?php echo  htmlspecialchars($rep3['texte']); ?></label><br><br>
        <input type="radio" name="answer1" value="<?php echo $rep4['correct']?>">
            <label for="html"><?php echo  htmlspecialchars($rep4['texte']); ?></label><br><br>
        </div>  

        <div class="quiz">
        Question:<span name="question" class="question"><?php echo $data2['enonce']; ?></span><br><br>
        <input type="radio" name="answer2" value="<?php echo $rep5['correct']?>">
            <label for="html"><?php echo  htmlspecialchars($rep5['texte']); ?></label><br><br>
        <input type="radio" name="answer2" value="<?php echo $rep6['correct']?>">
            <label for="html"><?php echo  htmlspecialchars($rep6['texte']); ?></label><br><br>
        <input type="radio" name="answer2" value="<?php echo $rep7['correct']?>">
            <label for="html"><?php echo  htmlspecialchars($rep7['texte']); ?></label><br><br>
        <input type="radio" name="answer2" value="<?php echo $rep8['correct']?>">
            <label for="html"><?php echo  htmlspecialchars($rep8['texte']); ?></label><br><br>
        </div>

        <div class="quiz">
        Question:<span name="question" class="question"><?php echo $data3['enonce']; ?></span><br><br>  
        <input type="radio" name="answer3" value="<?php echo $rep9['correct']?>">
            <label for="html"><?php echo  htmlspecialchars($rep9['texte']); ?></label><br><br>
        <input type="radio" name="answer3" value="<?php echo $rep10['correct']?>">
            <label for="html"><?php echo  htmlspecialchars($rep10['texte']); ?></label><br><br>
        <input type="radio" name="answer3" value="<?php echo $rep11['correct']?>">
            <label for="html"><?php echo  htmlspecialchars($rep11['texte']); ?></label><br><br>
        <input type="radio" name="answer3" value="<?php echo $rep12['correct']?>">
            <label for="html"><?php echo  htmlspecialchars($rep12['texte']); ?></label><br><br>
        </div>

        <div class="quiz">
        Question:<span name="question" class="question"><?php echo $data4['enonce']; ?></span> <br><br> 
        <input type="radio" name="answer4" value="<?php echo $rep13['correct']?>">
            <label for="html"><?php echo  htmlspecialchars($rep13['texte']); ?></label><br><br>
        <input type="radio" name="answer4" value="<?php echo $rep14['correct']?>">
            <label for="html"><?php echo  htmlspecialchars($rep14['texte']); ?></label><br><br>
        <input type="radio" name="answer4" value="<?php echo $rep15['correct']?>">
            <label for="html"><?php echo  htmlspecialchars($rep15['texte']); ?></label><br><br>
        <input type="radio" name="answer4" value="<?php echo $rep16['correct']?>">
            <label for="html"><?php echo  htmlspecialchars($rep16['texte']); ?></label><br><br> 
        </div>

        <div class="quiz">
        Question: <span name="question" class="question"><?php echo $data5['enonce']; ?></span>  <br><br> 
        <input type="radio" name="answer5" value="<?php echo $rep17['correct']?>">
            <label for="html"><?php echo  htmlspecialchars($rep17['texte']); ?></label><br><br>
        <input type="radio" name="answer5" value="<?php echo $rep18['correct']?>">
            <label for="html"><?php echo  htmlspecialchars($rep18['texte']); ?></label><br><br>
        <input type="radio" name="answer5" value="<?php echo $rep19['correct']?>">
            <label for="html"><?php echo  htmlspecialchars($rep19['texte']); ?></label><br><br>
        <input type="radio" name="answer5" value="<?php echo $rep20['correct']?>">
            <label for="html"><?php echo  htmlspecialchars($rep20['texte']); ?></label><br><br>
        </div><br>
        <input type="submit" value="Submit" class="submit">
        
        </form>
         
        
        <?php
         $qryz = mysqli_query($db,"SELECT * FROM question WHERE idlangage='$lang' AND niveau='$diff'");
         $datas=mysqli_fetch_assoc($qryz);
        $langage=$datas['idlangage'];
        $niveau=$datas['niveau'];

        $date=date("Y-m-d");
        $value1=$_GET['answer1'];
        $value2=$_GET['answer2'];
        $value3=$_GET['answer3'];
        $value4=$_GET['answer4'];
        $value5=$_GET['answer5'];
       $value=$value1+$value2+$value3+$value4+$value5;
        if($value<4&&$value!=0){
           
            echo("&nbsp;<a href='final.php' class='submit' style='text-decoration:none; color:black;' >EXIT</a>"); 
            $qryy=mysqli_query($db,"INSERT INTO `test` (`notest`, `note`, `datetest`, `idlangage`, `niveau`, `idabonne`) VALUES (NULL, '$value', '$date', '$langage', '$niveau', '1');");
        }if($value>=4){
            echo("&nbsp;<a href='final.php' class='submit' style='text-decoration:none; color:black;' >EXIT</a>");
            echo("&nbsp;<a href='abonne1.php' class='submit' style='text-decoration:none; color:black;' >Continue</a>");
            $qryy=mysqli_query($db,"INSERT INTO `test` (`notest`, `note`, `datetest`, `idlangage`, `niveau`, `idabonne`) VALUES (NULL, '$value', '$date', '$langage', '$niveau', '1');");
            
        }else{ 
            echo("&nbsp;<a href='abonne1.php' class='submit' style='text-decoration:none; color:black;'  >RESTART</a>"); 
        }

        ?>

    </body>
