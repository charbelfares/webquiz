<html>
    <head>
        <link rel="stylesheet" href="styles/questions.css">
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

        
        ?>
    </head>
    <body>
        <h1 class="title">WEB QUiZ</h1>
        <br><br>
        Question 1:
        <br><div class="question1"><?php echo $data1['enonce']?></div>
        <a href="edit.php?id=<?php echo $data1['noquestion']; ?>">Edit</a>

        <br><br>
        Question 2:
        <br><div class="question1"><?php echo $data2['enonce']?></div>
        <a href="edit.php?id=<?php echo $data2['noquestion']; ?>">Edit</a>

        <br><br>
        Question 3:
        <br><div class="question1"><?php echo $data3['enonce']?></div>
        <a href="edit.php?id=<?php echo $data3['noquestion']; ?>">Edit</a>

        <br><br>
        Question 4:
        <br><div class="question1"><?php echo $data4['enonce']?></div>
        <a href="edit.php?id=<?php echo $data4['noquestion']; ?>">Edit</a>

        <br><br>
        Question 5:
        <br><div class="question1"><?php echo $data5['enonce']?></div>
        <a href="edit.php?id=<?php echo $data5['noquestion']; ?>">Edit</a>
 
        <h3 style="position:fixed; bottom:0; right:15px;">Admin Mode</h3>
    </body>
</html>