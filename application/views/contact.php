<?php $this->load->view('templates/header'); ?>

        <!-- content -->
        <div class="art-content">

          <!-- curtain -->
          <div class="art-curtain"></div>

          <!-- top background -->
          <div class="art-top-bg" style="background-image: url(img/bg.jpg)">
            <!-- overlay -->
            <div class="art-top-bg-overlay"></div>
            <!-- overlay end -->
          </div>
          <!-- top background end -->


          <!-- swup container -->
          <div class="transition-fade" id="swup">

            <!-- scroll frame -->
            <div id="scrollbar" class="art-scroll-frame">

              <!-- container -->
              <div class="container-fluid">

                <!-- row -->
                <div class="row p-30-0">

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- section title -->
                    <div class="art-section-title">
                      <!-- title frame -->
                      <div class="art-title-frame">
                        <!-- title -->
                        <h4>Contact information</h4>
                      </div>
                      <!-- title frame end -->
                    </div>
                    <!-- section title end -->

                  </div>
                  <!-- col end -->
                  <!-- col -->
                  <div class="col-lg-3">
                    <!-- contact card -->
                    <div class="art-a art-card">
                      <div class="art-table p-15-15">
                        <ul>
                          <li>
                          <i class="fas fa-flag"></i><span>Country:</span><h6>Kenya</h6>
                          </li>
                          <li>
                          <i class="fas fa-city"></i><span>City:</span><h6>Nairobi</h6>
                          </li>

                        </ul>
                      </div>
                    </div>
                    <!-- contact card end -->
                  </div>
                  <!-- col end -->
                  <!-- col -->
                  <div class="col-lg-5">
                    <!-- contact card -->
                    <div class="art-a art-card">
                      <div class="art-table p-15-15">
                        <ul>
                          <li>
                          <i class="fas fa-envelope"></i><span>Personal:</span><a href="mailto:mwauragitonga12@gmail.com" target="_blank"><h6>mwauragitonga12@gmail.com</h6></a>
                          </li>
                          <li>
                          <i class="fas fa-briefcase"></i><span>Office:</span><a href="mailto:info@mwauragitonga.com" target="_blank"><h6>info@mwauragitonga.com</h6></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- contact card end -->
                  </div>
                  <!-- col end -->
                  <!-- col -->
                  <div class="col-lg-4">
                    <!-- contact card -->
                    <div class="art-a art-card">
                      <div class="art-table p-15-15">
                        <ul>
                          <li>
                          <i class="fas fa-phone"></i><span>Phone:</span> <a href="tel:+254725807288" target="_blank"><h6>(+254) 725-807-288</h6></a>
                          </li>
                          <li>
                          <i class="fab fa-skype"></i><span>Skype:</span><a href="skype:mwauragitonga12?chat" target="_blank"><h6>mwauragitonga12</h6></a>
                          </li>
                          <li>
                          <i class="fab fa-twitter"></i><span>Twitter:</span><a href="https://twitter.com/__Gitonga?t=bxYcBRnlP7cZ1iOL9dLJUg&s=09" target="_blank"><h6>@__Gitonga</h6></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- contact card end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- section title -->
                    <div class="art-section-title">
                      <!-- title frame -->
                      <div class="art-title-frame">
                        <!-- title -->
                        <h4>Get in touch</h4>
                      </div>
                      <!-- title frame end -->
                    </div>
                    <!-- section title end -->

                    <!-- contact form frame -->
                    <div class="art-a art-card">

                      <!-- contact form -->
                      <div class="art-contact-form">
                        <?php echo form_open('home/sendcontactmail')?>
                          <!-- form field -->
                          <div class="art-form-field">
                            <!-- name input -->
                            <input id="name" name="name" class="art-input" type="text" placeholder="Name" required>
                            <!-- label -->
                            <label for="name"><i class="fas fa-user"></i></label>
                          </div>
                          <!-- form field end -->
                          <!-- form field -->
                          <div class="art-form-field">
                            <!-- email input -->
                            <input id="email" name="email" class="art-input" type="email" placeholder="Email" required>
                            <!-- label -->
                            <label for="email"><i class="fas fa-at"></i></label>
                          </div>
                          <!-- form field end -->
                          <!-- form field -->
                          <div class="art-form-field">
                            <!-- message textarea -->
                            <textarea id="message" name="message" class="art-input" placeholder="Message" required></textarea>
                            <!-- label -->
                            <label for="message"><i class="far fa-envelope"></i></label>
                          </div>
                          <!-- form field end -->
                          <!-- button -->
                          <div class="art-submit-frame">
                            <button class="art-btn art-btn-md art-submit" type="submit"><span>Send message</span></button>
                            <!-- success -->
                            <div class="art-success">Success <i class="fas fa-check"></i></div>
                          </div>
                        </form>
                      </div>
                      <!-- contact form end -->

                    </div>
                    <!-- contact form frame end -->

                  </div>
                  <!-- col end -->

                </div>
                <!-- row end -->

              </div>
              <!-- container end -->

          
<?php $this->load->view('templates/footer'); ?>
