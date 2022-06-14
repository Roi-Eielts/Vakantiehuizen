<?php include("config/config_db.php"); ?>
<!DOCTYPE html>

<head>
    <title>vakantiehuizen</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="content/css/style.css">
    <link rel="stylesheet" href="content/css/contact_page.css">

    <!-- fancy box -->
    <link href="css/fancy.css" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen">  
</head>

<body class="letterType">
    <?php include("content/pages/menu.php"); ?>
    <?php
    if (isset($_GET["pagina"])) {
        $paginanaam = $_GET["pagina"];
    } else {
        $paginanaam = "home";
    }
    if ($paginanaam == "home") {
        include("content/pages/home.php");
    }
    if ($paginanaam == "vakantiehuizen") {
        include("content/pages/vakantiehuizen.php");
    }
    if ($paginanaam == "contact") {
        include("content/pages/contact.php");
    } ?>
</body>