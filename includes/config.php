<?php

/********************************************************************/
/* Configurations for "Svartselet", author: Fredrik Larsson */
/********************************************************************/

date_default_timezone_set("Europe/Stockholm");

/* Page title
---------------------------------------------------------------------*/
$page_title = "Svartselet.";

/* Footer-info
---------------------------------------------------------------------*/
function footer(){
    $year = date("Y");
    echo "<p id='footer'>©" . $year . "svartselet.se</p>";
}
?>