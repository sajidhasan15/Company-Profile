<style>
    /* Tab content - closed */
.tab-content {
  max-height: 0;
  -webkit-transition: max-height 0.35s;
  -o-transition: max-height 0.35s;
  transition: max-height 0.35s;
}

/* :checked - resize to full height */
.tab input:checked ~ .tab-content {
  max-height: 100vh;
}

/* Label formatting when open */
.tab input:checked + label {
  border-left-width: 1px; 
  border-color: white;
}

/* Icon */
.tab .label .icon {
  -webkit-transition: all 0.5s;
  -o-transition: all 0.5s;
  transition: all 0.5s;
  transform-origin: center center;
}

/* Open Multiple Icon Formatting - Open */
.tab input[type="checkbox"]:checked + .label .icon {
  transform: rotate(135deg);
}

/* List Transition */
ul a {
  transition: color 0.5s ease;
}
@font-face{
    font-family: "Khula";
    src: 
    local("Khula"),
    local("Khula"),
    url("/assets/fonts/Khula.woff") format("woff");
}
@font-face{
    font-family: "Futura-PT-Bold";
    src: 
    local("Futura PT Bold"),
    local("Futura-PT-Bold"),
    url("/assets/fonts/FuturaPTBold.woff") format("woff");
    font-weight: 700;
    font-style: bold;
    font-size: 33px;
}
a{
    font-family: 'Khula';
    font-size: 16px;
    font-weight: 300;
}
li{
    font-family: 'Futura-PT-Bold';
    font-style: bold;
    font-weight: 700;
    font-size: 20px;
}

</style>

  <footer class=" text-black pt-12 pb-8 px-4" style="color: #C8C8C8">
      <div class="container overflow-hidden flex flex-col lg:flex-row justify-between mx-auto px-4">
          <h2 class="block mr-2 w-30 text-2xl font-serif font-bold">
            <img class="pb-2" src="/assets/img/IMPIT_logo.png" width="200px">
            <p>Lorem, ipsum dolor sit amet consectetur</p>
            <p>Lorem, ipsum dolor sit amet consectetur</p>
            <p>Lorem, ipsum dolor sit amet consectetur</p>
          </h2>
          <div class="w-3/4 block sm:flex text-sm mt-6 lg:mt-0">
              <ul class="list-none lg:pl-20 md:pl-20 font-thin flex flex-col text-left w-full">
                  <li class="inline-block py-2 text-black uppercase font-medium tracking-wide" style="border-bottom: 3px solid #FE8451; width:15px">Services</li>
                  <li><a href="#" class="inline-block py-2 pr-5 text-black hover:text-black no-underline">Features</a></li>
                  <li><a href="#" class="inline-block py-2 pr-5 text-black hover:text-black no-underline">Integrations</a></li>
                  <li><a href="#" class="inline-block py-2 pr-5 text-black hover:text-black no-underline">Pricing</a></li>
                  <li><a href="#" class="inline-block py-2 pr-5 text-black hover:text-black no-underline">FAQ</a></li>
              </ul>
              <ul class="list-none p-0 font-thin flex flex-col text-left w-full">
                  <li class="inline-block py-2 text-black uppercase font-medium tracking-wide" style="border-bottom: 3px solid #FE8451; width:15px">Company</li>
                  <li><a href="#" class="inline-block py-2 pr-5 text-black hover:text-black no-underline">Privacy</a>
                  </li>
                  <li><a href="#" class="inline-block py-2 pr-5 text-black hover:text-black no-underline">Terms of Service</a></li>
              </ul>
              <ul class="list-none p-0 font-thin flex flex-col text-left w-full">
                  <li class="inline-block py-2 text-black uppercase font-medium tracking-wide" style="border-bottom: 3px solid #FE8451; width:15px">Developers</li>
                  <li><a href="#" class="inline-block py-2 pr-5 text-black hover:text-black no-underline">Developer API</a></li>
                  <li><a href="#" class="inline-block py-2 pr-5 text-black hover:text-black no-underline">Documentation</a></li>
                  <li><a href="#" class="inline-block py-2 pr-5 text-black hover:text-black no-underline">Guides</a></li>
                  </li>
              </ul>
              <div class="flex flex-col w-full">
        
                <li class="inline-block py-2 text-black uppercase font-medium tracking-wide" style="border-bottom: 3px solid #FE8451; width:15px">Contact</li>
                  <div class="inline-block py-2 text-black uppercase font-medium tracking-wide"></div>
                  <ul>
                    <div><i class="fa-solid fa-location-dot pr-2" aria-hidden="true"></i>6th Floor, House-262/263, 1229 Road-1, Dhaka 1229 <br></div>
                   <div><i class="fa fa-phone pr-2" aria-hidden="true"></i>+8801775000000 <br></div>
                   <div><i class="fa fa-envelope pr-2" aria-hidden="true"></i>info@impitbd.com</div>
                   
                  </ul> 
                
                  {{-- <div class="social-media">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-google-plus-square"></i></a>
                  </div>  --}}
                  {{-- <style>
                    a:hover{
                        color: #FE834F;
                    }
                  </style> --}}
                  <div class="flex justify-start mt-0 pt-3">
                      <a class="block flex items-center text-gray-300 mr-6 no-underline" href="#" style="color: #087AEA">
                          <svg viewBox="0 0 24 24" class="fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg">
                              <path d="M23.998 12c0-6.628-5.372-12-11.999-12C5.372 0 0 5.372 0 12c0 5.988 4.388 10.952 10.124 11.852v-8.384H7.078v-3.469h3.046V9.356c0-3.008 1.792-4.669 4.532-4.669 1.313 0 2.686.234 2.686.234v2.953H15.83c-1.49 0-1.955.925-1.955 1.874V12h3.328l-.532 3.469h-2.796v8.384c5.736-.9 10.124-5.864 10.124-11.853z" /></svg>
                      </a>
                      <a class="block flex items-center text-gray-300  mr-6 no-underline" href="#" style="color: #1DA1F2">
                          <svg viewBox="0 0 24 24" class="fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg">
                              <path d="M23.954 4.569a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.691 8.094 4.066 6.13 1.64 3.161a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.061a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.937 4.937 0 004.604 3.417 9.868 9.868 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 002.46-2.548l-.047-.02z" /></svg>
                      </a>
                      <a class="block flex items-center text-gray-300  no-underline" href="#" style="color: #171515">
                          <svg viewBox="0 0 24 24" class="fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg">
                              <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" /></svg>
                      </a>
                  </div>
              </div>
          </div>
      </div>
      <div class="pt-4 mt-4 pt-6 text-gray-600 border-t border-gray-800 flex flex-col md:flex-row justify-center items-center" style="background: #C8C8C8">
        <div> Copyright &copy; <script>document.write(new Date().getFullYear())</script> IMPIT | Powered by <a class="text-black" style="text-decoration: none;" href="https://cdmitsolutionltd.com/" target="_blank">CDM IT Solution Ltd.</a></div>
    </div>
  </footer>
    
  