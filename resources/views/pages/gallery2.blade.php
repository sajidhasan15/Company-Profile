<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
      /* *{
  margin:0;
  padding: 0;

} */
a{
	text-decoration: none;
	color: #000;
}
li {
    list-style: none;
}
html{
	height: 100%;
}
body{
	width: 100%;
	height: 100%;
}
.clearfix{
	clear: both;
}
.containar {
  /*display: flex;*/
  background: #caedfd;
}
.slider {

    position: relative;

}
.slider-img {
    width: 1000px;
    height: 600px;
    margin: 0 auto;
    /* padding: 30px 0; */
    text-align: center;
}
#ul-parent {
    position: relative;
    perspective: 1000px;
    transform-style: preserve-3d;
    /*transform-origin: 40% 0;*/

}
#ul-parent li{
	position: absolute;
	width: 100%;
	animation-name: slider;
	animation-duration: 20s;
	animation-iteration-count: infinite; 
}
#ul-parent li:nth-child(1){
	transform: translateX(0);
	animation-delay: -20s;
}
#ul-parent li:nth-child(2){
	transform: translateX(550px) translateZ(-300px) rotateY(30deg);
	animation-delay: -15S;
}
#ul-parent li:nth-child(3){
	transform:translateZ(-500px);
	animation-delay: -10S;
}
#ul-parent li:nth-child(4){
	transform: translateX(-550px) translateZ(-300px) rotateY(-30deg);
	animation-delay: -5S;
}
@keyframes slider{
	0%,20%{
		transform: translateX(0);
	}
	25%,45%{
		transform: translateX(550px) translateZ(-300px) rotateY(30deg);
	}
	50%,70%{
		transform: translateZ(-500px)
	}
	75%,95%{
		transform: translateX(-550px) translateZ(-300px) rotateY(-30deg);
	}
	97%{
		transform: translateX(-550px) translateZ(-300px) rotateY(-30deg) translateX(-400);	
	}
	100%{
		transform: translateX(0);

	}
}
    </style>
</head>
  <body>
    <header>
    <div class="slider" style="padding-top: 6%">
      <h2 class="font-bold text-uppercase text-center" style="color: #000;font-family: 'Futura-PT-Bold'; font-size: 35px;">Photo Gallery</h2>
          <div class="slider-img" style="padding-top: 3%">
          <ul id="ul-parent">
            <li><img src="/assets/img/1.jpg"></li>
            <li><img src="/assets/img/2.jpg"></li>
            <li><img src="/assets/img/3.jpg"></li>
            <li><img src="/assets/img/4.jpg"></li>
          </ul>
          </div>
        </div>
    </header>
  </body>
</html>