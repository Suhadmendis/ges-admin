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

  if ($_GET['url'] == "registration"){
    include 'm_registration.php';
  }

  if ($_GET['url'] == "pay"){
    include 'm_payment.php';
  }

  if ($_GET['url'] == "batch"){
    include 'm_batch.php';
  }

  if ($_GET['url'] == "course"){
    include 'm_course.php';
  }

  if ($_GET['url'] == "content"){
    include 'm_content.php';
  }

  if ($_GET['url'] == "faculty"){
    include 'm_faculty.php';
  }

  if ($_GET['url'] == "lecturer"){
    include 'm_lecturer.php';
  }
  












  if ($_GET['url'] == ""){
    include 'dashboard.php';
  }

}else{
	include 'dashboard.php'; 
}

include 'foot_res.php'; ?>
