<?php

function connect(){
    $connection = mysqli_connect('localhost','root','','web_quiz');
    return $connection;
}