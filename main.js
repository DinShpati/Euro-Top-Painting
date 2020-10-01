var width = window.screen.availWidth;

if(width > 800){
  window.onscroll = function() {stickyNav()};

  var navbar = document.getElementById("navbar");
  var sticky = navbar.offsetTop;

  function stickyNav() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky");
    } else {
      navbar.classList.remove("sticky");
    }
}
}else{
  
  window.onscroll = function() {stickyNav2()};
  
  var mNav = document.getElementById("mobileNav");
  var msticky = mNav.offsetTop;

  function stickyNav2() {
    if (window.pageYOffset >= msticky) {
      mNav.classList.add("sticky2");
    } else {
      mNav.classList.remove("sticky2");
    }
  }
}

//Comparison Slider
var divisor = document.getElementById("divisor"),
slider = document.getElementById("slider");
function moveDivisor() { 
	divisor.style.width = slider.value+"%";
}


//Mobile navbar
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}


// Dropdown Menu
var dropdown = document.querySelectorAll('.dropdown');
var dropdownArray = Array.prototype.slice.call(dropdown,0);
dropdownArray.forEach(function(el){
	var button = el.querySelector('a[data-toggle="dropdown"]'),
			menu = el.querySelector('.dropdown-menu'),
			arrow = button.querySelector('i.icon-arrow');

	button.onclick = function(event) {
		if(!menu.hasClass('show')) {
			menu.classList.add('show');
			menu.classList.remove('hide');
			arrow.classList.add('open');
			arrow.classList.remove('close');
			event.preventDefault();
		}
		else {
			menu.classList.remove('show');
			menu.classList.add('hide');
			arrow.classList.remove('open');
			arrow.classList.add('close');
			event.preventDefault();
		}
	};
})

Element.prototype.hasClass = function(className) {
    return this.className && new RegExp("(^|\\s)" + className + "(\\s|$)").test(this.className);
};

//Slide Show Starts here
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

//Slide Show 2 Starts here
var zslideIndex = 1;
zshowSlides(zslideIndex);

// Next/previous controls
function zplusSlides(n) {
  zshowSlides(zslideIndex += n);
}

// Thumbnail image controls
function zcurrentSlide(n) {
  zshowSlides(zslideIndex = n);
}

function zshowSlides(n) {
  let zi;
  let zslides = document.getElementsByClassName("zmySlides");
  let zdots = document.getElementsByClassName("zdot");
  if (n > zslides.length) {zslideIndex = 1}
  if (n < 1) {zslideIndex = zslides.length}
  for (zi = 0; zi < zslides.length; zi++) {
      zslides[zi].style.display = "none";
  }
  for (zi = 0; zi < zdots.length; zi++) {
      zdots[zi].className = zdots[zi].className.replace(" active", "");
  }
  zslides[zslideIndex-1].style.display = "block";
  zdots[zslideIndex-1].className += " active";
}