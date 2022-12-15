<?php

date_default_timezone_set('America/ Los_Angeles');

define('PAGE_TITLE', basename($_SERVER['PHP_SELF']));

switch (PAGE_TITLE) {

    case 'stp.php':

        $title = "Samuel Phillips";
        $pageID = "Samuel Phillips";
        $quoteID = "I offer a proficient grasp of wire-frame iterations, making visual analyses,
        implementing creative color/ image treatments, and conducting A/B testing to
        strengthen information architecture from proto-site to live pages.";

        break;

    case 'designs.php':

        $title = "Chrysalis Designs";
        $pageID = "Designs";
        $quoteID = "Following accessibility practices maintained by ARIA guidelines for an accessible site, I am always seeking more ways to cater the web to all regardless of audio,
        visual, motor, or cognitive abilities.";

        break;

    case 'services.php':

        $title = "Chrysalis Services";
        $pageID = "Services";
        $quoteID = "Equipped with tenants of strong work ethics, we can steadily navigate the open water of developing the web while searching for the answers to create a broader, more accessible, and dynamic internet experience.";

        break;

    case 'cases.php':

        $title = "Chrysalis Cases";
        $pageID = "Cases";
        $quoteID = "Anyone can get the attention of the user— I want to harvest 'the why' with UX/ UI design methodologies to figure 'the how' in keeping user interests piqued.";

        break;

    case 'contactme.php':

        $title = "Contact";
        $pageID = "Contact Samuel";
        $quoteID = "Hi! How Are Ya?";

        break;

    case 'korochka_case.php':

        $title = "Cases";
        $pageID = "a Case for Korochka Tavern";
        $quoteID = "Korochka Tavern Case Study";

        break;

    case 'standoff_case.php':

        $title = "Cases";
        $pageID = "a Case for Standoff Book Release";
        $quoteID = "Standoff Case Study";

        break;

    case 'tcfw_case.php':

        $title = "Cases";
        $pageID = "a Case for Transforming Cities from Within";
        $quoteID = "Transforming Cities from Within Case Study";

        break;

    case 'standoff.php':

        $title = "Standoff Design";
        $pageID = "Standoff Book Release Designs";
        $quoteID = "Let me tell you about the first gig working for a Human Rights lawyer from Vancouver, BC who was in need of a site to launch his latest book, Standoff";

        break;

    default:

        $title = PAGE_TITLE;
        $pageID = "Go Beyond";
        $quoteID = "";
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
