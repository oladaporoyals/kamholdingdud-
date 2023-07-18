<?php
include('header.php');
?>


<?php
  $site_key = "6LfZpUIhAAAAADnqdALTQHS_nfm24nRKTzCP9Zwe";
    $secret_key = "6LfZpUIhAAAAABk1YY6veLJafx-EvvbI9sG2WM8Y";
$recaptcha_response = $_POST['g-recaptcha-response'];
        $request = "https://www.google.com/recaptcha/api/siteverify?secret={$secret_key}&response={$recaptcha_response}";
      if(isset($_POST['submit'])){
           //$target_dir = "uploads/";
    
            //  $target_file = basename($_FILES["image"]["name"]);
            // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // $uploadOk = 1;
        
        if(empty($_POST['title'])  || empty($_POST['email']) || empty($_POST['department'])  || empty($_FILES['image'])){
          $message =  'All fields required';
        
        }
        // Allow certain file formats
        // elseif($imageFileType != "docx" && $imageFileType != "doc" && $imageFileType != "pdf") {
        //   $message =  "Only doc, docx & pdf files are allowed.";
        //   $uploadOk = 0;
        // }
        else{
        $recaptcha_response = $_POST['g-recaptcha-response'];
        $request = "https://www.google.com/recaptcha/api/siteverify?secret={$secret_key}&response={$recaptcha_response}";
        $content = file_get_contents($request);
        $json = json_decode($content);
        if($json->success =="true"){
            $title = $_POST['title'];
            $fromemail = $_POST['email'];
            $department = $_POST['department'];
            // $image = $_POST['image'];
            $filenameee =  $_FILES['image']['name'];
            $fileName = $_FILES['image']['tmp_name'];
            $toMail = 'chidokey@yahoo.com';
            $subject = 'New Job Application';
            
            
            $content = file_get_contents($fileName);
$content = chunk_split(base64_encode($content));

// a random hash will be necessary to send mixed content
$separator = md5(time());

// carriage return type (RFC)
$eol = "\r\n";

// main header (multipart mandatory)
$headers = "From:  <".$fromemail.">" . $eol;
$headers .= "MIME-Version: 1.0" . $eol;
$headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
$headers .= "Content-Transfer-Encoding: 7bit" . $eol;
$headers .= "This is a MIME encoded message." . $eol;

// message
$body = "--" . $separator . $eol;
$body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
$body .= "Content-Transfer-Encoding: 8bit" . $eol;
$body .= $message . $eol;

// attachment
$body .= "--" . $separator . $eol;
$body .= "Content-Type: application/octet-stream; name=\"" . $filenameee . "\"" . $eol;
$body .= "Content-Transfer-Encoding: base64" . $eol;
$body .= "Content-Disposition: attachment" . $eol;
$body .= $content . $eol;
$body .= "--" . $separator . "--";

        if(mail($toMail, $subject, $body, $headers)){
          $message = 'Your Application has been sent';
        }
      }else{$message = 'You have failed the recaptcha please try again';}
    }
    }
    
  ?>      

<!-- Google recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


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
<div style="" class="slide-show">
        <div id="carouselExampleCaptions" class="carousel slide"data-bs-ride="carousel">
            <div class="carousel-indicators">
              <!--<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>-->
            </div>
            <div class="carousel-inner" style="">
              
              <div class="carousel-item active" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
              url(images/CAREER.jpg) no-repeat; background-size: cover; ">
                <div class="carousel-caption  d-md-block">
                    <span class="key-point"></span>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>


                    <h1>More than just a Career</h1>
                    <!--<p class="">Working with the KAM Holding Group is more than just a career; it’s meaningful and fulfilling work that impacts positively and improves the lives of millions of people.
                    </p>-->
                  <br>
                 <!-- <a href="about.php" class="readmore">Learn more <i class="fa fa-long-arrow-right"></i></a>-->
                </p>
                </div>
              </div>
              <div class="carousel-item" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
              url(images/kam-history-new.jpg) no-repeat; background-size: cover; ">
                <div class="carousel-caption  d-md-block">
                   <span class="key-point">Career</span>
                    <h1>More than just a career</h1>
                    <p class="">Working with the KAM Holding Group is more than just a career; it’s meaningful and fulfilling work that impacts positively and improves the lives of millions of people.
                    </p>
                  <br>
                  <a href="about.php" class="readmore">Learn more <i class="fa fa-long-arrow-right"></i></a>
                </p>
                </div>
              </div>
              <div class="carousel-item" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
              url(images/kam-history2-new.jpg) no-repeat; background-size: cover; ">
                <div class="carousel-caption  d-md-block">
                    <span class="key-point">Career</span>
                    <h1>More than just a career</h1>
                    <p class="">Working with the KAM Holding Group is more than just a career; it’s meaningful and fulfilling work that impacts positively and improves the lives of millions of people.
                    </p>
                </div>
              </div>

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
    <section class="career-sec p-default">
        <div class="container">
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <h1 class="text-center">Why work with us?</h1>
                    
                    <p>Working with the KAM Holding Group is more than just a career; it’s meaningful and fulfilling work that impacts positively and improves the lives of millions of people. The company focuses on teamwork, innovation 
                        and the freedom to excel at all levels and rewards its employees with additional benefits. 
                        A performance-oriented work culture with scope of rapid growth is encouraged, making KAM HOLDING 
                        an employee-friendly organisation.  Rotation of employees is also actively undertaken to create job 
                        satisfaction and increase interaction among employees. To keep employees fresh and energetic, 
                        world-class recreational facilities is also provided to improve their social lifestyle. Medical and educational facilities are also offered to all employees at plant locations.</p>
                        <p>A sound HR policy is the pipe that feeds the bright future of our people with career paths that hone our human resources for the huge tasks ahead of them.<br/><br/>

But life is more than just hard work without respite. At KAM Holding, we pride ourselves in being the best employer bar none in Nigeria.<br/>
This is owing to our extensive and intensive investment in Man, Woman and Machine.<br/>
To work our mechanicals, we need The Brain coupled with The Brawn.<br/>
We invest in training and retraining with mouth watering employee benefits made for success.<br/>
You know where to go when you want a life of work, welfare and wellness. All rolled into one.<br/>
 Our steely resolve to embrace equality and equity as well as gender parity puts us way ahead of our peers. Our track record speaks for itself in the number of years we have been in business and the lives we have enriched and impacted.<br/><br/>

KAM is the place to be.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="core-value-sec p-default" style="background-color: #f2f2f2;">
      <div class="b-container">
        <div class="container">
          <h2 class="text-center mb-30">Our Core Values</h2>
          <div class="row">
           <div class="col-md-3">
            <div class="value-card b-shadow">
              <img src="images/customer.png" alt="" class="mb-20">
              <h5>Our Mission</h5>
              <p>To be a Global Leader in Steel and Building Materials manufacturing with a Brand name that is synonymous with excellence. To provide high quality products that meet international standards.</p>
            </div>
           </div>
           <div class="col-md-3">
            <div class="value-card b-shadow">
              <img src="images/eee.png" alt=""  class="mb-20">
              <h5>Our Philosophy</h5>
              <p><i>“Tough as nails”</i> A core manufacturing company who
believes in using technology and infrastructure to drive the growth our environment and organization. <br/><br/></p>
            </div>
           </div>
           <div class="col-md-3">
            <div class="value-card b-shadow">
              <img src="images/excellent.png" alt=""  class="mb-20">
              <h5>Excellence</h5>
              <p>To provide high quality steel and building material products of international standards through ultra-modern technologies, well-trained professionals & highly motivated personnel.</p>
            </div>
           </div>
           <div class="col-md-3">
            <div class="value-card b-shadow">
              <img src="images/lead.png" alt=""  class="mb-20">
              <h5>Leadership</h5>
              <p>KAM is the only 100% indigenous steel and allied manufacturing company in Nigeria and produces a wide range of products like Nails, Binding Wire, Wire Mesh, Roofing Sheet, Stone Coated Roofing Tile.</p>
            </div>
           </div>
          </div>
        </div>
       
      </div>
    </section>
    
    <section class="job-app p-default">
      
      <div class="container">
        <h2 class="text-center">Job Application</h2>
        <div class="row ">
          <div class="col-lg-8 mx-auto">
          <?php
                                if(!empty($message)){?>
                                <div class="kam-alert" id="kamalert">
                                <i class="fa-solid fa-xmark" onclick=" closeAlert();"></i>
                                  <?=$message?></div>
                                  <?php
                                }
                                ?>
              <div class="form-div b-shadow">
                  <!-- <h5 class="text-center"></h5> -->
                  <form action="career.php" method="post" enctype="multipart/form-data">
                      <label>Job Title</label>
                      <input type="text" name ="title" >
                       <label>Your Email</label>
                       <input type="text" name ="email" >
                       <label for="">Department</label>
                      <select name="department" id="">
                          <option value="Haulage Service">Finance and Accounts</option>
                          <option value="packaging">Internal Control and Audit</option>
                          <option value="Steel Production">Marketing and Sales</option>
                          <option value="Steel Production">Human Resources Department</option>
                          <option value="Haulage Service">Corporate Services and Protocol</option>
                          <option value="packaging">Supply Chain and Procurement</option>
                          <option value="Steel Production">Stores</option>
                          <option value="Steel Production">Tax Management</option>
                          <option value="Haulage Service">Admin and Facilities</option>
                          <option value="packaging">IT Department</option>
                          <option value="Steel Production">Legal Department</option>
                          <option value="Steel Production">Bills and Credit/Foreign Procurement</option>
                          <option value="Haulage Service">Production</option>
                          <option value="packaging">Workshop/Maintenance</option>

                      </select>
                      <p>Upload CV</p>
                      <input type="file" name="image" class="mb-30">        
                      <div class="g-recaptcha" data-sitekey="<?=$site_key;?>"></div>
                      <div class="input">
                          <input type="submit" value="Submit" class="b-shadow" name="submit">
                         
                      </div>
                     
                     
                  </form>
                  
              </div>
          </div>
          
      </div>
      </div>
    </section>
     <script>
        function closeAlert(){
       var nav = document.getElementById('kamalert');
        nav.classList.add('d_none');
            
        }
        
    </script>

      <?php
      include('footer.php');
      ?>