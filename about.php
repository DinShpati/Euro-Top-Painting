<?php include('emailSender.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="images/icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/icon.png">
    <meta content="Euro Top Painting - The best painting company in Toronto, CA!" property=og:title>
    <meta content="Euro Top Painting - Every one of our services is backed by our 100% Satisfaction Guarantee. We are fully committed to making your home dreams come true! Euro Top Painting ltd. Our track record has proven the quality of our service! Our expert, skilled staff are here to meet all of your needs – from start to finish of your project! Even when the job is done, we’re still there for you. All of our work is backed by an unmatched Two Year Quality Guarantee."
          property=og:description>
    <meta content=EuroTopPainting.com property=og:url>
    <meta content=website property=og:type>
    <meta content=images/icon.png property=og:image>
    <meta content=summary_large_image property=twitter:card>
    <meta name="description"
          content="Euro Top Painting - Every one of our services is backed by our 100% Satisfaction Guarantee. We are fully committed to making your home dreams come true! Euro Top Painting ltd. Our track record has proven the quality of our service! Our expert, skilled staff are here to meet all of your needs – from start to finish of your project! Even when the job is done, we’re still there for you. All of our work is backed by an unmatched Two Year Quality Guarantee.">
    <meta property="og:image" content="images/main.jpg">
    <title>Euro Top Painting - The best painting company in Toronto, CA!</title>

    <!-- CSS -->
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/reset.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/939c3b7b3f.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

            <!-- Global site tag (gtag.js) - Google Analytics -->

</head>
<body>

<?php include("header.php"); ?> 


    <section id="section1" style="background-image: url(./images/exterior/backOfHome.jpg);">
        <div class="darkBG" style="background-color: rgba(170, 137, 94, 0.404);">
            <div class="anotherOne" >
                <h1 class="bigText">About Us</h1>
                <h2 class="midText">Euro Top Painting</h2>
                <div class="sectionOneBadges">
                    <div> <img src="images/homestars.png" alt="Euro Top painting - homestars verified"> </div>
                    <div> <img src="images/30YearsInBussiness.png" alt="Euro Top painting - homestars verified"> </div>
                    <div><img src="images/warranty (1).png" alt="Euro Top painting - homestars verified"></div>
                    <div><img src="images/Homestars-best-of-2020-2.png" alt="Euro Top painting - homestars verified"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section2wallpaper">
        <div class="section2Shade" style="background-color: #52463485;">
            <div class="sec2Div" style="text-align: center !important;">
                <h1 style="font-size: 30px;" class="white">About Us</h1>
                <hr>
                <div class="ratDiv">
                    <p style="color: white;">Euro Top Painting has earned a strong reputation for high-quality work for our clients. Our painters are trained in the latest painting techniques,  safety standards and work seamlessly in your project to meet scheduling needs. We work with our clients to provide accurate proposals, detailed recommendations and outstanding attention to detail as well as offer guidance for proper care and maintenance to maximize long-lasting results. Euro Top Painting specializes in professional painting for  Residential Owners, General Contractors, Property Managers, Homeowners Associations and Building Owners. We provide high-quality painting solutions to meet the unique requirements of any project. Our team will deliver timely, professional and accurate results to fit the needs of your budget for assignments of any scale.</p>
                </div>
                <hr>
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
        <h3>Euro Top Painting sets the highest standard in service and customer satisfaction.</h3>
        <div style="height: 3px; background-color: #47b76f; width: inherit; margin: 0 25vw;"></div>
        <br>
        <br>
        <div id="section5Divs">
            <div>
                <h3>100% <span style="color: #0eb448;">Satisfaction</span> Gurantee</h3>
                <img loading="lazy" src="images/100Sat.png" alt="Euro Top Painting LTD 100% Satisfatcion gurantee" style="max-width: 33%;">
            </div>
            <div>
                <h3>Unmatched <span style="color: #0eb448;">2-year</span> Quality Warranty</h3>
                <img loading="lazy" src="images/2yeargur.png" alt="Euro Top Painting LTD 2 year gurantee" style="max-width: 33%;">
            </div>
            <div>
                <h3><span style="color: #0eb448;">30-Years </span>experience</h3>
                    <img loading="lazy" src="images/30inBus.png" alt="Euro Top Painting LTD 30 years in business" style="max-width: 33%;">
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