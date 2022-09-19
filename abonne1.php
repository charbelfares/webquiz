<html>
<head>
<link rel="stylesheet" href="styles/admin2.css">
</head>

<body>
    <h1 class="title">WEB QUiZ</h1>
        <form class="form" method="POST" ><br>
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
            <?php
            ini_set('display_errors',0);
            $langage= $_POST['langageId'];
            $difficulte= $_POST['difficulteId'];
            ?><br> Quiz of:<br>
        <?php
        include"database.php";
        $db=connect();
        if($langage==1){
            echo("HTML" .$difficulte);
        }
        if($langage==2){
            echo("PHP" .$difficulte);
        }
        if($langage==3){
            echo("Javascript" .$difficulte);
        }
        

            ?><br>
           1.<input type="submit" value="GO" class="input" style="background-color:transparent;"><br><br>
             2.<a href="quiz.php?id=<?php echo $difficulte.$langage;?>" class="input" style="background-color:transparent; text-decoration:none; color:black; "> Start Quiz</a><br><br>
            <a href="index1.php" class="input" style="background-color:transparent; text-align:center; text-decoration:none; color:black;">Home Page</a><br><br>
           
        </form>
       <br><br>
        
     
        
        </html>