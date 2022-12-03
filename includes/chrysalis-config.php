<?php

date_default_timezone_set('America/ Los_Angeles');

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

        $title = "Contact";
        $pageID = "Contact Samuel";

        break;

    default:

        $title = PAGE_TITLE;
        $pageID = "Go Beyond";
}

$nav1['stp.php'] = "Samuel Phillps";
$nav1['designs.php'] = "Design";
$nav1['services.php'] = "Services";
$nav1['cases.php'] = "Cases";
$nav1['contactme.php'] = "Contact";

function makeLinks($nav1)

{

    $myReturn = '';

    foreach ($nav1 as $url => $text) {

        if ($url == PAGE_TITLE) {

            $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";
        } else {

            $myReturn .= "<li><a href=\"$url\">$text</a></li>";
        }
    }
    return $myReturn;
}
