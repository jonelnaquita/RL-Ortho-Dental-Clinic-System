<?php include "includes/conn.php"; ?>
<?php include "includes/header.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RL Ortho Dental Clinic</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        @media only screen and (max-width: 600px) {
            .sm-icons .fab{
                margin-right: 7px;
            }
        }
        .rating-color{
            color:#fbc634 !important;
        }

        #fb-root{
            background-image: url("images/messenger.png");
            background-color: #555;
            border: none;
            position: fixed;
            bottom: 23px;
            right: 40px;
            width: 64px;
        }
    </style>
</head>
<body>
<?php include "includes/navbar.php";?>
<section id="home">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-caption d-flex h-100 align-items-center justify-content-center">
                <div class="container-fluid">
                    <div class="row">
                    <h1><strong>ROSALES-LIBAO<br>ORTHO DENTAL CLINIC</strong></h1>
                    </div>
                    <a href="patient/index.php" class="btn btn-outline-primary mr-3  btn-lg active" role="button" aria-pressed="true">Login</a>
                    <a href="#screening" class="btn btn-outline-secondary btn-lg text-light" role="button" aria-pressed="true">Screening</a>
                </div>
            </div>
            <div class="slides-item carousel-item active">
                <img src="assets/img/img1.jpg" class="d-block w-100" alt="...">  
            </div>
            <div class="slides-item carousel-item">
                <img src="assets/img/img2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="slides-item carousel-item">
                <img src="assets/img/img3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<section id="feedback">
    <div class="container">
        <div class="row">
            <h3 class="mt-5 text-center font-weight-bold">FEEDBACKS</h3>
            <hr class="hr" />
            <!--<div class="col text-right">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>-->
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="">
                            <div class="row scrolling-wrapper flex-row flex-nowrap">
                                <?php
                                    $sql = "SELECT * FROM tblregister INNER JOIN tbluser_feedback on tblregister.patientID = tbluser_feedback.patientID WHERE tbluser_feedback.status = 'Published'";
                                    $query = $conn->query($sql);
                                    while($row = $query->fetch_assoc()){
                                ?>
                                <div class="col-md-4 mb-3">
                                    <div class="card" style="border-radius: 15px;">
                                        <div class="card-body text-center">
                                            <div class="mt-3 mb-4">
                                            <?php
                                                $count = strlen($row['photo']);
                                                if ($count < 100) {?>
                                                    <img src="<?php echo (!empty($row['photo']))? 'images/'.$row['photo']:'images/profile.jpg'; ?>" id="card-pic" class="card-pic rounded-circle" style="width: 120px; height: 120px; object-fit: cover;">
                                                <?php
                                                }else{?>
                                                    <img  src="<?php echo $row['photo'] ?>" alt="Patient"  class="card-pic rounded-circle">
                                                <?php
                                                    }
                                                ?>
                                            </div>
                                            <h4 class="mb-2"><?php echo $row['name'] ?></h4>
                                            <p class="text-muted mb-4">Rating<span class="mx-2">|</span> <a
                                                href="#!"><?php echo $row['rating'] ?></a></p>
                                                <div class="mb-4 pb-2">
                                            <?php
                                                $rating = $row['rating'];
                                                if($rating =="Excellent"){?>
                                                <div class="item-date text-muted text-sm d-none d-md-block">
                                                        <div class="small-ratings">
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </div>
                                                    </div>
                                                <?php }
                                                elseif($rating =="Good"){?>
                                                <div class="item-date text-muted text-sm d-none d-md-block">
                                                        <div class="small-ratings">
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                <?php }
                                                elseif($rating =="Average"){?>
                                                <div class="item-date text-muted text-sm d-none d-md-block">
                                                        <div class="small-ratings">
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                <?php }
                                                elseif($rating =="Poor"){?>
                                                <div class="item-date text-muted text-sm d-none d-md-block">
                                                        <div class="small-ratings">
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                <?php }
                                                elseif($rating =="Very Poor"){?>
                                                <div class="item-date text-muted text-sm d-none d-md-block">
                                                        <div class="small-ratings">
                                                            <i class="fa fa-star rating-color"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                <?php }?>
                                            </div>
                                            <div class="item-date text-muted text-sm d-none d-md-block"><?php echo $row['feedbackDate']?></div>
                                            <div class="container p-3 bg-primary text-white" style="border-radius: 7.5px;">
                                                <h6><?php echo $row['feedback'] ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>         
                            </div>
                        </div>
                        
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="services">
<div class="container">
<h3 class="mt-5 text-center font-weight-bold">SERVICES</h3>
<hr class="hr" />
    <ul class="nav nav-tabs scrolling-wrapper flex-row flex-nowrap nav-justified mb-3" id="ex1" role="tablist">
    <li class="nav-item" role="presentation">
        <img src="assets/icons/dentalcheckup.png" class="img-fluid rounded-circle" alt="Townhouses and Skyscrapers" width="65px">
        <a class="nav-link active" id="ex1-tab-1" data-mdb-toggle="tab" href="#ex1-tabs-1" role="tab" aria-controls="ex1-tabs-1" aria-selected="true">
        Dental Check-up</a>
    </li>
    <li class="nav-item" role="presentation">
        <img src="assets/icons/tooth-extraction.png" class="img-fluid rounded-circle" alt="Townhouses and Skyscrapers" width="65px">
        <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="tab"  href="#ex1-tabs-2" role="tab" aria-controls="ex1-tabs-2" aria-selected="false">
        Tooth Extraction</a>
    </li>
    <li class="nav-item" role="presentation">
        <img src="assets/icons/braces.png" class="img-fluid rounded-circle" alt="Townhouses and Skyscrapers" width="65px">
        <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="tab"  href="#ex1-tabs-3" role="tab" aria-controls="ex1-tabs-2" aria-selected="false">
        Dental Braces</a>
    </li>
    <li class="nav-item" role="presentation">
        <img src="assets/icons/tooth-brushing.png" class="img-fluid rounded-circle" alt="Townhouses and Skyscrapers" width="65px">
        <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="tab"  href="#ex1-tabs-4" role="tab" aria-controls="ex1-tabs-2" aria-selected="false">
        Tooth Cleaning</a>
    </li>
    <li class="nav-item" role="presentation">
        <img src="assets/icons/denture.png" class="img-fluid rounded-circle" alt="Townhouses and Skyscrapers" width="65px">
        <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="tab"  href="#ex1-tabs-5" role="tab" aria-controls="ex1-tabs-2" aria-selected="false">
        Denture</a>
    </li>
    <li class="nav-item" role="presentation">
        <img src="assets/icons/root-canal.png" class="img-fluid rounded-circle" alt="Townhouses and Skyscrapers" width="65px">
        <a class="nav-link" id="ex1-tab-1" data-mdb-toggle="tab" href="#ex1-tabs-6" role="tab" aria-controls="ex1-tabs-1" aria-selected="true">
        Root Canal</a>
    </li>
    <li class="nav-item" role="presentation">
        <img src="assets/icons/fixed-bridge.png" class="img-fluid rounded-circle" alt="Townhouses and Skyscrapers" width="65px">
        <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="tab"  href="#ex1-tabs-7" role="tab" aria-controls="ex1-tabs-2" aria-selected="false">
        Fixed Bridge</a>
    </li>
    <li class="nav-item" role="presentation">
        <img src="assets/icons/braces.png" class="img-fluid rounded-circle" alt="Townhouses and Skyscrapers" width="65px">
        <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="tab"  href="#ex1-tabs-8" role="tab" aria-controls="ex1-tabs-2" aria-selected="false">
        Retainer</a>
    </li>
    </ul>
<!-- Tabs navs -->

<!-- Tabs content -->
<div class="card">
<h5 class="card-header">Definition</h5>
    <div class="card-body">
        <div class="tab-content" id="ex1-content">
            <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">
            A dental checkup involves checking your teeth and gums. The majority of kids and adults should visit the dentist every six months. These examinations are essential for maintaining dental health. If oral health issues are not treated right away, they may become unpleasant and dangerous.
            </div>
            <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
            When a tooth becomes severely decaying, tooth extractions are required. In order to stop additional damage, a dentist or surgeon will extract the tooth from its socket in the bone during the surgery.
            </div>
            <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
            Dental braces or orthodontic therapy is a means to straighten or move teeth to enhance their function and appearance. By evenly distributing the biting pressure across all of your teeth, it can also assist to protect the long-term health of your teeth, gums, and jaw joints.
            </div>
            <div class="tab-pane fade" id="ex1-tabs-4" role="tabpanel" aria-labelledby="ex1-tab-2">
            Cleaning of the teeth by a dentist or dental hygienist during an oral/dental prophylaxis, which includes the removal of plaque, materia alba, calculus, and extrinsic stains; this is done as a preventative measure to control gingivitis.
            </div>
            <div class="tab-pane fade" id="ex1-tabs-5" role="tabpanel" aria-labelledby="ex1-tab-3">
            A removable denture can restore missing teeth and supporting tissues. Complete and partial dentures are the two types of dentures that are offered. When all of the teeth are lost, complete dentures are utilized; when some natural teeth are still present, partial dentures are.
            </div>
            <div class="tab-pane fade" id="ex1-tabs-6" role="tabpanel" aria-labelledby="ex1-tab-3">
            When a patient's tooth's soft tissues—which house nerves and blood vessels—become infected, root canal therapy is required. The procedure prevents tooth extraction while simultaneously reducing pain.
            </div>
            <div class="tab-pane fade" id="ex1-tabs-7" role="tabpanel" aria-labelledby="ex1-tab-3">
            A dental bridge, often known as a "fixed bridge," is a prosthetic tooth or teeth that are constructed specifically to fill in the gaps left by one or more missing teeth. They fall under the category of Fixed Prosthesis.
            </div>
            <div class="tab-pane fade" id="ex1-tabs-8" role="tabpanel" aria-labelledby="ex1-tab-3">
            The final stage of orthodontic treatment is often when retainers for teeth are worn. The teeth might migrate back to their original positions after the braces have been officially taken off. Therefore, using retainers at least overnight can assist maintain the position of properly aligned teeth.
            </div>
        </div>
    </div>
<!-- Tabs content -->
</div>
</div>
</section>

<section id="screening" class="d-flex align-items-center">
<div class="container">
<h3 class="mt-5 text-center font-weight-bold">ONLINE SCREENING</h3>
<hr class="hr"/>

<div class="row">
  <div class="col-lg-6">
    <img src="assets/img/screening.jpg" class="img-fluid" alt="">
  </div>
  <div class="col-lg-6 pt-4 pt-lg-0 content">
    <p class="fst-italic">
        At Rosales-Libao Ortho-Dental Clinic, everyone's safety and well-being is important to us. 
    </p>
    <p>
        This Online Screening will help us to assist you on your upcoming dental check visit. <b>Please fill out this 24 hours before your scheduled appointment </b> and
		<b>show a print out or screenshot </b> of your screening <b> together with a valid ID </b> when you go for your visit. 
    </p>
    <p><b>Republic Act No. 11332 </b> or the <b> Mandatory Reporting of Notifiable Diseases and Health Events of Public Concern Act </b> requires the full cooperation of all 
		persons to the mandate of the law. It is essential that you <b> PROVIDE TRUTHFUL INFORMATION</b> about your health condition and possible exposure. </p>
        <p>In compliance to IATF Resolution No. 148-D s.2021 issued on 11 Nov 2021, we would like to ask everyone to <b>WEAR FACEMASKS </b> when inside the clinic. </p>
    <a class="btn btn-primary" href="screening.php" type="button">Proceed</a>
    <p class="mt-2" style="font-size: 10px;">In compliance with the Data Privacy Act of 2012, The Rosales-Libao Orthodental Clinic ensures that the information you provide will be kept strictly confidential and 
		will only be processed, disclosed, or shared upon your consent, or as required by law. </p>
    </div>
</div>
</div>
</section>

<!--Contact Us-->
<section id="footer">
    <div class="footer">
        <div class="container">
            <div class="footer-inner">
                <div class="row">
                    <div class="col-md-8">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d241.87018826420538!2d121.1501766!3d14.
                        0817219!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd6f5d3d7bc11b%3A0x490a02066f3b7ac7!2s129%20President%20
                        Jose%20P.%20Laurel%20Hwy%2C%20Tanauan%2C%20Batangas!5e0!3m2!1sen!2sph!4v1661419181977!5m2!1sen!2sph"
                                    width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                            </iframe>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-text">
                            <h1> Contact Us </h1>
                            <h2> <i class='fas fa-map-marker-alt'></i>&nbsp; Adddress </h2>
                            <p> Unit 3, 119 JP Laurel Highway, Tanauan City </p>
                            <h2> <i class='fas fa-phone'></i>&nbsp; Phone </h2>
                            <p> 0918 419 8158 </p>
                            <h2> <i class='fas fa-envelope'></i>&nbsp; Mail </h2>
                            <p> personal@gmail.com </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "includes/footer.php";?>
</section>
</body>
</html>

<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>
<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat"></div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "115564429993339");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v15.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>