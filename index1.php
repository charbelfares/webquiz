<html>
<head>
<?php

require_once('usersession.php')

?>
    <link rel="stylesheet" href="styles/index1.css">
</head>
<body>
<h1 class="title">WEB QUiZ</h1>
<form method="post" action="login.php" class="form">
    Type: <select name="typeId" class="select">
        <option value="1">Abonne</option>
        <option value="2">Admin</option>
        </select>
    <br>
    <br>
    Username: &nbsp;<input name="userName" class="input"><br><br>
    Password: &nbsp;&nbsp;<input type="password" name="password" class="input"><br><br>
    <input type="submit" value="Login" class="input" style="background-color:transparent;">
</form>
</body>
</html>
