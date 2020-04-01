<?php 
include './CheckCookie.php';
$cookie_name = "user";
$mo = "";
if (isset($_COOKIE[$cookie_name])) {

    $mo = chk_cookie($_COOKIE[$cookie_name]);

    if ($mo == "ok") {
        // header('Location: ' . "home.php");
        // exit();
    }
}else{
  header('Location: ' . "auth.php");
  exit();
}
// -----------------------
include 'head_res.php'; 
if (isset($_GET['url'])) {

  if ($_GET['url'] == "session"){
    include 'm_session.php';
  }

  if ($_GET['url'] == "registration"){
    include 'm_registration.php';
  }

  if ($_GET['url'] == "pay"){
    include 'm_payment.php';
  }

  if ($_GET['url'] == "sess_allo"){
    include 'm_session_allo.php';
  }

}else{
	// include 'dashboard.php'; 
}

include 'foot_res.php'; ?>
