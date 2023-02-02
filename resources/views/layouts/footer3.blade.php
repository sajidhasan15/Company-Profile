<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        /* FOOTER */
.footer {
	width: 100%;
	background: #fff;
	display: block;
 }

 .inner-footer {
	 width: 95%;
	 margin: auto;
	 padding: 30px 10px;
	 display: flex;
	 flex-wrap: wrap;
	 box-sizing: border-box;
	 justify-content: center;
 }

.footer-items {
	width: 25%;
	padding: 10px 20px;
	box-sizing: border-box;
	color: #000;
}

.footer-items p {
	font-size: 16px;
	text-align: justify;
	line-height: 25px;
	color: #000;
}

.footer-items h1 {
	color: #000;
}

.border1 {
	height: 3px;
	width: 20px;
	background: #ff9800;
	color: #ff9800;
	background-color: #ff9800;
	border: 0px;
}

ul {
	list-style: none;
	color: #000;
	font-size: 15px;
	letter-spacing: 0.5px;	
 }

ul a {
	text-decoration: none;
	outline: none;
	color: #000;
	transition: 0.3s;
}

ul a:hover {
	color: #ff9800;
}

ul li {
	margin: 10px 0;
	height: 25px;
}

li i {
	margin-right: 20px;
}

.social-media {
	width: 100%;
	color: #000;
	text-align: center;
	font-size: 20px;
}

.social-media a {
	text-decoration: none;
}

.social-media i {
	height: 25px;
	width: 25px;
	margin: 20px 10px;
	padding: 4px;
	color: #000;
	transition: 0.5s;
}

.social-media i:hover {
	transform: scale(1.5);
}

.footer-bottom {
	padding: 10px;
	background: #fff;
	color: #000;
	font-size: 12px;
	text-align: center;
}

/* for tablet mode view */

@media screen and (max-width: 1275px) {
	.footer-items {
		width: 50%;
	}
}

/* for mobile screen view */

@media screen and (max-width: 660px) {
	.footer-items {
		width: 100%;
	}
}

/* you can toggle the media screen view accordingly by changing the (max-width: px) to your convenience */

/* Thanks to Computer Conversations */
    </style>
  </head>  
  
  <body>
    
  <!--  FOOTER START -->
    
  <div class="footer px-20">
    <div class="inner-footer">
  
      <div class="footer-items">
        <img src="/assets/img/IMPIT_logo.png" width="200px">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore dignissimos facilis, deleniti doloremque sequi, mollitia officia accusantium velit veritatis hic eveniet culpa sunt numquam eum totam, porro quae exercitationem optio! </p>
      </div>
  
      <div class="footer-items" style="padding-left: 10%">
        <h3>Quick Links</h3>
        <div class="border1"></div> 
          <ul>
            <a href="#"><li>Home</li></a>
            <a href="#"><li>Search</li></a>
            <a href="#"><li>Contact</li></a>
            <a href="#"><li>About</li></a>
          </ul>
      </div>
  
      <div class="footer-items"style="padding-left: 5%">
        <h3>Recipes</h3>
        <div class="border1"></div> 
          <ul>
            <a href="#"><li>Indian</li></a>
            <a href="#"><li>Chinese</li></a>
            <a href="#"><li>Mexican</li></a>
            <a href="#"><li>Italian</li></a>
          </ul>
      </div>
  
      <div class="footer-items">
        <h3>Contact us</h3>
        <div class="border1"></div>
          <ul>
            <li><i class="fa fa-map-marker" aria-hidden="true"></i>XYZ, abc</li>
            <li><i class="fa fa-phone" aria-hidden="true"></i>123456789</li>
            <li><i class="fa fa-envelope" aria-hidden="true"></i>xyz@gmail.com</li>
          </ul> 
        
          <div class="social-media">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-google-plus-square"></i></a>
          </div> 
      </div>
    </div>
    <div class="footer-bottom">
      Copyright &copy; Food and Burps 2020.
    </div>
  </div>

    
  </body>  