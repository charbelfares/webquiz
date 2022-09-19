<html>
    <head>
    <link rel="stylesheet" href="styles/final.css">
    <?php
    include"database.php";
    $db=connect();
    $query=mysqli_query($db,"SELECT * FROM test");
    $data1=mysqli_fetch_assoc($query);
    $data2=mysqli_fetch_assoc($query);
    $data3=mysqli_fetch_assoc($query);
    $data4=mysqli_fetch_assoc($query);
    $data5=mysqli_fetch_assoc($query);

    $result1=$data1['note'];
    $result2=$data2['note'];
    $result3=$data3['note'];
    $result4=$data4['note'];
    $result5=$data5['note'];

    $total=$result1+$result2+$result3+$result4+$result5;

    $dataa=mysqli_num_rows($query);

    ?>
    </head>
    <body>
    <h1 class="title">WEB QUiZ</h1>
    <div class="form">
        Your Note is: <?php echo ($total); ?>/ <?php print_r($dataa*5);?>


    </div>
    </body>
</html>