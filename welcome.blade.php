<!DOCTYPE html>
<html lang="en">
<title>serve</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://unpkg.com/tailwindcss@1.0/dist/tailwind.min.css" rel="stylesheet">
<style>


* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;

  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}




body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee,.fa-area-chart,.fa-bolt,.fa-cart-plus,.fa-check-circle {font-size:200px}

* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #ffc400;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: rgb(0, 0, 0);
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>


<body>

  <div class="header">
    <a href="#default" class="logo">Ansh's Servey</a>
    <div class="header-right">
      <a class="active" href="#home">Home</a>
      <a href="{{ url('/register') }}">servey form</a>
      <a href="{{ url('/about') }}">contact us?</a>
      <a href="{{  url('https://www.cowin.gov.in/')}}">Register at cowin</a>
    </div>
  </div>





  <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 5</div>
      <img src={{ asset('images/ansh.png') }} style="width:100%">
      <div class="text"></div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">5 / 5</div>
      <img src={{ asset('images/ANSH2.png') }} style="width:100%">
      <div class="text"></div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">2 / 5</div>
      <img src={{ asset('images/p2.png') }} style="width:100%">
      <div class="text"></div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">3 / 5</div>
      <img src={{ asset('images/p3.png') }} style="width:100%">
      <div class="text"></div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">4 / 5</div>
      <img src={{ asset('images/p1.png') }} style="width:100%">
      <div class="text"></div>
    </div>

  
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    
    </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
      <span class="dot" onclick="currentSlide(4)"></span> 
      <span class="dot" onclick="currentSlide(5)"></span> 
    </div>
    
    <script>
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
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
    </script>
    
























  
  {{-- <div class="w3-display-container" style="margin-bottom:10px">
    <img src={{ asset('images/p1.png') }} style="width:100%"> --}}
    {{-- <div class="w3-display-bottomleft w3-container w3-amber w3-hover-orange w3-hide-small"
     style="bottom:10%;opacity:0.7;width:70%">
    <h2><b>4 Good Reasons<br>For travelling with us</b></h2>
  </div> --}}
  {{-- </div> --}}
  
  



<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-bolt w3-padding-64 w3-text-blue w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">-Lets get vaccinated and charge ourself</h1>
      <h5 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">lets say safe to corona</h5>

      <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
        While the vaccines are being developed at a fast pace, they also require rigorous testing. The tests are done in clinical trials to ensure that they meet the benchmarks for the safety and efficiency of international standards.

        When they meet the standards, then only can they get the go-ahead from WHO and national regulatory agencies. UNICEF has said that it will attain and supply only those vaccines that meet the WHO guidelines and have met the regulatory approval.
        
        As of now, the vaccine doses are limited in number. Thus, the healthcare workers, first responders, people over the age of 75 and residents of long-term care facilities will receive the first doses.
        
        After that, everyone will be able to get it once more of them are available. To get the vaccine, a person may require to pay a fee. However, some government institutions are providing it free of cost.
        In order to get the vaccine, one must check with their local and state health departments on a regular basis. When they get the chance, they must get the dose right away.
      </p>

    </div>
  </div>
</div>









<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">-Why we are conducting serve</h1>
      <h5 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Lets Vaccinate Whole India</h5>

      <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
        While the vaccines are being developed at a fast pace, they also require rigorous testing. The tests are done in clinical trials to ensure that they meet the benchmarks for the safety and efficiency of international standards.

        When they meet the standards, then only can they get the go-ahead from WHO and national regulatory agencies. UNICEF has said that it will attain and supply only those vaccines that meet the WHO guidelines and have met the regulatory approval.
        
        As of now, the vaccine doses are limited in number. Thus, the healthcare workers, first responders, people over the age of 75 and residents of long-term care facilities will receive the first doses.
        
        After that, everyone will be able to get it once more of them are available. To get the vaccine, a person may require to pay a fee. However, some government institutions are providing it free of cost.
        In order to get the vaccine, one must check with their local and state health departments on a regular basis. When they get the chance, they must get the dose right away.
      </p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-area-chart w3-padding-64 w3-text-green"></i>
    </div>
  </div>
</div>




<!-- Fourth Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-check-circle w3-padding-64 w3-text-black w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">- Let fill form and get Ecertified email</h1>
      <h5 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">vacinate the world mission</h5>

      <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
        While the vaccines are being developed at a fast pace, they also require rigorous testing. The tests are done in clinical trials to ensure that they meet the benchmarks for the safety and efficiency of international standards.

        When they meet the standards, then only can they get the go-ahead from WHO and national regulatory agencies. UNICEF has said that it will attain and supply only those vaccines that meet the WHO guidelines and have met the regulatory approval.
        
        As of now, the vaccine doses are limited in number. Thus, the healthcare workers, first responders, people over the age of 75 and residents of long-term care facilities will receive the first doses.
        
        After that, everyone will be able to get it once more of them are available. To get the vaccine, a person may require to pay a fee. However, some government institutions are providing it free of cost.
        In order to get the vaccine, one must check with their local and state health departments on a regular basis. When they get the chance, they must get the dose right away.
      </p>

    </div>
  </div>
</div>







<!-- third Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">-Health Comes First</h1>
      <h5 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">lets take pledge to make india healty</h5>

      <p style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
        While the vaccines are being developed at a fast pace, they also require rigorous testing. The tests are done in clinical trials to ensure that they meet the benchmarks for the safety and efficiency of international standards.

        When they meet the standards, then only can they get the go-ahead from WHO and national regulatory agencies. UNICEF has said that it will attain and supply only those vaccines that meet the WHO guidelines and have met the regulatory approval.
        
        As of now, the vaccine doses are limited in number. Thus, the healthcare workers, first responders, people over the age of 75 and residents of long-term care facilities will receive the first doses.
        
        After that, everyone will be able to get it once more of them are available. To get the vaccine, a person may require to pay a fee. However, some government institutions are providing it free of cost.
        In order to get the vaccine, one must check with their local and state health departments on a regular basis. When they get the chance, they must get the dose right away.
      </p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-cart-plus w3-padding-64 w3-text-red"></i>
    </div>
  </div>
</div>












<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">co-powered by AnshPhotography </h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
   <a href="{{ url('https://www.instagram.com/__anshu__1802/?hl=en') }}"> <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <a href="{{ url('https://www.linkedin.com/in/ansh-kevadiya-22623b227') }}"></a><i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p>Powered by <a href="{{ url('/welcome') }}" target="_blank">Ansh's Servey</a></p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>


<section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 py-24 mx-auto">
    <div class="lg:w-4/5 mx-auto flex flex-wrap">
      <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src={{ asset('images/shirt.png') }}>
      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
        <h2 class="text-sm title-font text-gray-500 tracking-widest">BRAND NAME</h2>
        <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">The End of ERA</h1>
        <div class="flex mb-4">
          <span class="flex items-center">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <span class="text-gray-600 ml-3">4 Reviews</span>
          </span>
          <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200 space-x-2s">
            <a class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
              </svg>
            </a>
          </span>
        </div>
        <p class="leading-relaxed">Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy chia microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn. Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over, neutra jean shorts keytar banjo tattooed umami cardigan.</p>
        <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
         
          <div class="flex ml-6 items-center">
            <span class="mr-3">Size</span>
            <div class="relative">
              <select class="rounded border appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pl-3 pr-10">
                <option>SM</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
              </select>
              <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                  <path d="M6 9l6 6 6-6"></path>
                </svg>
              </span>
            </div>
          </div>
        </div>
        <div class="flex">
          <span class="title-font font-medium text-2xl text-gray-900">$6.00</span>
          <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Button</button>
          <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>


</body>
</html>
