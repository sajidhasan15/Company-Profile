<style>
        @keyframes slideleft{
            0%{
                transform: translateX(-250px)
            }
            100%{
                transform: translateX(0);
            }
        }
        @keyframes slideright{
            0%{
                transform: translateX(250px)
            }
            100%{
                transform: translateX(0);
            }
        }
</style>
<div class="text-white" style=" background: #C8C8C8; padding-top:4%; padding-bottom:4%;">
    <div class="lg:px-20 xl:px-20 sm:px-5">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 pl-5" style=" justify-content: center; align-items: left; animation: slideleft 3s ease;">
        
                    <img class="hover-zoom" src="assets/img/aboutimpit.jpg" alt="image" >
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 ps-lg-5 pr-5 p-2" style="animation: slideright 3s ease;" >
                <div class="about-text" style="position: relative;top: 50%;transform: translateY(-50%);">
                    <h2  style="color: #000 ;font-family: 'Futura-PT-Bold'; font-size:30px; text-transform: uppercase;" >We Provide the Best Quality Services Ever</h2>
                    <p style="color: #000; font-size:18px" class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit.Lorem ipsum,  dolor sit amet consectetur adipisicing elit.Lorem ipsum, dolor sit amet consectetur adipisicing elit.Lorem ipsum, dolor sit amet consectetur adipisicing elit.  dolor sit amet consectetur adipisicing elit.Lorem ipsum, dolor sit amet consectetur adipisicing elit.Lorem ipsum, dolor sit amet consectetur adipisicing elit. dolor sit amet consectetur adipisicing elit.Lorem ipsum, dolor sit amet consectetur adipisicing elit.Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
                    {{-- <a class="btn btn-warning" style="font-family: 'Futura-PT-Bold'; background-color: #FF8553" href="/about">Learn More</a> --}}
                    @include('pages.button')
                </div>
            </div>
        </div>
    </div>
</div>