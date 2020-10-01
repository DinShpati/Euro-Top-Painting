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
    <title>VividCoat Painting LTD - #1 Cabinet painters in Southern Ontario, Toronto</title>

    <!-- CSS -->
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/m.css">

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

    <section id="section1" style="background-image: url(./images/interior/Cabinets/7.jpeg);">
        <div class="darkBG" style="background-color: rgba(39, 30, 19, 0.404);">
            <div class="anotherOne" >
                <h1 class="bigText">Cabinet Painting Services</h1>
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
    <section class="section2Cabinets">
        <div class="section2Shade" style="background-color: #22292885;">
            <div class="sec2Div" style="text-align: center !important;">
                <h1 style="font-size: 30px;" class="white">Cabinet Painting Contractors</h1>
                <hr>
                <div class="ratDiv">
                    <p style="color: white;">Renovating your kitchen cabinets is time-consuming and complicated. But hiring VividCoat Paitning makes cabinet painting a breeze. Our color consultants can help you choose the best color or the type of finish you want. To get started, you just need to tell us a bit about your cabinets and what you want. You will get a free quote and before you know it, professional painters will be painting.</p>
                </div>
                <hr>
                <div class="ratDiv">
                    <p style="color: white;">VividCoat Painting's painting contractors are experienced in cabinet painting. They can simply repaint doors and use a durable finish on your kitchen cabinets! Our house painters will come to your house with all the necessary materials. Whatever your desired look, Paintzen can deliver. Our service is backed by a 100% Customer Satisfaction Guarantee.</p>
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
    <section id="servicesCabinets">
        <div class="blur">
            <h1 style="font-size: 30px;color: white;">Cabinet Paitning <span style="color: #0eb448;">Services</span></h1>
            <h3 style="color: white;">No matter what type of room or surface you are looking to paint, VividCoat Painting is there to help.</h3>
            <div style="height: 3px; background-color: #47b76f; width: inherit; margin: 0 25vw;"></div>
            <br>
            <br>
            <div class="services">
                <div>
                    <h3><i style="color: #0eb448; font-size: 30px;" class="far fa-check-square"></i> Kitchen Cabinet Refinishing</h3>
                </div>
                <div>
                    <h3><i style="color: #0eb448; font-size: 30px;" class="far fa-check-square"></i> Bathroom Cabinet Refinishing</h3>
                </div>
                <div>
                    <h3><i style="color: #0eb448; font-size: 30px;" class="far fa-check-square"></i> Kitchen Cabinet Staining</h3>
                </div>
                <div>
                    <h3><i style="color: #0eb448; font-size: 30px;" class="far fa-check-square"></i> Roof painting</h3>
                </div>
                <div>
                    <h3><i style="color: #0eb448; font-size: 30px;" class="far fa-check-square"></i> Exterior Door painting</h3>
                </div>
                <div>
                    <h3><i style="color: #0eb448; font-size: 30px;" class="far fa-check-square"></i> Fence painting</h3>
                </div>
                <div>
                    <h3><i style="color: #0eb448; font-size: 30px;" class="far fa-check-square"></i> Stucco painting</h3>
                </div>
                <div>
                    <h3><i style="color: #0eb448; font-size: 30px;" class="far fa-check-square"></i> Brick painting & staining</h3>
                </div>
                <div>
                    <h3><i style="color: #0eb448; font-size: 30px;" class="far fa-check-square"></i> Window Painting</h3>
                </div>
                <div>
                    <h3><i style="color: #0eb448; font-size: 30px;" class="far fa-check-square"></i> Siding Painting</h3>
                </div>
                <div>
                    <h3><i style="color: #0eb448; font-size: 30px;" class="far fa-check-square"></i> Deck Painting</h3>
                </div>
                <div>
                    <h3><i style="color: #0eb448; font-size: 30px;" class="far fa-check-square"></i> free color consultation</h3>
                </div>
            </div>
            <br>
            <a href="contact.php" class="interiorGetest2">Get a Free estimate</a>
        </div>
    </section>
    <div class="titleBox"><h1>A new look at a <span style="color: #0eb448;">great price.</span> Paint your Cabinets!</h1></div>
    <section class="interiorFaq">
        <div class="cabinetSpecial">
            <div class="saveMoneyCabinets">
                <h1 style="margin:0;color: #0eb448; font-size: 90px;"><i class="fas fa-wallet"></i></h1>
                <h1 style="font-size: 30px;">Benefits of Cabinet Refinishing</h1>
                <ul style="list-style: disc;margin: 0 10vw;">
                    <li class="cabinetLI">Many homeowners put off a new look in their kitchen because of the high cost associated with modern kitchen cabinets, but VividCoat Painting offers a way to get the job done for less. We can save you thousands compared to the cost of new cabinets. </li>
                    <br>
                    <li class="cabinetLI">Your cabinets are the focal point of the kitchen. But they are often neglected and take the backseat to appliances or countertops. But having quality kitchen cabinets can transform your kitchen. For a fraction of the cost, adding a fresh finish can drastically improve the look and feel of your kitchen.</li>
                    <br>
                    <li class="cabinetLI">Giving a fresh coat of paint to your bathroom cabinets is an easy way to make a statement. Add a pop of color on your existing cabinets to give your bathroom some personality or you give them a paint job that makes your space look bigger than it actually is.</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="slideShow">
        <h1 style="font-size: 30px;"><span style="color: #0eb448;">Cabinet</span> Painting Gallery</h1>
        <div class="row">
            <div class="column">
              <img class="galImg" loading="lazy" src="images/interior/Cabinets/1.jpg">
              <img class="galImg" loading="lazy" src="images/interior/Cabinets/2.jpg">
              <img class="galImg" loading="lazy" src="images/interior/Cabinets/11.jpeg">
            </div>
            <div class="column">
                <img class="galImg" loading="lazy" src="images/interior/Cabinets/3.jpg">
                <img class="galImg" loading="lazy" src="images/interior/Cabinets/4.jpg">
                <img class="galImg" loading="lazy" src="images/interior/Cabinets/12.jpeg">
            </div>
            <div class="column">
                <img class="galImg" loading="lazy" src="images/interior/Cabinets/5.jpg">
                <img class="galImg" loading="lazy" src="images/interior/Cabinets/6.jpg">
            </div>
            <div class="column">
                <img class="galImg" loading="lazy" src="images/interior/Cabinets/7.jpeg">
                <img class="galImg" loading="lazy" src="images/interior/Cabinets/8.jpeg">
                <img class="galImg" loading="lazy" src="images/interior/Cabinets/9.jpeg">
                <img class="galImg" loading="lazy" src="images/interior/Cabinets/10.jpeg">
            </div>
          </div>
          <div class="slideshowContainer">
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <img class="galImg" loading="lazy" src="images/interior/Cabinets/1.jpg" width="100%">
                    <div class="text"></div>
                  </div>
                
                <div class="mySlides fade">
                  <img class="galImg" loading="lazy" src="images/interior/Cabinets/2.jpg" width="100%">
                  <div class="text"></div>
                </div>
              
                <div class="mySlides fade">
                  <img class="galImg" loading="lazy" src="images/interior/Cabinets/3.jpg" width="100%">
                  <div class="text"></div>
                </div>
                <div class="mySlides fade">
                  <img class="galImg" loading="lazy" src="images/interior/Cabinets/4.jpg" width="100%">
                  <div class="text"></div>
                </div>
              
                <div class="mySlides fade">
                  <img class="galImg" loading="lazy" src="images/interior/Cabinets/5.jpg" width="100%">
                  <div class="text"></div>
                </div>
              
                <div class="mySlides fade">
                  <img class="galImg" loading="lazy" src="images/interior/Cabinets/6.jpg" width="100%">
                  <div class="text"></div>
                </div>
                <div class="mySlides fade">
                    <img class="galImg" loading="lazy" src="images/interior/Cabinets/7.jpeg" width="100%">
                    <div class="text"></div>
                </div>
              
                <div class="mySlides fade">
                    <img class="galImg" loading="lazy" src="images/interior/Cabinets/8.jpeg" width="100%">
                    <div class="text"></div>
                </div>
              
                <div class="mySlides fade">
                  <img class="galImg" loading="lazy" src="images/interior/Cabinets/9.jpeg" width="100%">
                  <div class="text"></div>
                </div>
                <div class="mySlides fade">
                  <img class="galImg" loading="lazy" src="images/interior/Cabinets/10.jpeg" width="100%">
                  <div class="text"></div>
                </div>
              
                <div class="mySlides fade">
                  <img class="galImg" loading="lazy" src="images/interior/Cabinets/11.jpeg" width="100%">
                  <div class="text"></div>
                </div>
              
                <div class="mySlides fade">
                  <img class="galImg" loading="lazy" src="images/interior/Cabinets/12.jpeg" width="100%">
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