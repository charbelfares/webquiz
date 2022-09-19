<?php

include "database.php"; // Using database connection file here
$db=connect();
$id = $_GET['id']; // get id through query string


 // select query

$data1= mysqli_fetch_assoc($qry); // fetch data
$data2= mysqli_fetch_assoc($qry);
$data3= mysqli_fetch_assoc($qry);
$data4= mysqli_fetch_assoc($qry);



if(isset($_POST['update'])) // when click on Update button
{
    $question = $_REQUEST['question'];
    $reponse1= $_REQUEST['reponse1'];
    $reponse2= $_REQUEST['reponse2'];
    $reponse3= $_REQUEST['reponse3'];
    $reponse4= $_REQUEST['reponse4'];
    
    $querry=mysqli_query($db,"SELECT * FROM  reponse WHERE noquestion='$id' AND correct=1");
    $rslt=mysqli_fetch_assoc($querry);
    $ey=$rslt['noreponse'];

	
    $edit = mysqli_query($db,"update question set enonce='$question' where noquestion='$id' ");
    $edit1 = mysqli_query($db,"update reponse set texte='$reponse1' where noreponse='$ey' ");
    $edit2 = mysqli_query($db,"update reponse set texte='$reponse2' where noreponse='$ey'+1 " );
    $edit3 = mysqli_query($db,"update reponse set texte='$reponse3' where noreponse='$ey'+2 ");
    $edit4 = mysqli_query($db,"update reponse set texte='$reponse4' where noreponse='$ey'+3 ");

    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:admin2.php"); // redirects to all records page
        exit;
    } 
}
?>
<head>
<link rel="stylesheet" href="styles/edit.css">
</head>
<h3>Modifier Question et les Reponses</h3>

<form method="POST">


Question:<br><input type="text" name="question" value="<?php echo htmlspecialchars($data1['enonce']) ?>" placeholder="Question" Required class="question1">
 <br><br>Reponse:<br><input type="text" name="reponse1"  placeholder="Correct Reponse" Required class="reponse" value="<?php echo htmlspecialchars($data1['texte'])?>">
 <br><br><input type="text" name="reponse2"  placeholder="Fausse Reponse 1" Required class="question1" value="<?php echo htmlspecialchars($data2['texte'])?>" >
 <br><br><input type="text" name="reponse3"  placeholder="Fausse Reponse 2" Required class="question1" value="<?php echo htmlspecialchars($data3['texte'])?>">
 <br><br><input type="text" name="reponse4"  placeholder="Fausse Reponse 3"  class="question1" value="<?php echo htmlspecialchars($data4['texte']) ?>">
  <input type="submit" name="update" value="Update" class="button">
</form>
<h3 style="position:fixed; bottom:0; right:15px;">Admin Mode</h3>