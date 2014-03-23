<?php

final class DisplayContent {
   private function __construct() {}

   const ALL          = 0;
   const MAIN_CONTENT = 1;
   const NAV_BAR      = 2;
   const NONE         = 3;
   const SIDE_BAR     = 4; 
}

//
// Get the name of the page without the file extension.  It will be used as
// key to determine what content to render on the page.
//
$selfArray = split("/", $_SERVER["PHP_SELF"]);
$fileName = $selfArray[ count($selfArray) - 1 ];
$page = substr($fileName, 0, strpos($fileName, "."));

$displayContent;

if ($page == "index") {
   $displayContent = DisplayContent::ALL;
} else if ($page == "main_content" ){
   $displayContent = DisplayContent::MAIN_CONTENT;
} else if ($page == "nav_bar" ){
   $displayContent = DisplayContent::NAV_BAR;
} else if ($page == "none" ){
   $displayContent = DisplayContent::NONE;
} else if ($page == "side_bar" ){
   $displayContent = DisplayContent::SIDE_BAR;
}

?>

