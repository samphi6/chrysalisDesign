<?php include 'chrysalis-config.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="scss/styles.css?<?php echo time(); ?>" />
    <title><?= $title ?></title>
    <script src="https://kit.fontawesome.com/0d8d08edeb.js" crossorigin="anonymous"></script>
    <script defer src="/chrysalisDesign/js/script.js"></script>

</head>

<body>

    <main class="wrapper">

        <header>

            <nav>

                <ul>

                    <?= makeLinks($nav1) ?>

                    <!-- ORIGINAL HTML MENU ITEM SETUP

                    <li><a href="stp.php">Samuel Phillips</a></li>
                    <li><a href="designs.php">Design</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="cases.php">Cases</a></li>
                    <li><a href="contactme.php">Contact</a></li>
                -->

                </ul>

            </nav>

            <div class="home-h1">

                <h1 class="headTitle">Chrysalis</h1>
                <h1 class="headTitle0">Design</h1>

            </div>


        </header>

        <div class="quote">

            <h1 class="pageID"><?= $pageID ?></h1>

            <p><?= $quoteID ?></p>

        </div>