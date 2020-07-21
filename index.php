<?php
$lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
switch($lang) {
    case "de-de":
        header("Location: PATHTODE-DE");
        break;
    default:
        header("Location: PATHTODEFAULT");
        break;
}

?>
