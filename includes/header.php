<?php
    $companyName = "Ginny's Corner";
    include('includes/arrays.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE; ?></title>
    <link href="/assets/styles.css" rel="stylesheet">   
</head>
<body id="final-example">
    
    <div class="wrapper">

        <div id="banner">
            <a href="/" title="Return to Home">
                <img src="/img/cover.png" alt="Ginny's Corner">
            </a>
        </div><!--banner -->

        <div id="nav">
            <?php include('includes/nav.php'); ?>
        </div><!-- nav -->

        <div class="content">