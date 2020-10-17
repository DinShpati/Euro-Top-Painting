<header>
        <div class="logoDiv">
            <a href="index.php"><img src="images/logo.png" alt="Euro Top painting" width="40%" style="margin-left: 10%;"></a>
        </div>
        <div class="estCallDiv">
            <a href="contact.php" class="getFreeEstBtn">Get a Free Estimate</a>
            <a href="tel:647-648-4253" class="callBtn"><i class="fas fa-mobile-alt"></i> 647-648-4253</a>
        </div>
    </header>

    <nav id="navbar">
        <a href="index.php" class="nav-item btn-2">Home<div class="slider"></div></a>
        <li class="nav-item ripple resBtn">Residential<div class="slider"></div>
            <ul class="residentialDropdown">
                <li><a href="interior.php">Interior</a></li>
                <li><a href="exterior.php">Exterior</a></li>
                <li><a href="cabinets.php">Cabinets</a></li>
                <li><a href="ceilings.php">Ceillings</a></li>
                <li><a href="decks.php">Decks</a></li>
            </ul>
        </li>
        <a href="commercial.php" class="nav-item ripple">Commercial<div class="slider"></div></a>
        <li class="nav-item ripple comBtn">Handyman<div class="slider"></div>
            <ul class="commercialDropdown">
                <li><a href="ceilings.php">Ceiling Repair</a></li>
                <li><a href="carpentry.php">Carpentry</a></li>
                <li><a href="Wallpapers.php">Wallpapers</a></li>
            </ul>
        </li>
        <a href="testimonials.php" class="nav-item ripple">Testimonials<div class="slider"></div></a>
        <a href="about.php" class="nav-item ripple">About<div class="slider"></div></a>
        <a href="contact.php" class="nav-item ripple">Contact Us<div class="slider"></div></a>
    </nav>
    <nav id="mobileNav">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
    </nav>
    <div class="overlay" id="myNav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="nav-items overlay-content">
            <a href="index.php" class="nav-item btn-2">Home<div class="slider"></div></a>
            <div class="dropdown">
                <a href="#" class="nav-item ripple" data-toggle="dropdown">Residential &#9660;<div class="slider"></div></a>
                <ul class="dropdown-menu">
                    <li><a href="interior.php">Interior</a></li>
                    <li><a href="exterior.php">Exterior</a></li>
                    <li><a href="cabinets.php">Cabinets</a></li>
                    <li><a href="ceilings.php">Ceillings</a></li>
                    <li><a href="decks.php">Decks</a></li>
                </ul>
            </div>
            <a href="commercial.php" class="nav-item ripple">Commercial<div class="slider"></div></a>
            <div class="dropdown">
                <a href="#" class="nav-item ripple" data-toggle="dropdown">Handyman &#9660;<div class="slider"></div></a>
                <ul class="dropdown-menu">
                    <li><a href="ceilings.php">Ceiling Repair</a></li>
                    <li><a href="carpentry.php">Carpentry</a></li>
                    <li><a href="Wallpapers.php">Wallpapers</a></li>
                </ul>
            </div>
            <a href="testimonials.php" class="nav-item ripple">Testimonials<div class="slider"></div></a>
            <a href="about.php" class="nav-item ripple">About<div class="slider"></div></a>
            <a href="contact.php" class="nav-item ripple">Contact Us<div class="slider"></div></a>
        </div>
    </div>