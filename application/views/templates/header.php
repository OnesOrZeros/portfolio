<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- color of address bar in mobile browser -->
  <meta name="theme-color" content="#2B2B35">
  <!-- favicon  -->
  <link rel="shortcut icon" href="<?php echo base_url();?>/resources/img/thumbnail.ico" type="image/x-icon">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="<?php echo base_url();?>/resources/css/plugins/bootstrap.min.css">
  <!-- font awesome css -->
  <link rel="stylesheet" href="<?php echo base_url();?>/resources/css/plugins/font-awesome.min.css">
  <!-- swiper css -->
  <link rel="stylesheet" href="<?php echo base_url();?>/resources/css/plugins/swiper.min.css">
  <!-- fancybox css -->
  <link rel="stylesheet" href="<?php echo base_url();?>/resources/css/plugins/fancybox.min.css">
  <!-- main css -->
  <link rel="stylesheet" href="<?php echo base_url();?>/resources/css/style.css">

  <title>Portfolio</title>
</head>

<body>

  <!-- app -->
  <div class="art-app">

    <!-- mobile top bar -->
    <div class="art-mobile-top-bar"></div>

    <!-- app wrapper -->
    <div class="art-app-wrapper">

      <!-- app container end -->
      <div class="art-app-container">

        <!-- info bar -->
        <div class="art-info-bar">

          <!-- menu bar frame -->
          <div class="art-info-bar-frame">

            <!-- info bar header -->
            <div class="art-info-bar-header">
              <!-- info bar button -->
              <a class="art-info-bar-btn" href="#.">
                <!-- icon -->
                <i class="fas fa-ellipsis-v"></i>
              </a>
              <!-- info bar button end -->
            </div>
            <!-- info bar header end -->

            <!-- info bar header -->
            <div class="art-header">
              <!-- avatar -->
              <div class="art-avatar">
                <a data-fancybox="avatar" href="<?php echo base_url();?>/resources/img/face-1.jpg" class="art-avatar-curtain">
                  <img src="<?php echo base_url();?>/resources/img/face-1.jpg" alt="avatar">
                  <i class="fas fa-expand"></i>
                </a>
                <!-- available -->
                <div class="art-lamp-light">
                  <!-- add class 'art-not-available' if not available-->
                  <div class="art-available-lamp"></div>
                </div>
              </div>
              <!-- avatar end -->
              <!-- name -->
              <h5 class="art-name mb-10"><a href="/home.html">Mwaura Kelvin Gitonga</a></h5>
              <!-- post -->
              <div class="art-sm-text">Full Stack Developer </br> 
                        <?php $dob='2016-01-01';
                        $diff = (date('Y') - date('Y',strtotime($dob)));
                        echo $diff; ?> years Software Engineering Experience</div>
            </div>
            <!-- info bar header end -->

            <!-- scroll frame -->
            <div id="scrollbar2" class="art-scroll-frame">

              <!-- info bar about -->
              <div class="art-table p-15-15">
                <!-- about text -->
                <ul>
                  <!-- country -->
                  <li>
                  <img style="height:55px; width:64px;" src="<?php echo base_url();?>/resources/img/brands/1.png" alt="brand">
                    <h6 style="padding: 10px;">CISCO Certified DevNet Associate</h6>
                  </li>
                  <!-- city -->
                  <li>
                 <img style="height:55px; width:64px;" src="<?php echo base_url();?>/resources/img/brands/2.png" alt="brand">
                    <h6 style="padding: 10px;">CISCO Certified DevNet Specialist</h6>
                    
                  </li>
                </ul>
              </div>
              <!-- info bar about end -->

              <!-- divider -->
              <div class="art-ls-divider"></div>

              <!-- language skills -->
              <div class="art-lang-skills p-30-15">

                <!-- skill -->
                <div class="art-lang-skills-item">
                  <div id="circleprog1" class="art-cirkle-progress"></div>
                  <!-- title -->
                  <h6>Swahili</h6>
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-lang-skills-item">
                  <div id="circleprog2" class="art-cirkle-progress"></div>
                  <!-- title -->
                  <h6>English</h6>
                </div>
                <!-- skill end -->

              </div>
              <!-- language skills end -->

              <!-- divider -->
              <div class="art-ls-divider"></div>

              <!-- hard skills -->
              <div class="art-hard-skills p-30-15">

                <!-- skill -->
                <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>HTML</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog1"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>CSS</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog2"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>Bootstrap</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog3"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>Javascript</h6>PHP
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog4"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>PHP</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog5"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                     <!-- skill -->
                     <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>Android</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog6"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>Flutter</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog7"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>Java</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog8"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>Python</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog9"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>PostgreSQL</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog10"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                     <!-- skill -->
                     <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>SQL Server</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog11"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>MySQL</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog12"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>JQuery</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog13"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>Jupyter</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog14"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                <!-- skill -->
                <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>MSSQL</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog15"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                 <!-- skill -->
                 <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>Vue</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog16"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

                 <!-- skill -->
                 <div class="art-hard-skills-item">
                  <div class="art-skill-heading">
                    <!-- title -->
                    <h6>React</h6>
                  </div>
                  <!-- progressbar frame -->
                  <div class="art-line-progress">
                    <!-- progressbar -->
                    <div id="lineprog17"></div>
                  </div>
                  <!-- progressbar frame end -->
                </div>
                <!-- skill end -->

              

              </div>
              <!-- language skills end -->

              <!-- divider -->
              <div class="art-ls-divider"></div>

              <!-- knowledge list -->
              <ul class="art-knowledge-list p-15-0">
                <!-- list item -->
                <li>DevOps</li>
                <!-- list item -->
                <li>Networking and Security</li>
                <!-- list item -->
                <li>IT Support</li>
                <!-- list item -->
                <li>Maintenance</li>
                <!-- list item -->
                <li>GIT knowledge</li>
              </ul>
              <!-- knowledge list end -->

              <!-- divider -->
              <div class="art-ls-divider"></div>

              <!-- links frame -->
              <div class="art-links-frame p-15-15">

                <!-- download cv button -->
                <a href="<?php echo base_url();?>/resources/files/cv.pdf" class="art-link" download>Download cv <i class="fas fa-download"></i></a>

              </div>
              <!-- links frame end -->

            </div>
            <!-- scroll frame end -->

            <!-- sidebar social -->
            <div class="art-ls-social">
               <!-- social link -->
               <a href="tel:+254725807288" target="_blank"><i class="fas fa-phone"></i></a>
                <!-- social link -->
              <a href="mailto:info@mwauragitonga.com" target="_blank"><i class="fas fa-envelope"></i></a>
              <!-- social link -->
              <a href="https://twitter.com/__Gitonga?t=bxYcBRnlP7cZ1iOL9dLJUg&s=09" target="_blank"><i class="fab fa-twitter"></i></a>
              <!-- social link -->
              <a href="https://www.linkedin.com/in/mwaura-kelvin-gitonga-3a3b07171/" target="_blank"><i class="fab fa-linkedin"></i></a>
              <!-- social link -->
              <a href="https://github.com/mwauragitonga" target="_blank"><i class="fab fa-github"></i></a>
            </div>
            <!-- sidebar social end -->

          </div>
          <!-- menu bar frame end -->

        </div>
        <!-- info bar end -->