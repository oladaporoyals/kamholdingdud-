<?php
include('connection.php');
?>

<?php
include('header.php');
?>
<style>
  .navbar{
      background-color: #fff;

  }
  .nav-item .nav-link{
      color: #1f1d5e;
  }
  .nav-item .nav-link:hover{
    color:red;
  }
</style>

      <section class="media-sec p-default"  style="">
        <div class="container">
         <div class="row">
             <h4 class="mb-30">Media: Recent News</h4>
         </div>
            <div class="row">
              <?php
              $sql = "SELECT DISTINCT id, title, post,category, image FROM news";
         $result = mysqli_query($conn, $sql);
         
         if (mysqli_num_rows($result) > 0) {
         // output data of each row
         while($row = mysqli_fetch_assoc($result)) {
             ?>
                <div class="col-lg-4">
                    <div class="ob-container">
                       <a href="news.php?id=<?php echo $row["id"]; ?>">
                        <div class="card br-none" style="width:100%;">
                          <img src="admin/uploads/<?php echo ltrim($row["image"]); ?>" class="card-img-top" alt="...">
                          <div class="card-body">
                              <p  class="card-text-1">Press Release</p>
                            <p class="card-text"><?php echo $row["title"]; ?></p>
                                <p class="card-text-2">
                                <?php echo substr( $row["post"], 0, 70) ?>... 
                                </p>
                            
                          </div>
                        </div>
                       </a>
                    </div>
                </div>
                <?php
                }
            }
        ?>
                <!-- <div class="col-lg-4">
                    <div class="ob-container">
                      <a href="">
                        <div class="card br-none" style="width:100%;">
                          <img src="images/blog-image.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                              <p  class="card-text-1">Press Release</p>
                            <p class="card-text">I’m highly impressed by KAM CEO, Kamoru Yusuf’s industrial drives — DG SON</p>
                                <p class="card-text-2">
                                    Kamholding has been awarded the best production and financial
                                    organisation. with the most impactful finacial assitance initiatives 
                                    and opportunity presenters.  
                                </p>
                            
                          </div>
                        </div>
                       </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ob-container">
                      <a href="">
                        <div class="card br-none" style="width:100%;">
                          <img src="images/md-decorated.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                              <p class="card-text-1">Press Release</p>
                            <p class="card-text">I believe strongly in ‘One Nigeria’, KAM Holding CEO sues for unity</p>
                                <p class="card-text-2">
                                    Kamholding has been awarded the best production and financial
                                    organisation. with the most impactful finacial assitance initiatives 
                                    and opportunity presenters.  
                                </p>
                            
                          </div>
                        </div>
                       </a>
                    </div>
                </div>
                <div class="col-lg-4">
                  <div class="ob-container">
                    <a href="">
                      <div class="card br-none" style="width:100%;">
                        <img src="images/md-decorated.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text-1">Press Release</p>
                          <p class="card-text">I believe strongly in ‘One Nigeria’, KAM Holding CEO sues for unity</p>
                              <p class="card-text-2">
                                  Kamholding has been awarded the best production and financial
                                  organisation. with the most impactful finacial assitance initiatives 
                                  and opportunity presenters.  
                              </p>
                          
                        </div>
                      </div>
                     </a>
                  </div>
              </div>
              <div class="col-lg-4">
                <div class="ob-container">
                  <a href="">
                    <div class="card br-none" style="width:100%;">
                      <img src="images/md-decorated.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                          <p class="card-text-1">Press Release</p>
                        <p class="card-text">I believe strongly in ‘One Nigeria’, KAM Holding CEO sues for unity</p>
                            <p class="card-text-2">
                                Kamholding has been awarded the best production and financial
                                organisation. with the most impactful finacial assitance initiatives 
                                and opportunity presenters.  
                            </p>
                        
                      </div>
                    </div>
                   </a>
                </div>
            </div>
            <div class="col-lg-4">
              <div class="ob-container">
                <a href="">
                  <div class="card br-none" style="width:100%;">
                    <img src="images/md-decorated.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text-1">Press Release</p>
                      <p class="card-text">I believe strongly in ‘One Nigeria’, KAM Holding CEO sues for unity</p>
                          <p class="card-text-2">
                              Kamholding has been awarded the best production and financial
                              organisation. with the most impactful finacial assitance initiatives 
                              and opportunity presenters.  
                          </p>
                      
                    </div>
                  </div>
                 </a>
              </div>
            </div> -->
            </div>
            </div>
        </section>

        <section class="gallery p-default-2">
          <div class="container">
            <div class="row">
              <div class="col-md-6 mb-30">
                  <a href="">
                      <div class="gallery-left" style="">
                <h3 class="text-center">Events</h3>
                </div>
                  </a>
                
              </div>
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-6">
                      <a href="">
                           <div class="gallery-right" style=" background: url(images/hauling-picture.png);background-size: cover;">
                                <h3>Business</h3>
                            </div>
                      </a>
                   
                  </div>
                  <div class="col-md-6">
                      <a href="">
                          <div class="gallery-right" style=" background: url(images/kamholding-slide3.jpeg);background-size: cover;">
                      <h3>Sustainability</h3>
                    </div>
                      </a>
                    
                  </div>
                  <div class="col-md-6">
                      <a href="">
                          <div class="gallery-right" style=" background: url(images/kamholding-slide3.jpeg);background-size: cover;">
                      <h3>Infrastructure</h3>
                    </div>
                      </a>
                    
                  </div>
                  <div class="col-md-6">
                      <a href="">
                          <div class="gallery-right" style=" 
                      background: url(images/relief-img.jpeg);background-size: cover;background-position: right;">
                      <h3>csr-initiatives</h3>
                    </div>
                      </a>
                    
                  </div>
                </div>
              
              </div>
            </div>
          </div>
        </section>

<?php
include('footer.php');
?>