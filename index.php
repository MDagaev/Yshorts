<?php
require_once ("database.php");
require_once ("models/videoget.php");
require_once ("models/videoadd.php");
require_once ("models/videodelete.php");

$link = db_connect();
$video = videoget($link);

include ("views/index.php");
?>
