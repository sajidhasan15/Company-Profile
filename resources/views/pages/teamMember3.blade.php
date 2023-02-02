<style>
    .sec-title{
    position:relative;
    margin-bottom:60px;
}

.sec-title .title{
    position: relative;
    display: block;
    font-size: 18px;
    line-height: 24px;
    color: #fdda33;
    font-weight: 500;
    margin-bottom: 30px;
}

.sec-title h2{
    position:relative;
    display: inline-block;
    font-size:60px;
    line-height:1em;
    color:#212639;
    font-weight:400;
    padding-bottom: 30px;
    z-index: 2;
}


.sec-title.active h2:before{
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
}

.sec-title h2:after{
    position: absolute;
    left: 0;
    bottom: 0px;
    height: 3px;
    width: 50px;
    content: "";
    background-color: #d1d2d6;
}

.sec-title.light h2{
    color: #ffffff;
}

.sec-title.light h2:after{
    opacity: .20;
    background-color: #ffffff;
}

.sec-title.text-center h2:before,
.sec-title.text-center h2:after{
    right: 0;
    left: 0;
    margin: 0 auto;
}

.sec-title.text-center h2:before{
    opacity: .60;
}

.speakers-section{
    position: relative;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    padding: 145px 0 90px;
    overflow:hidden;
}

.speaker-block{
    position: relative;
    margin-bottom: 40px;
}

.speaker-block .inner-box{
    position: relative;
}

.speaker-block .image-box{
    position: relative;
    padding: 20px;
    background-color: rgba(255,255,255,.15);
    overflow: hidden;
}

.speaker-block .image-box .image:after,
.speaker-block .image-box:before{
    position: absolute;
    left: 0;
    top: 0;
    height: 0;
    width: 100%;
    background-color: #ffffff;
    content: "";
    -webkit-transition: all 700ms ease;
    -moz-transition: all 700ms ease;
    -ms-transition: all 700ms ease;
    -o-transition: all 700ms ease;
    transition: all 700ms ease;
}

.speaker-block .inner-box:hover .image-box .image:after,
.speaker-block .inner-box:hover .image-box:before{
    height: 100%;
}

.speaker-block .image-box .image:after{
    opacity: .40;
    z-index: 1;
    top: auto;
    bottom: 0;
    background-color: #4a34a5;
}

.speaker-block .image-box .image{
    position: relative;
    margin-bottom: 0;
    z-index: 1;
    overflow: hidden;
}

.speaker-block .image-box .image img{
    display: block;
    width: 100%;
    height: auto;
}

.speaker-block .social-links{
    position: absolute;
    left: 0;
    bottom: -140px;
    padding: 20px;
    width: 100%;
    z-index: 9;
    -webkit-transition: all 700ms ease;
    -moz-transition: all 700ms ease;
    -ms-transition: all 700ms ease;
    -o-transition: all 700ms ease;
    transition: all 700ms ease;
}

.speaker-block .social-links ul{
    position: relative;
    padding: 30px 20px;
    text-align: center;
    background-color: rgba(253, 218, 51, 0.85);
}

.speaker-block .social-links li{
    position: relative;
    display: inline-block;
    margin: 0 9px;
}

.speaker-block .social-links li a{
    position: relative;
    display: block;
    font-size: 18px;
    line-height: 30px;
    font-weight: 400;
    color: #ffffff;
    -webkit-transition: all 300ms ease;
    -moz-transition: all 300ms ease;
    -ms-transition: all 300ms ease;
    -o-transition: all 300ms ease;
    transition: all 300ms ease;
}

.speaker-block .social-links li a:hover{
    color: #fac201;
}

.speaker-block .inner-box:hover .social-links{
    bottom: 0;
}

.speaker-block .caption-box{
    position: relative;
    padding-top: 30px;
}

.speaker-block .caption-box .name{
    position: relative;
    display: block;
    font-size: 30px;
    line-height: 1em;
    color: #ffffff;
    font-weight: 400;
    margin-bottom: 10px;
}

.speaker-block .caption-box .name a{
    color: #ffffff;
    display: inline-block;
    -webkit-transition: all 300ms ease;
    -moz-transition: all 300ms ease;
    -ms-transition: all 300ms ease;
    -o-transition: all 300ms ease;
    transition: all 300ms ease;
}

.speaker-block .caption-box .name a:hover{
    color: #fdda33;
}

.speaker-block .caption-box .designation{
    position: relative;
    display: block;
    font-size: 17px;
    line-height: 26px;
    color: #ffffff;
    font-weight: 400;
    opacity: .70;
}
        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        img {
    max-width: 100%;
    height: auto;
}
</style>
<section class="speakers-section">
    <div class="parallax-scene parallax-scene-2 anim-icons">
        <span data-depth="0.40" class="parallax-layer icon icon-circle-5"></span>
        <span data-depth="0.99" class="parallax-layer icon icon-circle-5"></span>
    </div>

    <div class="px-20">


        <div class="flex">
      
            <div class="speaker-block col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="/assets/img/team-1.jpg" width="200px">
                            {{-- <div class="social-links">
                                <ul>
                                   <li><a href="#"><span class="fab fa-facebook-f"></span></a></li> 
                                   <li><a href="#"><span class="fab fa-twitter"></span></a></li> 
                                   <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li> 
                                   <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li> 
                                </ul>
                            </div> --}}
                        </figure>
                    </div>
                    <div class="caption-box">
                        <h4 class="name"><a href="#">Lorem Ipsum </a></h4>
                        <span class="designation">simply dummy text</span>
                    </div>
                </div>
            </div>

       
            <div class="speaker-block col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="/assets/img/team-2.jpg" width="200px">
                            {{-- <div class="social-links">
                                <ul>
                                   <li><a href="#"><span class="fab fa-facebook-f"></span></a></li> 
                                   <li><a href="#"><span class="fab fa-twitter"></span></a></li> 
                                   <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li> 
                                   <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li> 
                                </ul>
                            </div> --}}
                        </figure>
                    </div>
                    <div class="caption-box">
                        <h4 class="name"><a href="#">Lorem Ipsum </a></h4>
                        <span class="designation">simply dummy text</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>