{{-- <style>
  .team-carousel {
  width: 100%;
  overflow: hidden;
}

.team-carousel ul {
  display: flex;
  width: 400%;
  animation: slide 8s infinite;
}

.team-member {
  flex: 1;
  text-align: center;
  list-style: none;
}

.team-member img {
  width: 100px;
  height: 100px;
  border-radius: 50%;
}

@keyframes slide {
  0% {
    transform: translateX(0);
  }
  25% {
    transform: translateX(-33.33%);
  }
  50% {
    transform: translateX(-66.66%);
  }
  75% {
    transform: translateX(-100%);
  }
}

</style>
<div class="team-carousel">
  <ul>
    <li class="team-member active">
      <img src="member1.jpg" alt="Team Member 1">
      <h3>Member 1</h3>
      <p>Position</p>
    </li>
    <li class="team-member">
      <img src="member2.jpg" alt="Team Member 2">
      <h3>Member 2</h3>
      <p>Position</p>
    </li>
    <li class="team-member">
      <img src="member3.jpg" alt="Team Member 3">
      <h3>Member 3</h3>
      <p>Position</p>
    </li>
  </ul>
</div>
<script>


</script> --}}

{{-- <div style="width:50%;margin: 40px auto;background:#eee;"><div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://images.pexels.com/photos/414171/pexels-photo-414171.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://images.pexels.com/photos/371633/pexels-photo-371633.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://images.pexels.com/photos/358482/pexels-photo-358482.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<script>
  $('#carouselExampleControls').carousel();
</script> --}}
{{--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="main.css" rel="stylesheet" type="text/css">
    <title>Responsive Image Slider Only With Html And Css</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      body {
    padding: 20px;
    background: #333;
}
.h1-title {
    text-align: center;
    padding-bottom: 20px;
    color: #fff;
}
.slides {
    width: 609px;
    margin: 0 auto;
    position: relative;
    display: block;
}
.slides input { 
    display: none; 
}

.slide-container { 
    display: block;
}

.slide {
    top: 0;
    opacity: 0;
    display: block;
    position: absolute;
    transform: scale(0);
    transition: all .7s ease-in-out;
}

.slide img {
    width: 100%;
    height: 100%;
    display: block;
}

.nav label {
    display: none;
    position: absolute;
    cursor: pointer;
    color: rgba(0,0,0,0.5);
    text-align: center;
    margin-top: 29%;
}

.nav label:hover { 
    color: #000;
}

.nav .next { 
    right: 5px; 
}

.nav .prev {
    left: 5px;
} 

input:checked + .slide-container  .slide {
    opacity: 1;
    transform: scale(1);
    transition: opacity 1s ease-in-out;
}

input:checked + .slide-container .nav label { 
    display: block; 
}

.nav-dots {
	width: 100%;
	height: 11px;
	display: block;
	position: absolute;
	text-align: center;
    margin-top: 63%;
}

.nav-dots .nav-dot {
	width: 11px;
	height: 11px;
	margin: 0 4px;
	position: relative;
	border-radius: 100%;
	display: inline-block;
	background-color: rgba(0, 0, 0, 0.6);
}

.nav-dots .nav-dot:hover {
	cursor: pointer;
	background-color: rgba(0, 0, 0, 0.8);
}

input#img-1:checked ~ .nav-dots label#img-dot-1,
input#img-2:checked ~ .nav-dots label#img-dot-2,
input#img-3:checked ~ .nav-dots label#img-dot-3,
input#img-4:checked ~ .nav-dots label#img-dot-4,
input#img-5:checked ~ .nav-dots label#img-dot-5,
input#img-6:checked ~ .nav-dots label#img-dot-6 {
	background: rgba(0, 0, 0, 0.8);
}
@media screen and (max-width: 609px) {
  .slides {
    width: 100%;
  }
}

.myvideo {
  text-decoration: none;
  color: #fff;
  background: red;
  text-align: center;
  padding: 10px;
  font-weight: 600;
  z-index:100;
  position: absolute;
  bottom: 20px;
}
.myvideo:hover {
  color: #000;
}

    </style>
</head>
<body>
<section id="images-slider">
  
   <ul class="slides">
   
    <input type="radio" name="radio-btn" id="img-1" checked />
    <li class="slide-container">
		<div class="slide">
			<img src="assets/img/homeSlider/1-min.jpg"/>
        </div>
		<div class="nav">
			<label for="img-6" class="prev"><i class="fas fa-chevron-circle-left fa-3x"></i></label>
			<label for="img-2" class="next"><i class="fas fa-chevron-circle-right fa-3x"></i></label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-2" />
    <li class="slide-container">
        <div class="slide">
          <img src="assets/img/homeSlider/2-min.jpg"/>
        </div>
		<div class="nav">
			<label for="img-1" class="prev"><i class="fas fa-chevron-circle-left fa-3x"></i></label>
			<label for="img-3" class="next"><i class="fas fa-chevron-circle-right fa-3x"></i></label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-3" />
    <li class="slide-container">
        <div class="slide">
          <img src="assets/img/homeSlider/3-min.jpg"/>
        </div>
		<div class="nav">
			<label for="img-2" class="prev"><i class="fas fa-chevron-circle-left fa-3x"></i></label>
			<label for="img-4" class="next"><i class="fas fa-chevron-circle-right fa-3x"></i></label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-4" />
    <li class="slide-container">
        <div class="slide">
          <img src="assets/img/homeSlider/4-min.jpg"/>
        </div>
		<div class="nav">
			<label for="img-3" class="prev"><i class="fas fa-chevron-circle-left fa-3x"></i></label>
			<label for="img-5" class="next"><i class="fas fa-chevron-circle-right fa-3x"></i></label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-5" />
    <li class="slide-container">
        <div class="slide">
          <img src="assets/img/homeSlider/5-min.jpg"/>
        </div>
		<div class="nav">
			<label for="img-4" class="prev"><i class="fas fa-chevron-circle-left fa-3x"></i></label>
			<label for="img-6" class="next"><i class="fas fa-chevron-circle-right fa-3x"></i></label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-6" />
    <li class="slide-container">
        <div class="slide">
          <img src="assets/img/homeSlider/6-min.jpg"/>
        </div>
		<div class="nav">
			<label for="img-5" class="prev"><i class="fas fa-chevron-circle-left fa-3x"></i></label>
			<label for="img-1" class="next"><i class="fas fa-chevron-circle-right fa-3x"></i></label>
		</div>
    </li>

    <li class="nav-dots">
      <label for="img-1" class="nav-dot" id="img-dot-1"></label>
      <label for="img-2" class="nav-dot" id="img-dot-2"></label>
      <label for="img-3" class="nav-dot" id="img-dot-3"></label>
      <label for="img-4" class="nav-dot" id="img-dot-4"></label>
      <label for="img-5" class="nav-dot" id="img-dot-5"></label>
      <label for="img-6" class="nav-dot" id="img-dot-6"></label>
    </li>
</ul>
</section>
  
   
</body>
</html>     --}}



{{-- <div id="myCarousel" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/assets/img/1.jpg" class="d-block w-100" alt="Slide 1">
    </div>
    <div class="carousel-item">
      <img src="/assets/img/2.jpg" class="d-block w-100" alt="Slide 2">
    </div>
    <div class="carousel-item">
      <img src="/assets/img/3.jpg" class="d-block w-100" alt="Slide 3">
    </div>
  </div>
</div>
<div id="myCarousel" class="carousel slide">
  <div class="carousel-inner">
    <!-- Slides here -->
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> --}}
<body>
  <header>
    <style>
      .carousel-inner {
	width: 100%;
	display: inline-block;
	position: relative;
}
.carousel-inner {
	padding-top: 43.25%;
	display: block;
	content: "";
}
.carousel-item {
	position: absolute;
	top: 0;
	bottom: 0;
	right: 0;
	left: 0;
	background: skyblue;
	background: no-repeat center center scroll;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}

.caption {
	position: absolute;
	top: 50%;
	left: 50%;
    transform: translateX(-50%) translateY(-50%);
	width: 60%;
	z-index: 9;
	margin-top: 20px;
	text-align: center;
}
.caption h1 {
  color: #fff;
	font-size: 52px;
	font-weight: 700;
	margin-bottom: 23px;
}
.caption h2 {
  color: rgba(255,255,255,.75);
	font-size: 26px;
	font-weight: 300;
}
a.big-button {
	color: #fff;
	font-size: 19px;
	font-weight: 700;
	text-transform: uppercase;
	background: #eb7a00;
	background: rgba(255, 0, 0, 0.75);
	padding: 28px 35px;
	border-radius: 3px;
	margin-top: 80px;
	margin-bottom: 0;
	display: inline-block;
}
a.big-button:hover {
	text-decoration: none;
	background: rgba(255, 0, 0, 0.9);
}
a.view-demo {
	color: #fff;
	font-size: 21px;
	font-weight: 700;
	display: inline-block;
	margin-top: 35px;
}
a.view-demo:hover {
	text-decoration: none;
	color: #333;
}

.carousel-indicators .active {
  background: #fff;
}
.carousel-indicators li {
  background: rgba(255, 255, 255, 0.4);
  border-top: 0px solid;
  z-index: 15;
}
    </style>
    
        <div id="carousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>
  
          <div class="carousel-inner" role="listbox">
  
            <div class="carousel-item active" style="background-image: url('/assets/img/3.jpg'); background-size: cover;">
              <div class="caption">
                {{-- <h1>Create and share your whatever</h1>
                <h2>Make it easy for you to do whatever this thing does.</h2> --}}
              </div>
            </div>
  
            <div class="carousel-item" style="background-image: url('/assets/img/2.jpg'); background-size: cover;">
              {{-- <div class="caption">
                <h1>Something and share your whatever</h1>
                <h2>Else it easy for you to do whatever this thing does.</h2>
  
                <a class="big-button" href="" title="">Create Project</a>
                <div class="clear"></div>
                <a class="view-demo" href="" title="">View Demo</a>
              </div> --}}
            </div>
            
            <div class="carousel-item" style="background-image: url('/assets/img/1.jpg'); background-size: cover;">
              <div class="caption">
                {{-- <h1>Create and share your whatever</h1>
                <h2>Make it easy for you to do whatever this thing does.</h2> --}}
              </div>
            </div>
  
          </div>
          
          <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
  
        </div>
      </header>
  </body>