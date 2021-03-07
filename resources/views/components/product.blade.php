<style>
body {
  font-family: Verdana, sans-serif;
  margin: 0;
}

* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 60%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
  background-color: rgb(0 0 0 / 15%);
}

/* Position the "next button" to the right */
.next {
  right: 0;
  background-color: rgb(0 0 0 / 15%);
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>

<div class="row">
  <div class="column cell colspan3 align-center bg-white shadow product-marg" style="margin-top: 2%;">
    <img src="{{asset('image/brand/Fruity-Lip-balm.png')}}" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
    <div class="sub-alt-header padding5 fg-darkBlue">Fruity</div>
    <div class="text-secondary padding5 fg-dark"></div>
  </div>
  <div class="column cell colspan3 align-center bg-white shadow product-marg" style="margin-top: 2%;">
    <img src="{{asset('image/brand/Beautina-Hair-Oil.png')}}" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
    <div class="sub-alt-header padding5 fg-darkBlue">Beautina</div>
    <div class="text-secondary padding5 fg-dark"></div>
  </div>
  <div class="column cell colspan3 align-center bg-white shadow product-marg" style="margin-top: 2%;">
    <img src="{{asset('image/brand/Clean-Master.png')}}" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
    <div class="sub-alt-header padding5 fg-darkBlue">Clean Master</div>
    <div class="text-secondary padding5 fg-dark"></div>
  </div>
  <div class="column cell colspan3 align-center bg-white shadow product-marg" style="margin-top: 2%;">
    <img src="{{asset('image/brand/Genstar.png')}}" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
    <div class="sub-alt-header padding5 fg-darkBlue">Genstar</div>
    <div class="text-secondary padding5 fg-dark"></div>
  </div>
</div>
<div class="row">
  <div class="column cell colspan3 align-center bg-white shadow product-marg" style="margin-top: 2%;">
    <img src="{{asset('image/brand/Sandalina.png')}}" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
    <div class="sub-alt-header padding5 fg-darkBlue">Sandalina</div>
    <div class="text-secondary padding5 fg-dark"></div>
  </div>
  <div class="column cell colspan3 align-center bg-white shadow product-marg" style="margin-top: 2%;">
    <img src="{{asset('image/brand/Tibet-Ball-Soap.png')}}" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
    <div class="sub-alt-header padding5 fg-darkBlue">Tibet Ball Soap</div>
    <div class="text-secondary padding5 fg-dark"></div>
  </div>
  <div class="column cell colspan3 align-center bg-white shadow product-marg" style="margin-top: 2%;">
    <img src="{{asset('image/brand/Tibet-Lipjel.png')}}" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
    <div class="sub-alt-header padding5 fg-darkBlue">Tibet Lipjel</div>
    <div class="text-secondary padding5 fg-dark"></div>
  </div>
  <div class="column cell colspan3 align-center bg-white shadow product-marg" style="margin-top: 2%;">
    <img src="{{asset('image/brand/Tibet-Luxury-Soap.png')}}" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
    <div class="sub-alt-header padding5 fg-darkBlue">Tibet Luxury Soap</div>
    <div class="text-secondary padding5 fg-dark"></div>
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="{{asset('image/product/570-Soap-01.png')}}" style="width:100%; height: 450px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="{{asset('image/product/Am_Pm-01.png')}}" style="width:100%; height: 450px;">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="{{asset('image/product/Bactrol-01.png')}}" style="width:100%; height: 450px;">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="{{asset('image/product/Beautina_Face_Wash-01.png')}}" style="width:100%; height: 450px;">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>
  </div>
</div>

<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

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
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>