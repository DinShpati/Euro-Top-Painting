
<?php 

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$configs = include('config.php');

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
        $mailer->Username = $configs->mailUsername;
        $mailer->Password = $configs->mailPass;
        $mailer->SMTPSecure = 'tls';
        $mailer->Port = 587;
        $mailer-> SMTPAuth = true;


        $mailer->setFrom('estimates@EuroTopPainting.com', 'Estimate');
        $mailer->addAddress('proendergamer03@gmail.com', 'Visar Ramadani');

        $mailer->isHTML(false);
        $mailer->Subject = ($name . " is asking for a estimate");
        $mailer->Body = ("$desc . \n\n . Desired Start Date:  . $date . \n\n . Customer Number: . $phone . \n . Customer Email - Click Here to reply: . $email");

        $mailer->send();
        $mailer->ClearAllRecipients();
        echo "<script>alert('Your message was recieved, we will get back to you soon.');</script>";
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
    <meta content="Euro Top Painting - The best painting company in Toronto, CA!" property=og:title>
    <meta content="Euro Top Painting - Every one of our services is backed by our 100% Satisfaction Guarantee. We are fully committed to making your home dreams come true! Euro Top Painting . Our track record has proven the quality of our service! Our expert, skilled staff are here to meet all of your needs – from start to finish of your project! Even when the job is done, we’re still there for you. All of our work is backed by an unmatched Two Year Quality Guarantee."
          property=og:description>
    <meta content=EuroTopPainting.com property=og:url>
    <meta content=website property=og:type>
    <meta content=images/icon.png property=og:image>
    <meta content=summary_large_image property=twitter:card>
    <meta name="description"
          content="Euro Top Painting - Every one of our services is backed by our 100% Satisfaction Guarantee. We are fully committed to making your home dreams come true! Euro Top Painting . Our track record has proven the quality of our service! Our expert, skilled staff are here to meet all of your needs – from start to finish of your project! Even when the job is done, we’re still there for you. All of our work is backed by an unmatched Two Year Quality Guarantee.">
    <meta property="og:image" content="images/main.jpg">
    <title>Euro Top Painting - The best painting company in Toronto, CA!</title>

    <!-- CSS -->
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/reset.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/939c3b7b3f.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">


</head>
<body>

    <?php include("header.php"); ?>

    <section id="section1">
        <div class="darkBG">
            <div class="anotherOne">
                <h1 class="bigText">We're a Team of Professional <br> Painting Contractors</h1>
                <h2 class="midText">Staying committed to the job is what separates us from<br> your average painter. When you need reliable contractors with<br> high attention to detail, work with Euro Top Painting.</h2>
                <div class="sectionOneBadges">
                    <div> <img src="images/homestars.png" alt="Euro Top painting - homestars verified"> </div>
                    <div> <img src="images/30YearsInBussiness.png" alt="Euro Top painting - homestars verified"> </div>
                    <div><img src="images/warranty (1).png" alt="Euro Top painting - homestars verified"></div>
                    <div><img src="images/Homestars-best-of-2020-2.png" alt="Euro Top painting - homestars verified"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="section2">
        <div class="section2Shade">
            <div class="sec2Div">
                <h1 style="font-size: 30px;" class="white">Interior & Exterior House Painting Contractors</h1>
                <hr>
                <div class="ratDiv">
                    <h3 class="red"><i class="far fa-laugh"></i></h3>
                    <h3 class="red">+1000</h3>
                    <h2 class="white">Positive Reviews!</h2>
                </div>
                <hr>
                <div class="ratDiv">
                    <h3 class="red"><i class="fas fa-thumbs-up"></i></h3>
                    <h3 class="red">+1500</h3>
                    <h2 class="white">Happy Customers!</h2>
                </div>
                <hr>
                <div class="ratDiv">
                    <h3 class="red"><i class="fas fa-money-bill-wave-alt"></i></h3>
                    <h3 class="red"></h3>
                    <h2 class="white">Best Bet For Your Buck!</h2>
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

    <section id="section3">
        <div>
            <i class="fas fa-home"></i>
            <div style="height: 3px; background-color: #47b76f; width: inherit; margin: 10px 20%;"></div>
            <p>We've been in business since 1999. With our longevity, you can feel safe that Euro Top Paitning  will take your project seriously with unmatched results.</p>
        </div>
        <div>
            <i class="fas fa-money-bill-wave"></i>
            <div style="height: 3px; background-color: #47b76f; width: inherit; margin: 10px 20%;"></div>
            <p>We have the best price in the Southern Toronto area hands down. Many contractors price gouge because of the large overhead they accumulate. Our team is compact, lean, and take an expert approach. Don't overpay by working with fly by night or painting contractors that don't value your business. We're affordable and local.
            </p>
        </div>
        <div>
            <i class="fas fa-truck"></i>
            <div style="height: 3px; background-color: #47b76f; width: inherit; margin: 10px 20%;"></div>
            <p>We schedule free estimates for any home owner in the Southern Onatrio area and surrounding areas. Get started with a free estimate by calling today.
            </p>
        </div>
        <div>
            <i class="fas fa-user-alt"></i>
            <div style="height: 3px; background-color: #47b76f; width: inherit; margin: 10px 20%;"></div>
            <p>On-site or virtual consultations while following strict COVID-19 procedures.</p>
        </div>
        <div>
            <i class="fas fa-calendar-alt"></i>
            <div style="height: 3px; background-color: #47b76f; width: inherit; margin: 10px 20%;"></div>
            <p>Open 7 days a week and 1 or 2-day rush services.</p>
        </div>
        <div>
            <i class="fas fa-virus"></i>
            <div style="height: 3px; background-color: #47b76f; width: inherit; margin: 10px 20%;"></div>
            <p>No-touch services, PPE, and COVID friendly precautions taken on all job sites.</p>
        </div>
    </section>
    <section id="section4">
        <h1 class="textTop">For all your <span style="color: #47b76f;">painting needs!</span></h1>
        <div style="height: 3px; background-color: #47b76f; width: inherit; margin: 0 25vw;"></div>
        <div class="section4Grid">
            <div class="serviceDiv serviceDiv1">
                <img src="images/interior/InteriorGreen.jpg" alt="Euro Top Painting Interior Painting Toronto Canada">
                <h1><span style="color: #47b76f;">Interior</span> Painting Services</h1>
                <p>For 30 years we have transformed our client’s interiors.
                    The interior is what most people see in your home, make sure it is lively by getting an expert to provide the interior painting.
                </p>
                <br>
                <h2>We Do: </h2>
                <ul style="list-style: disc; text-align: left;">
                    <li>Residences and Condos</li>
                    <li>Drywall installations and repair</li>
                    <li>Flattening Popcorn Ceillings</li>
                    <li>Staircase painting/staining</li>
                    <li>Wallpaper installation or removel</li>
                    <li>Smoke stain removal</li>
                    <li>trim and door painting</li>
                    <li>and much much more!</li>
                </ul>
                <br>
                <a href="interior.php" class="learnMore">Learn More</a>
            </div>
            <div class="serviceDiv serviceDiv2">
                <img src="images/exterior/ExteriorGreen.jpg" alt="Euro Top Painting Interior Painting Toronto Canada">
                <h1><span style="color: #47b76f;">Exterior</span> Painting Services</h1>
                <p>We will protect and beautify your exterior home for years to come. Besides
                    exterior windows and door painting, we also specialize in painting your
                    aluminum and vinyl siding, stucco siding, brick staining, decks and fence
                    staining, front oak doors refurbishing, and much more!</p>
                <h2>We Do: </h2>
                <ul style="list-style: disc; text-align: left;">
                    <li>Residences and buildings</li>
                    <li>Aluminum and Vinyl siding</li>
                    <li>Brick painting and brick staining</li>
                    <li>Exterior wood repairing and carpentry</li>
                    <li>Deck staining & Fence staining</li>
                    <li>Exterior Caulking</li>
                    <li>Exterior front door <br> re-staining and re-finishing</li>
                </ul>
                <a href="exterior.php" class="learnMore">Learn More</a>
            </div>
            <div class="serviceDiv serviceDiv3">
                <img src="images/commercial/CommercialGreen.jpg" alt="Euro Top Painting Interior Painting Toronto Canada">
                <h1><span style="color: #47b76f;">Commercial</span> Painting Services</h1>
                <p>We love taking care of our commercial clients. Past commercial projects
                    include painting of businesses, office painting, apartment and townhouse
                    complexes, hotel maintenance and painting, wrought iron fences, and garage
                    interiors.</p>
                <h2>We Do: </h2>
                <ul style="list-style: disc; text-align: left;">
                    <li>Businesses & Buidlings</li>
                    <li>Office painting</li>
                    <li>Apartment & Townhouse complexes</li>
                    <li>Hotel Maintenance & Painting</li>
                    <li>Wrought Iron Fences</li>
                    <li>Garage & Shop Interiors</li>
                    <br><br>
                </ul>
                <a href="commercial.php" class="learnMore">Learn More</a>
            </div>
            <div class="serviceDiv serviceDiv4">
                <img src="images/exterior/handyman.jpg" alt="Euro Top Painting Interior Painting Toronto Canada">
                <h1><span style="color: #47b76f;">Handyman</span> Services</h1>
                <p>Whether you need something installed, built, fixed or maintained, we are your reliable and local handyman for all your home maintenance, home repair, renovating and home remodeling needs.</p>
                <h2>We Do: </h2>
                <ul style="list-style: disc; text-align: left;">
                    <li>Businesses & Buidlings</li>
                    <li>Office painting</li>
                    <li>Apartment & Townhouse complexes</li>
                    <li>Hotel Maintenance & Painting</li>
                    <li>Wrought Iron Fences</li>
                    <li>Garage & Shop Interiors</li>
                    <br><br>
                </ul>
                <a href="carpentry.php" class="learnMore">Learn More</a>
            </div>
        </div>
    </section>
    <section id="section5">
        <h2 class="textTop2">Step-By-Step to a<span style="color: #47b76f;"> Perfect Home!</span></h2>
        <div style="height: 3px; background-color: #47b76f; width: inherit; margin: 0 25vw;"></div>
        <br>
        <div id="section5Divs">
            <div class="sec5Div sec5Left">
                <img src="images/customIcon.png" alt="Euro Top Painting Custom Paint Job">
                <h3>1.</h3>
                <h4>Request a free virtual estimate</h4>
            </div>
            <div class="sec5Div sec5Top">
                <img src="images/customIcon5.png" alt="Euro Top Painting Custom Paint Job">
                <h3>2.</h3>
                <h4>Approve and
                    schedule your project</h4>
            </div>
            <div class="sec5Div sec5Right">
                <img src="images/customIcon4.png" alt="Euro Top Painting Custom Paint Job">
                <h3>3.</h3>
                <h4>Enjoy your dream home!</h4>
            </div>
        </div>
        <br>
        <a href="contact.php" class="getEstBtn">Get A Virtual Or In Person Free Estimate Today</a>
    </section>
    <section id="section6">
        <h2 class="textTop3">Why <span style="color: #47b76f;">choose us?</span></h2>
        <div style="height: 3px; background-color: #47b76f; width: inherit; margin: 0 25vw;"></div>
        <br><br>
        <p class="textTop1">Euro Top Painting has earned a strong reputation for high-quality work for our clients. Our painters are trained in the latest painting techniques,  safety standards and work seamlessly in your project to meet scheduling needs. We work with our clients to provide accurate proposals, detailed recommendations and outstanding attention to detail as well as offer guidance for proper care and maintenance to maximize long-lasting results. Euro Top Painting specializes in professional painting for  Residential Owners, General Contractors, Property Managers, Homeowners Associations and Building Owners. We provide high-quality painting solutions to meet the unique requirements of any project. Our team will deliver timely, professional and accurate results to fit the needs of your budget for assignments of any scale.</p>
        <div class="column2">
            <div style="margin: 20px;">
                <div id="comparison">
                    <figure>
                      <div id="divisor"></div>
                    </figure>
                    <input type="range" min="0" max="100" value="50" id="slider" oninput="moveDivisor()">
                </div>
                <div id="comparison2">
                    <img src="images/exterior/BEFORE.jpg" alt="" style="max-width: 80%;">
                    <img src="images/exterior/AFTER.jpg" alt="" style="max-width: 80%;">
                </div>
                <br>
                <img src="images/logo.png" alt="Euro Top Painting logo png" style="max-width: 60%;">
            </div>
            <div class="perfectChoiceDiv">
                <div style="margin: 40px 0;">
                    <h3>100% <span style="color: #0eb448;">Satisfaction</span> Gurantee</h3>
                    <img src="images/100Sat.png" alt="Euro Top Painting 100% Satisfatcion gurantee" style="max-width: 33%;">
                </div>
                <div style="margin: 40px 0;">
                    <h3>Unmatched <span style="color: #0eb448;">2-year</span> Quality Warranty</h3>
                    <img src="images/2yeargur.png" alt="Euro Top Painting 2 year gurantee" style="max-width: 33%;">
                </div>
                <div style="margin: 40px 0;">
                    <h3><span style="color: #0eb448;">30-Years </span>experience</h3>
                    <img src="images/30inBus.png" alt="Euro Top Painting 30 years in business" style="max-width: 33%;">
                </div>
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
    </script>
</body>
</html>