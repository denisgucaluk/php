<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
</head>
<body>

<p>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    	echo 'Привет ' . "$name";
    }
    ?></p>
    <body>