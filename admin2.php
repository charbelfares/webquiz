
<html>
    <head>
    <link rel="stylesheet" href="styles/admin2.css">
    </head>
    <body>
    <h1 class="title">WEB QUiZ</h1>
        <form class="form" method="POST" >
            Langage:<select name="langageId" class="select">
            <option disabled selected>-- Select Langage--</option>
                <option value="1">HTML</option>
                <option value="2">PHP</option>
                <option value="3">Javascript</option>
            </select>
            <br>
            Difficulte:<select name="difficulteId" class="select">
            <option disabled selected>-- Select Difficulte--</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            </select>
            <br>
            <input type="submit" value="GO" class="input" style="background-color:transparent;"><br>
            <a href="index1.php" class="input" style="background-color:transparent; text-align:center; text-decoration:none; color:black;">Home Page</a><br><br>
        </form>
        <?php
            ini_set('display_errors',0);
            $langage= $_POST['langageId'];
            $difficulte= $_POST['difficulteId'];
              
              include"database.php";
              $db=connect();
              $result=mysqli_query($db,"SELECT * FROM question INNER JOIN reponse ON question.niveau='$difficulte' WHERE idlangage='$langage' AND question.noquestion=reponse.noquestion AND correct=0");
              $data1=mysqli_fetch_assoc($result);
              $data2=mysqli_fetch_assoc($result);
              $data3=mysqli_fetch_assoc($result);
              //$data4=mysqli_fetch_assoc($result);
              
                $question=$data1['noquestion'] ;
                $querry=mysqli_query($db,"SELECT * FROM reponse WHERE noquestion='$question' AND correct=1;");
                $datatrue=mysqli_fetch_assoc($querry);
        

            ?>
            <div>
        <br><br>
            Question:<BR><br><div class="question1" name="question"><?php echo($data1['enonce']); ?></div>
            <br>
            Reponse:
            <BR><br><div class="question1" name="reponse1"><?php echo htmlspecialchars($data1['texte']) ?></div>
            <BR><br><div class="question1" name="reponse2"><?php echo htmlspecialchars($data2['texte']); ?></div>
            <BR><br><div class="reponse" name="reponse3"><?php echo htmlspecialchars($datatrue['texte']); ?></div>
            <BR><br><div class="question1" name="reponse4"><?php echo htmlspecialchars($data3['texte']); ?></div>
            </div>


            <a href="questions.php
            
            ">Afficher Toutes les Questions</a>
        <h3 class="corner">Admin Mode</h3>
    </body>
</html>
