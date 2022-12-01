<?php

date_default_timezone_get('America/ Los_Angeles');

define('PAGE_TITLE', basename($_SERVER['PHP_SELF']));

switch (PAGE_TITLE) {

    case 'stp.php':

        $title = "Samuel Phillips";
        $pageID = "Samuel Phillips";

        break;

    case 'designs.php':

        $title = "Chrysalis Designs";
        $pageID = "Designs";

        break;

    case 'services.php':

        $title = "Chrysalis Services";
        $pageID = "Services";

        break;

    case 'cases.php':

        $title = "Chrysalis Cases";
        $pageID = "Cases";

        break;

    case 'contactme.php':

        $title = "Contact Samuel";
        $pageID = "Contact Samuel";

        break;
}

$nav1['stp.php'] = "Samuel Phillps";
$nav1['designs.php'] = "Design";
$nav1['services.php'] = "Services";
$nav1['cases.php'] = "Cases";
$nav1['contactme.php'] = "Contact Samuel";
