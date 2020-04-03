<a id="button"></a>
    <header id="header" id="home">
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
              <ul>
                <li>
                  <a href="https://facebook.com/GESIRP/" target="blank"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                <a href="https://twitter.com/GESInternation1" target="blank"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                <a href="https://www.instagram.com/ges_international/" target="blank"><i class="fa fa-instagram"></i></a>
                </li>

              
           
              </ul>
            </div>
            <div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
              <a href="tel:+953 012 3654 896"
                ><span class="lnr lnr-phone-handset"></span>
                <span class="text">+94 764849994</span></a
              >
              <a href="mailto:info@gesedu.lk"
                ><span class="lnr lnr-envelope"></span>
                <span class="text">info@gesedu.lk</span></a
              >

              <?php if (isset($_SESSION['UserName'])) { ?>
                      <a href=""
                        ><span class="lnr lnr-envelope"></span>
                        <span class="text">
                         <?php   echo $_SESSION['UserName'];  ?>
                        </span></a
                      >

                      <a href="" onclick="logout();" 
                        ><span class="lnr lnr-envelope"></span>
                        <span class="text">Logout</span></a
                      >
                  <?php }else{ ?>
                      <a href="login_form.php"
                        ><span class="lnr lnr-envelope"></span>
                        <span class="text">Sign In</span></a
                      >

                      <a href="register_form.php"
                        ><span class="lnr lnr-envelope"></span>
                        <span class="text">Sign Up</span></a
                      >
                   
                  <?php } ?>


            </div>
          </div>
        </div>
      </div>
      <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
          <div id="logo">
            <a href="index.php"
              ><img src="img/GES_Png.png" alt="" title=""
            /></a>
          </div>

          <!-- <div class="logo-text">
              <p>GES Education</p>
          </div> -->
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li><a href="index.php">Home</a></li>

              <li class="menu-has-children">
                    <a href="">About</a>
                    <ul>
                      <li>
                        <a href="./about-new.php"> About Us</a>
                      </li>
                      <li>
                        <a href="./vision-and-mission.php"> Vision & Mission</a>
                      </li>
                      <li>
                        <a href="./partner-awarding-bodies.php">Partners & Awarding Bodies</a>
                      </li>
                      <li>
                        <a href="./our-partner-organization.php"> Our Partner Organizations</a>
                      </li>

                    </ul>
                  </li>
              <li class="menu-has-children">
                <a href="">Faculties</a>
                <ul>
                  <li class="menu-has-children">
                    <a href="./School-of-Management.php"
                      >School of Management</a
                    >
                  </li>
                  <li class="menu-has-children">
                    <a href="./information-technology.php">School of Technology</a>
                  </li>
                  <li class="menu-has-children">
                    <a href="./School-of-Law.php">School of Law</a>
                  </li>
                  <li class="menu-has-children">
                    <a href="./School-of-Professional-Studies.php"
                      >School of Professional Studies</a
                    >
                  </li>
                  <li class="menu-has-children">
                    <a href="./School-of-Language-and-Development.php"
                      >School of Language and Development  </a
                    >
                  </li>
                </ul>
              </li>
              <li class="menu-has-children">
                <a href="">Courses</a>
                <ul>
                <li><a href="./Qualification-Frameworks.php">Qualification Frameworks</a></li>
                <li><a href="./Entry-Requirements.php">Entry Requirements</a></li>
                <li class="menu-has-children">
                    <a href="/">International Foundation</a>
                    <ul>
                      <li>
                        <a href="#"
                          >Business Pathway</a
                        >
                      </li>
                      <li>
                        <a href="#"
                          >IT Pathway</a
                        >
                      </li>
                      <li>
                        <a
                          href="#"
                          >Finance Pathway</a
                        >
                      </li>
                      <li>
                        <a href="#"
                          >Law Pathway</a
                        >
                      </li>

                    </ul>
                  </li>
                  <li class="menu-has-children">
                    <a href="/">Business Management</a>
                    <ul>
                      <li>
                        <a href="#"
                          >International Foundation (Business / Finance Pathway) (Level 3)</a
                        >
                      </li>
                      <li>
                        <a href="#"
                          >Advance Diploma / HND in Business Management (Level 5)</a
                        >
                      </li>
                      <li>
                        <a
                          href="#"
                          >Graduate Diploma in Business Management (Level 6)</a
                        >
                      </li>
                      <li>
                        <a href="#"
                          >Postgraduate Diploma in Strategic Management & Leadership (Level 7)</a
                        >
                      </li>
                      <li>
                        <a href="#">BA (Hons) Business Management (Top Up) (Level 6)</a>
                      </li>
                      <li>
                        <a href="#"
                          >Master of Business Administration (MBA) (top-up) (Level 7)</a
                        >
                      </li>



                    </ul>
                  </li>
                  <li class="menu-has-children">
                    <a href="">Hospitality and Tourism </a>
                    <ul>
                      <li>
                        <a href="#"
                          >Higher National Diploma in Hospitality and Tourism Management (Level 5) </a
                        >
                      </li>
                      <li>
                        <a href="#"
                          >Graduate Diploma in Hospitality and Tourism Management (Level 6) </a
                        >
                      </li>
                      <li>
                        <a href="#"
                          >Postgraduate Diploma in Hospitality and Tourism Management (Level 7)</a
                        >
                      </li>
                     
                    </ul>
                  </li>
                  <li class="menu-has-children">
                    <a href="/">Logistics & Supply Chain</a>
                    <ul>
                      <li>
                        <a
                          href="#"
                          >Advance Diploma / HND in Logistics & Supply Chain Management (Level 5)</a
                        >
                      </li>
                      <li>
                        <a
                          href="#"
                          >Diploma in Logistics & Supply Chain Management (Level 6)</a
                        >
                      </li>
                      <li>
                        <a
                          href="#"
                          >Postgraduate Diploma in Logistics & Supply Chain Management (Level 7)</a
                        >
                      </li>
                     
                    </ul>
                  </li>
                  <li class="menu-has-children">
                    <a href="">	Information Technology</a>
                    <ul>
                      <li>
                        <a href="#"
                          >International Foundation (IT Pathway) (Level 3)</a
                        >
                      </li>
                      <li>
                        <a href="#"
                          >HND in Information Technology (Level 5)</a
                        >
                      </li>
                      <li>
                        <a href="#"
                          >Graduate Diploma in Information Technology (Level 6)</a
                        >
                      </li>
                      <li>
                        <a href="#"
                          >Postgraduate Diploma in Information Technology (Level 7)</a
                        >
                      </li>
                      <li>
                        <a href="#"
                          >Advanced Certificate in Hardware & Networking </a
                        >
                      </li>
                      <li>
                        <a href="#"
                          >Professional Certificate in Data Communications & Network</a
                        >
                      </li>
                      <li>
                        <a href="#"
                          >Professional Certificate in Database Administration & Technology</a
                        >
                      </li>
                      <li>
                        <a href="#"
                          >Professional Certificate in Programming</a
                        >
                      </li>
                      <li>
                        <a href="#"
                          >Professional Certificate in Cloud Computing</a
                        >
                      </li>
                      <li>
                        <a href="#"
                          >Professional Certificate in Web Designing & Development</a
                        >
                      </li>
                      <li>
                        <a href="#"
                          >Professional Certificate in Graphic Designing </a
                        >
                      </li>



                    </ul>
                  </li>
                  <li class="menu-has-children">
                    <a href="">Law</a>
                    <ul>
                      <li>
                        <a href="#">International Foundation (Law Pathway) (Level 3)</a>
                      </li>
                      <li>
                        <a href="#">Graduate Diploma in International Business Law (Level 6)</a>
                      </li>
                      <li>
                        <a href="#">Graduate Diploma in Law (GDL)</a>
                      </li>
                      <li>
                        <a href="#">Legal Practice Course (LPC)</a>
                      </li>



                    </ul>
                  </li>
                  <li class="menu-has-children">
                    <a href="">Education & Training</a>
                    <ul>
                      <li><a href="#">HND in Education and Training (Level 5)</a></li>
                      <li><a href="#">Diploma in Education and Training (Level 6)</a></li>
                      <li><a href="#">Postgraduate Diploma in Education and Training (Level 7)</a></li>

                    </ul>
                  </li>
                  <li class="menu-has-children">
                    <a href="">Project Management</a>
                    <ul>
                      <li><a href="#">Diploma in Project Management (Level 7)</a></li>


                    </ul>
                  </li>
                  <li class="menu-has-children">
                    <a href="">Entrepreneurship</a>
                    <ul>
                      <li><a href="#">Professional Diploma in Entrepreneurship</a></li>
                      <li><a href="#">Advance Diploma in Entrepreneurship</a></li>


                    </ul>
                  </li>
                  <li class="menu-has-children">
                    <a href="">Language Courses</a>
                    <ul>
                      <li><a href="#">IELTS, PTE, UKVI and CBT Classes</a></li>
                      <li><a href="#">Diploma in Business English</a></li>
                      <li><a href="#">Diploma in English Language</a></li>
                      <li><a href="#">Certificate in Creative Writing</a></li>
                      <li><a href="#">Language Training </a></li>


                    </ul>
                  </li>
                  <li class="menu-has-children">
                    <a href="">Personality Development Courses</a>
                    <ul>
                      <li><a href="#">Personality Development Program (Confident +)</a></li>
                      <li><a href="#">Corporate Training </a></li>
                </ul>
                  </li>
                
                </ul>
              </li>
              <!-- <li><a href="events.php">Events</a></li>
              <li><a href="gallery.php">Gallery</a></li> -->

             
              
              <li><a href="#">Freedo</a></li>
              <li><a href="./study-abroad.php">Study abroad</a></li>
            </ul>
          </nav>
          <!-- #nav-menu-container -->
        </div>
      </div>
    </header>