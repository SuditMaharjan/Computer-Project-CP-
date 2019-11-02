<?php
include_once("./start.php");

include("includes/individual-header.php");
include('includes/notification.php');
?>
<body>
<!-- Tours-->
      <section class="section section-custom-1 bg-default">
        <div class="container">
          <div class="row row-50 justify-content-xl-between flex-lg-row-reverse">
            <div class="col-lg-5 col-xl-5">
              <div class="section-custom-1-block box-decoration">
                <div class="row row-40">
                  <div class="col-md-6 col-lg-12">
                    <div class="d-flex justify-content-between">
                      <h4 class="text-uppercase font-weight-sbold wow fadeIn">Book a free Sesion</h4><span class="icon mdi icon-sm linearicons-pencil3"></span>
                    </div>
                    <!-- RD Mailform-->
                    <form class="rd-form rd-mailform form-lg" data-form-output="form-output-global" data-form-type="contact" method="POST" action="form/user.php">
                      <div class="form-wrap form-wrap-icon wow fadeIn" data-wow-delay=".05s">
                        <label class="form-label form-label-outside" for="contact-1-name">Name</label>
                        <input class="form-input" id="contact-1-name" type="text" name="name" data-constraints="@Required" required>
                        <div class="icon form-icon mdi mdi-account-outline"></div>
                      </div>
                      <div class="form-wrap form-wrap-icon wow fadeIn" data-wow-delay=".1s">
                        <label class="form-label form-label-outside" for="contact-1-phone">Phone</label>
                        <input class="form-input" id="contact-1-phone" type="text" name="phone" data-constraints="@PhoneNumber" required>
                        <div class="icon form-icon mdi mdi-phone"></div>
                      </div>
                      <div class="form-wrap form-wrap-icon wow fadeIn" data-wow-delay=".15s">
                        <label class="form-label form-label-outside" for="contact-1-email">E-mail</label>
                        <input class="form-input" id="contact-1-email" type="email" name="email" data-constraints="@Email @Required" required>
                        <div class="icon form-icon mdi mdi-email-outline"></div>
                      </div>
                      <div class="form-wrap form-wrap-icon wow fadeIn" data-wow-delay=".05s">
                        <label class="form-label form-label-outside" for="contact-1-password">Password</label>
                        <input class="form-input" id="contact-1-password" type="password" name="password" data-constraints="@Password @Required" required>
                        <div class="icon form-icon mdi mdi-email-outline"></div>
                      </div>
                      <input type="hidden" name="register" value="1">

                      <div class="form-wrap wow fadeIn" data-wow-delay=".2s">
                        <button class="button button-lg button-icon button-2 button-primary" type="submit">Sign Up</button>
                      </div>
                    </form>
                  </div>
                  <div class="col-md-6 col-lg-12">
                    <h5 class="text-uppercase wow fadeIn">Lots of Happy Students</h5>
                    <p class="text-gray-500 mt-30 wow fadeIn" data-wow-delay=".05s">We have over 4 thousand students</p>
                    <ul class="list-number mt-15 mt-md-30">
                      <li class="wow fadeIn" data-wow-delay=".1s">4</li>
                      <li class="wow fadeIn" data-wow-delay=".15s">1</li>
                      <li class="wow fadeIn" data-wow-delay=".2s">4</li>
                      <li class="wow fadeIn" data-wow-delay=".25s">5</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-xl-6">
              <div class="inset-4">
                <div class="layout-2 wow fadeIn">
                  <h2 class="text-uppercase font-weight-bold">Courses We Offer</h2>
                  <div class="layout-2-item"><a class="button button-sm button-style-1" href="#">See All</a></div>
                </div>
                <div class="row row-30 mt-xl-60">
                  <div class="col-sm-6 wow fadeIn">
                    <article class="tour-minimal context-dark">
                      <div class="tour-minimal-inner img-overlay" style="background-image: url(images/home-3-2-258x273.jpg);">
                        <div class="tour-minimal-header">
                        </div>
                        <div class="tour-minimal-main">
                          <h3 class="tour-minimal-title font-weight-sbold"><a href="#">Graphic Design Classes</a></h3>
                          <div class="tour-minimal-pricing">
                            <p class="tour-minimal-price tour-minimal-price-new">$25</p>
                          </div>
                          <p class="tour-minimal-comment">Price per lesson</p>
                        </div>
                        <div class="tour-minimal-caption">
                          <p>Our best Graphic Design course for starter level.</p>
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="col-sm-6 wow fadeIn" data-wow-delay=".05s">
                    <article class="tour-minimal context-dark">
                      <div class="tour-minimal-inner img-overlay" style="background-image: url(images/home-3-3-258x273.jpg);">
                        <div class="tour-minimal-header">
                        </div>
                        <div class="tour-minimal-main">
                          <h3 class="tour-minimal-title font-weight-sbold"><a href="#">Online Learning</a></h3>
                          <div class="tour-minimal-pricing">
                            <p class="tour-minimal-price tour-minimal-price-new">$35</p>
                          </div>
                          <p class="tour-minimal-comment">Price per lesson</p>
                        </div>
                        <div class="tour-minimal-caption">
                          <p>Perfect if you prefer distance education.</p>
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="col-sm-6 wow fadeIn" data-wow-delay=".05s">
                    <article class="tour-minimal context-dark">
                      <div class="tour-minimal-inner img-overlay" style="background-image: url(images/home-3-4-258x273.jpg);">
                        <div class="tour-minimal-header">
                        </div>
                        <div class="tour-minimal-main">
                          <h3 class="tour-minimal-title font-weight-sbold"><a href="#">Network and Cybersecurity</a></h3>
                          <div class="tour-minimal-pricing">
                            <p class="tour-minimal-price tour-minimal-price-new">$40</p>
                          </div>
                          <p class="tour-minimal-comment">Price per lesson</p>
                        </div>
                        <div class="tour-minimal-caption">
                          <p>Network course designed for beginners.</p>
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="col-sm-6 wow fadeIn" data-wow-delay=".1s">
                    <article class="tour-minimal context-dark">
                      <div class="tour-minimal-inner img-overlay" style="background-image: url(images/home-3-5-258x273.jpg);">
                        <div class="tour-minimal-header">
                        </div>
                        <div class="tour-minimal-main">
                          <h3 class="tour-minimal-title font-weight-sbold"><a href="#">Web Development</a></h3>
                          <div class="tour-minimal-pricing">
                            <p class="tour-minimal-price tour-minimal-price-new">$17</p>
                          </div>
                          <p class="tour-minimal-comment">Price per lesson</p>
                        </div>
                        <div class="tour-minimal-caption">
                          <p>Easy-to-learn Web designing for beginners.</p>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>    
    
<?php    
    
    include("includes/footer.php");
?>
<script>
    function loadCookie() {
            if (confirm("Do you want to accept our cookie?")) {
              document.cookie = "accept=assignment";
                        }
                    }
</script>


</body>