<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
  <meta charset="UTF-8">
  <title>Responsive Team Slider using Bootstrap & Owl Carousel 2</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <style>

/* #team {
  padding: 30px 0;
} */
.sec-heading h6 {
  font-family: 'Allura', cursive;
  font-size: 65px;
}
.single-box {
  /* border: 1px solid #ddd; */
  border-radius: 20px;
  overflow: hidden;
  color: #fff
}
.info-area {
  padding: 0 20px 45px;
}
.img-area {
  overflow: hidden;
  padding: 15px 0 15px;
}
.img-area img {
  margin: 0 auto;
  -webkit-transition: all 0.2s ease;
  transition: all 0.2s ease;
  max-width: 230px
}
.single-box:hover img {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
.info-area i {
  display: inline-block;
  color: #ffb400;
  margin: 0 4px;
}
.info-area h4 {
  font-weight: 600
}
.info-area h5 {
  color: #3b04db;
  margin: 10px 0 0;
  font-weight: 600
}
.info-area a {
  display: inline-block;
  margin: 25px 0 0;
  background-color: darkorange;
  color: #fff;
  padding: 10px 35px;
  border-radius: 4px;
}
.team-slider .owl-dots {
  position: absolute;
  left: 0;
  right: 0;
  bottom: -60px;
  text-align: center;
  width: 100%;
}
.team-slider button.owl-dot {
  width: 16px;
  height: 16px;
  display: inline-block;
  margin: 0 6px;
  text-align: center;
  border-radius: 50%;
  background-color: #262626;
}
.team-slider .owl-dot.active {
  background-color: #3BB1B7;
}
.move-animation {
  position: relative;
  -webkit-animation: move-animation 2s ease-in-out infinite;
  animation: move-animation 2s ease-in-out infinite;
}
@-webkit-keyframes move-animation {
  0% {
    top: 3px;
  }
  50% {
    top: -3px;
  }
  100% {
    top: 3px;
  }
}
 
  </style>
</head>
<body>
  <section id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
          <div class="sec-heading text-center">
          </div>
        </div>
      </div>
    </div>
    <div class="testimonial-box">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="team-slider owl-carousel">
              <div class="single-box text-center">
                <div class="img-area"><img alt="" class="img-fluid move-animation" src="assets/img/profileee .png"></div>
                <div class="info-area">
                  <h4>Person's Name 1</h4>
                  <p>MTO1</p>
                </div>
              </div>
              <div class="single-box text-center">
                <div class="img-area"><img alt="" class="img-fluid move-animation" src="assets/img/profileee .png"></div>
                <div class="info-area">
                  <h4>Person's Name2</h4>
                  <p>MTO2</p>
                </div>
              </div>
              <div class="single-box text-center">
                <div class="img-area"><img alt="" class="img-fluid move-animation" src="assets/img/profileee .png"></div>
                <div class="info-area">
                  <h4>Person's Name3</h4>
                  <p>MTO3</p>
                </div>
              </div>
              <div class="single-box text-center">
                <div class="img-area"><img alt="" class="img-fluid move-animation" src="assets/img/profileee .png"></div>
                <div class="info-area">
                  <h4>Person's Name4</h4>
                  <p>MTO4</p>
                </div>
              </div>
              <div class="single-box text-center">
                <div class="img-area"><img alt="" class="img-fluid move-animation" src="assets/img/profileee .png"></div>
                <div class="info-area">
                  <h4>Person's Name5</h4>
                  <p>MTO5</p>
                </div>
              </div>
              <div class="single-box text-center">
                <div class="img-area"><img alt="" class="img-fluid move-animation" src="assets/img/profileee .png"></div>
                <div class="info-area">
                  <h4>Person's Name7</h4>
                  <p>MTO7</p>
                </div>
              </div>
              <div class="single-box text-center">
                <div class="img-area"><img alt="" class="img-fluid move-animation" src="assets/img/profileee .png"></div>
                <div class="info-area">
                  <h4>Person's Name8</h4>
                  <p>MTO8</p>
                </div>
              </div>
              <div class="single-box text-center">
                <div class="img-area"><img alt="" class="img-fluid move-animation" src="assets/img/profileee .png"></div>
                <div class="info-area">
                  <h4>Person's Name9</h4>
                  <p>MTO9</p>
                </div>
              </div>
              <div class="single-box text-center">
                <div class="img-area"><img alt="" class="img-fluid move-animation" src="assets/img/profileee .png"></div>
                <div class="info-area">
                  <h4>Person's Name10</h4>
                  <p>MTO10</p>
                </div>
              </div>
              <div class="single-box text-center">
                <div class="img-area"><img alt="" class="img-fluid move-animation" src="assets/img/profileee .png"></div>
                <div class="info-area">
                  <h4>Person's Name11</h4>
                  <p>MTO11</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
  </script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js">
  </script> 
  <script>
         $('.team-slider').owlCarousel({
             loop: true,            
             nav: false,
             autoplay: true,
             autoplayTimeout: 2000,
             smartSpeed: 450,
             margin: 20,
             responsive: {
                 0: {
                     items: 1
                 },
                 768: {
                     items: 2
                 },
                 991: {
                     items: 3
                 },
                 1200: {
                     items: 3
                 },
                 1920: {
                     items: 3
                 }
             }
         });
  </script>
</body>
</html>
