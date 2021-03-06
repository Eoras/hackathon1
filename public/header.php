<?php
require '../vendor/autoload.php';
include '../src/functions.php';
include '../connect_bdd.php';
$mysqli = mysqli_connect(SERVEUR, USER, PASSWORD, DATABASE);
date_default_timezone_set('UTC');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Page Index">
    <meta name="author" content="Paul DOS SANTOS">
    <title>Dromathèque</title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Font Awesome -->
    <link href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">

</head>
<body>

<header>
<h1><img src="images/Dromatheque.png" class="imgdro" alt="Dromathèque"> Dromathèque</h1>

</header>

<div class="container-fluid">
