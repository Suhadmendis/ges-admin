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

    <style>
      ul#tabs-list {
        list-style: none;
        text-align: center;
        border-bottom: 1px solid #dfdfdf;
        margin: 0;
        padding: 0;
      }

      label.panel-label {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        display: block;
        width: 100%;
        color: #bdc3c7;
        cursor: pointer;
        background-color: #ecf0f1;
        -webkit-transition-property: background-color, color;
        transition-property: background-color, color;
        -webkit-transition-duration: 200ms;
        transition-duration: 200ms;
      }
      label.panel-label:hover {
        color: #c0392b;
      }

      #panels {
        background-color: white;
      }
      #panels .container {
        margin: 0 auto;
        width: 90%;
      }
      #panels section header label.panel-label {
        padding: 12px 24px;
        box-sizing: border-box;
      }
      #panels section main {
        box-sizing: border-box;
        max-height: 0;
        opacity: 0;
        -webkit-transition: opacity 600ms;
        transition: opacity 600ms;
        overflow-y: hidden;
      }

      #panel-1-ctrl:checked ~ #panels #panel-1 main {
        max-height: initial;
        opacity: 1;
        padding: 48px 24px;
      }

      #panel-2-ctrl:checked ~ #panels #panel-2 main {
        max-height: initial;
        opacity: 1;
        padding: 48px 24px;
      }

      #panel-3-ctrl:checked ~ #panels #panel-3 main {
        max-height: initial;
        opacity: 1;
        padding: 48px 24px;
      }

      #panel-4-ctrl:checked ~ #panels #panel-4 main {
        max-height: initial;
        opacity: 1;
        padding: 48px 24px;
      }

      #panel-5-ctrl:checked ~ #panels #panel-5 main {
        max-height: initial;
        opacity: 1;
        padding: 48px 24px;
      }
      #panel-6-ctrl:checked ~ #panels #panel-6 main {
        max-height: initial;
        opacity: 1;
        padding: 48px 24px;
      }

      @media all and (max-width: 767px) {
        #nav-ctrl:checked ~ #tabs-list #li-for-panel-1 {
          max-height: 46px;
          opacity: 1;
        }

        #nav-ctrl:checked ~ #tabs-list #li-for-panel-2 {
          max-height: 46px;
          opacity: 1;
        }

        #nav-ctrl:checked ~ #tabs-list #li-for-panel-3 {
          max-height: 46px;
          opacity: 1;
        }

        #nav-ctrl:checked ~ #tabs-list #li-for-panel-4 {
          max-height: 46px;
          opacity: 1;
        }

        #nav-ctrl:checked ~ #tabs-list #li-for-panel-5 {
          max-height: 46px;
          opacity: 1;
        }

        #open-nav-label {
          display: block;
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
          cursor: pointer;
        }

        #nav-ctrl:checked ~ #tabs-list #open-nav-label {
          display: none;
        }

        #close-nav-label {
          display: block;
          max-height: 0;
          overflow-y: hidden;
          background-color: #444444;
          color: #ecf0f1;
          padding: 0px;
          -webkit-transition: max-height 200ms;
          transition: max-height 200ms;
          cursor: pointer;
          text-transform: uppercase;
          font-size: 12px;
          line-height: 22px;
          letter-spacing: 1px;
        }

        #nav-ctrl:checked ~ #tabs-list #close-nav-label {
          max-height: 36px;
          opacity: 1;
          padding: 12px 24px;
        }

        #tabs-list {
          position: relative;
        }
        #tabs-list label.panel-label {
          padding: 12px 0;
        }
        #tabs-list #li-for-panel-1 {
          max-height: 0;
          overflow-y: hidden;
          -webkit-transition: max-height 200ms;
          transition: max-height 200ms;
        }
        #tabs-list #li-for-panel-2 {
          max-height: 0;
          overflow-y: hidden;
          -webkit-transition: max-height 200ms;
          transition: max-height 200ms;
        }
        #tabs-list #li-for-panel-3 {
          max-height: 0;
          overflow-y: hidden;
          -webkit-transition: max-height 200ms;
          transition: max-height 200ms;
        }
        #tabs-list #li-for-panel-4 {
          max-height: 0;
          overflow-y: hidden;
          -webkit-transition: max-height 200ms;
          transition: max-height 200ms;
        }
        #tabs-list #li-for-panel-5 {
          max-height: 0;
          overflow-y: hidden;
          -webkit-transition: max-height 200ms;
          transition: max-height 200ms;
        }

        #panel-1-ctrl:checked ~ #tabs-list #li-for-panel-1 {
          max-height: 46px;
          opacity: 1;
        }
        #panel-1-ctrl:checked ~ #tabs-list #li-for-panel-1 label.panel-label {
          background-color: white;
          color: #c0392b;
          background-color: #c0392b;
          color: white;
        }

        #panel-2-ctrl:checked ~ #tabs-list #li-for-panel-2 {
          max-height: 46px;
          opacity: 1;
        }
        #panel-2-ctrl:checked ~ #tabs-list #li-for-panel-2 label.panel-label {
          background-color: white;
          color: #c0392b;
          background-color: #c0392b;
          color: white;
        }

        #panel-3-ctrl:checked ~ #tabs-list #li-for-panel-3 {
          max-height: 46px;
          opacity: 1;
        }
        #panel-3-ctrl:checked ~ #tabs-list #li-for-panel-3 label.panel-label {
          background-color: white;
          color: #c0392b;
          background-color: #c0392b;
          color: white;
        }

        #panel-4-ctrl:checked ~ #tabs-list #li-for-panel-4 {
          max-height: 46px;
          opacity: 1;
        }
        #panel-4-ctrl:checked ~ #tabs-list #li-for-panel-4 label.panel-label {
          background-color: white;
          color: #c0392b;
          background-color: #c0392b;
          color: white;
        }
        #panel-6-ctrl:checked ~ #tabs-list #li-for-panel-6 label.panel-label {
          background-color: white;
          color: #c0392b;
          background-color: #c0392b;
          color: white;
        }

        #panel-5-ctrl:checked ~ #tabs-list #li-for-panel-5 {
          max-height: 46px;
          opacity: 1;
        }
        #panel-5-ctrl:checked ~ #tabs-list #li-for-panel-5 label.panel-label {
          background-color: white;
          color: #c0392b;
          background-color: #c0392b;
          color: white;
        }

        #panels .container {
          width: 100%;
        }
        #panels section header {
          display: block;
        }
      }
      @media all and (min-width: 768px) {
        #panel-1-ctrl:checked ~ #tabs-list #li-for-panel-1 {
          pointer-events: none;
          cursor: default;
          -webkit-transform: translate3d(0, 1px, 0);
          transform: translate3d(0, 1px, 0);
          box-shadow: none;
          border-right: none;
        }
        #panel-1-ctrl:checked ~ #tabs-list #li-for-panel-1.last {
          border-right: 1px solid transparent;
        }
        #panel-1-ctrl:checked ~ #tabs-list #li-for-panel-1 + li {
          border-left: 1px solid #dfdfdf;
        }
        #panel-1-ctrl:checked ~ #tabs-list #li-for-panel-1 label.panel-label {
          background-color: white;
          color: #c0392b;
          padding-top: 26px;
        }
        #panel-1-ctrl:checked
          ~ #tabs-list
          #li-for-panel-1
          label.panel-label::after {
          height: 6px;
        }

        #panel-2-ctrl:checked ~ #tabs-list #li-for-panel-2 {
          pointer-events: none;
          cursor: default;
          -webkit-transform: translate3d(0, 1px, 0);
          transform: translate3d(0, 1px, 0);
          box-shadow: none;
          border-right: none;
        }
        #panel-2-ctrl:checked ~ #tabs-list #li-for-panel-2.last {
          border-right: 1px solid transparent;
        }
        #panel-2-ctrl:checked ~ #tabs-list #li-for-panel-2 + li {
          border-left: 1px solid #dfdfdf;
        }
        #panel-2-ctrl:checked ~ #tabs-list #li-for-panel-2 label.panel-label {
          background-color: white;
          color: #c0392b;
          padding-top: 26px;
        }
        #panel-2-ctrl:checked
          ~ #tabs-list
          #li-for-panel-2
          label.panel-label::after {
          height: 6px;
        }

        #panel-3-ctrl:checked ~ #tabs-list #li-for-panel-3 {
          pointer-events: none;
          cursor: default;
          -webkit-transform: translate3d(0, 1px, 0);
          transform: translate3d(0, 1px, 0);
          box-shadow: none;
          border-right: none;
        }
        #panel-3-ctrl:checked ~ #tabs-list #li-for-panel-3.last {
          border-right: 1px solid transparent;
        }
        #panel-3-ctrl:checked ~ #tabs-list #li-for-panel-3 + li {
          border-left: 1px solid #dfdfdf;
        }
        #panel-3-ctrl:checked ~ #tabs-list #li-for-panel-3 label.panel-label {
          background-color: white;
          color: #c0392b;
          padding-top: 26px;
        }
        #panel-3-ctrl:checked
          ~ #tabs-list
          #li-for-panel-3
          label.panel-label::after {
          height: 6px;
        }

        #panel-4-ctrl:checked ~ #tabs-list #li-for-panel-4 {
          pointer-events: none;
          cursor: default;
          -webkit-transform: translate3d(0, 1px, 0);
          transform: translate3d(0, 1px, 0);
          box-shadow: none;
          border-right: none;
        }
        #panel-4-ctrl:checked ~ #tabs-list #li-for-panel-4.last {
          border-right: 1px solid transparent;
        }
        #panel-4-ctrl:checked ~ #tabs-list #li-for-panel-4 + li {
          border-left: 1px solid #dfdfdf;
        }
        #panel-4-ctrl:checked ~ #tabs-list #li-for-panel-4 label.panel-label {
          background-color: white;
          color: #c0392b;
          padding-top: 26px;
        }
        #panel-4-ctrl:checked
          ~ #tabs-list
          #li-for-panel-4
          label.panel-label::after {
          height: 6px;
        }

        #panel-5-ctrl:checked ~ #tabs-list #li-for-panel-5 {
          pointer-events: none;
          cursor: default;
          -webkit-transform: translate3d(0, 1px, 0);
          transform: translate3d(0, 1px, 0);
          box-shadow: none;
          border-right: none;
        }
        #panel-5-ctrl:checked ~ #tabs-list #li-for-panel-5.last {
          border-right: 1px solid transparent;
        }
        #panel-5-ctrl:checked ~ #tabs-list #li-for-panel-5 + li {
          border-left: 1px solid #dfdfdf;
        }
        #panel-5-ctrl:checked ~ #tabs-list #li-for-panel-5 label.panel-label {
          background-color: white;
          color: #c0392b;
          padding-top: 26px;
        }
        #panel-5-ctrl:checked
          ~ #tabs-list
          #li-for-panel-5
          label.panel-label::after {
          height: 6px;
        }

        ul#tabs-list {
          text-align: center;
          border-bottom: 1px solid #dfdfdf;
        }
        ul#tabs-list li {
          display: inline-block;
          text-align: center;
          font-size: 0.875em;
          width: 15%;
          box-shadow: 0px -2px 2px rgba(0, 0, 0, 0.05);
          border-right: 1px solid #dfdfdf;
          position: relative;
        }
        ul#tabs-list li:hover {
          -webkit-transition: none;
          transition: none;
          border-right: none;
        }
        ul#tabs-list li:hover.last {
          border-right: 1px solid transparent;
        }
        ul#tabs-list li:hover + li {
          border-left: 1px solid #dfdfdf;
        }
        ul#tabs-list li label.panel-label {
          position: relative;
          padding: 24px 0;
        }
        ul#tabs-list li label.panel-label::after {
          content: '';
          position: absolute;
          width: 100%;
          left: 0;
          bottom: 100%;
          background-color: #c0392b;
          height: 0;
          -webkit-transition-property: height;
          transition-property: height;
          -webkit-transition-duration: 200ms;
          transition-duration: 200ms;
        }
        ul#tabs-list li label.panel-label:hover {
          padding-top: 25px;
        }
        ul#tabs-list li label.panel-label:hover::after {
          height: 6px;
        }

        #open-nav-label,
        #close-nav-label {
          display: none;
        }

        #nav-ctrl {
          display: none;
        }
      }
      @media all and (min-width: 900px) {
        main {
          width: 100%;
          margin: 0 auto;
        }
      }
      .panel-radios {
        position: fixed;
        left: 50%;
        top: 10px;
        width: 20px;
        opacity: 0.5;
        z-index: 99;
      }
      .panel-radios:nth-child(1) {
        -webkit-transform: translateX(-50px);
        transform: translateX(-50px);
      }
      .panel-radios:nth-child(2) {
        -webkit-transform: translateX(-30px);
        transform: translateX(-30px);
      }
      .panel-radios:nth-child(3) {
        -webkit-transform: translateX(-10px);
        transform: translateX(-10px);
      }
      .panel-radios:nth-child(4) {
        -webkit-transform: translateX(10px);
        transform: translateX(10px);
      }
      .panel-radios:nth-child(5) {
        -webkit-transform: translateX(30px);
        transform: translateX(30px);
      }
      .panel-radios:nth-child(6) {
        top: 30px;
        -webkit-transform: translateX(-10px);
        transform: translateX(-10px);
        display: block;
      }

      body {
        background: #e74c3c;
        color: #444444;
        font-family: 'Open Sans', 'Helvetica Neue', Helvetica, sans-serif;
      }

      #introduction {
        width: 90%;
        margin: 0 auto;
        padding: 48px 24px;
        color: white;
      }
      #introduction h1 {
        font-weight: 300;
        text-align: center;
      }

      main h1 {
        margin-top: 0;
        font-weight: 300;
        color: #c0392b;
      }
      main p {
        line-height: 1.8;
      }
      main hr {
        margin: 12px 0;
        border-top: 1px solid #dfdfdf;
      }

      label.demo-label {
        background-color: #c0392b;
        color: white;
        padding: 4px 8px;
        border-radius: 2px;
        cursor: pointer;
        display: inline-block;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      label.demo-label:hover {
        background-color: #e74c3c;
      }

      #demo-child-toggle {
        display: none;
      }
      #demo-child-toggle:checked ~ #demo-parent #demo-child {
        color: #c0392b;
        font-weight: bold;
        text-transform: uppercase;
      }

      #demo-parent {
        margin-top: 8px;
      }

      code,
      pre {
        color: #c0392b;
        font-family: Inconsolata, 'Andale Mono', Andale, monowidth;
        background-color: #ecf0f1;
        border: 1px solid #dfdfdf;
        border-radius: 2px;
      }

      code {
        padding: 2px 6px;
      }

      pre {
        padding: 12px;
        line-height: 1.6;
      }
      pre strong {
        color: #444444;
        font-weight: normal;
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
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="css/linearicons.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/nice-select.css" />
    <link rel="stylesheet" href="css/animate.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/custom.css" />
  </head>
  <body>
    <?php include 'header.php' ?>
    <!-- #header -->

    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">
      <div class="overlay overlay-bg"></div>
      <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
          <div class="about-content col-lg-12">
            <h1 class="text-white">
              Vision and Mission
            </h1>
            <p class="text-white link-nav">
              <a href="index.php">Home </a>
              <span class="lnr lnr-arrow-right"></span>
              <a href="about.php">Vision and Mission</a>
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- End banner Area -->
    <section class="about-us-main">
      <div class="about-us-links-wrapper">
        <div class="about-us-link ">
          <a href="./about-new.php">About Us</a>
        </div>
        <div class="about-us-link active-about">
          <a href="./vision-and-mission.php">Vision and Mission</a>
        </div>
        <div class="about-us-link">
          <a href="./our-partner-organization.php"
            >Our Partner Organizations</a
          >
        </div>
        <div class="about-us-link">
          <a href="./partner-awarding-bodies.php"
            >Partners & Awarding Bodies</a
          >
        </div>
      </div>
      <div class="about-us-link-contents">
        <h2>Vision</h2>
        <p>
          To transform a better future by transforming everyday lives through
          comprehensive higher education and migration services.
        </p>

        <h2>Mission</h2>
        <p>
          To support individuals to realize their potential in an environment
          where they can grow into highly skilled professionals through local
          and international higher education programs and career placements.
        </p>
      </div>
    </section>

    <!-- partial -->
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

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="js/easing.min.js"></script>
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.tabs.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/main.js"></script>

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
