<section class="footer bg-dark p-default">
        <div class="container">
            <div class="row">
                <!--<div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="menu-pages">
                        <h5>COMPANY</h5>
                        <ul>
                            <li><a href ="about.php">About Us</a></li>
                            <li><a href ="our-business.php">Our Business</a></li>
                            <li><a href="investor-relationship.php">Investor Relationship</a></li>
                            <li><a href="csr-initiatives.php">CSR Enterprise</a></li>
                            <li><a href="career.php">Career Opportunity</a></li>
                            <li><a href ="contact.php">Contact Us</a></li>
                            <li><a href ="media.php">Media</a></li>
                            <li><a href ="sustainability.php">Sustainability</a></li>
                        </ul>
                    </div>
                </div>-->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="menu-pages">
                        <h5>MOBILE DETAILS</h5>
                        <ul>
                            <li>Call Lagos: +234-7000123450</li>
                            <li>Call Abuja: +234-7000123451</li>
                            <!--<li>Fax: 0086-510-83553986</li>
                            <li>Email: mail@kamholding.net</li>
                            <li>
                              <a href="https://www.facebook.com/kam_holding/"><i  class="fa-brands fa-facebook"></i></a>
                             <a href="https://www.twitter.com/kam_holding/"><i class="fa-brands fa-twitter"></i></a>
                             <a href="https://www.instagram.com/kam_holding/"><i class="fa-brands fa-instagram"></i></a>
                            </li>-->
                           
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="menu-pages">
                        <h5>FAX & e-Mail</h5>
                        <ul>
                            <!--<li>Call Lagos: +234-7000123450</li>
                            <li>Call Abuja: +234-7000123451</li>-->
                            <li>Fax: 0086-510-83553986</li>
                            <li>Email: frontdesk@kamholding.net</li>
                            <!--<li>
                              <a href="https://www.facebook.com/kam_holding/"><i  class="fa-brands fa-facebook"></i></a>
                             <a href="https://www.twitter.com/kam_holding/"><i class="fa-brands fa-twitter"></i></a>
                             <a href="https://www.instagram.com/kam_holding/"><i class="fa-brands fa-instagram"></i></a>
                            </li>-->
                           
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="menu-pages">
                        <h5>SOCIAL CONNECT</h5>
                        <ul>
                            <!--<li>Call Lagos: +234-7000123450</li>
                            <li>Call Abuja: +234-7000123451</li>
                            <li>Fax: 0086-510-83553986</li>
                            <li>Email: mail@kamholding.net</li>-->
                            <li>
                              <a href="https://www.facebook.com/kam_holding/"><i  class="fa-brands fa-facebook"></i></a>
                             <a href="https://www.twitter.com/kam_holding/"><i class="fa-brands fa-twitter"></i></a>
                             <a href="https://www.instagram.com/kam_holding/"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                           
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6" >
                    <div class="menu-pages">
                        <h5>NEWSLETTER</h5>
                        <ul>
                          <div class="n-letter">
                            <input type ="text" class="btn-text" placeholder="Your Email">
                            <input type="submit" class="" value="Subscribe" >
                          </div>
                        </ul>
                    </div>
                </div>
                <hr style="color:#fff;">
            </div>
            <div class="row">
              <div class="col-md-12">
                <!-- <p style="float:left">Kamholding</p> -->
                <img src="images/logo-kam-xss.png" alt="" style="float:left">
                <ul class="policy">
                  <li>&copy; 2023 KAM Holding Limited</li>
                  <li><a href ="policy.php" style="color:#fff">Policy</a></li>
                </ul>
              </div>
            </div>
        
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script type ="text/javascript">
        $(function(){
            var navbar = $('.header-inner');
            $(window).scroll(function(){
                if($(window).scrollTop()<= 40){
                    navbar.removeClass('navbar-scroll');
                }else navbar.addClass('navbar-scroll');
            })
        })
    </script>
    <!-- Animate of scroll -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>