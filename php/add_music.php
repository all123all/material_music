<?php

include('con.php');

/* 
ORGANIZAR OS USUARIOS
ADICIONAR OS IDs NAS QUERYS
RELACIONAR TODOS OS IDs
FAZER REDIRECIONAMENTO
*/

$title = $_GET['title'];
$link = $_GET['link'];

$string_test = "INSERT INTO content(titulo, link) VALUES ('$title', '$link')";

$query_insert = mysqli_query($con, "INSERT INTO content(titulo, link) VALUES ('$title', '$link')");

header("Location: http://localhost/material_music/home.php");

?>