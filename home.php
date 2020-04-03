<?php
include './CheckCookie.php';
require_once ('connection_sql.php');
$cookie_name = "user";
if (isset($_COOKIE[$cookie_name])) {
    $mo = chk_cookie($_COOKIE[$cookie_name]);
    if ($mo != "ok") {
        // header('Location: ' . "index.php");
        // exit();
    }
} else {
    // header('Location: ' . "index.php");
    // exit();
}


?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">
  <head>
    <!-- Mobile Specific Meta -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png" />
    <!-- Author Meta -->
    <meta name="author" content="colorlib" />
    <!-- Meta Description -->
    <meta name="description" content="" />
    <!-- Meta Keyword -->
    <meta name="keywords" content="" />
    <!-- meta character set -->
    <meta charset="UTF-8" />
    <!-- Site Title -->
    <title>Education</title>

    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700"
      rel="stylesheet"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="res/css/linearicons.css" />
    <link rel="stylesheet" href="res/css/font-awesome.min.css" />
    <link rel="stylesheet" href="res/css/bootstrap.css" />
    <link rel="stylesheet" href="res/css/magnific-popup.css" />
    <link rel="stylesheet" href="res/css/nice-select.css" />
    <link rel="stylesheet" href="res/css/animate.min.css" />
    <link rel="stylesheet" href="res/css/owl.carousel.css" />
    <link rel="stylesheet" href="res/css/jquery-ui.css" />
    <link rel="stylesheet" href="res/css/main.css" />
    <link rel="stylesheet" href="res/css/custom.css" />

    <style>
      .info {
        position: absolute;
        top: 0;
        right: 0;
        z-index: 9999999;
        margin: 1.5rem;
      }
      @import url(https://fonts.googleapis.com/css?family=Montserrat:700);
      *,
      *::before,
      *::after {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
        border: 0;
      }
      html {
        font-size: 10px;
        font-size: calc(5px + 0.4vw);
      }

      /* Slider style */
      .cd-slider {
        position: relative;
        width: 100%;
        height: 100vh;
        overflow: hidden;
      }
      .cd-slider.ie9 nav div span {
        display: none;
      }
      .cd-slider ul li {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        visibility: hidden;
        -webkit-transition: visibility 0s 0.6s;
        transition: visibility 0s 0.6s;
      }
      .cd-slider ul li::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        border-radius: 100%;
        width: 100vw;
        height: 135vh;
        border: solid rgba(0, 0, 0, 0.2);
        border-width: 0;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        pointer-events: none;
        -webkit-transition: border-width 0.4s 0.6s;
        transition: border-width 0.4s 0.6s;
      }
      .content {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-position: 50% 100%;
        background-size: auto 100%;
        background-repeat: no-repeat;
        mix-blend-mode: lighten;
        opacity: 0;
        -webkit-transform: scale(1.2);
        transform: scale(1.2);
        -webkit-transition: opacity 0.4s 0.6s, -webkit-transform 0.4s 0.6s;
        transition: opacity 0.4s 0.6s, -webkit-transform 0.4s 0.6s;
        transition: opacity 0.4s 0.6s, transform 0.4s 0.6s;
        transition: opacity 0.4s 0.6s, transform 0.4s 0.6s,
          -webkit-transform 0.4s 0.6s;
      }
      .content blockquote {
        position: absolute;
        bottom: 5%;
        left: 4%;
        z-index: 2;
        max-width: 45%;
      }
      blockquote p {
        font-size: 3rem;
        margin-bottom: 2rem;
        line-height: 50px;
        color: #fff;
      }
      blockquote span {
        font-size: 1.4rem;
      }
      /* current slide
---------------------------------*/
      .cd-slider li.current_slide {
        visibility: visible;
      }
      .cd-slider li.current_slide::before {
        border-width: 16rem;
      }
      .cd-slider li.current_slide .content {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1);
      }
      /* nav
---------------------------------*/
      nav div {
        position: absolute;
        top: 50%;
        left: 4%;
        width: 5rem;
        height: 5rem;
        margin-top: -2.5rem;
        list-style: none;
      }
      nav div:last-of-type {
        left: auto;
        right: 4%;
      }
      .prev,
      .next {
        position: relative;
        z-index: 100;
        width: 100%;
        height: 100%;
        display: block;
        border-radius: 100%;
        -webkit-transition: box-shadow 0.3s;
        transition: box-shadow 0.3s;
      }
      .prev::before,
      .prev::after,
      .next::before,
      .next::after {
        content: '';
        position: absolute;
        left: 43%;
        background: #fff;
        width: 0.4rem;
        min-width: 3px;
        border-radius: 3px;
        height: 34%;
      }
      .prev::before {
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        top: 24%;
      }
      .prev::after {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        bottom: 24%;
      }
      .next::before,
      .next::after {
        left: auto;
        right: 43%;
      }
      .next::before {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        top: 24%;
      }
      .next::after {
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        bottom: 24%;
      }
      .prev:hover,
      .next:hover {
        box-shadow: 0 0 0 1rem rgba(0, 0, 0, 0.15);
      }
      nav > div > span {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: 100%;
        z-index: 5;
        pointer-events: none;
        will-change: width, height;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        -webkit-transition: width 0.6s, height 0.6s;
        transition: width 0.6s, height 0.6s;
      }
    </style>

    <style>
      .slick-slide {
        margin: 0px 20px;
      }

      .slick-slide img {
        width: 100%;
      }

      .slick-slider {
        position: relative;
        display: block;
        box-sizing: border-box;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-touch-callout: none;
        -khtml-user-select: none;
        -ms-touch-action: pan-y;
        touch-action: pan-y;
        -webkit-tap-highlight-color: transparent;
      }

      .slick-list {
        position: relative;
        display: block;
        overflow: hidden;
        margin: 0;
        padding: 0;
      }
      .slick-list:focus {
        outline: none;
      }
      .slick-list.dragging {
        cursor: pointer;
        cursor: hand;
      }

      .slick-slider .slick-track,
      .slick-slider .slick-list {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
      }

      .slick-track {
        position: relative;
        top: 0;
        left: 0;
        display: block;
      }
      .slick-track:before,
      .slick-track:after {
        display: table;
        content: '';
      }
      .slick-track:after {
        clear: both;
      }
      .slick-loading .slick-track {
        visibility: hidden;
      }

      .slick-slide {
        display: none;
        float: left;
        height: 100%;
        min-height: 1px;
      }
      [dir='rtl'] .slick-slide {
        float: right;
      }
      .slick-slide img {
        display: block;
      }
      .slick-slide.slick-loading img {
        display: none;
      }
      .slick-slide.dragging img {
        pointer-events: none;
      }
      .slick-initialized .slick-slide {
        display: block;
      }
      .slick-loading .slick-slide {
        visibility: hidden;
      }
      .slick-vertical .slick-slide {
        display: block;
        height: auto;
        border: 1px solid transparent;
      }
      .slick-arrow.slick-hidden {
        display: none;
      }
    </style>
  </head>
  <body>
    <?php include 'header.php' ?>
    <!-- #header -->

    <!-- start banner Area -->
    <section class=" relative" id="home">
      <section class="cd-slider">
        <ul>
          <li data-color="rgb(33, 33, 74)">
            <div
              class="content"
              style="background-image:url(https://images.pexels.com/photos/1438081/pexels-photo-1438081.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940)"
            >
              <blockquote>
                <p>
                  Internationally Recognized
                </p>
              </blockquote>
            </div>
          </li>
          <li data-color="rgb(33, 33, 74)">
            <div
              class="content"
              style="background-image:url(https://images.pexels.com/photos/933964/pexels-photo-933964.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940)"
            >
              <blockquote>
                <p>
                  Skilled Academic Team
                </p>
              </blockquote>
            </div>
          </li>
          <li data-color="rgb(33, 33, 74)">
            <div
              class="content"
              style="background-image:url(https://images.pexels.com/photos/1438081/pexels-photo-1438081.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940)"
            >
              <blockquote>
                <p>
                  Range of Options
                </p>
              </blockquote>
            </div>
          </li>
        </ul>
        <nav>
          <div><a class="prev" href="#"></a></div>
          <div><a class="next" href="#"></a></div>
        </nav>
      </section>
    </section>
    <!-- End banner Area -->

    <!-- Start feature Area -->
    <section class="feature-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="single-feature">
              <div class="title">
                <h4>Campus</h4>
              </div>
              <div class="desc-wrap">
                <p>
                  GIHE Center for advanced studies is a Division of Global
                  Educational Services Lanka Private Limited that was
                  established in 2011. GIHE is the comprehensive education
                  conglomerate in Sri Lanka established to fulfill the growing
                  demand for professional qualifications and higher education.
                  We offer high quality and affordable International
                  Qualifications partnered with International Organizations and
                  Awarding bodies/Universities.
                </p>
                <p>
                  GIHE provides comprehensive international educational programs
                  ranging from Foundation to Masters level and professional
                  services. We offer a wide range of globally recognized higher
                  education qualifications that leads to successful career
                  options for students after O/Level and A/Level.
                </p>
                <p>
                  GIHE also provides alternative pathways for mature student’s
                  and industry professionals. We enable them to acquire
                  different levels of academic qualifications by investing their
                  industry experience. These qualifications enable them to
                  achieve overseas University admission, Industrial training or
                  a Permanent Resident pathway.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="single-feature">
              <div class="title">
                <h4>Freedo</h4>
              </div>
              <div class="desc-wrap">
                <p>
                  Freedo is our online platform to offer flexible study options
                  to students in a diverse range of qualifications with
                  internationally recognized universities. Students have the
                  opportunity to study at their convenience from any part of the
                  world.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="single-feature">
              <div class="title">
                <h4>Study Abroad</h4>
              </div>
              <div class="desc-wrap">
                <p>
                  GES International Recruitment is your one-stop solution for
                  all your international student migration needs ranging from
                  educational counselling to arriving in respective countries.
                  GES International Recruitment is partnered with well reputed
                  international university consortiums to provide a wide range
                  of direct university placements with higher benefits for
                  students. This allows students to get an unbiased university
                  placement with maximum discounts and scholarships. Our team of
                  qualified and highly skilled professionals will work together
                  to provide an immigration service par excellence.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <section
      class="popular-course-area section-gap"
      data-aos="fade-up"
      data-aos-duration="1000"
    >
      <div class="container">
        <div class="row">
          <div class="active-popular-carusel">
            <div class="single-popular-carusel">
              <div class="thumb-wrap relative">
                <div class="thumb relative">
                  <div class="overlay overlay-bg"></div>
                  <img class="img-fluid" src="img/p1.png" alt="" />
                </div>
              </div>
            </div>
            <div class="single-popular-carusel">
              <div class="thumb-wrap relative">
                <div class="thumb relative">
                  <div class="overlay overlay-bg"></div>
                  <img class="img-fluid" src="img/p2.png" alt="" />
                </div>
              </div>
            </div>
            <div class="single-popular-carusel">
              <div class="thumb-wrap relative">
                <div class="thumb relative">
                  <div class="overlay overlay-bg"></div>
                  <img class="img-fluid" src="img/p3.png" alt="" />
                </div>
              </div>
            </div>
            <div class="single-popular-carusel">
              <div class="thumb-wrap relative">
                <div class="thumb relative">
                  <div class="overlay overlay-bg"></div>
                  <img class="img-fluid" src="img/p4.jpg" alt="" />
                </div>
              </div>
            </div>
            <div class="single-popular-carusel">
              <div class="thumb-wrap relative">
                <div class="thumb relative">
                  <div class="overlay overlay-bg"></div>
                  <img class="img-fluid" src="img/p5.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <section class="customer-logos slider">
      <div class="slide"><img src="img/uni/1.png" /></div>
      <div class="slide"><img src="img/uni/2.jpg" /></div>
      <div class="slide"><img src="img/uni/3.png" /></div>
      <div class="slide"><img src="img/uni/4.jpg" /></div>
      <div class="slide"><img src="img/uni/5.jpg" /></div>
      <div class="slide"><img src="img/uni/6.png" /></div>
      <div class="slide"><img src="img/uni/7.png" /></div>
      <div class="slide"><img src="img/uni/8.png" /></div>
      <div class="slide"><img src="img/uni/9.png" /></div>
      <div class="slide"><img src="img/uni/10.png" /></div>
      <div class="slide"><img src="img/uni/11.png" /></div>
      <div class="slide"><img src="img/uni/12.png" /></div>
      <div class="slide"><img src="img/uni/13.png" /></div>
      <div class="slide"><img src="img/uni/14.png" /></div>
      <div class="slide"><img src="img/uni/15.jpg" /></div>
      <div class="slide"><img src="img/uni/16.png" /></div>
      <div class="slide"><img src="img/uni/17.png" /></div>
      <div class="slide"><img src="img/uni/18.png" /></div>
      <div class="slide"><img src="img/uni/19.png" /></div>
      <div class="slide"><img src="img/uni/20.png" /></div>
      <div class="slide"><img src="img/uni/21.png" /></div>
      <div class="slide"><img src="img/uni/22.png" /></div>
      <div class="slide"><img src="img/uni/23.png" /></div>
      <div class="slide"><img src="img/uni/24.png" /></div>
      <div class="slide"><img src="img/uni/25.png" /></div>
      <div class="slide"><img src="img/uni/26.png" /></div>
      <div class="slide"><img src="img/uni/27.jpg" /></div>
      <div class="slide"><img src="img/uni/28.jpg" /></div>
      <div class="slide"><img src="img/uni/29.png" /></div>
      <div class="slide"><img src="img/uni/30.jpg" /></div>
      <div class="slide"><img src="img/uni/31.png" /></div>
      <div class="slide"><img src="img/uni/32.png" /></div>
      <div class="slide"><img src="img/uni/33.png" /></div>
      <div class="slide"><img src="img/uni/34.png" /></div>
    </section>
    <!-- End feature Area -->
    <!-- Set up your HTML -->

    <section class="why-ges">
      <div class="why-ges-wrapper">
        <div class="why-ges-first">
          <img src="img/Consultant-female.jpg" alt="" />
        </div>
        <div class="why-ges-second" data-aos="zoom-in" data-aos-duration="1000">
          <p>
            We at GES Education Group strive to provide our students with the
            support they need to realize their potential in an environment where
            they can obtain a Globally Recognized Qualifications to be
            successful professionals in any part of the world. We focus on
            globalization as well as glocalization to ensure success of the
            students as well as the benefit of our country.
          </p>
        </div>
      </div>
    </section>

    <section class="ges-what-we-do">
      <h1 class="title-center">Why GIHE Campus?</h1>
      <div class="what-we-do-wrapper">
        <div
          class="what-we-do-card"
          data-aos="flip-left"
          data-aos-duration="1000"
        >
          <img
            src="https://images.pexels.com/photos/1079033/pexels-photo-1079033.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
            alt=""
          />

          <div class="card-des">
            <h2>Internationally Recognized</h2>
            <p>
              We have affiliated with a large number of Universities, Colleges
              and Study Groups across the world to offer a wide range of
              internationally recognized qualifications.
            </p>
          </div>
        </div>
        <div
          class="what-we-do-card"
          data-aos="flip-left"
          data-aos-duration="1000"
        >
          <img
            src="https://images.pexels.com/photos/1181622/pexels-photo-1181622.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
            alt=""
          />
          <div class="card-des">
            <h2>Skilled Academic Team</h2>
            <p>
              Our strong academic and management team consists of professionals
              who are also practitioners of their respective industry with
              valuable experience both locally and internationally.
            </p>
          </div>
        </div>
        <div
          class="what-we-do-card"
          data-aos="flip-right"
          data-aos-duration="1000"
        >
          <img
            src="https://images.pexels.com/photos/356043/pexels-photo-356043.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
            alt=""
          />
          <div class="card-des">
            <h2>Range of Options</h2>
            <p>
              We offer a wide range of Higher Education Programs which allows
              students to choose from a large selection of subjects in a wide
              range of Universities.
            </p>
          </div>
        </div>
        <div
          class="what-we-do-card"
          data-aos="flip-right"
          data-aos-duration="1000"
        >
          <img
            src="https://images.pexels.com/photos/7375/startup-photos.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
            alt=""
          />
          <div class="card-des">
            <h2>Flexibility</h2>
            <p>
              Students have the options of studying programs and attending
              lectures online and offline based on their convenience.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Start popular-course Area -->
    <section class="our-faculties-ges">
      <h3 class="title-center" style="margin-bottom: 2rem;font-size: 2rem;">
        OUR FACULTIES
      </h3>
      <div class="box-el">
        <div
          class="box"
          style="background-image: url('https://images.pexels.com/photos/1054397/pexels-photo-1054397.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');"
        >
          <div class="box-inner">
            <div class="the-content-box">
              <div class="content-box-inner">
                <h1>School of Management</h1>
                <hr />
                <p>
                  At GIHE School of Management we offer a wide range of business
                  programs from globally recognized universities. We provide
                  modern teaching and lectures that guarantee the compatibility
                  to our students future challenges as leaders of the industry.
                </p>
                <a href="./School-of-Management.php"><span>Read More</span></a>
              </div>
            </div>
          </div>
        </div>
        <div
          class="box"
          style="background-image: url('https://images.pexels.com/photos/7102/notes-macbook-study-conference.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');"
        >
          <div class="box-inner">
            <div class="the-content-box">
              <div class="content-box-inner">
                <h1>School of Technology</h1>
                <hr />
                <p>
                  GIHE School of Technology in partnership with Quotro Pvt. Ltd.
                  offers a unique study program with work placements. This
                  unique program allows students to gain international
                  qualifications in different levels and relevant work
                  experience to fulfill requirements to enter global work
                  placements.
                </p>
                <a href="./information-technology.php"
                  ><span>Read More</span></a
                >
              </div>
            </div>
          </div>
        </div>
        <div
          class="box"
          style="background-image: url('https://images.pexels.com/photos/3646172/pexels-photo-3646172.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');"
        >
          <div class="box-inner">
            <div class="the-content-box">
              <div class="content-box-inner">
                <h1>School of Law</h1>
                <hr />
                <p>
                  GIHE School of Law offers high quality legal education in an
                  encouraging and interactive learning environment. We ensure
                  that we produce legal professionals who are able to
                  constructively contribute to the development of the
                  profession.
                </p>
                <a href="./School-of-Law.php"><span>Read More</span></a>
              </div>
            </div>
          </div>
        </div>
        <div
          class="box"
          style="background-image: url('https://images.pexels.com/photos/3931501/pexels-photo-3931501.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');"
        >
          <div class="box-inner">
            <div class="the-content-box">
              <div class="content-box-inner">
                <h1>School of Professional Studies</h1>
                <hr />
                <p>
                  At GIHE School of Professional Studies we offer students
                  industry specified specialized programs to gain and enhance
                  the skills and support they need to move their careers and
                  industries forward. We offer high quality, internationally
                  recognized programs in a dynamic, supportive learning
                  environment.
                </p>
                <a href="./School-of-Professional-Studies.php"
                  ><span>Read More</span></a
                >
              </div>
            </div>
          </div>
        </div>
        <div
          class="box"
          style="background-image: url('https://images.pexels.com/photos/694740/pexels-photo-694740.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');"
        >
          <div class="box-inner">
            <div class="the-content-box">
              <div class="content-box-inner">
                <h1>School of Language and Development</h1>
                <hr />
                <p>
                  GIHE School of Language and Development is designed to assist
                  students in expanding their language and communication skills
                  by using modern techniques to explore a new world of
                  opportunities. Our main goal is to provide language training
                  with highly qualified professionals to ensure our students
                  success.
                </p>
                <a href="./School-of-Language-and-Development.php"
                  ><span>Read More</span></a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End popular-course Area -->
    <!-- Start blog Area -->
    <!-- <section class="blog-area section-gap" id="blog">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="menu-content pb-70 col-lg-8">
            <div class="title text-center">
              <h1 class="mb-10">Latest posts from our Blog</h1>
              <p>In the history of modern astronomy there is.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 single-blog">
            <div class="thumb">
              <img class="img-fluid" src="img/b1.jpg" alt="" />
            </div>
            <p class="meta">25 April, 2018 | By <a href="#">Mark Wiens</a></p>
            <a href="blog-single.php">
              <h5>Addiction When Gambling Becomes A Problem</h5>
            </a>
            <p>
              Computers have become ubiquitous in almost every facet of our
              lives. At work, desk jockeys spend hours in front of their.
            </p>
            <a
              href="#"
              class="details-btn d-flex justify-content-center align-items-center"
              ><span class="details">Details</span
              ><span class="lnr lnr-arrow-right"></span
            ></a>
          </div>
          <div class="col-lg-3 col-md-6 single-blog">
            <div class="thumb">
              <img class="img-fluid" src="img/b2.jpg" alt="" />
            </div>
            <p class="meta">25 April, 2018 | By <a href="#">Mark Wiens</a></p>
            <a href="blog-single.php">
              <h5>Computer Hardware Desktops And Notebooks</h5>
            </a>
            <p>
              Ah, the technical interview. Nothing like it. Not only does it
              cause anxiety, but it causes anxiety for several different
              reasons.
            </p>
            <a
              href="#"
              class="details-btn d-flex justify-content-center align-items-center"
              ><span class="details">Details</span
              ><span class="lnr lnr-arrow-right"></span
            ></a>
          </div>
          <div class="col-lg-3 col-md-6 single-blog">
            <div class="thumb">
              <img class="img-fluid" src="img/b3.jpg" alt="" />
            </div>
            <p class="meta">25 April, 2018 | By <a href="#">Mark Wiens</a></p>
            <a href="blog-single.php">
              <h5>Make Myspace Your Best Designed Space</h5>
            </a>
            <p>
              Plantronics with its GN Netcom wireless headset creates the next
              generation of wireless headset and other products such as
              wireless.
            </p>
            <a
              href="#"
              class="details-btn d-flex justify-content-center align-items-center"
              ><span class="details">Details</span
              ><span class="lnr lnr-arrow-right"></span
            ></a>
          </div>
          <div class="col-lg-3 col-md-6 single-blog">
            <div class="thumb">
              <img class="img-fluid" src="img/b4.jpg" alt="" />
            </div>
            <p class="meta">25 April, 2018 | By <a href="#">Mark Wiens</a></p>
            <a href="blog-single.php">
              <h5>Video Games Playing With Imagination</h5>
            </a>
            <p>
              About 64% of all on-line teens say that do things online that they
              wouldn’t want their parents to know about. 11% of all adult
              internet
            </p>
            <a
              href="#"
              class="details-btn d-flex justify-content-center align-items-center"
              ><span class="details">Details</span
              ><span class="lnr lnr-arrow-right"></span
            ></a>
          </div>
        </div>
      </div>
    </section> -->
    <!-- End blog Area -->
    <!-- Start search-course Area -->
    <!-- <section
      class="search-course-area relative"
      data-aos="fade-up"
      data-aos-duration="1000"
    >
      <div class="overlay overlay-bg"></div>
      <div class="container" style="padding: 3rem;">
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-12 col-md-6 search-course-left">
            <h1 class="text-white">
              Get reduced fee <br />
              during this Summer!
            </h1>
            <p>
              inappropriate behavior is often laughed off as “boys will be
              boys,” women face higher conduct standards especially in the
              workplace. That’s why it’s crucial that, as women, our behavior on
              the job is beyond reproach.
            </p>
            <div class="row details-content">
              <div class="col single-detials">
                <span class="lnr lnr-graduation-hat"></span>
                <a href="#"><h4>Expert Instructors</h4></a>
                <p>
                  Usage of the Internet is becoming more common due to rapid
                  advancement of technology and power.
                </p>
              </div>
              <div class="col single-detials">
                <span class="lnr lnr-license"></span>
                <a href="#"><h4>Certification</h4></a>
                <p>
                  Usage of the Internet is becoming more common due to rapid
                  advancement of technology and power.
                </p>
              </div>
              <div class="col single-detials">
                <span class="lnr lnr-license"></span>
                <a href="#"><h4>Certification</h4></a>
                <p>
                  Usage of the Internet is becoming more common due to rapid
                  advancement of technology and power.
                </p>
              </div>
              <div class="col single-detials">
                <span class="lnr lnr-license"></span>
                <a href="#"><h4>Certification</h4></a>
                <p>
                  Usage of the Internet is becoming more common due to rapid
                  advancement of technology and power.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- End search-course Area -->

    <!-- Start upcoming-event Area -->
    <!-- <section
      class="upcoming-event-area section-gap"
      data-aos="fade-up"
      data-aos-duration="1000"
    >
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="menu-content pb-70 col-lg-8">
            <div class="title text-center">
              <h1 class="mb-10">Upcoming Events of our Institute</h1>
              <p>If you are a serious astronomy fanatic like a lot of us</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="active-upcoming-event-carusel">
            <div class="single-carusel row align-items-center">
              <div class="col-12 col-md-6 thumb">
                <img class="img-fluid" src="img/p1.jpg" alt="" />
              </div>
              <div class="detials col-12 col-md-6">
                <p>25th February, 2018</p>
                <a href="#"><h4>The Universe Through A Child S Eyes</h4></a>
                <p>
                  For most of us, the idea of astronomy is something we directly
                  connect to “stargazing”, telescopes and seeing magnificent
                  displays in the heavens.
                </p>
              </div>
            </div>
            <div class="single-carusel row align-items-center">
              <div class="col-12 col-md-6 thumb">
                <img class="img-fluid" src="img/e2.jpg" alt="" />
              </div>
              <div class="detials col-12 col-md-6">
                <p>25th February, 2018</p>
                <a href="#"><h4>The Universe Through A Child S Eyes</h4></a>
                <p>
                  For most of us, the idea of astronomy is something we directly
                  connect to “stargazing”, telescopes and seeing magnificent
                  displays in the heavens.
                </p>
              </div>
            </div>
            <div class="single-carusel row align-items-center">
              <div class="col-12 col-md-6 thumb">
                <img class="img-fluid" src="img/e1.jpg" alt="" />
              </div>
              <div class="detials col-12 col-md-6">
                <p>25th February, 2018</p>
                <a href="#"><h4>The Universe Through A Child S Eyes</h4></a>
                <p>
                  For most of us, the idea of astronomy is something we directly
                  connect to “stargazing”, telescopes and seeing magnificent
                  displays in the heavens.
                </p>
              </div>
            </div>
            <div class="single-carusel row align-items-center">
              <div class="col-12 col-md-6 thumb">
                <img class="img-fluid" src="img/e1.jpg" alt="" />
              </div>
              <div class="detials col-12 col-md-6">
                <p>25th February, 2018</p>
                <a href="#"><h4>The Universe Through A Child S Eyes</h4></a>
                <p>
                  For most of us, the idea of astronomy is something we directly
                  connect to “stargazing”, telescopes and seeing magnificent
                  displays in the heavens.
                </p>
              </div>
            </div>
            <div class="single-carusel row align-items-center">
              <div class="col-12 col-md-6 thumb">
                <img class="img-fluid" src="img/e2.jpg" alt="" />
              </div>
              <div class="detials col-12 col-md-6">
                <p>25th February, 2018</p>
                <a href="#"><h4>The Universe Through A Child S Eyes</h4></a>
                <p>
                  For most of us, the idea of astronomy is something we directly
                  connect to “stargazing”, telescopes and seeing magnificent
                  displays in the heavens.
                </p>
              </div>
            </div>
            <div class="single-carusel row align-items-center">
              <div class="col-12 col-md-6 thumb">
                <img class="img-fluid" src="img/e1.jpg" alt="" />
              </div>
              <div class="detials col-12 col-md-6">
                <p>25th February, 2018</p>
                <a href="#"><h4>The Universe Through A Child S Eyes</h4></a>
                <p>
                  For most of us, the idea of astronomy is something we directly
                  connect to “stargazing”, telescopes and seeing magnificent
                  displays in the heavens.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- End upcoming-event Area -->

    <!-- Start review Area -->
    <section
      class="review-area section-gap relative"
      data-aos="fade-up"
      data-aos-duration="1000"
    >
      <div class="overlay overlay-bg"></div>
      <h3 class="student-review-title">
        WHAT STUDENTS HAVE TO SAY...
      </h3>
      <div class="container">
        <div class="row">
          <div class="active-review-carusel">
            <div class="single-review item">
              <div class="title justify-content-start d-flex">
                <a href="#"><h4>Deneth Silva</h4></a>
                <div class="star">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                </div>
              </div>
              <p>
                I came to this institution as student right after my A
                levels.After considering my qualifications and ectra curricular
                activities I was given 100% scholarship to study in the Biggest
                University in China , Zhengzhou University. The well educated
                consultants guided me in both the university application and the
                VISA application. I got a 100% scholarship to study software
                engineering.I would encourage you all to visit there and
                experience the most valuable service that you can ever receive
                to build up your future. Once again I thank the GES
                international for showing and helping me to access my future
                path and I wish them all the very best in there future
                endeavours.
              </p>
            </div>
            <div class="single-review item">
              <div class="title justify-content-start d-flex">
                <a href="#"><h4>Richard Samarawickrama</h4></a>
                <div class="star">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                </div>
              </div>
              <p>
                Joining hands with GES has no doubt been one of the best
                decisions I've made in my life. GES is very customer friendly,
                convenient as well as a 100% POSITIVE result oriented work
                force. So many opportunities have opened up for me with their
                consultancy and guidance. My English skills improved and I was
                able to get an overall score of 8 out of 9 for my IELTS
                Examination, with which I will soon migrate to a Western
                country. None of this would have been possible without GES, so
                with 200% confidence I recommend anyone with plans to go abroad
                to join hands with GES.
              </p>
            </div>
            <div class="single-review item">
              <div class="title justify-content-start d-flex">
                <a href="#"><h4>Yasantha Subodhana</h4></a>
                <div class="star">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                </div>
              </div>
              <p>
                I came to the GES International in January. I had a chance to
                learn English in that month. After that I started the process to
                go to Australia .I was able to finish that within a month and
                also i was able to have my visa within two months. Actually I am
                very happy about that. I am to go to Australia this April . I
                got this chance through GES International . Therefore I say
                thanks to GES International
              </p>
            </div>
            <div class="single-review item">
              <div class="title justify-content-start d-flex">
                <a href="#"><h4>Avishka Nimsara</h4></a>
                <div class="star">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                </div>
              </div>
              <p>
                Good place to improve English language.
              </p>
            </div>
            <div class="single-review item">
              <div class="title justify-content-start d-flex">
                <a href="#"><h4>Mohomed Rifan</h4></a>
                <div class="star">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                </div>
              </div>
              <p>
                Well planned and organized place. 100% accurate information.
                Trustworthy.
              </p>
            </div>
            <div class="single-review item">
              <div class="title justify-content-start d-flex">
                <a href="#"><h4>Thinosh Bandara</h4></a>
                <div class="star">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                </div>
              </div>
              <p>
                The best study centre in the Sri Lanka
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End review Area -->

    <!-- Start cta-two Area -->
    <section class="cta-two-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 cta-left">
            <h1>Not Yet Satisfied with our Trend?</h1>
          </div>
          <div class="col-lg-4 cta-right">
            <a class="primary-btn wh" href="#">view our blog</a>
          </div>
        </div>
      </div>
    </section>
    <!-- End cta-two Area -->

    <!-- start footer Area -->
    <?php include 'footer.php' ?>
    <!-- End footer Area -->

    <script src="res/js/vendor/jquery-2.2.4.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script src="res/js/vendor/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="res/js/easing.min.js"></script>
    <script src="res/js/hoverIntent.js"></script>
    <script src="res/js/superfish.min.js"></script>
    <script src="res/js/jquery.ajaxchimp.min.js"></script>
    <script src="res/js/jquery.magnific-popup.min.js"></script>
    <script src="res/js/jquery.tabs.min.js"></script>
    <script src="res/js/jquery.nice-select.min.js"></script>
    <script src="res/js/owl.carousel.min.js"></script>
    <script src="res/js/mail-script.js"></script>
    <script src="res/js/main.js"></script>

    <script src="js/user.js"></script>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <script>
      (function() {
        var autoUpdate = true,
          timeTrans = 4000;

        var cdSlider = document.querySelector('.cd-slider'),
          item = cdSlider.querySelectorAll('li'),
          nav = cdSlider.querySelector('nav');

        item[0].className = 'current_slide';

        for (var i = 0, len = item.length; i < len; i++) {
          var color = item[i].getAttribute('data-color');
          item[i].style.backgroundColor = color;
        }

        // Detect IE
        // hide ripple effect on IE9
        var ua = window.navigator.userAgent;
        var msie = ua.indexOf('MSIE');
        if (msie > 0) {
          var version = parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)));
          if (version === 9) {
            cdSlider.className = 'cd-slider ie9';
          }
        }

        if (item.length <= 1) {
          nav.style.display = 'none';
        }

        function prevSlide() {
          var currentSlide = cdSlider.querySelector('li.current_slide'),
            prevElement = currentSlide.previousElementSibling,
            prevSlide =
              prevElement !== null ? prevElement : item[item.length - 1],
            prevColor = prevSlide.getAttribute('data-color'),
            el = document.createElement('span');

          currentSlide.className = '';
          prevSlide.className = 'current_slide';

          nav.children[0].appendChild(el);

          var size =
              cdSlider.clientWidth >= cdSlider.clientHeight
                ? cdSlider.clientWidth * 2
                : cdSlider.clientHeight * 2,
            ripple = nav.children[0].querySelector('span');

          ripple.style.height = size + 'px';
          ripple.style.width = size + 'px';
          ripple.style.backgroundColor = prevColor;

          ripple.addEventListener('webkitTransitionEnd', function() {
            if (this.parentNode) {
              this.parentNode.removeChild(this);
            }
          });

          ripple.addEventListener('transitionend', function() {
            if (this.parentNode) {
              this.parentNode.removeChild(this);
            }
          });
        }

        function nextSlide() {
          var currentSlide = cdSlider.querySelector('li.current_slide'),
            nextElement = currentSlide.nextElementSibling,
            nextSlide = nextElement !== null ? nextElement : item[0],
            nextColor = nextSlide.getAttribute('data-color'),
            el = document.createElement('span');

          currentSlide.className = '';
          nextSlide.className = 'current_slide';

          nav.children[1].appendChild(el);

          var size =
              cdSlider.clientWidth >= cdSlider.clientHeight
                ? cdSlider.clientWidth * 2
                : cdSlider.clientHeight * 2,
            ripple = nav.children[1].querySelector('span');

          ripple.style.height = size + 'px';
          ripple.style.width = size + 'px';
          ripple.style.backgroundColor = nextColor;

          ripple.addEventListener('webkitTransitionEnd', function() {
            if (this.parentNode) {
              this.parentNode.removeChild(this);
            }
          });

          ripple.addEventListener('transitionend', function() {
            if (this.parentNode) {
              this.parentNode.removeChild(this);
            }
          });
        }

        updateNavColor();

        function updateNavColor() {
          var currentSlide = cdSlider.querySelector('li.current_slide');

          var nextColor =
            currentSlide.nextElementSibling !== null
              ? currentSlide.nextElementSibling.getAttribute('data-color')
              : item[0].getAttribute('data-color');
          var prevColor =
            currentSlide.previousElementSibling !== null
              ? currentSlide.previousElementSibling.getAttribute('data-color')
              : item[item.length - 1].getAttribute('data-color');

          if (item.length > 2) {
            nav.querySelector('.prev').style.backgroundColor = prevColor;
            nav.querySelector('.next').style.backgroundColor = nextColor;
          }
        }

        nav.querySelector('.next').addEventListener('click', function(event) {
          event.preventDefault();
          nextSlide();
          updateNavColor();
        });

        nav.querySelector('.prev').addEventListener('click', function(event) {
          event.preventDefault();
          prevSlide();
          updateNavColor();
        });

        //autoUpdate
        setInterval(function() {
          if (autoUpdate) {
            nextSlide();
            updateNavColor();
          }
        }, timeTrans);
      })();
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

    <script>
      $(document).ready(function() {
        $('.customer-logos').slick({
          slidesToShow: 6,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 1500,
          arrows: false,
          dots: false,
          pauseOnHover: false,
          responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 4
              }
            },
            {
              breakpoint: 520,
              settings: {
                slidesToShow: 3
              }
            }
          ]
        });
      });
    </script>
  </body>
</html>
