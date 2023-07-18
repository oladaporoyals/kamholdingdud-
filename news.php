<?php
include('header.php');
?>
<?php
 include('connection.php');
 ?>


<!-- single product details -->
        <?php
        $id = $_GET['id'];
        $sql = "SELECT * FROM news WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          
            ($row = mysqli_fetch_assoc($result)) ;
            
        }

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
              url(admin/uploads/<?php echo ltrim($row["image"]); ?>) no-repeat; background-size: cover; " >
                 
                  <div class="carousel-caption d-md-block">
                   
                    <h2><?php echo $row["title"]; ?></h2>
                    <p class=""><?php echo substr($row["post"], 0, 95); ?> ...</p>
                  </div>
              </div>
              
              
           
          </div>
    </div>
    </div>
      
      <section class="b-container p-default-al">
        <p><?php echo $row["post"]; ?></p>
      </section>
      <section class="related-news p-default" style="background-color: #f2f2f2;">
        <div class="container">
            <h1 class="text-center mb-30">Related News</h1>
            <div class="row">
            <?php
                $sql = "SELECT * FROM news  LIMIT 3";
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
                              <?php echo substr($row["post"], 0, 70); ?>  
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
              </div> -->
             
            </div>
          </div>
      </section>

   <?php
   include('footer.php');
   ?>