<style>
    /* html {
    margin: 0;
    padding: 0;
    width: 100%;
    -webkit-font-smoothing: antialiased;
    text-rendering: optimizeLegibility;
}
body {
    background: #F6F9FC;
    color: #212121;
    font-family: 'Lato', sans-serif;
    font-size: 12px;
    min-height: 100%;
    min-width: 320px;
    margin: 0;
    padding: 0;
    width: 100%;
}
h1 {
    margin: 0;
    padding: 0;
} */
.section-header {
    display: block;
    margin-top: 20px;
    position: relative;
    text-align: center;
}
.section-header h1 {
    color: #212121;
    display: inline-block;
    font-size: 16px;
    font-weight: 700;
    line-height: 36px;
    padding: 0 0 24px;
    position: relative;
    z-index: 2;
}
.section-header h1:after {
    position: absolute;
    display: block;
    width: auto;
    height: 3px;
    bottom: 0;
    left: 20%;
    right: 20%;
    border-radius: 1px;
    content: "";
    z-index: 1;
    background: #e6e9ec;
}
section {
    padding-bottom: 30px;
    overflow: hidden;
    position: relative;
}
a,
a:link,
a:visited {
    color: #212121;
    text-decoration: none;
}
.micro-slider {
    height: 480px;
    margin: 10px 0;
    position: relative;
    width: 100%;
}
.micro-slider.fullwidth {
    height: 580px;
    width: 700px;
    /* margin: 64px 0; */
}
.micro-slider.fullwidth .slider-item {
    height: 480px;
    line-height: 480px;
    width: 100%
}
.slider-wrapper {
    overflow: hidden;
    position: relative;
    transform-style: preserve-3d;
    transform-origin: 0 50%;
}
.slider-item {
    /* background: #FFF; */
    box-shadow: 0 1px 3px rgba(0,0,0,.06), 0 1px 2px rgba(0,0,0,.12);
    /* color: #FFF; */
    display: none;
    /* font-size: 72px;
    height: 320px;
    line-height: 320px; */
    left: 0;
    position: absolute;
    text-align: center;
    top: 0;
    /* width: 320px; */
    cursor: pointer;
}
/*
.slider-item:not(.active) {cursor: pointer;}
*/
.indicators {
    bottom: 0px;
    left: 50%;
    list-style-type: none;
    margin: 0 0 0 -77px;
    padding: 0;
    position: absolute;
    padding-top: 20px;
}
.indicators li {
    color: #fff;
    float: left;
    height: 16px;
    margin-right: 8px;
    text-align: center;
    width: 16px;
}
.indicators li:last-child {margin: 0;}
.indicators a {
    background: #FFF;
    border-radius: 8px;
    border: 1px solid #E6E9EC;
    color: #FFF;
    display: inline-block;
    height: 16px;
    width: 16px;
}
.indicators .active a {background: #E6E9EC;}
/* .s1 {background: #3f51b5;}
.s2 {background: #448aff;}
.s3 {background: #03a9f4;}
.s4 {background: #00bcd4;}
.s5 {background: #009688;}
.s6 {background: #4caf50;} */
h4{
  font-family: 'Khula';
  font-size: 20px;
}
p{
  font-size: 18px;
  font-family: 'Khula';
}
</style>
<script>
    /*
CDN:
Micro-Slider JS by LGSE
https://cdn.jsdelivr.net/npm/micro-slider@1.0.9/dist/micro-slider.min.js
Hammer JS gesture library
https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js
*/

document.addEventListener('DOMContentLoaded', () => {
  
  //===== MICRO-SLIDER begin
	const __ms = document.querySelector('.micro-slider');
  const __msSlider = new MicroSlider(__ms, { indicators: true, indicatorText: '' });
  const hammer = new Hammer(__ms);
	const __msTimer = 2000;
  let __msAutoplay = setInterval(() => __msSlider.next(), __msTimer);
    
  //detect mouseenter event
	__ms.onmouseenter = function(e) {
    clearInterval(__msAutoplay); 
    console.log(e.type + ' mouse detected');
  }
  
  //detect mouseleave event
	__ms.onmouseleave = function(e) {
    clearInterval(__msAutoplay); 
    __msAutoplay = setInterval(() => __msSlider.next(), __msTimer);
    console.log(e.type + ' mouse detected');
  }
  
  //detect mouseclick event
	__ms.onclick = function(e) {
    clearInterval(__msAutoplay); 
    console.log(e.type + ' mouse detected');
  }
  
  //detect gesture tap event with hammer js library
  hammer.on('tap', function(e) {
    clearInterval(__msAutoplay);
    console.log(e.type + ' gesture detected');
  });
  
  //detect gesture swipe event with hammer js library
  hammer.on('swipe', function(e) {
    clearInterval(__msAutoplay); 
    __msAutoplay = setInterval(() => __msSlider.next(), __msTimer);
    console.log(e.type + ' gesture detected');
  });

  let slideLink = document.querySelectorAll('.slider-item');
  if (slideLink && slideLink !== null && slideLink.length > 0){
    slideLink.forEach( el => el.addEventListener('click', e => {
      e.preventDefault();
      let href = el.dataset.href;
      let target = el.dataset.target;
      if (href !== '#') window.open(href, target);
    }));
  }
  
  //===== MICRO-SLIDER end
  
});
</script>
<body id="micro-slider" >
    <section class="bg-black">
      <!--
      <div class="section-header">
        <h1>Carousel Autoplay + Hover Pause</h1>
      </div>
      -->
      <h2 class="text-uppercase text-center" style="color: #fff;font-family: 'Futura-PT-Bold'; font-size: 35px; font-weight:300">Our Team</h2>
      <div class="micro-slider">
        <div class="slider-item s1"  data-target="_blank">
            <div class="single-box text-center">
                <div class="img-area text-center"><img style="display: block;  margin-left: auto; margin-right: auto;" width="50%" class="img-fluid move-animation" src="assets/img/team-1.jpg"></div>
                <div class="info-area">
                  <h4 style="color: #fff; padding-top:10px">Person's Name 1</h4>
                  <p style="color: #fff">MTO1</p>
                </div>
              </div>
        </div>
        <div class="slider-item s2" data-target="_blank">
            <div class="single-box text-center">
                <div class="img-area text-center"><img style="display: block;  margin-left: auto; margin-right: auto;" width="50%" class="img-fluid move-animation" src="assets/img/team-2.jpg"></div>
                <div class="info-area">
                  <h4 style="color: #fff; padding-top:10px">Person's Name 2</h4>
                  <p style="color: #fff">MTO2</p>
                </div>
              </div>
        </div>
        <div class="slider-item s4" data-href="#" data-target="_blank">
            <div class="single-box text-center">
                <div class="img-area text-center"><img style="display: block;  margin-left: auto; margin-right: auto;" width="50%" class="img-fluid move-animation" src="assets/img/team-3.jpg"></div>
                <div class="info-area">
                  <h4 style="color: #fff; padding-top:10px">Person's Name 3</h4>
                  <p style="color: #fff">MTO3</p>
                </div>
              </div>
        </div>
        <div class="slider-item s5" data-href="#" data-target="_blank">
            <div class="single-box text-center">
                <div class="img-area text-center"><img style="display: block;  margin-left: auto; margin-right: auto;" width="50%" class="img-fluid move-animation" src="assets/img/team-4.jpg"></div>
                <div class="info-area">
                  <h4 style="color: #fff; padding-top:10px">Person's Name 4</h4>
                  <p style="color: #fff">MTO4</p>
                </div>
              </div>
        </div>
        <div class="slider-item s6" data-href="#" data-target="_blank">
            <div class="single-box text-center">
                <div class="img-area text-center"><img style="display: block;  margin-left: auto; margin-right: auto;" width="50%" class="img-fluid move-animation" src="assets/img/team-1.jpg"></div>
                <div class="info-area">
                  <h4 style="color: #fff; padding-top:10px">Person's Name 5</h4>
                  <p style="color: #fff">MTO5</p>
                </div>
              </div>
        </div>
      </div>
    </section>
  
  <script src="https://cdn.jsdelivr.net/npm/micro-slider@1.0.9/dist/micro-slider.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
  </body>