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
  z-index: 11111;
  color: white;
  margin:10%;
  width:80%;
}
.text h2{
  font-size: 35px;
  font-weight: 600;

}
.text p{
  font-size: 16px;
  font-weight: 500;
  margin-top: 15px;
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
    
    <section class="sustain-section p-default-2">
        <div class="container">
          <div class="row">
            <div class="col-lg-8  mx-auto">
              <h1>THE FUTURE OF STEEL</h1>
              <p>
Steel is one of the most sustainable materials in the world, as it is permanent, infinitely reusable, and the most recycled substance on the planet. Thus, developing more environment-friendly steel products is a long-term investment that can deliver huge environmental advantages over the entire life cycle of steel.<br/><br/>
 
RESPONSIBLE STEEL is the way of the future to combat high emissions turnover. 
KAM Holding's STEELY RESOLVE is to reduce steel's environmental footprint in line with the global targets of employing 50% low-emission steel by 2030, paving the way to net-zero emissions by 2050.<br/><br/>

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
    <section class="sustain-section p-default-2">
        <div class="container">
          <div class="row">
            <div class="col-lg-8  mx-auto">
              <h1>BRIEF SYNOPSIS OF MINING IN NIGERIA</h1>
              <p>
The mining of minerals in Nigeria accounts for only 0.3% of its gross domestic product, due to the influence of its vast oil resources. The domestic mining industry is underdeveloped, leading to Nigeria having to import minerals that it could produce domestically, such as salt or iron ore. The rights to ownership of mineral resources is held by the Federal Government of Nigeria, which grants titles to organizations to explore, mine, and sell mineral resources.<br/><br/>

In 2019 lithium was discovered in Nigeria. The metal is highly in demand for batteries. A huge emerging market exists for the automotive industry.<br/><br/>

And the vast deposits of iron ore found in Itakpe, Kogi State are waiting to be explored for great domestic use and export.<br/><br/>

KAM HOLDING with eyes on the future, is investing in lithium and iron ore mining on a large scale. This is in fulfilment of her vision of becoming one of the industries leaders in Mining by 2030.<br/>
Clearly vast potentials abound for greater employment statistics and backward integration as well as raising the country's GDP/GNP.
                    </p>
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
    
<?php
include('footer.php');