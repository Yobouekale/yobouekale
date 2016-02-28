<?php
require_once('config.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function __autoload($classname)
{
    require_once(strtolower($classname).'.class.php');
}


if(isset($_SESSION['token']))
{
    $loggedin = TRUE;
    $loggedInUserToken = $_SESSION['token'];

    $getLoggedInUserDetails = new Users();
    $loggegInUserInfo = $getLoggedInUserDetails->fetchUser($loggedInUserToken);
    $loggedInUserDetails = $getLoggedInUserDetails->fetchUserDetails($loggedInUserToken);

    $loggedInUser_username = $loggegInUserInfo[0]['username'];
    $loggedInUser_email = $loggegInUserInfo[0]['email'];
    $loggedInUser_userPerm = $loggegInUserInfo[0]['user_perm'];
    $loggedInUser_forumPerm = $loggegInUserInfo[0]['forum_perm'];
    $loggedInUser_adminPerm = $loggegInUserInfo[0]['admin_perm'];
    $loggedInUser_elearningPerm = $loggegInUserInfo[0]['elearning_perm'];
    $loggedInUser_lestJoin = $loggegInUserInfo[0]['last_join'];
    $loggedInUser_joinDate = $loggegInUserInfo[0]['join_date'];

    $loggedInUser_fullname = $loggedInUserDetails [0]['fullname'];
    $loggedInUser_image = $loggedInUserDetails [0]['image'];
    if($loggedInUser_image == ""){
        $loggedInUser_image = "user-pp.png";
    }
    $loggedInUser_signature = $loggedInUserDetails [0]['signature'];
    $loggedInUser_mobile = $loggedInUserDetails [0]['mobile'];
    $loggedInUser_gender = $loggedInUserDetails [0]['gender'];

    /*$select_CU = queryMysql("SELECT * FROM users WHERE activation_token='$user_id'");
    $CU_content = mysql_fetch_array($select_CU);

    $user_first_name = $CU_content['first_name'];
    $user_last_name = $CU_content['last_name'];
    $user_email = $CU_content['email'];
    $user_pseudo = $CU_content['pseudo'];
    $user_img = $CU_content['img'];
    if($user_img == "")
    {
        $user_img = "user-pp.png";
    }

    $user_details = $CU_content['attr'];*/
}

else $loggedin = FALSE;


function destroySession()
{
    $_SESSION=array();

    if (session_id() != "" || isset($_COOKIE[session_name()]))
        setcookie(session_name(), '', time()-2592000, '/');

    session_destroy();
}

?>