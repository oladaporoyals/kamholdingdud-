<?php

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAM Holding Limited</title>

   <!-- Fav icons -->
<link href="../images/kam-fav.jpg" rel="icon">
  <link href="../images/kam-fav.jpg/" rel="apple-touch-icon">
<!-- Animate on scroll -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <!-- Bootstrap css -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="css/custom.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Rubik:wght@300;500;600;700;900&display=swap" rel="stylesheet">
   
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top header-inner" style="position: fixed;width: 100%;z-index: 1000;">
        <div class="container">
          <a class="navbar-brand" href="index.php"><img src="images/logo-kam-xs.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             
            </ul>
           
            <ul class="navbar-nav  mb-2 mb-lg-0">
                <!--<li class="nav-item">
                    <a class="nav-link " aria-current="page" href="about.php">About US</a>
                  </li>-->
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="our-business.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      About US
                    </a>
                    <ul class="dropdown-menu multi-column columns-1 animate slideIn" fade-down aria-labelledby="navbarDropdown">
                      <div class="row">
                        <div class="col-sm-2">
                          <ul class="multi-column-dropdown">
                            <li><a class="dropdown-item" href="about.php">Our Profile</a></li>
                            <li><a class="dropdown-item" href="executives.php">Our Executives</a></li>

                          </ul>
                        </div>


                      </div>  
                  </ul>
                  </li>
 
 

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="our-business.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Our Businesses
                    </a>
                    <ul class="dropdown-menu multi-column columns-3 animate slideIn" fade-down aria-labelledby="navbarDropdown">
                      <div class="row">
                        <div class="col-sm-4">
                          <ul class="multi-column-dropdown">
                            <li><a class="dropdown-item" href="tmt-bars.php">Steel Manufacturing</a></li>
                            <li><a class="dropdown-item" href="roofing-sheet.php">Roofing Sheets</a></li>
                            <li><a class="dropdown-item" href="mining.php">Mining</a></li>
                            <li><a class="dropdown-item" href="haulage-service.php">Haulage Services</a></li>
                        <!--<li><a class="dropdown-item" href="roofing-sheet.php">Roofing sheet</a></li>-->
                          </ul>
                        </div>
                        <div class="col-sm-4">
                          <ul class="multi-column-dropdown">
                            <li><a class="dropdown-item" href="energy.php">Energy</a></li>
                            <li><a class="dropdown-item" href="british-reinforced-concrete.php">British Reinforced Concrete</a></li>
                            <li><a class="dropdown-item" href="packaging-service.php">Packaging</a></li>
                            <!--<li><a class="dropdown-item" href="stone-coated-tiles.php">Universal Stone Coated Tiles</a></li>-->
                            <li><a class="dropdown-item" href="nails.php">Steel Nails</a></li>
                          </ul>
                        </div>
                        <div class="col-sm-4">
                          <ul class="multi-column-dropdown">
                            <li><a class="dropdown-item" href="binding-wire.php">Binding Wire</a></li>
                            <li><a class="dropdown-item" href="recycling.php">Recycling</a></li>
                            <li><a class="dropdown-item" href="cold-roll-coils.php">Cold Roll Coils</a></li>
                            <li><a class="dropdown-item" href="agriculture.php">Agriculture</a></li>
                          </ul>
                        </div>
                      </div>  
                  </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="csr-enterprise.php">CSR Enterprise</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="sustainability.php">Sustainability</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="quality-assurance.php">Quality Assurance</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="media.php">Media</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="career.php">Career</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                  </li>
                 
            </ul>
          </div>
        </div>
      </nav>
      


    
<section class="contactus-section p-default">
  
        <div class="container">
            <div class="row p-default-2">
                <div class="col-lg-7 mx-auto text-center">
                    <h1>Contact Us</h1>
                    <p>Working with the Kamholding Group is more than just a career; it’s meaningful work that improves the lives of millions of people.
                    </p>
                </div>
            </div>
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
                           <iframe width="100%" height="450" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=8%C2%B027'10.2%22N%204%C2%B032'09.7%22E&key=AIzaSyBPude9FSP4m2V608PJHU-n63umpuPqZ_o"></iframe>
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