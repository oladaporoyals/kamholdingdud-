<?php
include('header.php');
include('connection.php');

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
.related-news li{
  list-style-type: none;
  border-top:1px solid #f2f2f283;
  padding:10px 0;
  
}
.related-news li:last-child{
  border-bottom: 1px solid #f2f2f283;
}

 .related-news li::before{
  font-family: "Font Awesome 5 Free";
  content: "\f144";
  margin-right:15px;
  color:red;
  list-style-position:inside;
}
.top-news{
  width: 90%;
  margin: 20px auto;
}
.top-news h4{
  font-size: 25px;
  font-weight: 700;
  color:#fff;
}
.top-news p{
  color:#fff;
  font-size: 18px;
}
.related-news{
  width: 90%;
  margin: 0 auto;
}
.related-news h3{
  color:#fff;
  font-size: 20px;
  font-weight: 700;
}
.related-news ul li a{
  color:#fff;
  font-size: 17px;
}

.btn-read{
  padding: 25px 60px;
  border:1px solid #fff;
  color:#fff;
  font-size: 20px;
  margin: 20px 0 30px;
  display: inline-block;
}
.btn-read:hover{
  background-color: transparent;
  color:#fff;
}
.news-containe{
  background-color: rgb(95, 95, 95);
  height:600px;
}
.images{
  width: 100%;
  transition:  1.5s;
}

.images1{
  width: 100%;
  animation: backgroundfade 6s cubic-bezier(.5,.5,.1,.3) infinite;
}

.row{
  overflow: hidden !important;
}

.text{
  position: absolute;
  z-index: 2;
  color: white;
padding:10%;
}
.text h2{
  font-size: 25px;
  font-weight: 600;

}
.text p{
  font-size: 15px;
  font-weight: 400;
  margin-top: 15px;
  font-family:'Lato';
 
}
.col-md-4{
  position: relative;
  padding: 0 !important;
  margin: 0 !important;
  overflow: hidden !important;
 
}

.images:hover{
  transform:scale(1.1);
}

@keyframes backgroundfade{
35%{
  transform: scale(2);  
  transition: 8s ease-out;
}
}


@media(max-width:922px){
  .news-containe{
    height:auto;
  }
  .btn-read{
  padding: 15px 40px;
  }
  .text {
      padding:15px;
  }
}
 @media(max-width:922px){
    video{
        width:auto!important;
        height:100vh!important;
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
                    <video class="video-fluid" autoplay loop muted  style="overflow: hidden;width:100%;height:auto;">
                    <source src="images/processing.mp4" type="video/mp4">
                  </video>
                <div class="carousel-caption  d-md-block">
                    <span class="key-point"></span>
                     <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <P>&nbsp;</p>

                  <h1>KAM HOLDING LIMITED</h1>
                  <p>The largest indigenous metal and steel production company in Nigeria.</p>
                  <br>
                  <!--<a href="about.php" class="readmore">Learn more <i class="fa fa-long-arrow-right"></i></a>-->
                </p>
                </div>
              </div>
              <!--<div class="carousel-item" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
              url(images/kam-history2-new.jpg) no-repeat; background-size: cover; ">
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
              </div>-->
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
    <div class="icon-container">
      <div class="container-fluid">
          <h2><strong>KAM HOLDING SUBSIDIARIES</strong>
</h2>
        <div class="row">
          <div class="col" style="">
              <img src="images/highresolutionlogo.png" width="100%">
          </div>
          <div class="col" style="">
              <img src="images/k1.png" width="100%">
          </div>
          <div class="col" style="">
               <img src="images/k2.png" width="100%">
          </div>
          <div class="col" style="">
               <img src="images/k4.png" width="100%">
          </div>
         
        </div>
        <p><strong>KAM Holding Limited is the largest private
employer of labour in Kwara State.</strong></p>
      </div>
      
    </div>
     <section class="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            <div class="text">
              <h2>THE FUTURE OF STEEL</h2>
              <p>
Steel is one of the most sustainable materials in the world, as it is permanent, infinitely reusable, and the most recycled substance on the planet. Thus, developing more environment-friendly steel products is a long-term investment that can deliver huge environmental advantages over the entire life cycle of steel. <br/>
 
RESPONSIBLE STEEL is the way of the future to combat high emissions turnover. 
KAM Holding's STEELY RESOLVE is to reduce our carbon footprint by 50% in line with the global targets by 2030. Paving the way to net zero emission by 2050. <br/>
WELCOME TO GREEN STEEL<br/>
KAM HOLDING is leading the way in the reduction of emissions through operating only in industrial zones and outside the city so as not to affect people living in residential areas.
        <a href="#exampleModal"class="readmore" style="font-size: 14px;" data-bs-toggle="modal" data-bs-target="#exampleModal">Read More <i class="fa fa-long-arrow-right"></i></a> 
        
</p>


            </div>
            <img src="images/bg51.jpg" alt="" class="images" />
          </div>

          <div class="col-md-4">
            <div class="text">
              <h2>AFRICA STEEL MARKET</h2>
              <p><img src="images/africa-steel5.jpg" alt=""width="100%" /><br/>
Africa steel market report thoroughly covers the market by product type, distribution channels, and countries including Kenya, Nigeria, South Africa, and the rest of Africa.
                  <a href="#exampleModal"class="readmore" style="font-size: 14px;" data-bs-toggle="modal" data-bs-target="#exampleModal2">Read More <i class="fa fa-long-arrow-right"></i></a>                      
</p>
            </div>
            <img src="images/bg51.jpg" alt="" class="images1" />
          </div>
          <div class="col-md-4">
            <div class="text">
             <h2>MINING IN NIGERIA</h2>
               <p> 
The mining of minerals in Nigeria accounts for only 0.3% of its gross domestic product, due to the influence of its vast oil resources. The domestic mining industry is underdeveloped, leading to Nigeria having to import minerals that it could produce domestically, such as salt or iron ore. The rights to ownership of mineral resources is held by the Federal Government of Nigeria, which grants titles to organizations to explore, mine, and sell mineral resources. <br/>In 2019 lithium was discovered in Nigeria. The metal is highly in demand for batteries. A huge emerging market exists for the automotive industry. And the vast deposits of iron ore found in Itakpe, Kogi State are waiting to be explored for great domestic use and export.
                   <a href="#exampleModal3"class="readmore" style="font-size: 14px;" data-bs-toggle="modal" data-bs-target="#exampleModal3">Read More <i class="fa fa-long-arrow-right"></i></a>                
</p>

            </div>
            <img src="images/bg51.jpg" alt="" class="images" />
          </div>
        </div>
      </div>
    </section>

    
    <section class="after-slid-sec p-default-2">
      <div class="container-fluid">
          <div class="after-slid-sec-img-container">
              <div class="after-slid-sec-content-light">
                  <h1 class="">Providing Basic Needs</h1>
                  <p class="">KAM is a 100% indigenous steel and allied manufacturing company in Nigeria and produces a wide range of products like Steel Reinforcing Bars, Nails, Binding Wire, Wire Mesh, Roofing Sheet, and Stone Coated Roofing Tile. </p>
                       <p>Our presence is also in some other industry verticals like Mining (granite stone & stone dust), Packaging Products (Woven sacks & Cartons) and Haulage Services.</p>
                  <!-- <h6 class="logo-sub">FINANCE, PRODUCTION, SUPPORT </h6>  
                   <a href="sustainability.php"class="readmore" style="font-size: 14px;">Learn More <i class="fa fa-long-arrow-right"></i></a>         -->             
              </div>
          </div>
      </div>

  </section>
  <!-- relif-sec ends here -->


    <section class="invetor-rel p-default-2"  style="background-color: #f2f2f2;">
        <div class="container">
          <!-- <h3></h3> -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="ob-container">
                      <a href="executives.php">
                        <div class="card" style="width:100%;"><p>
                            <img src="images/slider-img.jpg" class="card-img-top" alt="..."></p>
                            <div class="card-body">
                             <p  class="card-text-1"><strong>THE GROUP PROFILE</strong></p>
                              <p class="card-text"><strong><i>We’ve nailed it!</i></strong> <br/>The group emerged as one of Nigeria's most dynamic business organaization.<br/><br/><br/><br/><br/>
                              </p>
                                  <!--<p class="card-text-2">
                                      More...  
                                  </p>-->
                              
                            </div>
                          </div>
                      </a>    
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="baddge">
                      <small style="font-size:12px;color:#fff;"></small>
                         
                    </div>
                    <div class="row">
                        
                        <div class="col-lg-6">
                          <a href="executives.php">
                            <div class="card" style="width:100%;">
                                <!-- <img src="images/aerial-view.jpg" class="card-img-top" alt="..."> -->
                                <div class="card-body">
                              <p  class="card-text-1"><strong>OUR PHILOSOPHY</strong></p>
                              <p class="card-text"><strong><i>Tough as nails!</i></strong> <br/>We believe in the strength of the nation's aspirations and focus our efforts to help accelerate sustainable socio-economic growth.<br/><br/></p>
                                  <p class="card-text-2">
                                                                  </p>
                              
                            </div>
                              </div>
                          </a>
                        </div>
                        <div class="col-lg-6">
                          <a href="about.php">
                            <div class="card" style="width:100%;">
                                <!-- <img src="images/aerial-view.jpg" class="card-img-top" alt="..."> -->
                                <div class="card-body">
                              <p  class="card-text-1"><strong>OUR MISSION</strong></p>
                              <p class="card-text"><strong><i>Straight as a nail!</i></strong> <br/>To be a Global Leader in Steel and Building Materials, manufacturing with a Brand name that is synonymous with excellence. To provide high quality products that meet international standards.</p>
                                  <p class="card-text-2">
                                      
                                  </p>
                              
                            </div>
                              </div>
                          </a>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
    <!-- invetor-rel ends here... -->

<!--    <section class="sustain-sec p-default-al">
      <div class="b-container">
        <div class="container">
          <div class="row">
            <div class="col-md-7" style="">
              <div class="sustain-text">
                <small>Sustainability</small>
                <h1>Building Prosperity & Self-sufficiency</h1>
                <p>At KAM Holding, our approach to sustainability goes beyond compliance with 
                  regulatory expectations. We are driven by a desire
                   to contribute to, and positively impact the development 
                   of our host communities and society at large</p>
              </div>
            </div>
            <div class="col-md-5" style="">
              <div class="sustain-icon">
                <h2>7 sustainability Pillars</h2>
                <div class="row">
                  <div class="col-3 col-md-3 text-center" style="">
                    <div class="icon">
                      <img src="images/finance-icon.png" alt="">
                    </div>
                    <h3>FINANCIAL</h3>
                  </div>
                  <div class="col-3 col-md-3 text-center" style="">
                    <div class="icon">
                      <img src="images/Institutional-icon.png" alt="">
                    </div>
                    <h3>INSTITUTIONAL</h3>
                  </div>
                  <div class="col-3 col-md-3 text-center" style="">
                    <div class="icon">
                      <img src="images/Economic-icon.png" alt="">
                    </div>
                    <h3>ECONOMIC</h3>
                  </div>
                  <div class="col-3 col-md-3 text-center" style="">
                    <div class="icon">
                      <img src="images/operational-icon.png" alt="">
                    </div>
                    <h3>OPERATIONAL</h3>
                  </div>
                  <div class="col-3 col-md-3 text-center" style="">
                    <div class="icon">
                      <img src="images/Environmental-icon.png" alt="">
                    </div>
                    <h3>ENVIRONMENTAL</h3>
                  </div>
                  <div class="col-3 col-md-3 text-center" style="">
                    <div class="icon">
                      <img src="images/social-icon.png" alt="">
                    </div>
                    <h3>SOCIAL</h3>
                  </div>
                  <div class="col-3 col-md-3 text-center" style="">
                    <div class="icon">
                      <img src="images/culture-icon.png" alt="">
                    </div>
                    <h3>CULTURAL</h3>
                  </div>
                  <div class="col-3 col-md-3 text-center" style="">
                    <div class="icon">
                    <a href="sustainability.php"><i class="fa-solid fa-angle-right"></i></a>
                    </div>
                    <h3>READ MORE</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->
    <section class="relif-sec p-default-2">
        <div class="container-fluid">
            <div class="relif-img-container">
                <div class="relif-content-light">
                    <p class="logo-text">KAM Foundation</p>
                    <h2 class="logo-sub">Impacting <span>Lives </span> and Corporate Social Responsibility</h2>
                    <!--<p class="">Since its incorporation in 1997, KAM Holding Limited has worked hard
                         to enhance opportunities for social change through strategic investments 
                         that improve health and wellbeing, promote quality education, and broaden 
                         economic empowerment opportunities.</p>-->
                         <p>KAM Holding is impacting lives through
KAM FOUNDATION in our host Community.<br/><br/>
- Promote healthcare<br/>
- Promote Women and economic empowerment<br/>
- Proactive and Reactive especially in emergency
 situations like &nbsp;&nbsp;Covid 19 or disaster related issues.<br/>
- More than N100 million in healthcare support<br/>
- Dialysis, Surgeries<br/>
- Promote sports for social well-being.</p>
                    <h6 class="logo-sub">FINANCE, PRODUCTION, SUPPORT </h6>
                     <!--<a href="" class="readmore">Read More <i class="fa fa-long-arrow-right"></i></a>-->
                                           
                </div>
            </div>
        </div>

    </section>
    <section class="sustain-sec p-default-al">
      <div class="b-container">
        <div class="container">
          <div class="row">
            <div class="col-md-7" style="">
              <div class="sustain-text">
                <small></small>
                    <p>&nbsp;</p>
                <h1><strong>Ferrous scarp <br/>(Metal scrap)</strong></h1>
                <p><strong>YOU SELL, WE BUY.</strong><br/><br/>
                Contact Us
                <br/><strong>Jimba Oja, Kwara State: +234 708 438 2023 +234 803 315 8108
                <br/>Shagamu, Ogun state: +234 808 214 5933</strong><!--Environmental protection and climate change mitigation are goals of many projects that KAM Holding carries out throughout its physical environement. But this does not just apply to projects local and abroad; these goals are also being pursued within the company itself. KAM therefore records and analyses data on how its work impacts the climate and the environment. This data is summarised in the Climate and Environmental Report, which is now available for download.
                <br>
                  <a href="#" class="readmore">Download Here <i class="fa fa-long-arrow-right"></i></a>-->
                  </p>
                
              </div>
            </div>
            <!--<div class="col-md-5" style="">
              <div class="sustain-icon">
                <h2>7 sustainability Pillars</h2>
                <div class="row">
                  <div class="col-3 col-md-3 text-center" style="">
                    <div class="icon">
                      <img src="images/finance-icon.png" alt="">
                    </div>
                    <h3>FINANCE</h3>
                  </div>
                  <div class="col-3 col-md-3 text-center" style="">
                    <div class="icon">
                      <img src="images/Institutional-icon.png" alt="">
                    </div>
                    <h3>INSTITUTIONAL</h3>
                  </div>
                  <div class="col-3 col-md-3 text-center" style="">
                    <div class="icon">
                      <img src="images/Economic-icon.png" alt="">
                    </div>
                    <h3>ECONOMIC</h3>
                  </div>
                  <div class="col-3 col-md-3 text-center" style="">
                    <div class="icon">
                      <img src="images/operational-icon.png" alt="">
                    </div>
                    <h3>OPERATIONAL</h3>
                  </div>
                  <div class="col-3 col-md-3 text-center" style="">
                    <div class="icon">
                      <img src="images/Environmental-icon.png" alt="">
                    </div>
                    <h3>ENVIRONMENTAL</h3>
                  </div>
                  <div class="col-3 col-md-3 text-center" style="">
                    <div class="icon">
                      <img src="images/social-icon.png" alt="">
                    </div>
                    <h3>SOCIAL</h3>
                  </div>
                  <div class="col-3 col-md-3 text-center" style="">
                    <div class="icon">
                      <img src="images/culture-icon.png" alt="">
                    </div>
                    <h3>CULTURE</h3>
                  </div>
                  <div class="col-3 col-md-3 text-center" style="">
                    <div class="icon">
                    <a href="sustainability.php"><i class="fa-solid fa-angle-right"></i></a>
                    </div>
                    <h3>READ MORE</h3>
                  </div>
                </div>
              </div>-->
            </div>
          </div>
        </div>
      </div>
    </section>
    
     <!-- relif-sec ends here -->
<!--================= News Section BEGINS=====================-->
    <section class="news-containe" style="">
      <div class="container-fluid" style="">
        <div class="row">
          <div class="col-md-6" style="margin: 0;padding: 0;">
              <?php
            $sql = "SELECT * FROM news order by id desc limit 1";
         $result = mysqli_query($conn, $sql);
         
         if (mysqli_num_rows($result) > 0) {
         // output data of each row
         while($roww = mysqli_fetch_assoc($result)) {
             ?>
            <img src="admin/uploads/<?php echo ltrim($roww["image"]); ?>" alt="" style="width: 100%;height:600px;object-fit: cover;">
            
          </div>
          <div class="col-md-6">
            <div class="top-news">
              
              <h4><?php echo $roww['title'];?></h4>
              <p><?php  echo substr( $roww["post"], 0, 90); ?></p>
                <a href="news.php?id=<?php echo $roww["id"]; ?>" class="btn-read"></i>Continue Reading &nbsp;<i class="fa-solid fa-arrow-right-long"></i></a>
                <?php
         }
        }
        ?>
            </div>
           
              <div class="related-news">
                <h3>Related News</h3>
                <ul style="margin: 0;padding:0;">
                  <?php
              $sql = "SELECT * FROM news order by id asc limit 5";
         $result = mysqli_query($conn, $sql);
         
         if (mysqli_num_rows($result) > 0) {
         // output data of each row
         while($row = mysqli_fetch_assoc($result)) {
             ?>
                  <li><a href="news.php?id=<?php echo $row["id"]; ?>"><?php echo $row['title'];?></a></li>
                  <?php
         }
        }
        ?>
                

                </ul>
              </div>
          </div>
        </div>
          
        
      </div>
    </section> 
    <!-- NEWS SECTION  ends here -->
   <!-- Modal 1-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">THE FUTURE OF STEEL</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           
           
          <p>Steel is one of the most sustainable materials in the world, as it is permanent, infinitely reusable, and the most recycled substance on the planet. Thus, developing more environment-friendly steel products is a long-term investment that can deliver huge environmental advantages over the entire life cycle of steel.<br/><br/>
 
RESPONSIBLE STEEL is the way of the future to combat high emissions turnover. 
KAM Holding's STEELY RESOLVE is to reduce our carbon footprint by 50% in line with the global targets by 2030. Paving the way to net _zero emission by 2050.<br/><br/>

WELCOME TO GREEN STEEL <br/>
KAM HOLDING is leading the way in the reduction of emissions through operating only in industrial zones and outside the city so as not to affect people living in residential areas.
KAM ensures that there is zero wastage since 90% of raw material is recyclable steel. To this end we collect scrap metal from all over Nigeria and put it to really good use making sure that carbon prints are greatly minimised in our environment. 
We then compress all our smouldering to carbon powder for all industries who need it.<br/><br/>



WHY THE FUTURE OF STEEL IS GREEN<br/>
Steel production currently accounts for 7-8% of global carbon emissions, making decarbonization a global prime concern.
Emerging technical developments can help reduce emissions and drive the transition to more sustainable production of steel.
The utilization of green steel is more likely to witness an upward demand trend on the back of rising government regulation worldwide.<br/><br/>

STEEL MANUFACTURERS MUST TAKE RESPONSIBILITY.<br/>
KAM HOLDING as a responsible corporate citizen is at the helm of pushing this wholesome idea renewable energy and greening of the environment. <br/><br/>


Steel demand is projected to rise 30% by 2050. Besides China, most regions, particularly India, Africa and South-East Asia, will see an increase in demand. Secondary steel production can be nearly carbon-neutral if powered by renewable electricity; it will play a significant role in decarbonizing steel supply<br/><br/>

Green steel could be one possible solution in this direction. Green steel is defined as steel manufactured through a method that reduces standard emissions and emits less carbon throughout the process.<br/><br/>

NEW TECHNOLOGIES ADOPTED BY STEELMAKERS TO REDUCE GHG EMISSIONS <br/>
Leading steel and mining firms are adopting a variety of methods to reduce Greenhouse  emissions.<br/><br/>

KAM Holding is poised to pursue New Technologies to develop Green Steel to reduce Greenhouse Gas Emissions (GHG).<br/><br/>

KAM HOLDING  IS THE FUTURE OF GREEN STEEL AND THE STEEL INDUSTRY IN NIGERIA. <br/>
KAM HOLDING is Nigeria's Mr Steel. And we certainly have Green Fingers. An integral part of the global push for Environment-friendly steel.

                    </p>
            </div>
          </div>
        </div>
      
    </section>
    
        
  </div>
 
  
   <!-- Modal II -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">AFRICA STEEL MARKET SYNOPSIS</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           
           
          <p>Africa steel market report thoroughly covers the market by product type, distribution channels, and countries including Kenya, Nigeria, South Africa, and the rest of Africa. The Africa steel market outlook report provides an unbiased and detailed analysis of the ongoing Africa steel market trends, opportunities/high growth areas, and market drivers which would help the stakeholders to devise and align their market strategies according to the current and future market dynamics.<br/><br/>

Africa Steel Market is expected to gain momentum in the forthcoming years on the back of the rising use of steel in the production of household appliances. Additionally, the growing expansion of the construction sector with some ongoing and upcoming construction projects such as the Dangote Oil Refinery, Lagos- Calabar Railway, and Kenya Standard Gauge Railway are some of the factors that reflect the massive use of carbon steel in the development of oil refinery pumps and in railway lines, as a result, it

                    </p>
            </div>
          </div>
        </div>
      
    </section>
    <section class="sustain-section p-default-2">
        <div class="container">
          <div class="row">
            <div class="col-lg-8  mx-auto">
              <h1>AFRICA STEEL MARKET SYNOPSIS</h1>
              <p>
                Africa steel market report thoroughly covers the market by product type, distribution channels, and countries including Kenya, Nigeria, South Africa, and the rest of Africa. The Africa steel market outlook report provides an unbiased and detailed analysis of the ongoing Africa steel market trends, opportunities/high growth areas, and market drivers which would help the stakeholders to devise and align their market strategies according to the current and future market dynamics.<br/><br/>

Africa Steel Market is expected to gain momentum in the forthcoming years on the back of the rising use of steel in the production of household appliances. Additionally, the growing expansion of the construction sector with some ongoing and upcoming construction projects such as the Dangote Oil Refinery, Lagos- Calabar Railway, and Kenya Standard Gauge Railway are some of the factors that reflect the massive use of carbon steel in the development of oil refinery pumps and in railway lines, as a result, it
                    </p>
            </div>
          </div>
        </div>
      
    </section>
   
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
      </div>
    </div>
  </div>  
  
   <!-- Modal III -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">BRIEF SYNOPSIS OF MINING IN NIGERIA</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>The mining of minerals in Nigeria accounts for only 0.3% of its gross domestic product, due to the influence of its vast oil resources. The domestic mining industry is underdeveloped, leading to Nigeria having to import minerals that it could produce domestically, such as salt or iron ore. The rights to ownership of mineral resources is held by the Federal Government of Nigeria, which grants titles to organizations to explore, mine, and sell mineral resources.<br/><br/>

In 2019 lithium was discovered in Nigeria. The metal is highly in demand for batteries. A huge emerging market exists for the automotive industry.<br/><br/>

And the vast deposits of iron ore found in Itakpe, Kogi State are waiting to be explored for great domestic use and export.<br/><br/>

KAM HOLDING with eyes on the future, is investing in lithium and iron ore mining on a large scale. This is in fulfilment of her vision of becoming one of the industries leaders in Mining by 2030.<br/>
Clearly vast potentials abound for greater employment statistics and backward integration as well as raising the country's GDP/GNP.</p>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
      </div>
    </div>
  </div>
 
<?php
include('footer.php');

