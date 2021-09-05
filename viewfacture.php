<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FAC2PDF</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <!--[if lte IE 8]>
    <script src="js/html5shiv.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
        <link rel="stylesheet" href="css/skel.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/style-xlarge.css"/>
    </noscript>
</head>
<body>
<header id="header">
    <h1><a href="index.php">FAC2PDF</a></h1>
    <nav id="nav">
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="viewfacture.php">Liste des factures</a></li>

        </ul>
    </nav>
</header>


<h2>Factures</h2>
<?php
include('listing');
listing('pdf');
?>
<?php include('../fac2PDF/fonts/footer.html'); ?>
</body>
</html>