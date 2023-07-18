<?php
include('connection.php');
?>


<html>
<!--================= News Section BEGINS=====================-->
    <section class="news-container p-10">
      <div class="container">
        <h3>Press release and our News</h3>
          <div class="row b-shadow mb-30">
               <?php
              $sql = "SELECT * FROM news order by id desc limit 1";
         $result = mysqli_query($conn, $sql);
         
         if (mysqli_num_rows($result) > 0) {
         // output data of each row
         while($row = mysqli_fetch_assoc($result)) {
             ?>
            <div class="col-md-4">
                <div class="news-content" style="background: url(admin/uploads/<?php echo ltrim($row['image']); ?>);background-size:cover;">
                <!-- <img src=""style="width:100%;object-fit:cover" alt=""> -->
              </div>
            </div>
           
            <div class="col-md-4">
              <div class="news-content">
                <div class="carv-body">
                  <small>Press Release</small><br>
                <a href="news.php?id=<?php echo $row["id"]; ?>" class="carv-text"><?php echo $row["title"]; ?></a><br>
                    <a href="news.php?id=<?php echo $row["id"]; ?>" class="carv-text-2" style="display:inline-block;font-size:12px;margin-top:15px;width:100%;">
                        <?php echo substr( $row["post"], 0, 70) ?>... 
                    </a>
                
              </div>
              </div>
            </div>
             <?php
            }
         }
            ?>
            <div class="col-md-4">
              <div class="news-content">
                  <!-- carousel start -->
                  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <!-- <img src="..." class="d-block w-100" alt="..."> -->
                        <div class="carousel-caption d-md-block">
                         <!--<p>Some representative placeholder content for the first slide.</p>-->
                        </div>
                      </div>
                      <div class="carousel-item">
                        <!-- <img src="..." class="d-block w-100" alt="..."> -->
                        <!-- <div class="carousel-caption d-none d-md-block">
                          <h5>Second slide label</h5>
                          <p>Some representative placeholder content for the second slide.</p>
                        </div> -->
                      </div>
                      <div class="carousel-item">
                        <!-- <img src="..." class="d-block w-100" alt="..."> -->
                        <!-- <div class="carousel-caption d-none d-md-block">
                          <h5>Third slide label</h5>
                          <p>Some representative placeholder content for the third slide.</p>
                        </div> -->
                      </div>
                    </div>
                    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button> -->
                  </div>
                  <!-- carousel end -->
              </div>
            </div>
          </div>
           <!--first row end here  -->
          <div class="row">
            <div class="col-md-4">
              <div class="news-sec-2 bg-dark">

              </div>
            </div>
            <div class="col-md-8">
              <div class="news-sec-2-right">
                   <!-- carousel start -->
                   <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <!-- <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div> -->
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="images/blog-image.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption  d-md-block">
                         <h5>I’m highly impressed by KAM CEO, Kamoru Yusuf’s industrial drives — DG SON</h5>
                         <p class="date">March 23, 2021</p>
                         <a href="newsroom.php"><i class="fa-solid fa-play"></i></a>
                         <a href="newsroom.php" class="carousel-link b-shadow">Read More</a>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="images/relief-img.jpeg" class="d-block w-100" alt="...">
                        <!-- <div class="carousel-caption d-none d-md-block">
                          <h5>Second slide label</h5>
                          <p>Some representative placeholder content for the second slide.</p>
                        </div> -->
                      </div>
                      <div class="carousel-item">
                        <img src="images/md-decorated.jpg" class="d-block w-100" alt="...">
                        <!-- <div class="carousel-caption d-none d-md-block">
                          <h5>Third slide label</h5>
                          <p>Some representative placeholder content for the third slide.</p>
                        </div> -->
                      </div>
                    </div>
                    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button> -->
                  </div>
                  <!-- carousel end -->
              </div>
            </div>
          </div>
      </div>
    </section> 
    <!-- NEWS SECTION  ends here -->
    </html>