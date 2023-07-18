<!DOCTYPE html>
<html lang="en">
<head>

<?php
include('header.php');

  $site_key = "6LfZpUIhAAAAADnqdALTQHS_nfm24nRKTzCP9Zwe";
    $secret_key = "6LfZpUIhAAAAABk1YY6veLJafx-EvvbI9sG2WM8Y";
$recaptcha_response = $_POST['g-recaptcha-response'];
        $request = "https://www.google.com/recaptcha/api/siteverify?secret={$secret_key}&response={$recaptcha_response}";
      if(isset($_POST['submit'])){
        
        if(empty($_POST['name']) || empty($_POST['email'])  || empty($_POST['msg_body'])){
          $message =  'All fields required';
        
        }else{
        $recaptcha_response = $_POST['g-recaptcha-response'];
        $request = "https://www.google.com/recaptcha/api/siteverify?secret={$secret_key}&response={$recaptcha_response}";
        $content = file_get_contents($request);
        $json = json_decode($content);
        if($json->success =="true"){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $enquires = $_POST['enquires'];
            $business = $_POST['business'];
            $msg_body = $_POST['msg_body'];
            $toMail = 'info@mentapps.com';
            $subject = 'New Mail from contact form';
            $headers = array(
              "MIME-Version" => "1.0",
              "Content-Type" => "text/html;charset=UTF-8",
              "From" => $email,
              "Reply-To"=> $email
            );
        //     $msg = file_get_contents("mail-template.php");
        //   $msg = str_replace("New Message from", "New Message from {$name}", $msg);
        ob_start();
       include('mail-template.php');
       $msg = ob_get_contents();
       ob_get_clean();
        if(mail($toMail, $subject, $msg, $headers)){
          $message = 'Your mail has been sent sucessufully';
        }
      }else{$message = 'You have failed the recaptcha please try again';}
    }
    }
    
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
</style>
<div style="" class="slide-show">
        <div id="carouselExampleCaptions" class="carousel slide"data-bs-ride="carousel">
            <div class="carousel-indicators">
              <!--<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>-->
            </div>
            <div class="carousel-inner" style="">
              
              <div class="carousel-item active" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)),
              url(images/kam-history2-new.jpg) no-repeat; background-size: cover; ">
                <div class="carousel-caption  d-md-block">
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
                    <span class="key-point"></span>
                  <h1>Contact US</h1>
                  <p>Working with the KAM Holding Group is more than just a career; it’s meaningful work that improves the lives of millions of people.</p>
                  <br>
                  <!--<a href="about.php" class="readmore">Learn more <i class="fa fa-long-arrow-right"></i></a>-->
                </p>
                </div>
              </div>
              <!--<div class="carousel-item" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)),
              url(images/kam-history-new.jpg) no-repeat; background-size: cover; ">
                <div class="carousel-caption  d-md-block">
                                                            <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <span class="key-point">Building prosperity & self-sufficiency across Africa</span>
                  <h1>SUSTAINABILITY</h1>
                  <p>Kamholding Group is all about creating ventures that serves the interest of stakeholders, communities and the people concerned. We believe in establishing impactful businesses that are socially responsible to cater for people’s needs.</p>
                  <br>
                  <a href="about.php" class="readmore">Learn more <i class="fa fa-long-arrow-right"></i></a>
                </p>
                </div>
              </div>
              <div class="carousel-item" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)),
              url(images/kam-history2-new.jpg) no-repeat; background-size: cover; ">
                <div class="carousel-caption  d-md-block">
                                                            <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <span class="key-point">Building prosperity & self-sufficiency across Africa</span>
                  <h1>SUSTAINABILITY</h1>
                  <p>Kamholding Group is all about creating ventures that serves the interest of stakeholders, communities and the people concerned. We believe in establishing impactful businesses that are socially responsible to cater for people’s needs.</p>
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
          </div>-->
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
    <section class="contactus-section p-default">
  
        <div class="container">
            <!--<div class="row p-default-2">
                <div class="col-lg-7 mx-auto text-center">
                    <h1>Contact Us</h1>
                    <p>Working with the Kamholding Group is more than just a career; it’s meaningful work that improves the lives of millions of people.
                    </p>
                </div>
            </div>-->
            <div class="row">
                <div class="col-lg-8">
                <?php
                                if(!empty($message)){?>
                                <div class="kam-alert" id="kamalert">
                                <i class="fa-solid fa-xmark" onclick=" closeAlert();"></i>
                                  <?=$message?></div>
                                  <?php
                                }
                                ?>
                    <div class="form-div b-shadow">
                        <h5 class="text-center">How can we help you</h5>
                        <form action="contact.php" method="post">
                            <label>Name</label>
                            <input type="text" name="name" value="<?=$name;?>">
                            <label for="email">Email</label>
                            <input type="text" name="email">
                            <label for="enquiries">Enquires</label>
                            <select name="enquires">
                                <option value="issues">Issues</option>
                                <option value="business">Business</option>
                            </select>
                            <label for="">Business Unit</label>
                            <select name="business" id="">
                                <option value="Haulage Service">Haulage Services</option>
                                <option value="packaging">Packaging</option>
                                <option value="Steel Production">Steel Production</option>
                                <option value="Mining">Mining</option>
                                <option value="Binding Wire">Binding Wire</option>
                                <option value="Steel Production">Nails</option>
                                <option value="Roofing Sheets">Roofing Sheets</option>
                            </select>
                            <label for="">Your Message</label>
                            <textarea name="msg_body" id="" cols="30" rows="10"placeholder="Message here..."><?=$msg_body;?></textarea>
                            <div class="g-recaptcha" data-sitekey="<?=$site_key;?>"></div>
                            <div class="input">
                                <input type="submit" value="Submit" class="b-shadow" name="submit">
                               
                            </div>
                           
                           
                        </form>
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info">
                        <div class="enquires b-shadow">
                            <h6>Plant Headquarters</h6>
                            <p>Address: Asa-Dam Road, Industrial Area, P.O. Box 4936, Ilorin, Kwara State.</p>
                            <h6>Corporate Headquarter</h6>
                            <p>Address: 11th floor Nipost Tower No 1 Ologun Agbaje St, Victoria Island 106104, Lagos.</p>
</p>
                            <p>Tel. Lagos: (+234)-(7000123450)</p
                            <p>Tel. Abuja: (+234)-(7000123451)</p>
                            <p>Emial: info@kamholding.net</p>
                        </div>
                       
                        <div class="enquires b-shadow">
                           <iframe width="100%" height="300" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=8%C2%B027'10.2%22N%204%C2%B032'09.7%22E&key=AIzaSyBPude9FSP4m2V608PJHU-n63umpuPqZ_o"></iframe>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="comp-location">
    <div class="container">
        <h2>FACTORY OFFICE</h2>
        <div class="row">
              <div class="col-lg-4">
                <div class="contact-info">
                    <div class="enquires b-shadow h-100">
                        <h6>KAM INDUSTRIES NIG. LTD.</h6>
                        <p>Asa-Dam Road, Industrial Area, P.O. Box 4936, Ilorin,</p>
                        <p>Kwara State.</p>
                        <!-- <p>Emial: info@kamholding.net</p> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
              <div class="contact-info">
                  <div class="enquires b-shadow  h-100">
                      <h6>KAM POLYTHENE VENTURE</h6>
                      <p>Asa-Dam Road, Industrial Area, P.O. Box 4936, Ilorin,</p>
                      <p>Kwara State.</p>
                      <!-- <p>Emial: info@kamholding.net</p> -->
                  </div>
              </div>
          </div>
          <div class="col-lg-4">
            <div class="contact-info">
                <div class="enquires b-shadow  h-100">
                    <h6>DIMKIT GLOBAL CONCEPTS LIMITED</h6>
                    <p>Oke-Ogba, Ganmo Railway, Ifelodun L.G.A., Kwara State.</p>
                    <p>Idumu-Iyase Quarters, Issele-Azagba, Aniocha North LGA, Delta State.</p>
                    <p>Inuwa Abdulkadir Road, Kakuri Industrial Area, Kaduna.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
          <div class="contact-info">
              <div class="enquires b-shadow  h-100">
                  <h6>KAM HAULAGE & ALLIED SERVICES VENTURE</h6>
                  Sadiku Alkali Street, Behind NSITF, Asa-Dam Road, Ilorin, Kwara State, Nigeria.
              </div>
          </div>
      </div>
      <div class="col-lg-4">
        <div class="contact-info">
            <div class="enquires b-shadow  h-100">
                <h6>KAMWIRE & STEEL INDUSTRY LIMITED</h6>
                <p>Asa-Dam Road, Industrial Area, P.O. Box 4936, Ilorin, Kwara State.</p>
                
            </div>
        </div>
    </div>
    <div class="col-lg-4">
      <div class="contact-info">
          <div class="enquires b-shadow  h-100">
              <h6>UNIVERSAL ROOFS NIGERIA LTD</h6>
              <p>Asa-Dam Road, Industrial Area, P.O. Box 4936, Ilorin, Kwara State.</p>
              
          </div>
      </div>
  </div>
  <div class="col-lg-4">
    <div class="contact-info">
        <div class="enquires b-shadow  h-100">
            <h6>KAM QUARRY AND MINES VENTURES</h6>
            <p>Jolasun Amuro Village, East LGA, Oke Oyi, Kwara State.</p>
            
        </div>
    </div>
</div>
<div class="col-lg-4">
  <div class="contact-info">
      <div class="enquires b-shadow  h-100">
          <h6>KAM STEEL INTEGRATED COMPANY LTD.</h6>
          <p>KM 18, Ilorin Ajase-IPO Highway, Near Armti Jimba Oja Ifelodun Local Government Area, Kwara State.</p>
          
      </div>
  </div>
</div>
<div class="col-lg-4">
  <div class="contact-info">
      <div class="enquires b-shadow  h-100">
          <h6>PROFORTE LTD</h6>
          <p>KM 18, Ilorin Ajase-IPO Highway, Near Armti Jimba Oja Ifelodun Local Government Area, Kwara State.</p>
          
      </div>
  </div>
</div>
</div>
    
    <div class="row">
      <h2>SALES & MARKETING OFFICE</h2>
      <div class="col-md-3">
        <div class="contact-info">
          <div class="enquires b-shadow  h-100">
              <h6>DEPOT LAGOS</h6>
              <p>KM 18, Ilorin Ajase-IPO Highway, Near Armti Jimba Oja Ifelodun Local Government Area, Kwara State.</p>
              
          </div>
      </div>
      </div>
      <div class="col-md-3">
        <div class="contact-info">
          <div class="enquires b-shadow  h-100">
              <h6>DEPOT ASABA</h6>
              <p>KM 6, Onitsha-Asaba Expressway, By Police Officers Mess, Okwe Junction, Asaba, Delta State.</p>
              
          </div>
      </div>
      </div>
      <div class="col-md-3">
        <div class="contact-info">
          <div class="enquires b-shadow  h-100">
              <h6>DEPOT KANO</h6>
              <p>No. 105, Katsina Road (B), opposite former Nitel Training Centre, Kano, Kano State.</p>
              
          </div>
      </div>
      </div>
      <div class="col-md-3">
        <div class="contact-info">
          <div class="enquires b-shadow  h-100">
              <h6>DEPOT IBADAN</h6>
              <p>, Ire Akari, Oluyole Extn. Junction, Beside NEPA office, Akala Express Road, Elebu, Ibadan, Oyo State.</p>
              
          </div>
      </div>
      </div>
    </div>

    <h2>INTERNATIONAL ADDRESSES</h2>
    <div class="row">
          <div class="col-lg-4">
            <div class="contact-info">
                <div class="enquires b-shadow  h-100">
                    <h6>KAMCOM INDIA PRIVATE LIMITED</h6>
                    <p>Address:Prestige Industrial Estate Prestige Industrial, Bawadi Lane,
                       Marve Road, Orlem, Malad West, Kanchpada, Malad West, Mumbai, Maharashtra 400064.</p>
                    <p>Phone: (+91-22)-(2889 5233)</p>
                    <p>Emial: info@Kamcom.in</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
          <div class="contact-info">
              <div class="enquires b-shadow  h-100">
                  <h6>WUXI KAM IMP. & EXP. CO., LTD</h6>
                  <p>Huishan Economic Development Zone Administration Committee 189 Zhenghe Ave, Huishan 
                    Qu, Wuxi Shi, Jiangsu Sheng, China, 214174</p>
                    <p>Phone: +86 510 8327 0116</p>
                  <p>Email: KamWil@hotmail.com</p>
              </div>
          </div>
      </div>
      <div class="col-lg-4">
        <div class="contact-info">
            <div class="enquires b-shadow  h-100">
                <h6>KAM INDUSTRY (WUXI) CO. LTD.</h6>
                <p>Dongyi Road, Huishan Economy Development Zone Luoshe Accessory District, Wuxi, China.
                </p>
                <p>Phone: 0086-510-83553617</p>
                <p>Email: KamWil@hotmail.com</p>
                <p>Fax: 0086-510-83553986</p>
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


