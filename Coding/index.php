<?php
include_once("start.php");
include_once("includes/header.php");
?>
<body>
    
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-inner">
        <div class="preloader-top">
          <div class="preloader-top-sun">
            <div class="preloader-top-sun-bg"></div>
            <div class="preloader-top-sun-line preloader-top-sun-line-0"></div>
            <div class="preloader-top-sun-line preloader-top-sun-line-45"></div>
            <div class="preloader-top-sun-line preloader-top-sun-line-90"></div>
            <div class="preloader-top-sun-line preloader-top-sun-line-135"></div>
            <div class="preloader-top-sun-line preloader-top-sun-line-180"></div>
            <div class="preloader-top-sun-line preloader-top-sun-line-225"></div>
            <div class="preloader-top-sun-line preloader-top-sun-line-270"></div>
            <div class="preloader-top-sun-line preloader-top-sun-line-315"></div>
          </div>
        </div>
        <div class="preloader-bottom">
          <div class="preloader-bottom-line preloader-bottom-line-lg"></div>
          <div class="preloader-bottom-line preloader-bottom-line-md"></div>
          <div class="preloader-bottom-line preloader-bottom-line-sm"></div>
          <div class="preloader-bottom-line preloader-bottom-line-xs"></div>
        </div>
      </div>
    </div>
    <div class="page">

        <!-- Jumbotron 3-->
        <div class="jumbotron-3">
          <div class="parallax-container jumbotron-3-inner context-dark" data-parallax-img="images/bg-image-01.jpg">
            <div class="parallax-content">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-lg-7 col-xl-7">
                    <div class="unit jumbotron-3-title wow fadeIn">
                      <div class="unit-left"><span class="icon linearicons-quote-open icon-lg"></span></div>
                      <div class="unit-body">
                        <h5 class="font-weight-regular line-height-title">Our computer institute offers group and personal lessons in English and other modern languages for all ages and levels of knowledge.</h5>
                      </div>
                    </div>
                    <div class="jumbotron-3-text wow fadeIn" data-wow-delay=".1s">
                      <h1 class="text-uppercase font-weight-strong text-decoration">Improve your<br><span class="font-weight-light">computer&nbsp;</span>skills</h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
                  <div class="layout-2-item"><a class="button button-sm button-style-1" href="bookCourses.php">See All</a></div>
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
      <!-- Featured Tours-->
      <section class="section section-1 bg-gray-100">
        <div class="container">
          <div class="row row-30 row-sm-50 justify-content-center justify-content-lg-between">
            <div class="col-sm-10 col-md-10 col-lg-8">
              <h2 class="text-uppercase font-weight-bold text-center text-md-left">Our Gallery</h2>
              <div class="post-corporate-gallery post-corporate-gallery-2 inset-1" data-lightgallery="group"><a class="post-corporate-thumbnail post-corporate-thumbnail-1 post-corporate-thumbnail-custom" href="images/group-01-original.jpg" data-lightgallery="item"><img class="post-corporate-thumbnail-image" src="images/group-01-722x490.jpg" alt="" width="722" height="490"/></a><a class="post-corporate-thumbnail post-corporate-thumbnail-5" href="images/group-02-original.jpg" data-lightgallery="item"><img class="post-corporate-thumbnail-image" src="images/group-02-360x326.jpg" alt="" width="360" height="326"/></a><a class="post-corporate-thumbnail post-corporate-thumbnail-5" href="images/group-03-original.jpg" data-lightgallery="item"><img class="post-corporate-thumbnail-image" src="images/group-03-360x326.jpg" alt="" width="360" height="326"/></a></div>
            </div>
            <div class="col-lg-4 offset-top-96">
              <div class="row row-40 row-md-50 row-xxl-80">
                <div class="col-md-6 col-lg-12">
                  <article class="box-8 mt-30 mt-xl-60 wow fadeIn" data-wow-delay=".1s">
                    <ul class="list-pricing">
                      <li><a href="#"><span class="list-pricing-title">Language for Business</span><span>$45</span></a></li>
                      <li><a href="#"><span class="list-pricing-title">English for Kids</span><span>$15</span></a></li>
                      <li><a href="#"><span class="list-pricing-title">Online Learning</span><span>$36</span></a></li>
                      <li><a href="#"><span class="list-pricing-title">German Club</span><span>$21</span></a></li>
                      <li><a href="#"><span class="list-pricing-title">Personal Lessons</span><span>$35</span></a></li>
                      <li><a href="#"><span class="list-pricing-title">Group Lessons</span><span>$34</span></a></li>
                      <li><a href="#"><span class="list-pricing-title">French for Beginners</span><span>$32</span></a></li>
                    </ul>
                  </article>
                </div>
                <div class="col-md-6 col-lg-12">
                  <h2 class="text-uppercase font-weight-bold text-center text-sm-left wow fadeIn">why choose us</h2>
                  <ul class="row list-group-2 row-13 row-md-30 mt-20 mt-xl-40">
                    <li class="col-sm-6 col-md-12 wow fadeIn" data-wow-delay=".05s">
                      <article class="lg-2-item">
                        <div class="lg-2-item-aside bg-box-1">
                          <div class="icon lg-2-item-icon mdi mdi-checkbox-marked-circle-outline"></div><span class="lg-2-item-counter"></span>
                        </div>
                        <div class="lg-2-item-main">
                          <h3 class="font-weight-regular lg-2-item-title">Quick Results</h3>
                          <p>Get quick and guaranteed results with the best teachers.</p>
                        </div>
                      </article>
                    </li>
                    <li class="col-sm-6 col-md-12 wow fadeIn" data-wow-delay=".1s">
                      <article class="lg-2-item">
                        <div class="lg-2-item-aside">
                          <div class="icon lg-2-item-icon mdi mdi-coin"></div><span class="lg-2-item-counter"></span>
                        </div>
                        <div class="lg-2-item-main">
                          <h3 class="font-weight-regular lg-2-item-title">Save Money</h3>
                          <p>You can save a lot of money on our lessons & resources.</p>
                        </div>
                      </article>
                    </li>
                    <li class="col-sm-6 col-md-12 wow fadeIn" data-wow-delay=".15s">
                      <article class="lg-2-item">
                        <div class="lg-2-item-aside bg-tertiary">
                          <div class="icon lg-2-item-icon mdi mdi-comment-multiple-outline"></div><span class="lg-2-item-counter"></span>
                        </div>
                        <div class="lg-2-item-main">
                          <h3 class="font-weight-regular lg-2-item-title">Get Support</h3>
                          <p>Our staff and teachers are always ready to help you.</p>
                        </div>
                      </article>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    
    
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