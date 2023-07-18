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
<script>
    $opacity-transition: opacity $speed ease-in-out;

.modal-header {
	align-items: baseline;
	display: flex;
	justify-content: space-between;
}

.close {
	background: none;
	border: none;
	cursor: pointer;
	display: flex;
	height: 16px;
	text-decoration: none;
	width: 16px;

	svg {
		width: 16px;
	}
}

.modal-wrapper {
	align-items: center;
	background: rgba(0, 0, 0, 0.7);
	bottom: 0;
	display: flex;
	justify-content: center;
	left: 0;
	position: fixed;
	right: 0;
	top: 0;
}

#modal {
	opacity: 0;
	transition: $opacity-transition;
	visibility: hidden;

	&:target {
		opacity: 1;
		visibility: visible;

		.modal-body {
			opacity: 1;
			transform: translateY(1);
		}
	}

	.modal-body {
		max-width: 500px;
		opacity: 0;
		transform: translateY(-100px);
		transition: $opacity-transition;
		width: 100%;
		z-index: 1;
	}
}

.outside-trigger {
	bottom: 0;
	cursor: default;
	left: 0;
	position: fixed;
	right: 0;
	top: 0;
}

.button__link {
	text-decoration: none;
}

</script>

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
<div class="card">
	<div class="content-wrapper">
		<h2 class="heading">CSS Modal</h2>
		<p>This demo shows how to open a modal without using JavaScript. While it's a cool trick, it's not 100% accessible. JavaScript is needed to set focus on the modal and to create a focus trap.</p>
	</div>
	<a href="#modal" role="button" class="button button__link">Modal Trigger</a>
</div>

<!-- Modal -->
<div class="modal-wrapper" id="modal">
	<div class="modal-body card">
		<div class="modal-header">
			<h2 class="heading">Modal Header</h2>
			<a href="#!" role="button" class="close" aria-label="close this modal">
				<svg viewBox="0 0 24 24">
					<path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z" />
				</svg>
			</a>
		</div>
		<p>Simple example using the <code>:target</code> selector to open a modal.</p>
	</div>
	<a href="#!" class="outside-trigger"></a>
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
KAM Holding's STEELY RESOLVE is to reduce steel's environmental footprint in line with the global targets of employing 50% low-emission steel by 2030, paving the way to net-zero emissions by 2050. <br/>
WELCOME TO GREEN STEEL<br/>
KAM HOLDING is leading the way in the reduction of emissions through operating only in industrial zones and outside the city so as not to affect people living in residential areas.
                   <a href="future.php"class="readmore" style="font-size: 14px;">Read More <i class="fa fa-long-arrow-right"></i></a>                      
</p>
            </div>
            <img src="images/bg51.jpg" alt="" class="images" />
          </div>

          <div class="col-md-4">
            <div class="text">
              <h2>AFRICA STEEL MARKET</h2>
              <p><img src="images/africa-steel5.jpg" alt="" class="images" /><br/>
Africa steel market report thoroughly covers the market by product type, distribution channels, and countries including Kenya, Nigeria, South Africa, and the rest of Africa.
                   <a href="future.php"class="readmore" style="font-size: 14px;">Read More <i class="fa fa-long-arrow-right"></i></a>                      
</p>
            </div>
            <img src="images/bg51.jpg" alt="" class="images1" />
          </div>
          <div class="col-md-4">
            <div class="text">
             <h2>MINING IN NIGERIA</h2>
               <p> 
The mining of minerals in Nigeria accounts for only 0.3% of its gross domestic product, due to the influence of its vast oil resources. The domestic mining industry is underdeveloped, leading to Nigeria having to import minerals that it could produce domestically, such as salt or iron ore. The rights to ownership of mineral resources is held by the Federal Government of Nigeria, which grants titles to organizations to explore, mine, and sell mineral resources. <br/>In 2019 lithium was discovered in Nigeria. The metal is highly in demand for batteries. A huge emerging market exists for the automotive industry. And the vast deposits of iron ore found in Itakpe, Kogi State are waiting to be explored for great domestic use and export.
                   <a href="future.php"class="readmore" style="font-size: 14px;">Read More <i class="fa fa-long-arrow-right"></i></a>                      
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
                  <p class="">KAM is a 100% indigenous steel and allied manufacturing company in Nigeria and produces a wide range of products like Nails, Binding Wire, Wire Mesh, Roofing Sheet, and Stone Coated Roofing Tile. </p>
                       <p>Our presence is also in some other industry verticals like Mining (granite stone & stone dust), Packaging Products (Woven sacks & Cartons) and Haulage Services.</p>
                  <!-- <h6 class="logo-sub">FINANCE, PRODUCTION, SUPPORT </h6>  -->
                   <a href="sustainability.php"class="readmore" style="font-size: 14px;">Learn More <i class="fa fa-long-arrow-right"></i></a>                      
              </div>
          </div>
      </div>

  </section>
  <!-- relif-sec ends here -->


    <section class="invetor-rel p-default-2"  style="background-color: #f2f2f2;">
        <div class="container">
          <h3>Quality Policy</h3>
            <div class="row">
                <div class="col-lg-4">
                    <div class="ob-container">
                      <a href="executives.php">
                        <div class="card br-none" style="width:100%;">
                            <img src="images/slider-img.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                             <p  class="card-text-1"><strong>THE GROUP PROFILE</strong></p>
                              <p class="card-text"><strong>We’ve nailed it!</strong> <br/>The group emerged as one of Nigeria's most dynamic business organaization.<br></br>
                              </p>
                                  <p class="card-text-2">
                                      More...  
                                  </p>
                              
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
                              <p class="card-text"><strong>Tough as nails</strong> <br/>We believe in the strength of the nation's aspirations and focus our efforts to help accelerate sustainable socio-economic growth.<br/><br/></p>
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
                              <p class="card-text"><strong>Straight as a nail</strong> <br/>To be a Global Leader in Steel and Building Materials, manufacturing with a Brand name that is synonymous with excellence. To provide high quality products that meet international standards.</p>
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

    <section class="sustain-sec p-default-al">
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
    </section>
    <section class="relif-sec p-default-2">
        <div class="container-fluid">
            <div class="relif-img-container">
                <div class="relif-content-light">
                    <p class="logo-text">KAM Holding Limited</p>
                    <h2 class="logo-sub">Impacting <span>Lives</span></h2>
                    <p class="">Since its incorporation in 1997, KAM Holding Limited has worked hard
                         to enhance opportunities for social change through strategic investments 
                         that improve health and wellbeing, promote quality education, and broaden 
                         economic empowerment opportunities.</p>
                    <h6 class="logo-sub">FINANCE, PRODUCTION, SUPPORT </h6>
                     <a href="" class="readmore">Read More <i class="fa fa-long-arrow-right"></i></a>
                                           
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