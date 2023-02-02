<!DOCTYPE html>
<html>
	<head>
		<title>Header</title>
		<link rel="stylesheet" type="text/css" href="/style.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700,900" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script>
            
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    //document.getElementById("header").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    //document.getElementById("header").style.marginLeft= "0";
};
        </script>
    <style>
		@font-face{
                font-family: "arial";
                src: 
                local("arial"),
                local("arial"),
                url("/assets/fonts/arial.ttf") format("ttf");
		}
            /* body{
	font-family: Raleway;
    background: #ffffff; 
} */
header{
	border: black;
	border-width: 2px;
	/* box-shadow: 0px 3px 20px 3px rgba(0, 0, 0, 0.06); */
}
.head_container{
	font-family: 'arial';
	text-transform: uppercase;
	/* padding: 20px; */
    padding-left: 20px;
    padding-top: 8px;
	padding-bottom: 1px !important;
    padding-right: 20px;
	overflow: hidden;
	content: center;
	font-size: 14px;
	/* display: flex; */
}
.logo{
	float:left;
	margin-left: 20px;
	padding-left: 5%;
}
/* .logo img{
	height: 50px;
} */
.menu{
	margin-top:25px;
	float: right;
    text-align: center;
	padding-right: 5%;
}
.menu ul{
	list-style-type: none;
	margin-right: -10px;
    padding-bottom: 0;
}
.menu li{
	display: inline;
}
.menu a{
	text-decoration: none;
	font-weight: bold;
	color: #4E4E4E;
    padding:10px;
    padding-left: 15px;
    padding-right: 15px;
    margin-top: 0px;
    
}
.menu a:hover { 
    color: #FE8552;
    /* color: #000; */
	/* background: #000; */
	text-decoration: none;
    /* border:#F7CA18; */
    border-radius: 10px;
    /* border-style: solid; */
    /* border-width: 2px; */
    /* transition: 0.2s; */
	/* float: right; */

}
.icon{
	display: none;
}

menu.responsive{
	position: relative;
}
menu.responsive{
	float: none;
    display: block;
    text-align: left;
}

@media screen and (max-width: 835px) {
	/* .logo img {
	    height: 40px;
	} */
	ul > li:first-of-type{
		display:none;
	}
	.menu{
		margin:0;
	}
}


@media screen and (max-width: 690px) {

.menu li{
	display: none;
}
.icon{
    font-weight: 900 !important;
    font-size: 27px !important;
    padding: 0;
    margin: 0;
    margin-top: -22px;
    display: flex;
}
	/* .logo img {
	    height: 40px;
	} */
}


.sidenav {
	height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #fff;
    overflow-x: hidden;
    transition: 0.2s;
    padding-top: 87px;
    /* padding-left: 15px; */
    box-shadow: 2px 8px 20px rgba(0, 0, 0, 0.24);
}

.sidenav a {
    /* padding: 8px 8px 8px 8px; */
    text-decoration: none;
    font-size: 25px;
    color: #1c3664;
    display: block;
    transition: 0.3s;
    padding-left: 15px
}

/* .sidenav a:hover, .offcanvas a:focus{
    color: #F7CA18;
} */

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}
.carousel-item::before {
    background: #0000005c;
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
}
#slider-home h3 {
    text-align: left;
    text-transform: capitalize;
    font-size: 50px;
    content: center;
}

        </style>
	</head>
	<body>
		<header style="background: #fff">
			<div class="head_container">
				<div class="logo">
					<a class="navbar-brand" href="/" >
                        <img src="assets/img/IMPIT_logo.png" width="200px">
                    </a>
				</div>
				<div class="menu" id="myTopnav" >
					<ul>
						<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="openNav()">&#9776;</a>
						<li><a href="/about">About</a></li>
						<li><a href="/services">Services</a></li>
						<li><a href="/team">Team</a></li>
						<li><a href="/gallery">Gallery</a></li>
						<li><a href="/career">Career</a></li>
						<li><a href="/contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</header>
		<div id="mySidenav" class="sidenav">
			  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			  <a href="/about">About</a>
			  <a href="/services">Services</a>
			  <a href="/team">Team</a>
			  <a href="/gallery">Gallery</a>
			  <a href="/career">Career</a>
              <a href="/contact">Contact</a>
		</div>
	</body>
</html>