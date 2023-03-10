<style>
    .bg-footer {
    background-color: #fff;
    padding: 50px 0 30px;
}
.footer-heading {
    letter-spacing: 2px;
}

.footer-link a {
    color: #acacac;
    line-height: 40px;
    font-size: 14px;
    transition: all 0.5s;
}

.footer-link a:hover {
    color: #1bbc9b;
}

.contact-info {
    color: #acacac;
    font-size: 14px;
}

.footer-social-icon {
    font-size: 15px;
    height: 34px;
    width: 34px;
    line-height: 34px;
    border-radius: 3px;
    text-align: center;
    display: inline-block;
}

.facebook {
    background-color: #4e71a8;
    color: #ffffff;
}

.twitter {
    background-color: #55acee;
    color: #ffffff;
}

.google {
    background-color: #d6492f;
    color: #ffffff;
}

.apple {
    background-color: #424041;
    color: #ffffff;
}

.footer-alt {
    color: #acacac;
}

.footer-heading {
    position: relative;
    padding-bottom: 12px;
}

.footer-heading:after {
    content: '';
    width: 25px;
    border-bottom: 1px solid #FFF;
    position: absolute;
    left: 0;
    bottom: 0;
    display: block;
    border-bottom: 1px solid #1bbc9b;
}

</style>
<footer class="section bg-footer">
    <div class="container">
        <div class="row xl:px-20 lg:px-20 md:px-20 sm:px-5 lg:p-1">
            <div class="col-lg-4">
                <div class="">
                    <h6 class="footer-heading text-uppercase">Information</h6>
                    <ul class="list-unstyled footer-link mt-4">
                        <li><a href="">Pages</a></li>
                        <li><a href="">Our Team</a></li>
                        <li><a href="">Feuchers</a></li>
                        <li><a href="">Pricing</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="">
                    <h6 class="footer-heading text-uppercase">Ressources</h6>
                    <ul class="list-unstyled footer-link mt-4">
                        <li><a href="">Monitoring Grader </a></li>
                        <li><a href="">Video Tutorial</a></li>
                        <li><a href="">Term &amp; Service</a></li>
                        <li><a href="">Zeeko API</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="">
                    <h6 class="footer-heading text-uppercase">Help</h6>
                    <ul class="list-unstyled footer-link mt-4">
                        <li><a href="">Sign Up </a></li>
                        <li><a href="">Login</a></li>
                        <li><a href="">Terms of Services</a></li>
                        <li><a href="">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="">
                    <h6 class="footer-heading text-uppercase">Contact Us</h6>
                    <p class="contact-info mt-4">Contact us if need help withanything</p>
                    <p class="contact-info">+01 123-456-7890</p>
                    <div class="mt-5">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fab facebook footer-social-icon fa-facebook-f"></i></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab twitter footer-social-icon fa-twitter"></i></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab google footer-social-icon fa-google"></i></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab apple footer-social-icon fa-apple"></i></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="text-center mt-5">
        {{-- <p class="footer-alt mb-0 f-14">2019 ?? Anup, All Rights Reserved</p> --}}
    </div>
</footer>