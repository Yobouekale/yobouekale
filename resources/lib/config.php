<?php


define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "yoboukale");

$personal_assistant = "Kim";
$salt1 = "~#ana";
$salt2 = "$@becoah#";


/*
 To make path esealy accessible
 * Template
 * Libraries
 * posts uploads
 * user uploads
 * admin uploads
*/

defined("RESOURCES_PATH") or define("CONFIG_PATH", realpath(dirname(__FILE__). '/resources/')); //the resources path
defined("LIB_PATH") or define("LIB_PATH", realpath(dirname(__FILE__). '/resources/lib')); //the lib path

/*
    Error reporting.
*/
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);

/*
 * Function to sanitize string
 * With this, no sql injections
 * Haaaahaa, sorry hackers
 * */

function sanitizeString($var)
{
    $var = strip_tags($var);
    $var = htmlentities($var);
    $var = stripslashes($var);
    return $var;
}

function cryptObject($arg1, $arg2, $arg3) {
    $crypted = md5("$arg1$arg2$arg3");
    return $crypted;
}

function seoUrl($string) {
    //Lower case everything
    $string = strtolower($string);
    //Make alphanumeric (removes all other characters)
    $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
    //Clean up multiple dashes or whitespaces
    $string = preg_replace("/[\s-]+/", " ", $string);
    //Convert whitespaces and underscore to dash
    $string = preg_replace("/[\s_]/", "-", $string);
    $randNumber = rand(0,9999). "-";
    return $randNumber.$string;
}

function friendlyTime($given_time)
{
    $year = substr($given_time, '0', '4');
    $month = substr($given_time, '5', '2');
    $day = substr($given_time, '8', '2');
    $time = substr($given_time, '10', '6');

    if($month == '01')
        $friendly_month = "Janvier";
    elseif($month == '02')
        $friendly_month = "Fevrier";
    elseif($month == '03')
        $friendly_month = "Mars";
    elseif($month == '04')
        $friendly_month = "Avril";
    elseif($month == '05')
        $friendly_month = "Mai";
    elseif($month == '06')
        $friendly_month = "Juin";
    elseif($month == '07')
        $friendly_month = "Juillet";
    elseif($month == '08')
        $friendly_month = "Aout";
    elseif($month == '09')
        $friendly_month = "Septembre";
    elseif($month == '10')
        $friendly_month = "Octobrer";
    elseif($month == '11')
        $friendly_month = "Novembre";
    elseif($month == '12')
        $friendly_month = "Decembre";

    return $day .' '. $friendly_month .' '. $year;
}

function friendlyTimeBr($given_time)
{
    $year = substr($given_time, '0', '4');
    $month = substr($given_time, '5', '2');
    $day = substr($given_time, '8', '2');
    $time = substr($given_time, '10', '6');

    if($month == '01')
        $friendly_month = "Janvier";
    elseif($month == '02')
        $friendly_month = "Fevrier";
    elseif($month == '03')
        $friendly_month = "Mars";
    elseif($month == '04')
        $friendly_month = "Avril";
    elseif($month == '05')
        $friendly_month = "Mai";
    elseif($month == '06')
        $friendly_month = "Juin";
    elseif($month == '07')
        $friendly_month = "Juillet";
    elseif($month == '08')
        $friendly_month = "Aout";
    elseif($month == '09')
        $friendly_month = "Septembre";
    elseif($month == '10')
        $friendly_month = "Octobrer";
    elseif($month == '11')
        $friendly_month = "Novembre";
    elseif($month == '12')
        $friendly_month = "Decembre";

    return $day .' '. $friendly_month .' '. $year .' </br> '. $time;
}

function curPageName() {
    return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

?>