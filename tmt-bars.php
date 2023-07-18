<?php
include('header.php');
?>
<!-- internal css-->
<style>
    .btn-text {
    box-shadow: 0 4px 3px 2px rgb(0 0 0 / 12%);
    background-color: white;
    border-radius: 3px 0px 0px 3px;
    padding: 15px 25px;
    font-size: 12px;
    font-weight: 400;
    color: #100d5c;
    text-transform: uppercase;
}
 @media(max-width:922px){
    video{
        width:auto!important;
        height:100vh!important;
    }
</style>
<style>

.grid-container {
  display: grid;
  grid-template-columns: auto auto;
  grid-gap: 10px;
  background-color: #00000
;
  padding: 10px;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: left;
  padding: 20px 0;
  font-size: 16px;
}
</style>
<div style="" class="slide-show">
        <div id="carouselExampleCaptions" class="carousel slide"data-bs-ride="carousel"  data-bs-interval="30000">
            <div class="carousel-indicators">
              <!--<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>-->
            </div>
            <div class="carousel-inner" style="">
              
              <div class="carousel-item active" style="">
                    <!--<video class="video-fluid" autoplay loop muted  style="overflow: hidden;width:100%;height:auto;">
                    <source src="images/TMTVID.mp4" type="video/mp4">
                  </video>-->
            <div class="carousel-inner" style="">
              
              <div class="carousel-item active" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)),
              url(images/tmt-bars1.jpg) no-repeat; background-size: cover; ">                  
                <div class="carousel-caption  d-md-block">
                    <span class="key-point"></span>
                     <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <P>&nbsp;</p>

                  <h1>ELEPHANT TMT Iron Rod</h1>
                  <!--<p>KAM Holding Group is all about creating ventures that serve the interest of stakeholders, communities and the people concerned. 
                        We believe in establishing impactful businesses that are socially responsible to cater for people’s needs.
                    </p>-->
                  <br>
                  <!--<a href="about.php" class="readmore">Learn more <i class="fa fa-long-arrow-right"></i></a>-->
                </p>
                </div>
              </div>
              <div class="carousel-item" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
              url(images/tmt-bars1.jpg) no-repeat; background-size: cover; ">
                <div class="carousel-caption  d-md-block">
                     <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <P>&nbsp;</p>
                    
                    <span class="key-point">KAM Holding Limited</span>
                  <h1>Setting the pace in building materials.</h1>
                  <p>Where everyone has the opportunity to thrive.</p>
                  <br>
                  <a href="about.php" class="readmore">Learn more <i class="fa fa-long-arrow-right"></i></a>
                </p>
                </div>
              </div>
              <!--<div class="carousel-item" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)),
              url(images/kam-history2-new.jpg) no-repeat; background-size: cover; ">
                <div class="carousel-caption  d-md-block">
                    <span class="key-point">KAM HOLDING LIMITED</span>
                  <h1>Setting the pace in building materials.</h1>
                  <p>Where everyone has the opportunity to thrive.</p>
                  <br>
                  <a href="about.php" class="readmore">Learn more <i class="fa fa-long-arrow-right"></i></a>
                </p>
                </div>
              </div>-->

            <!--<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>-->
          </div>
    </div>
    </div>

<!--<div style="" class="slide-show">
        <div id="carouselExampleCaptions" class="carousel slide"data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="">
              <video class="video-fluid" autoplay loop muted  style="overflow: hidden;width:100%;height:auto;">
                    <source src="images/KAM_PROCESS_ABOUTUS.mp4" type="video/mp4">
                  </video>
              <!--<div class="carousel-item active" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
              url(images/transport-logistics-kama.jpg) no-repeat; background-size: cover; ">
                <div class="carousel-caption  d-md-block">
                    <span class="key-point">KAM Holding Limited</span>
                  <h1>TMT Bars</h1>
                  <p>KAM Holding Group is all about creating ventures that serves the interest of stakeholders, communities and the people concerned. 
                        We believe in establishing impactful businesses that are socially responsible to cater for people’s needs.</p>
                  <br>
                  <a href="about.php" class="readmore">Learn more <i class="fa fa-long-arrow-right"></i></a>
                </p>
                </div>
              </div>
              <!--<div class="carousel-item" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
              url(images/green-energy-kam.jpg) no-repeat; background-size: cover; ">
                <div class="carousel-caption  d-md-block">
                    <span class="key-point">Green Energy and Smart Converters</span>
                  <h1>ENERGY</h1>
                  <p>Our mission is to contribute with innovative generation of electrical power from renewable sources, transmission, control, storage and use of electrical energy at intelligent technical performance and reduced environment impact to ensure quality and sustainability.</p>
                  <br>
                  <a href="about.php" class="readmore">Learn more <i class="fa fa-long-arrow-right"></i></a>
                </p>
                </div>
              </div>
              <div class="carousel-item" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
              url(images/Gas-powered-energya.jpg) no-repeat; background-size: cover; ">
                <div class="carousel-caption  d-md-block">
                    <span class="key-point">Natural Gas Energy Plant</span>
                  <h1>ENERGY</h1>
                  <p>Production of Electricity by capitalizing on more capacity and energy for Gas powered plants.</p>
                  <br>
                  <a href="about.php" class="readmore">Learn more <i class="fa fa-long-arrow-right"></i></a>
                </p>
                </div>
              </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
</div>-->
   <!-- <section class="k-figures p-default-2 bg-light" style="">
      <div class="brand-show-container">
      <div class="container">
        <h2 class="text-center mb-30">Key Figures</h2>
        <div class="row">
          <div class="col-md-4 mb-30">
            <div class="revenue b-shadow">
              <h2>N307B</h2>
              <h2>$1.1B</h2>
              <P>Revenue in 2017</P>
            </div>
          </div>
          <div class="col-md-4 mb-30">
            <div class="revenue b-shadow">
             
              <h2>12,000</h2>
              <p>People employed in Africa</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="revenue b-shadow">
              <h2>12.8MTA</h2>
             
              <p>Production Capacity</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>-->
    <section class="brand-show p-default-2">
      <div class="container">
        <div class="brand-show-container">
          <div class="row">
            <h2 class="text-center mb-30"></h2>
            <p>ISO 9001:2015 certified and of superior quality, ELEPHANT brand TMT Re-Bars are high strength thermos-mechanically treated reinforcement bars and guarantees for Superior Physical Strength, High Bond Strength, Excellent Weldability, High Dimension Tolerance, Seismic Resistance, Fire Resistance and
Unique Corrosion Resistance. TMT Bars are widely used in general purpose concrete reinforcement structure, bridges and flyovers, dams, thermal and hydro power plants, industrial structures, high-rise buildings, underground platforms and transport systems.<br/><br/>
<strong>ALL ABOUT TMT</strong><br/>
<strong>BARS TMT</strong> stands for Thermo Mechanical Treatment that is also known as metallurgical process. KAM HOLDING'S investment in TMT Bars is calculated to make construction easy for engineering in Nigeria.
<br/><br/><strong>TOP 10 ADVANTAGES OF TMT BARS</strong>
<br/>1. They lend superior welding ability, working ability, ductility and
better elongation.
<br/>2. They are widely used in the construction industry due to their amazing flexibility.
<br/>3. Using TMT Bars in construction is cost effective and increases the pace of construction
<br/>4. TMT bars are also easy to maintain and transport owing to their light weight
<br/>5. TMT bars minimize the risk of damage due to natural calamities like earthquake and fire casualties.The best part is that the steel of TMT bars can be recycled without compromising on quality6. The steel framers are easy to create and assemble
<br/>7. The TMT bars manufactures find it easy to create and assemble the required steel frames in the manufacturing factory.
<br/>8. TMT bars are highly flexible in nature, because of which they do not get cracks even after bending 180 degrees. The better elongation becomes possible because of the better ductility of the steel.
<br/>9. The TMT bars with better elongation rate are easy to carry and ffer maximum saving in comparison to the CTD bars. This makes them perfect for areas prone to cyclones, earthquakes and other natural calamities.
<br/>10. TMT bars are corrosion resistant and thus help in reducing the rate of corrosion possible due to concrete. The rust has higher volume than steel and corrosion results in cracking of the construction.</p>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="brand-img">
                <img src="images/s1.jpeg"width="100%" alt="">
                <h5></h5>
               </div>
            </div>  
            <div class="col-md-4">
             <div class="brand-img">
              <img src="images/s2.jpeg" width="100%"alt="">
                <h5></h5>
             </div>
            </div>
           <div class="col-md-4">
              <div class="brand-img">
                <img src="images/s3.jpeg"width="100%" alt="">
                <h5></h5>
               </div>
            </div>
            <div class="col-md-4">
              <div class="brand-img">
                <img src="images/s4.jpeg"width="100%" alt="">
                <h5></h5>
              </div>
            </div>
                <div class="col-md-4">
              <div class="brand-img">
                <img src="images/s5.jpeg"width="100%" alt="">
                <h5></h5>
               </div>
            </div>
            <div class="col-md-4">
              <div class="brand-img">
                <img src="images/_MG_5227.jpg"width="100%" alt="">
                <h5></h5>
               </div>
            </div>  
            <div class="col-md-4">
             <div class="brand-img">
              <img src="images/_MG_5128.jpg" width="100%"alt="">
                <h5></h5>
             </div>
            </div>
           <div class="col-md-4">
              <div class="brand-img">
                <img src="images/_MG_5151.jpg"width="100%" alt="">
                <h5></h5>
               </div>
            </div>
            <!--<div class="col-md-4">
              <div class="brand-img">
                <img src="images/s9.jpeg"width="100%" alt="">
                <h5></h5>
              </div>
            </div>-->
                <div class="col-md-4">
              <div class="brand-img">
                <img src="images/_MG_5180.jpg"width="100%" alt="">
                <h5></h5>
               </div>
            </div>
            <div class="col-md-4">
              <div class="brand-img">
                <img src="images/tmt-bar03.jpg"width="100%" alt="">
                <h5></h5>
               </div>
            </div>

           <!--<div class="col-md-4">
              <div class="brand-img">
                <img src="images/s11.jpeg"width="100%" alt="">
                <h5></h5>
               </div>
            </div>-->
            <!--<div class="col-md-4">
              <div class="brand-img">
                <img src="images/s12.jpeg"width="100%" alt="">
                <h5></h5>
              </div>
            </div>
                <div class="col-md-4">
              <div class="brand-img">
                <img src="images/s13.jpeg"width="100%" alt="">
                <h5></h5>
               </div>
            </div>-->
                                  <div class="grid-container">
  <div class="item1"><img src="images/elephant-tmt-iron-rod.jpeg" alt="" width="100%">

</div>
  <div class="item2"><img src="images/#" alt="" width="100%"></div>

</div            
            
          </div>
        </div>
      </div>
    </section>



   <?php
   include('footer.php');
   ?>