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
    
    .slick-slider
    {
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
    
    .slick-list
    {
        position: relative;
        display: block;
        overflow: hidden;
        margin: 0;
        padding: 0;
    }
    .slick-list:focus
    {
        outline: none;
    }
    .slick-list.dragging
    {
        cursor: pointer;
        cursor: hand;
    }
    
    .slick-slider .slick-track,
    .slick-slider .slick-list
    {
        -webkit-transform: translate3d(0, 0, 0);
           -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
             -o-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
    }
    
    .slick-track
    {
        position: relative;
        top: 0;
        left: 0;
        display: block;
    }
    .slick-track:before,
    .slick-track:after
    {
        display: table;
        content: '';
    }
    .slick-track:after
    {
        clear: both;
    }
    .slick-loading .slick-track
    {
        visibility: hidden;
    }
    
    .slick-slide
    {
        display: none;
        float: left;
        height: 100%;
        min-height: 1px;
    }
    [dir='rtl'] .slick-slide
    {
        float: right;
    }
    .slick-slide img
    {
        display: block;
    }
    .slick-slide.slick-loading img
    {
        display: none;
    }
    .slick-slide.dragging img
    {
        pointer-events: none;
    }
    .slick-initialized .slick-slide
    {
        display: block;
    }
    .slick-loading .slick-slide
    {
        visibility: hidden;
    }
    .slick-vertical .slick-slide
    {
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
              About Us
            </h1>
            <p class="text-white link-nav">
              <a href="index.php">Home </a>
              <span class="lnr lnr-arrow-right"></span>
              <a href="about.php"> About Us</a>
            </p>
          </div>
        </div>
      </div>
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
                  GIHE Campus offers students the option of choosing their own
                  specialized qualifications starting from Diplomas, Bachelors
                  to Masters Programs & unlock their potential. We thrive
                  towards offering the highest quality of programs through an
                  expert panel of lecturers by partnering with internationally
                  recognized universities, colleges and educational bodies.
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
                  GES International Recruitment partnered with well reputed
                  international university consortiums provide a wide range of
                  direct university placements with higher benefits for students
                  which allows students to get unbiased university placements
                  with maximum discounts and scholarships. Our team of qualified
                  and highly skilled professionals will work together to provide
                  an immigration service par excellence.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End feature Area -->

    <!-- Start info Area -->

    <div class="section-about-us">
      <div class="about-us-wrapper">
        <div class="about-img">
          <img
            src="https://images.pexels.com/photos/3867319/pexels-photo-3867319.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
            alt=""
          />
        </div>
        <div class="about-des">

        <h2>Ensure Global Career Opportunities!</h2>
          

          <p>
            GIHE Center for advanced studies is a Division of Global Educational
            Services Lanka Private Limited that was established in 2011 and
            GIHE, the comprehensive education conglomerate in Sri Lanka
            established to fulfill the growing demand for professional and
            higher education through high quality and affordable International
            Qualifications partnered with International organizations and
            Awarding bodies/Universities.
          </p>
          <p>
            GIHE provides comprehensive international educational programs from
            Foundation to Masters Level and professional services to meet the
            needs of the students for higher education and successful career
            options after O/Level and A/Level.
          </p>
          <p>
            GIHE provides alternative pathways for mature student’s and industry
            professionals which enables them to acquire different levels of
            academic qualifications by investing their industry experience.
            These qualifications enable them to achieve overseas University
            admission, Industrial training or a Permanent Resident pathway.
          </p>

          <h2>Vision</h2>
          <p>To transform a better future by transforming everyday lives through comprehensive higher education and migration services.</p>
        
        <h2>Mission</h2>
        <p>To support individuals to realize their potential in an environment where they can grow into highly skilled professionals through local and international higher education programs and career placements.</p>
        </div>
      </div>
    </div>

    <div class="awrding-main-des">
      <h3>
      Partners & Awarding Bodies
      </h3>
    </div>
    <!-- Start events-list Area -->
    <section class="awarding-body">
      <div class="awarding-wrapper">
      <div class="awarding-card-item">
          <div class="awarding-card-item-img">
            <img src="img/tvec.jpg" alt="" />
          </div>
          <div class="awarding-des">
            <h2>TVEC</h2>
            <p>
              The Tertiary and Vocational Education Commission (TVEC) is the
              apex body in the technical and vocational education and training
              sector under the provisions of the Tertiary and Vocational
              Education Act of Sri Lanka.
            </p>
          </div>
        </div>
        <div class="awarding-card-item">
          <div class="awarding-card-item-img">
            <img src="img/on-sky.png" alt="" />
          </div>
          <div class="awarding-des">
            <h2>On Sky Global</h2>
            <p>
              On Sky Global Inc. is a leading and eminent education service
              provider based in the United States of America and comprises a
              rich portfolio of professional certification courses across
              Technology, Business, Digital Marketing, Project Management,
              Finance, Language and Heath & Wellness domains through its global
              associates. On Sky Global is also an Accredited Training Provider
              of Training Accreditation & Certification Organization (TRACCERT -
              Agency registered with the government of Canada as Training
              Accreditation and Certification agency and a member of the AAAC
              Association of Accrediting Agencies of Canada) OSG has redefined
              learning in the professional certification program space with a
              wide range of course options, expert faculty and an award winning
              learning platform.
            </p>
          </div>
        </div>
        <div class="awarding-card-item">
          <div class="awarding-card-item-img">
            <img src="img/bml.jpg" alt="" />
          </div>
          <div class="awarding-des">
            <h2>BML College UK</h2>
            <p>
            Established since 2011, BML College UK is a Community College situated in Birmingham UK and is the trading name of Business Management London Limited (Abbreviated as BML), a Company registered in England & Wales under the Reg No. 8305046 with UK PRN No: 10057499.   </p>
            <p>BML College UK is fully accredited by Ofqual regulated awarding body in UK and UK’s top Universities. </p>

            <p>BML College UK is an OTHM Approved Center in UK. They provide bespoke education and training by online and blended learning mode for students  all over the world.</p>

            <p>BML College UK operates in Sri Lanka through GIHE Campus.</p>

          </div>
        </div>
        <div class="awarding-card-item">
          <div class="awarding-card-item-img">
            <img src="img/lmq.png" alt="" />
          </div>
          <div class="awarding-des">
            <h2>London Management Qualifications (LMQ)</h2>
            <p>
              The London Management Qualifications (LMQ) is a UK based awarding
              organization accredited by SCQF validating a set of innovative
              programs covering a range of levels of study.
            </p>
          </div>
        </div>
        <div class="awarding-card-item">
          <div class="awarding-card-item-img">
            <img src="img/othm.jpg" alt="" />
          </div>
          <div class="awarding-des">
            <h2>Othm</h2>
            <p>
              Othm is a UK based Awarding Organization regulated by Ofqual
              (Office of the Qualifications and Examinations Regulation) and
              recognized by Qualifications Wales.
            </p>
          </div>
        </div>

        <div class="awarding-card-item">
          <div class="awarding-card-item-img">
            <img src="img/ielts.png" alt="" />
          </div>
          <div class="awarding-des">
            <h2>IDP Sri Lanka</h2>
            <p>
            IDP is a global leader in international education services that helps international students study in English speaking countries. IDP  Sri Lanka is the examination registration partner of  GES Education.
            </p>
          </div>
        </div>

      </div>
    </section>
    <!-- End info Area -->

    <div class="awrding-main-des">
      <h3>
      Our Partner Organizations 
      </h3>
    </div>
    <input
      id="panel-1-ctrl"
      class="panel-radios"
      type="radio"
      name="tab-radios"
      checked
    />
    <input
      id="panel-2-ctrl"
      class="panel-radios"
      type="radio"
      name="tab-radios"
    />
    <input
      id="panel-3-ctrl"
      class="panel-radios"
      type="radio"
      name="tab-radios"
    />
    <input
      id="panel-4-ctrl"
      class="panel-radios"
      type="radio"
      name="tab-radios"
    />
    <input
      id="panel-5-ctrl"
      class="panel-radios"
      type="radio"
      name="tab-radios"
    />
    <input
      id="panel-6-ctrl"
      class="panel-radios"
      type="radio"
      name="tab-radios"
    />
    <input
      id="nav-ctrl"
      class="panel-radios"
      type="checkbox"
      name="nav-checkbox"
    />

    <!-- TABS LIST -->
    <ul id="tabs-list">
      <!-- MENU TOGGLE -->
      <label id="open-nav-label" for="nav-ctrl"></label>
      <li id="li-for-panel-1">
        <label class="panel-label" for="panel-1-ctrl">GIHE Campus</label>
      </li>
      <!--INLINE-BLOCK FIX
     -->
      <li id="li-for-panel-2">
        <label class="panel-label" for="panel-2-ctrl"
          >GES International Recruitment
        </label>
      </li>
      <!--INLINE-BLOCK FIX
     -->
      <li id="li-for-panel-3">
        <label class="panel-label" for="panel-3-ctrl">Quotro Pvt. Ltd. </label>
      </li>
      <!--INLINE-BLOCK FIX
     -->
      <li id="li-for-panel-4">
        <label class="panel-label" for="panel-4-ctrl">CCC Lanka </label>
      </li>
      <!--INLINE-BLOCK FIX
     -->
      <li id="li-for-panel-5" class="last">
        <label class="panel-label" for="panel-5-ctrl"
          >GES International Travels</label
        >
      </li>
      <!-- <li id="li-for-panel-6" class="last">
        <label class="panel-label" for="panel-6-ctrl"
          >UNIVERSITY PREPARATION PROGRAMS
        </label> -->
      </li>
      <label id="close-nav-label" for="nav-ctrl">Close</label>
    </ul>

    <!-- THE PANELS -->
    <article id="panels">
      <div class="container">
        <section id="panel-1">
          <main>
            <h1>GIHE Campus</h1>

            <!-- <p>
              GIHE offers students the option of choosing their own specialized
              qualifications starting from Diplomas, Bachelors to Masters
              Programs & unlock their potential. We thrive towards offering the
              highest quality of programs through an expert panel of lecturers
              by partnering with internationally recognized universities,
              colleges and educational bodies. Our qualifications are approved
              and regulated by Ofqual / SCQF, and it offers flexible ways to
              obtain qualifications. We provide the following university
              completion programs with learning outcomes which are industry
              focused to prepare our students for a highly competitive business
              world.
            </p>

            <ul>
              <li>Foundation Program</li>
              <li>Diploma Program</li>
              <li>HND Program</li>
              <li>Degree Program</li>
              <li>Masters Program</li>
              <li>PhD Program</li>
            </ul> -->

<p>GIHE Center for advanced studies is a Division of Global Educational Services Lanka Private Limited that was established in 2011 and GIHE the comprehensive education conglomerate in Sri Lanka established to fulfill the growing demand for professional and higher education through high quality and affordable International Qualifications partnered with International organization and Awarding bodies/Universities.</p>
     <p>GIHE provides comprehensive international educational programs such as Foundation to Masters level and professional services to meet the needs of the students for higher education and successful career options after O/Level and A/Level.</p>       
<p>GIHE provides alternative pathways for mature student’s and industry professionals enable them to acquire different level academic qualifications by investing their industry experience. These qualifications enable them to achieve overseas University admission, Industrial training or a Permanent Resident pathway.</p>


          </main>
        </section>
        <section id="panel-2">
          <main>
            <h1>GES International Recruitment</h1>

            <p>
              GES International Recruitment is your one-stop solution for all
              your international student migration needs ranging from
              educational counselling to arriving in respective countries. GES
              International Recruitment partnered with well reputed
              international university consortiums provide a wide range of
              direct university placements with higher benefits for students
              which allows students to get unbiased university placements with
              maximum discounts and scholarships. Our team of qualified and
              highly skilled professionals will work together to provide an
              immigration service par excellence.
            </p>

            <h3>Our services</h3>

            <ul>
              <li>
                Professional Consultation: We assist and support our students in
                every process ranging from research, application submission,
                university enrollment and virtual assistance after migration.
              </li> <br>
              <li>
                Building Student Profile: We provide assistance in writing
                professional resumes which will increase the chances of securing
                a university admission of your choice.
              </li> <br>
              <li>
                Scholarship Guidance: We provide guidance to obtain tuition fee
                bursaries, scholarships, application fee waivers, etc.
              </li> <br>
              <li>
                Assistance with Visa Applications: We offer professional visa
                guidance to all our candidates to ease the process of
                successfully obtaining a student visa.
              </li> <br>
              <li>
                Pre-Departure Briefings: Our highly skilled and professional
                counsellors will guide individuals through every process of
                migration in the areas of airport pickups, accommodation
                arrangements, handling queries at the port of entry, travel and
                in the settlement abroad.
              </li> <br>

              <li>
                Transfer Counseling: We provide guidance through the process of
                securing transfer acceptance to the best universities in the
                world if they are a first or second year undergraduate student
                who is dissatisfied with the current university experience.
              </li> <br>

              <li>
                Medical Health Insurance: We provide medical insurance at an
                affordable rate to ease the migration process.
              </li> <br>
            </ul>


<div class="align-center">
<h2>Australia</h2>
<!-- <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/Flag_of_Australia_%28converted%29.svg/1200px-Flag_of_Australia_%28converted%29.svg.png" alt="" width="150px" height="100px"> -->
</div>
           
            <br><br><br>
            <section class="customer-logos slider">
                <div class="slide"><img src="img/GES-Logos/Australia/acap.png"></div>
                <div class="slide"><img src="img/GES-Logos/Australia/angad.png"></div>
                <div class="slide"><img src="img/GES-Logos/Australia/anibt.png"></div>
                <div class="slide"><img src="img/GES-Logos/Australia/asg.png"></div>
                <div class="slide"><img src="img/GES-Logos/Australia/bec.png"></div>
                <div class="slide"><img src="img/GES-Logos/Australia/bhi.png"></div>
                <div class="slide"><img src="img/GES-Logos/Australia/cic.png"></div>
                <div class="slide"><img src="img/GES-Logos/Australia/csu.png"></div>
                <div class="slide"><img src="img/GES-Logos/Australia/dc.png"></div>
                <div class="slide"><img src="img/GES-Logos/Australia/Deakin.png"></div>
                <div class="slide"><img src="img/GES-Logos/Australia/ecc.png"></div>
                <div class="slide"><img src="img/GES-Logos/Australia/jcu.png"></div>
                <div class="slide"><img src="img/GES-Logos/Australia/ltu.png"></div>
                <div class="slide"><img src="img/GES-Logos/Australia/SAIBT.png"></div>
                <div class="slide"><img src="img/GES-Logos/Australia/sc.png"></div>
                <div class="slide"><img src="img/GES-Logos/Australia/Scu.png"></div>
                <div class="slide"><img src="img/GES-Logos/Australia/sibt.png"></div>
                <div class="slide"><img src="img/GES-Logos/Australia/usa.png"></div>
                <div class="slide"><img src="img/GES-Logos/Australia/Utas.png"></div>
                <div class="slide"><img src="img/GES-Logos/Australia/wsu.png"></div>
     
   </section> <br><br>

   <div class="align-center">

   <h2>Canada</h2>
<!-- <img src="https://upload.wikimedia.org/wikipedia/commons/d/d9/Flag_of_Canada_%28Pantone%29.svg" alt="" width="150px" height="100px"> -->
  </div>
<br><br><br>
   <section class="customer-logos slider">
                <div class="slide"><img src="img/GES-Logos/Canada/AC.png"></div>
                <div class="slide"><img src="img/GES-Logos/Canada/ASCENDA.png"></div>
                <div class="slide"><img src="img/GES-Logos/Canada/DALHOUSE.png"></div>
                <div class="slide"><img src="img/GES-Logos/Canada/ICM.png"></div>
                <div class="slide"><img src="img/GES-Logos/Canada/LECORDON.png"></div>
                <div class="slide"><img src="img/GES-Logos/Canada/Royal_roads.png"></div>
                <div class="slide"><img src="img/GES-Logos/Canada/SFU.png"></div>
                <div class="slide"><img src="img/GES-Logos/Canada/UWC.png"></div>

    
     
   </section><br><br>

   <div class="align-center">
     <h2>United Kingdom</h2>
<!-- <img  width="150px" height="100px" src="https://upload.wikimedia.org/wikipedia/en/thumb/a/ae/Flag_of_the_United_Kingdom.svg/1200px-Flag_of_the_United_Kingdom.svg.png" alt=""> -->
  </div>
  <br><br><br>
   <section class="customer-logos slider">
                <div class="slide"><img src="img/GES-Logos/United Kingdom/anglia-ruskin.png"></div>
                <div class="slide"><img src="img/GES-Logos/United Kingdom/bathSpa.png"></div>
                <div class="slide"><img src="img/GES-Logos/United Kingdom/brimingham..png"></div>
                <div class="slide"><img src="img/GES-Logos/United Kingdom/Buckingham.png"></div>
                <div class="slide"><img src="img/GES-Logos/United Kingdom/Edinburg.png"></div>
                <div class="slide"><img src="img/GES-Logos/United Kingdom/Hud.png"></div>
                <div class="slide"><img src="img/GES-Logos/United Kingdom/LBIC-Brunel-900-450.png"></div>
                <div class="slide"><img src="img/GES-Logos/United Kingdom/LJMU.png"></div>
                <div class="slide"><img src="img/GES-Logos/United Kingdom/Mdx-1.png"></div>
                <div class="slide"><img src="img/GES-Logos/United Kingdom/Mdx-2.png"></div>
                <div class="slide"><img src="img/GES-Logos/United Kingdom/Mdx-copy.png"></div>
                <div class="slide"><img src="img/GES-Logos/United Kingdom/Mdx.png"></div>
                <div class="slide"><img src="img/GES-Logos/United Kingdom/NTU.png"></div>
                <div class="slide"><img src="img/GES-Logos/United Kingdom/Plymouth.png"></div>
                <div class="slide"><img src="img/GES-Logos/United Kingdom/UEL.png"></div>
                <div class="slide"><img src="img/GES-Logos/United Kingdom/uh.png"></div>
                <div class="slide"><img src="img/GES-Logos/United Kingdom/uon.png"></div>
                <div class="slide"><img src="img/GES-Logos/United Kingdom/uop.png"></div>
              

    
     
   </section><br><br><br>
   <div class="align-center">

   <h2>Europe</h2>
   <!-- <img width="150px" height="100px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/Flag_of_Europe.svg/1200px-Flag_of_Europe.svg.png" alt=""> -->
   
  </div>
   <section class="customer-logos slider">
                <div class="slide"><img src="img/GES-Logos/Europe/DBS.jpg"></div>
                <div class="slide"><img src="img/GES-Logos/Europe/ESC.png"></div>
                <div class="slide"><img src="img/GES-Logos/Europe/isc-paris-squarelogo-1481128111089.png"></div>

   </section><br><br>
   
            <img src="img/recruitment.jpg" alt="" />
          </main>


        </section>
        <section id="panel-3">
          <main>
            <h1 style="margin-bottom:3rem">Quotro Pvt. Ltd.</h1>

       

            <p>
              Quotro (PVT) LTD is an Information Technology solutions provider
              under the GES International group of companies. At Quotro we
              believe that our mission is to Educate, Create & Deliver, world
              class products and services. Our focus at Quotro is to partner
              your business growth with our key strengths in Creativity,
              Experience and Technology.
            </p><br>

         

            <p>
              GIHE School of Information Technology in partnership with Quotro
              Pvt. Ltd. offers a unique study program with work placements. This
              unique program allows students to gain international
              qualifications in different levels and relevant work experience to
              fulfill requirements to enter global work placements. In addition,
              students will get communication skill development, language
              fluency and exposure to real world work experience with a
              remuneration package. At GIHE school of IT, our focus is to build
              world class IT professionals. Students have the options of
              studying these programs online and offline (classroom) along with
              career placements both locally and internationally.
            </p>
<br>
            <a href="http://quotro.lk" target="blank"><button class="btn btn-primary">Visit Site</button></a>
          </main>
        </section>
        <section id="panel-4">
          <main>
            <h1>CCC Lanka</h1>

            <p>
              Chinese Education & Cultural Centre Lanka is a specialized
              organization that provides options and services for Sri Lankans to
              build a relationship with China.
            </p>

            <p>
              CCC has partnered with leading organizations and Universities
              especially with ZZU to offer various professional services and
              study options in China.
            </p>

            <ul>
              <li>Pathway Educational Programs for Chinese Universities</li>
              <li>Consultation for University Placement in China</li>
              <li>
                Scholarship Offers and Applications for Chinese Universities
              </li>
              <li>Chinese Language Programs</li>
              <li>Visa and Tour Consultation (China)</li>
              <li>Translation Services</li>
            </ul>
          </main>
        </section>
        <section id="panel-5">
          <main>
            <h1>GES International Travels</h1>

  
            <p>
              GES International Travels offers a total travel solution with VIP
              services.
            </p>

            <p>
              Our team of expertise will assure that all travel needs such as
              tickets, outbound tour packages, visa arrangements for
              international event participations with travel plans, pre
              departure briefings, hotel reservations etc. are addressed to
              assist the travel process.
            </p>
          </main>
        </section>

      </div>
    </article>
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
$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>

  </body>
</html>
