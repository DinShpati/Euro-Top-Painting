<?php

require "vendor/autoload.php";


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mailer = new PHPMailer();
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $date = $_POST['date'];
    
    try {
        $mailer->isSMTP();


        $mailer->Host = 'smtp.hostinger.com';
        $mailer->SMTPAuth = true;
        $mailer->Username = 'estimates@vividcoatpainting.com';
        $mailer->Password = 'Z3tT57cW_$_!_*';
        $mailer->SMTPSecure = 'tls';
        $mailer->Port = 587;
        $mailer-> SMTPAuth = true;


        $mailer->setFrom('estimates@vividcoatpainting.com', 'Estimate');
        $mailer->addAddress('vividcoatpainting@gmail.com', 'Veton Ramadani');

        $mailer->isHTML(false);
        $mailer->Subject = ($name . " is asking for a estimate");
        $mailer->Body = ("$desc . \n\n . Desired Start Date:  . $date . \n\n . Customer Number: . $phone . \n . Customer Email - Click Here to reply: . $email");

        $mailer->send();
        $mailer->ClearAllRecipients();
        echo "<script>alert('Your message was recieved, we will get back to you shortly');</script>";
    }catch (Exception $e) {
        echo "<script>alert('Your message was not recieved please try calling or emailing us');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="images/icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/icon.png">
    <meta content="VividCoat Painting LTD" property=og:title>
    <meta content="VividCoat Painting LTD - Every one of our services is backed by our 100% Satisfaction Guarantee. We are fully committed to making your home dreams come true! Vividcoatpaintintg ltd. Our track record has proven the quality of our service! Our expert, skilled staff are here to meet all of your needs – from start to finish of your project! Even when the job is done, we’re still there for you. All of our work is backed by an unmatched Two Year Quality Guarantee."
          property=og:description>
    <meta content=vividcoat.com property=og:url>
    <meta content=website property=og:type>
    <meta content=images/icon.png property=og:image>
    <meta content=summary_large_image property=twitter:card>
    <meta name="description"
          content="VividCoat Painting LTD - Every one of our services is backed by our 100% Satisfaction Guarantee. We are fully committed to making your home dreams come true! Vividcoatpaintintg ltd. Our track record has proven the quality of our service! Our expert, skilled staff are here to meet all of your needs – from start to finish of your project! Even when the job is done, we’re still there for you. All of our work is backed by an unmatched Two Year Quality Guarantee.">
    <meta property="og:image" content="images/main.jpg">
    <title>VividCoat Painting LTD - #1 Interior painters in Toronto Canada</title>

    <!-- CSS -->
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/reset.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/939c3b7b3f.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-179197814-1">
        </script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-179197814-1');
        </script>

</head>
<body>

<?php include("header.php"); ?>

    <section id="section1" style="background-image: url(./images/interior/interiorpaitingmainimage.jpeg);">
        <div class="darkBG">
            <div class="anotherOne" >
                <h1 class="bigText">Interior House Painting</h1>
                <h2 class="midText">Quality painting done right</h2>
                <div class="sectionOneBadges">
                    <div> <img src="images/homestars.png" alt="VividCoat painting - homestars verified"> </div>
                    <div> <img src="images/30YearsInBussiness.png" alt="VividCoat painting - homestars verified"> </div>
                    <div><img src="images/warranty (1).png" alt="VividCoat painting - homestars verified"></div>
                    <div><img src="images/Homestars-best-of-2020-2.png" alt="VividCoat painting - homestars verified"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section2Interior">
        <div class="section2Shade" style="background-color: #2b28535d;">
            <div class="sec2Div" style="text-align: center !important;">
                <h1 style="font-size: 30px;" class="white">Interior Painting Contractors</h1>
                <hr>
                <div class="ratDiv">
                    <p style="color: white;">Adding a new coat of paint is the easiest way to transform your home’s interior. Whether you need your whole house painted or just want to freshen up the living room with this year’s PPG paint color of the year, VividCoat Paitning interior painting services are equipped for all of your painting needs.</p>
                </div>
                <hr>
                <div class="ratDiv">
                    <p style="color: white;">VividCoat Painting has been painting since 1999. We completely understand the questions that come to mind when you are considering doing some interior painting because you want your home to look its very best. VividCoat Painting is here to make your life simpler, do all the work for you and finally, help you
                        achive your dream home!</p>
                </div>
                <hr>
                <div class="ratDiv">
                    
                </div>
            </div>
            <div class="sec2Div2">
                <h1 class="paintingIcon"><i class="fas fa-paint-roller"></i></h1>
                <h1>Get an Estimate</h1>

                <form class="estimateForm" action="" method="post">
                    <label for="">Name* </label><br> 
                    <input required type="text" class='input' name="name"><br>
                    <label for="">Email* </label><br>
                    <input type="email" class='input' required name="email"><br>
                    <label for="">Phone* </label><br>
                    <input class='input' type="tel" name="phone"><br>
                    <label for="">Project Description* </label><br>
                    <textarea class='input' required name="desc"></textarea><br>
                    <label for="">Desired Start Date </label><br>
                    <input class='input' type="date" name="date"><br>
                    <button class="getEstBtn" type="submit" name="submit">Get an Estimate</button>
                </form>
            </div>
        </div>
    </section>
    <div class="titleBox"><h1>Get started in <span style="color: #0eb448;">three</span> easy steps!</h1></div>
    <section id="section3">
        <div>
            <h1 style="font-size: 30px;color: #0eb448;">#1</h1>
            <h2>Get A Free Estimate</h2>
            <p>We start the interior painting process by understanding more about your needs. When you call or email in you can expect a friendly customer service representative to help you with your estimate. From there, you will be paired with an insured and licensed contractor to help you with your needs. 
            </p>
        </div>
        <div>
            <h1 style="font-size: 30px;color: #0eb448;">#2</h1>
            <h2>Property inspection</h2>
            <p>
                After you speak with a representative, we then schedule a time and a date to visit the property. From here, we complete a property inspection to learn more about your project. Here you will find a professional estimate written out to you on a clipboard from a friendly expert in our companies apparel.

            </p>
        </div>
        <div>
            <h1 style="font-size: 30px;color: #0eb448;">#3</h1>
            <h2>Painting & Quality Check</h2>
            <p>Finally, we start the project and update you as we move on. After the paitning is finished we will do a quality check and make sure that you are 100% satisified with our
                work. We do not consider the project finshed until you are happy with the results.
            </p>
        </div>
    </section>
    <section id="section7">
        <div class="column2">
            <div>
                <h1>SCHEDULE AN ESTIMATE</h1>
                <h4>Call us today to schedule a free estimate</h4>
            </div>
            <div>
                <a href="contact.php">Schedule Now!</a>
            </div>
        </div>
    </section>

    <section id="section5">
        <h1 style="font-size: 30px;">Why choose <span style="color: #0eb448;">us?</span></h1>
        <h3>VividCoat Painting sets the highest standard in service and customer satisfaction.</h3>
        <div style="height: 3px; background-color: #47b76f; width: inherit; margin: 0 25vw;"></div>
        <br>
        <br>
        <div id="section5Divs">
            <div>
                <h3>100% <span style="color: #0eb448;">Satisfaction</span> Gurantee</h3>
                <img loading="lazy" src="images/100Sat.png" alt="VividCoat Painting LTD 100% Satisfatcion gurantee" style="max-width: 33%;">
            </div>
            <div>
                <h3>Unmatched <span style="color: #0eb448;">2-year</span> Quality Warranty</h3>
                <img loading="lazy" src="images/2yeargur.png" alt="VividCoat Painting LTD 2 year gurantee" style="max-width: 33%;">
            </div>
            <div>
                <h3><span style="color: #0eb448;">30-Years </span>experience</h3>
                    <img loading="lazy" src="images/30inBus.png" alt="VividCoat Painting LTD 30 years in business" style="max-width: 33%;">
            </div>
            
        </div>
    </section>
    <section id="services">
        <div class="blur">
            <h1 style="font-size: 30px;color: white;">Interior Paitning <span style="color: #0eb448;">Services</span></h1>
            <h3 style="color: white;">No matter what type of room or surface you are looking to paint, VividCoat Painting is there to help.</h3>
            <div style="height: 3px; background-color: #47b76f; width: inherit; margin: 0 25vw;"></div>
            <br>
            <br>
            <div class="services">
                <div>
                    <h3><i style="color: #0eb448; font-size: 30px;" class="far fa-check-square"></i> house Interior painting</h3>
                </div>
                <div>
                    <h3><i style="color: #0eb448; font-size: 30px;" class="far fa-check-square"></i> Apartment Interior Painting</h3>
                </div>
                <div>
                    <h3><i style="color: #0eb448; font-size: 30px;" class="far fa-check-square"></i> Living room painting</h3>
                </div>
                <div>
                    <h3><i style="color: #0eb448; font-size: 30px;" class="far fa-check-square"></i> dining room painting</h3>
                </div>
                <div>
                    <h3><i style="color: #0eb448; font-size: 30px;" class="far fa-check-square"></i> kitchen painting</h3>
                </div>
                <div>
                    <h3><i style="color: #0eb448; font-size: 30px;" class="far fa-check-square"></i> bathroom painting</h3>
                </div>
                <div>
                    <h3><i style="color: #0eb448; font-size: 30px;" class="far fa-check-square"></i> hallway painting</h3>
                </div>
                <div>
                    <h3><i style="color: #0eb448; font-size: 30px;" class="far fa-check-square"></i> bedroom painting</h3>
                </div>
                <div>
                    <h3><i style="color: #0eb448; font-size: 30px;" class="far fa-check-square"></i> basement painting</h3>
                </div>
                <div>
                    <h3><i style="color: #0eb448; font-size: 30px;" class="far fa-check-square"></i> ceiling painting</h3>
                </div>
                <div>
                    <h3><i style="color: #0eb448; font-size: 30px;" class="far fa-check-square"></i> interior door painting</h3>
                </div>
                <div>
                    <h3><i style="color: #0eb448; font-size: 30px;" class="far fa-check-square"></i> free color consultation</h3>
                </div>
            </div>
            <br>
            <a href="contact.php" class="interiorGetest2">Get a Free estimate</a>
        </div>
    </section>
    <div class="titleBox"><h1>Here are some frequently asked <span style="color: #0eb448;">questions</span></h1></div>
    <section class="interiorFaq">
        <div class="column2" style="margin-bottom: 50px;">
            <div>
                <h1>
                    Would it be possible to recieve a free estimate before starting any work?
                </h1>
                <p>Yes, definitely. We offer free estimates on all our services.</p>
            </div>
            <div style="text-align: center;">
                <img loading="lazy" style="width: 60%;" src="images/interior/1569808888194-JPEG_20190929_220126_full_medium.jpg" alt="Would it be possible to revieve a free estimate before starting any work? VividCoat Painting LTD">
            </div>
        </div>
        <hr>
        <div class="column2" style="margin-top: 50px; margin-bottom: 50px;">
            <div style="text-align: center;">
                <img loading="lazy" style="width: 50%;" src="images/interior/homestars_contractor_app_medium.jpeg" alt="Would it be possible to revieve a free estimate before starting any work? VividCoat Painting LTD">
            </div>
            <div>
                <h1>
                    Do you take proper safety precautions regarding covid-19? 
                </h1>
                <p>Yes we do! We wear masks throughout areas where there are people and properly disinfect the area before finishing the job.</p>
            </div>
            
        </div>
        <hr>
        <div class="column2" style="margin-top: 50px; margin-bottom: 50px;">
            <div>
                <h1>
                    Do I have to prepare the area or move anything before the painters arive?
                </h1>
                <p>You don't have to do anything. We can help you prepare the area to insure your furniture is protected. Although doing it before hand will decrease the cost of the 
                    project.
                </p>
            </div>
            <div style="text-align: center;">
                <img loading="lazy" style="width: 80%;" src="images/interior/interiorpainting.jpg" alt="Would it be possible to revieve a free estimate before starting any work? VividCoat Painting LTD">
            </div>
        </div>
        <hr>
        <div class="column2" style="margin-top: 50px;margin-bottom: 50px;">
            <div style="text-align: center;">
                <img loading="lazy" style="width: 60%;" src="images/interior/livingRoom.jpg" alt="Would it be possible to revieve a free estimate before starting any work? VividCoat Painting LTD">
            </div>
            <div>
                <h1>
                    Do you offer warranty incase somthing goes wrong?
                </h1>
                <p>Yes we do! We offer a 2 year unmatched warranty on all our servies. We are committed to keeping you happy with the work we offer on interior painting and will not
                    leave until you are 100% satsified with our work.</p>
                    <br><br>
                    <div style="width: inherit; text-align: center;">
                        <a href="contact.php" class="interiorGetest" style="display: block; position: relative; width: fit-content;">Get A Free Estimate Now</a>
                    </div>
            </div>
            
        </div>
        <br>
    </section>
    <section class="slideShow">
        <h1 style="font-size: 30px;"><span style="color: #0eb448;">Interior</span> Painting Gallery</h1>
        <div class="row">
            <div class="column">
              <img class="galImg" loading="lazy" src="images/interior/Gallery/1.jpg">
              <img class="galImg" loading="lazy" src="images/interior/Gallery/2.jpeg">
              <img class="galImg" loading="lazy" src="images/interior/Gallery/3.jpg">
              <img class="galImg" loading="lazy" src="images/interior/Gallery/4.jpg">
              <img class="galImg" loading="lazy" src="images/interior/Gallery/5.jpg">
              <img class="galImg" loading="lazy" src="images/interior/Gallery/6.jpg">
            </div>
            <div class="column">
                <img class="galImg" loading="lazy" src="images/interior/Gallery/7.jpg">
                <img class="galImg" loading="lazy" src="images/interior/Gallery/8.jpg">
                <img class="galImg" loading="lazy" src="images/interior/Gallery/9.jpg">
                <img class="galImg" loading="lazy" src="images/interior/Gallery/10.jpg">
                <img class="galImg" loading="lazy" src="images/interior/Gallery/11.jpg">
                <img class="galImg" loading="lazy" src="images/interior/Gallery/12.jpg">
            </div>
            <div class="column">
                <img class="galImg" loading="lazy" src="images/interior/Gallery/13.jpg">
                <img class="galImg" loading="lazy" src="images/interior/Gallery/14.jpg">
                <img class="galImg" loading="lazy" src="images/interior/Gallery/15.jpg">
                <img class="galImg" loading="lazy" src="images/interior/Gallery/16.jpeg">
                <img class="galImg" loading="lazy" src="images/interior/livingRoom.jpg">
                <img class="galImg" loading="lazy" src="images/interior/Gallery/17.jpg">
            </div>
            <div class="column">
                <img class="galImg" loading="lazy" src="images/interior/Gallery/18.jpeg">
                <img class="galImg" loading="lazy" src="images/interior/Gallery/19.jpg">
                <img class="galImg" loading="lazy" src="images/interior/Gallery/20.jpg">
                <img class="galImg" loading="lazy" src="images/interior/Gallery/21.jpg">
                <img class="galImg" loading="lazy" src="images/interior/Gallery/23.jpeg">
            </div>
          </div>
          <div class="slideshowContainer">
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <img class="galImg" loading="lazy" src="images/interior/Gallery/8.jpg" width="100%">
                    <div class="text"></div>
                  </div>
                
                <div class="mySlides fade">
                  <img class="galImg" loading="lazy" src="images/interior/Gallery/2.jpeg" width="100%">
                  <div class="text"></div>
                </div>
              
                <div class="mySlides fade">
                  <img class="galImg" loading="lazy" src="images/interior/Gallery/3.jpg" width="100%">
                  <div class="text"></div>
                </div>
                <div class="mySlides fade">
                  <img class="galImg" loading="lazy" src="images/interior/Gallery/4.jpg" width="100%">
                  <div class="text"></div>
                </div>
              
                <div class="mySlides fade">
                  <img class="galImg" loading="lazy" src="images/interior/Gallery/5.jpg" width="100%">
                  <div class="text"></div>
                </div>
              
                <div class="mySlides fade">
                  <img class="galImg" loading="lazy" src="images/interior/Gallery/6.jpg" width="100%">
                  <div class="text"></div>
                </div>
                <div class="mySlides fade">
                    <img class="galImg" loading="lazy" src="images/interior/Gallery/1.jpg" width="100%">
                    <div class="text"></div>
                </div>
              
                <div class="mySlides fade">
                    <img class="galImg" loading="lazy" src="images/interior/Gallery/7.jpg" width="100%">
                    <div class="text"></div>
                </div>
              
                <div class="mySlides fade">
                  <img class="galImg" loading="lazy" src="images/interior/Gallery/9.jpg" width="100%">
                  <div class="text"></div>
                </div>
                <div class="mySlides fade">
                  <img class="galImg" loading="lazy" src="images/interior/Gallery/10.jpg" width="100%">
                  <div class="text"></div>
                </div>
              
                <div class="mySlides fade">
                  <img class="galImg" loading="lazy" src="images/interior/Gallery/11.jpg" width="100%">
                  <div class="text"></div>
                </div>
              
                <div class="mySlides fade">
                  <img class="galImg" loading="lazy" src="images/interior/Gallery/12.jpg" width="100%">
                  <div class="text"></div>
                </div>
                <div class="mySlides fade">
                  <img class="galImg" loading="lazy" src="images/interior/Gallery/13.jpg" width="100%">
                  <div class="text"></div>
                </div>
              
                <div class="mySlides fade">
                  <img class="galImg" loading="lazy" src="images/interior/Gallery/14.jpg" width="100%">
                  <div class="text"></div>
                </div>
              
                <div class="mySlides fade">
                  <img class="galImg" loading="lazy" src="images/interior/Gallery/15.jpg" width="100%">
                  <div class="text"></div>
                </div>
                <div class="mySlides fade">
                  <img class="galImg" loading="lazy" src="images/interior/Gallery/16.jpeg" width="100%">
                  <div class="text"></div>
                </div>
              
                <div class="mySlides fade">
                  <img class="galImg" loading="lazy" src="images/interior/livingRoom.jpg" width="100%">
                  <div class="text"></div>
                </div>
              
                <div class="mySlides fade">
                  <img class="galImg" loading="lazy" src="images/interior/Gallery/17.jpg" width="100%">
                  <div class="text"></div>
                </div>
                <div class="mySlides fade">
                  <img class="galImg" loading="lazy" src="images/interior/Gallery/18.jpeg" width="100%">
                  <div class="text"></div>
                </div>
              
                <div class="mySlides fade">
                  <img class="galImg" loading="lazy" src="images/interior/Gallery/19.jpg" width="100%">
                  <div class="text"></div>
                </div>
              
                <div class="mySlides fade">
                  <img class="galImg" loading="lazy" src="images/interior/Gallery/20.jpg" width="100%">
                  <div class="text"></div>
                </div>
                <div class="mySlides fade">
                  <img class="galImg" loading="lazy" src="images/interior/Gallery/21.jpg" width="100%">
                  <div class="text"></div>
                </div>
              
                <div class="mySlides fade">
                  <img class="galImg" loading="lazy" src="images/interior/Gallery/22.jpg" width="100%">
                  <div class="text"></div>
                </div>
                <div class="mySlides fade">
                  <img class="galImg" loading="lazy" src="images/interior/Gallery/23.jpeg" width="100%">
                  <div class="text"></div>
                </div>
              
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
              </div>
              <br>
              
              <!-- The dots/circles -->
              <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
                <span class="dot" onclick="currentSlide(6)"></span>
                <span class="dot" onclick="currentSlide(7)"></span>
                <span class="dot" onclick="currentSlide(8)"></span>
                <span class="dot" onclick="currentSlide(9)"></span>
                <span class="dot" onclick="currentSlide(19)"></span>
                <span class="dot" onclick="currentSlide(11)"></span>
                <span class="dot" onclick="currentSlide(12)"></span>
                <span class="dot" onclick="currentSlide(13)"></span>
                <span class="dot" onclick="currentSlide(14)"></span>
                <span class="dot" onclick="currentSlide(15)"></span>
                <span class="dot" onclick="currentSlide(16)"></span>
                <span class="dot" onclick="currentSlide(17)"></span>
                <span class="dot" onclick="currentSlide(18)"></span>
                <span class="dot" onclick="currentSlide(19)"></span>
                <span class="dot" onclick="currentSlide(20)"></span>
              </div>
          </div>
    </section>
    <section id="section7">
        <div class="column2">
            <div>
                <h1>SCHEDULE AN ESTIMATE</h1>
                <h4>Call us today to schedule a free estimate</h4>
            </div>
            <div>
                <a href="contact.php">Schedule Now!</a>
            </div>
        </div>
    </section>
    <section id="section8">
        <div class="column3">
            <div class="sec8Divs">
                <div><i class="fas fa-map-marked-alt"></i></div>
                <div><h4>VividCoat Painting LTD</h4>
                    <h4>Ontario, Canada</h4></div> 
            </div>
            <div class="sec8Divs">
                <div style="margin: 0 10px 10px 0;"><i class="far fa-envelope"></i></div>
                <div><h4>Our Email</h4>
                    <h4>VividCoatPainting@hotmail.com</h4></div> 
            </div>
            <div class="sec8Divs">
                <div><i class="fas fa-mobile"></i></div>
                <div><h4>Call Us For An Estimate</h4>
                    <h4>416-566-1322</h4></div> 
            </div>
        </div>
    </section>
    <?php include("footer.php"); ?>
    <script src="main.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/ScrollTrigger.min.js"></script>
    <script>
        gsap.registerPlugin(ScrollTrigger);

        gsap.from('.anotherOne', {opacity: 0, duration: 1, y: -70});
        gsap.from('.ratDiv', {opacity: 0, duration: 1, x: -100, scrollTrigger: '.ratDiv'});
        gsap.from('.sec2Div2', {opacity: 0, duration: 1, x: 100, scrollTrigger: '.sec2Div2'});
        gsap.from('#section5 > h1', {opacity: 0, duration: 1, x: -100, scrollTrigger: '#section5 > h1'});
        gsap.from('#section5 > h3', {opacity: 0, duration: 1, x: 100, scrollTrigger: '#section5 > h3'});
        gsap.from('#section5Divs', {opacity: 0, duration: 1, x: -100, scrollTrigger: '#section5Divs'});
        gsap.from('#section3 > div', {opacity: 0, duration: 1, y: 100, scrollTrigger: '#section3 > div'});
        gsap.from('.textTop', {opacity: 0, duration: 1, y: -70, scrollTrigger: '.textTop'});
        gsap.from('.textTop1', {opacity: 0, duration: 1, x: -70, scrollTrigger: '.textTop1'});
        gsap.from('.textTop2', {opacity: 0, duration: 1, y: 70, scrollTrigger: '.textTop2'});
        gsap.from('.textTop3', {opacity: 0, duration: 1, y: -70, scrollTrigger: '.textTop3'});
        gsap.from('.serviceDiv1', {opacity: 0, duration: .5, x: -100, scrollTrigger: '.serviceDiv1'});
        gsap.from('.serviceDiv2', {opacity: 0, duration: .5, x: 100, scrollTrigger: '.serviceDiv2'});
        gsap.from('.serviceDiv3', {opacity: 0, duration: .5, x: -100, scrollTrigger: '.serviceDiv3'});
        gsap.from('.serviceDiv4', {opacity: 0, duration: .5, x: 100, scrollTrigger: '.serviceDiv4'});
        gsap.from('.sec5Top', {opacity: 0, duration: 1, y: 100, scrollTrigger: '.sec5Top'});
        gsap.from('.sec5Left', {opacity: 0, duration: 1, x: -100, scrollTrigger: '.sec5Left'});
        gsap.from('.sec5Right', {opacity: 0, duration: 1, x: 100, scrollTrigger: '.sec5Right'});
        gsap.from('#section7 > .column2', {opacity: 0, duration: 1, x: -100, scrollTrigger: '#section7 > .column2'});
        gsap.from('#section8 > .column3', {opacity: 0, duration: 1, x: 100, scrollTrigger: '#section8 > .column3'});
        gsap.from('.galImg', {opacity: 0, duration: 1, scrollTrigger: '.galImg'});
    </script>
</body>
</html>