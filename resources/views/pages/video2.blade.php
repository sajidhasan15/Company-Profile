<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>Responsive Website Landing Page - With Background Video Slider | Travel</title> --}}
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
/* 
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
} */
/* 
header{
  z-index: 999;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px 200px;
  transition: 0.5s ease;
} */

header .brand{
  color: #fff;
  font-size: 1.5em;
  font-weight: 700;
  text-transform: uppercase;
  text-decoration: none;
}

header .navigation{
  position: relative;
}

header .navigation .navigation-items a{
  position: relative;
  color: #fff;
  font-size: 1em;
  font-weight: 500;
  text-decoration: none;
  margin-left: 30px;
  transition: 0.3s ease;
}

header .navigation .navigation-items a:before{
  content: '';
  position: absolute;
  background: #fff;
  width: 0;
  height: 3px;
  bottom: 0;
  left: 0;
  transition: 0.3s ease;
}

header .navigation .navigation-items a:hover:before{
  width: 100%;
}

section{
  padding: 100px 200px;
}

.home{
  position: relative;
  width: 100%;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  flex-direction: column;
  /* background: #2696E9; */
}

.home:before{
  z-index: 777;
  content: '';
  position: absolute;
  /* background: rgba(3, 96, 251, 0.3); */
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
}

.home .content{
  z-index: 888;
  color: #fff;
  width: 70%;
  /* margin-top: 50px; */
  display: none;
}

.home .content.active{
  display: block;
}

.home .content h1{
  font-size: 4em;
  font-weight: 900;
  text-transform: uppercase;
  letter-spacing: 5px;
  line-height: 75px;
  margin-bottom: 40px;
}

.home .content h1 span{
  font-size: 1.2em;
  font-weight: 600;
}

.home .content p{
  margin-bottom: 65px;
}

.home .content a{
  background: #fff;
  padding: 15px 35px;
  /* color: #1680AC; */
  font-size: 1.1em;
  font-weight: 500;
  text-decoration: none;
  border-radius: 2px;
}

.home .media-icons{
  z-index: 888;
  position: absolute;
  right: 30px;
  display: flex;
  flex-direction: column;
  transition: 0.5s ease;
}

.home .media-icons a{
  color: #fff;
  font-size: 1.6em;
  transition: 0.3s ease;
}

.home .media-icons a:not(:last-child){
  margin-bottom: 20px;
}

.home .media-icons a:hover{
  transform: scale(1.3);
}

.home video{
  z-index: 000;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.slider-navigation{
  z-index: 888;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  transform: translateY(80px);
  margin-bottom: 12px;
}

.slider-navigation .nav-btn{
  width: 12px;
  height: 12px;
  background: #fff;
  border-radius: 50%;
  cursor: pointer;
  /* box-shadow: 0 0 2px rgba(255, 255, 255, 0.5); */
  transition: 0.3s ease;
}

.slider-navigation .nav-btn.active{
  /* background: #2696E9; */
}

.slider-navigation .nav-btn:not(:last-child){
  margin-right: 20px;
}

.slider-navigation .nav-btn:hover{
  transform: scale(1.2);
}

.video-slide{
  position: absolute;
  width: 100%;
  height: 40%;
  clip-path: circle(0% at 0 50%);
}

.video-slide.active{
  clip-path: circle(150% at 0 50%);
  transition: 2s ease;
  transition-property: clip-path;
  height: 700px;
}

@media (max-width: 1040px){
  header{
    padding: 12px 20px;
  }

  section{
    padding: 100px 20px;
  }

  .home .media-icons{
    right: 15px;
  }

  header .navigation{
    display: none;
  }

  header .navigation.active{
    position: fixed;
    width: 100%;
    height: 100vh;
    top: 0;
    left: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    background: rgba(1, 1, 1, 0.5);
  }

  header .navigation .navigation-items a{
    color: #222;
    font-size: 1.2em;
    margin: 20px;
  }

  header .navigation .navigation-items a:before{
    /* background: #222; */
    height: 5px;
  }

  header .navigation.active .navigation-items{
    background: #fff;
    width: 600px;
    max-width: 600px;
    margin: 20px;
    padding: 40px;
    display: flex;
    flex-direction: column;
    align-items: center;
    border-radius: 5px;
    box-shadow: 0 5px 25px rgb(1 1 1 / 20%);
  }

  .menu-btn{
    background: url(menu.png)no-repeat;
    background-size: 30px;
    background-position: center;
    width: 40px;
    height: 40px;
    cursor: pointer;
    transition: 0.3s ease;
  }

  .menu-btn.active{
    z-index: 999;
    background: url(close.png)no-repeat;
    background-size: 25px;
    background-position: center;
    transition: 0.3s ease;
  }
}

@media (max-width: 560px){
  .home .content h1{
    font-size: 3em;
    line-height: 60px;
  }
}

.center {
  margin: auto;
  width: 50%;
  background-image: url('/assets/img/bg.jpg');
  opacity: 0.55;
  position: relative;
  margin-bottom: 20%;
}
      
    </style>
  </head>
  <body>
{{-- 
    <header>
      <a href="#" class="brand">Travel</a>
      <div class="menu-btn"></div>
      <div class="navigation">
        <div class="navigation-items">
          <a href="#">Home</a>
          <a href="#">About</a>
          <a href="#">Explore</a>
          <a href="#">Gallery</a>
          <a href="#">Contact</a>
        </div>
      </div>
    </header> --}}

    <section class="home">
      <video class="video-slide active"src="/assets/0001.mp4" autoplay muted loop></video>
      {{-- <video class="video-slide" src="2.mp4" autoplay muted loop></video>
      <video class="video-slide" src="3.mp4" autoplay muted loop></video>
      <video class="video-slide" src="4.mp4" autoplay muted loop></video>
      <video class="video-slide" src="5.mp4" autoplay muted loop></video> --}}
      <div class="center">
        <div class="content pt-20 center active centered-element">
            <h1 style="color: #000;">Wonderful Island</h1>
            <p style="color: #000; font-weight: bold" class="pr-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. accusantium possimus maxime voluptates. sit amet consectetur adipisicing elit. accusantium possimus maxime voluptates.sit amet consectetur adipisicing elit. accusantium possimus maxime voluptates.sit amet consectetur adipisicing elit. accusantium possimus maxime voluptates.</p>
        </div>
      </div>
    
     {{-- <div class="content">
        <h1>Camping.<br><span>Enjoy</span></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a href="#">Read More</a>
      </div>
      <div class="content">
        <h1>Adventures.<br><span>Off Road</span></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a href="#">Read More</a>
      </div>
      <div class="content">
        <h1>Road Trip.<br><span>Together</span></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a href="#">Read More</a>
      </div>
      <div class="content">
        <h1>Feel Nature.<br><span>Relax</span></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a href="#">Read More</a>
      </div>
       <div class="media-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
      </div>
      <div class="slider-navigation">
        <div class="nav-btn active"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
      </div> --}}
    </section>

    <script type="text/javascript">
    //Javacript for responsive navigation menu
    const menuBtn = document.querySelector(".menu-btn");
    const navigation = document.querySelector(".navigation");

    menuBtn.addEventListener("click", () => {
      menuBtn.classList.toggle("active");
      navigation.classList.toggle("active");
    });

    //Javacript for video slider navigation
    const btns = document.querySelectorAll(".nav-btn");
    const slides = document.querySelectorAll(".video-slide");
    const contents = document.querySelectorAll(".content");

    var sliderNav = function(manual){
      btns.forEach((btn) => {
        btn.classList.remove("active");
      });

      slides.forEach((slide) => {
        slide.classList.remove("active");
      });

      contents.forEach((content) => {
        content.classList.remove("active");
      });

      btns[manual].classList.add("active");
      slides[manual].classList.add("active");
      contents[manual].classList.add("active");
    }

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        sliderNav(i);
      });
    });
    </script>

  </body>
</html>
      