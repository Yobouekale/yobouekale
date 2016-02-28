<?php
/**
 * Created by Sinaly.
 * User: paladdino
 * Date: 4/19/2015
 * Time: 11:06 PM
 */
require_once("resources/lib/autoload.inc.php");
$logout = new Login();
$logout->destroySession();

header("location:index.php");
?>