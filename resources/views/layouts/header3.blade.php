{{-- <style>
    .image-container {
  position: relative;
}

.image-caption {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #fff;
  padding: 10px;
  text-align: center;
}

</style>
<div class="image-container">
    <img src="assets/img/IMPIT.jpg" alt="">
    <div class="image-caption">
      <p>This is the caption text</p>
    </div>
</div> --}}
{{-- <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/IMPIT.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption text-center d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      ...
    </div>
  </div>
   --}}
   <style>
/* * {
  margin: 0;
  padding: 0;
}

body {
  font-family: "Open Sans";
  overflow-x: hidden;
} */

.showcase {
  width: 100%;
  height: 700px;
  /* position: relative; */
  color: white;
  text-align: left;
}

.showcase img {
  width: 100%;
  height: 100%;
  /* position: absolute; */
  top: 0;
  left: 0;
  z-index:99
}

.showcase .overlay {
  width: 100%;
  height: 500px;
  background-color: rgba(0, 35, 82, 0.7);
  /* position: absolute; */
  top: 0;
  left: 0;
  z-index:999
}

.showcase h2 {
  margin-top: 170px;
  font-size: 3em;
   padding-left: 10%;
}

.showcase p {
  margin-top: 8px;
  font-size: 1.2em;
   padding-left: 10%;
}
/* .container{
text-align: center;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%) ;
width: 100%;

}

.container span{
color: white;
text-transform: uppercase;
display: block;
}
.text1{ 
  color: white; 
  font-size: 60px; 
  font-weight: 700; 
  letter-spacing: 8px; 
  margin-bottom: 20px; 
  background: black; 
  position: relative; 
  animation: text 3s 1; 
} 
.text2{ 
  font-size: 30px; 
  color: #6ab04c; 
I}
*/
h1{
    color: #fff;
}
h1{
    animation: ani 1s;
    text-align: center;
    z-index: 99999;
}

@keyframes ani{
    from{
        letter-spacing: 35px;
        filter: blur(5px);
        opacity: 0;
    }to{
        letter-spacing: 0;
        filter: blur(0);
        opacity: 1px;
    }
}
   </style>

   <section class="showcase">
    <img src="assets/img/IMPIT.jpg" alt="Picture">
    <div class="container">
      <h1>Small world</h1>
      <h2>Big Impact</h2>
    </div>
  </section>