
    <?php
    include('header.php');
    ?>
    <!-- internal css for stubborn style -->
 <style>
    .carousel-caption{
        text-align: left;
        width: 50%;
        /* margin:0 auto; */
    }
    .carousel-caption p {
        max-width: 100%;
        font-size: 16px;
        font-family: 'Lato';

    }
    .carousel-caption h2 {
        font-weight: 900;
        font-size: 35px;
        
    }
    @media(max-width:922px){
    .slide-show .carousel-caption{
        width:98%;
        left:-6px;
        top:20%;
    }
    .slide-show .carousel-caption h2 {
        font-size:35px;
        max-width:100%;
        margin:15px;
       
    }
    .slide-show .carousel-caption p {
         max-width:100%;
        margin-left:20px;
        line-height:2;
         font-size:20px;
    }
    .key-point{
        margin-left:20px;
    }
  }
</style>

    <div style="" class="slide-show">
        
        <div id="carouselExampleCaptions" class="carousel slide"data-bs-ride="carousel">
            <!-- <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div> -->
            <div class="carousel-inner" style="">
              <div class="carousel-item active" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
              url(images/slider-img.jpg) no-repeat; background-size: cover; " >
                 
                  <div class="carousel-caption d-md-block">
                    <span class="key-point">Our Businesses</span>
                    <h2>Providing your building needs</h2>
                    <p>Kam Steel Integrated company is commited to produce reliable<br> steel and wire rod that
                      meet customer requirement while<br> conforming to national and international standard.
                    </p>
                  </div>
              </div>
              
              
            <!-- <div class="demo">
                <div id="bizsection">
                    <a href="">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
            </div> -->
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button> -->
          </div>
    </div>
    </div>
    <section class="b-container p-default">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-30">
                    <div class="ob-container">
                        <div class="ob-content" data-aos="fade-up"data-aos-offset="200" data-aos-duration="500" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                        url(images/haulage.png) no-repeat;background-size: cover;">
                            <div class="ob-text">
                                <h4>Haulage <br>Services</h4>
                                <a href ="haulage-service.php" class="readmore">Read more <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 mb-30">
                    <div class="ob-container">
                        <div class="ob-content" data-aos="fade-up" data-aos-offset="200" data-aos-duration="500" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                        url(images/packaging.jpg) no-repeat;background-size: cover;">
                            <div class="ob-text">
                                <h4>Packaging <br>Services</h4>
                                <a href ="packaging-service.php" class="readmore">Read more <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 mb-30">
                    <div class="ob-container">
                        <div class="ob-content"  data-aos="fade-up" data-aos-offset="200" data-aos-duration="500" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                        url(images/roofing-nail.jpg);background-size: cover; ">
                            <div class="ob-text">
                                <h4>Galvanized Roofing <br>Nails</h4>
                                <a href ="nails.php" class="readmore">Read more <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 mb-30">
                    <div class="ob-container">
                        <div class="ob-content"  data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                        url(images/galvanized-roofing-sheet.jpeg) no-repeat;background-size: cover; ">
                            <div class="ob-text">
                                <h4>Galvanized <br>Roofing sheet</h4>
                                <a href ="roofing-sheet.php" class="readmore">Read more <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 mb-30">
                    <div class="ob-container">
                        <div class="ob-content"  data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                        url(images/stone\ coated\ sheets.jpg) no-repeat;background-size: cover;">
                            <div class="ob-text">
                                <h4>Universal Stone<br> Coated Tiles</h4>
                                <a href ="stone-coated-tiles.php" class="readmore">Read more <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 mb-30">
                    <div class="ob-container">
                        <div class="ob-content"  data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000" style=" background-image:url(images/re-enforced-concrete.jpg);">
                            <div class="ob-text">
                                <h4>British Reinforced <br>Concrete</h4>
                                <a href ="british-reinforced-concrete.php" class="readmore">Read more <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 mb-30">
                    <div class="ob-container">
                        <div class="ob-content"  data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000" style=" background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                        url(images/binding-wires.jpg);background-size: cover; ">
                            <div class="ob-text">
                                <h4>Binding Wire</h4>
                                <a href ="binding-wire.php" class="readmore">Read more <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 mb-30">
                    <div class="ob-container">
                        <div class="ob-content"  data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000" style=" background-image:url(images/tmt-bars.jpg);">
                            <div class="ob-text">
                                <h4>TMT Bars</h4>
                                <a href ="tmt-bars.php" class="readmore">Read more <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 mb-30">
                    <div class="ob-container">
                        <div class="ob-content"  data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000" style=" background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                        url(images/roofing-sheets.jpg) no-repeat;background-size: cover;">
                            <div class="ob-text">
                                <h4>Colored Roofing Sheets (PPGI)</h4>
                                <a href ="roofing-sheet.php" class="readmore">Read more <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 mb-30">
                    <div class="ob-container">
                        <div class="ob-content"  data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                        url(images/coldrollcoil2a.jpg) no-repeat;background-size: cover;">
                            <div class="ob-text">
                                <h4>Cold Roll Coil</h4>
                                <a href ="cold-roll-coils.php" class="readmore">Read more <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 mb-30">
                    <div class="ob-container">
                        <div class="ob-content"  data-aos="fade-up" data-aos-offset="200" data-aos-duration="1000" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                        url(images/mining.png) no-repeat;background-size: cover;">
                            <div class="ob-text">
                                <h4>Mining</h4>
                                <a href ="mining.php" class="readmore">Read more <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <?php
    include('footer.php');
    ?>
