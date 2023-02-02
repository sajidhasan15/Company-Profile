<style>
    /* body{
    margin: 0;
    padding: 0;
    display: flex;
    justify-content:center;
    align-items: center;
    min-height: 100vh;
    background: #212121;
    font-family: sans-serif;
  } */

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
  .box{
    width: 1200px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    grid-gap: 15px;
    margin: 0 auto;
  }
  .card{
    position: relative;
    width: 300px;
    height: 350px;
    background: #fff;
    margin: 0 auto;
    border-radius: 4px;
    box-shadow:0 2px 10px rgba(0,0,0,.2);
  }
  .card:before,
  .card:after
  {
    content:"";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 4px;
    background: #fff;
    transition: 0.5s;
    z-index:-1;
  }
  .card:hover:before{
  transform: rotate(20deg);
  box-shadow: 0 2px 20px rgba(0,0,0,.2);
  }
  .card:hover:after{
  transform: rotate(10deg);
  box-shadow: 0 2px 20px rgba(0,0,0,.2);
  }
  .card .imgBx{
  position: absolute;
  top: 10px;
  left: 10px;
  bottom: 10px;
  right: 10px;
  background: #222;
  transition: 0.5s;
  z-index: 1;
  }
  
  .card:hover .imgBx
  {
    bottom: 80px;
  }

  .card .imgBx img{
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
  }

  .card .details{
      position: absolute;
      left: 10px;
      right: 10px;
      bottom: 10px;
      height: 60px;
      text-align: center;
  }

  .card .details h2{
   margin: 0;
   padding: 0;
   font-weight: 600;
   font-size: 20px;
   color: #777;
   text-transform: uppercase;
  } 

  .card .details h2 span{
  font-weight: 500;
  font-size: 16px;
  color: #f38695;
  display: block;
  margin-top: 5px;
   } 
   h2{
    font-size: 30px;
   }
</style>
<body style="padding-top: 5%; padding-bottom: 5%;">
    <h2 class="font-bold text-uppercase text-center" style="font-family: 'Futura-PT-Bold; padding-bottom: 15%;">Our Management</h2>
    <div class="box px-20 py-10">
        <div class="card">
          <div class="imgBx">
              <img src="https://images.unsplash.com/photo-1532123675048-773bd75df1b4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="images">
          </div>
          <div class="details">
              <h2>Jack Wilson<br>MD</h2>
          </div>
        </div>
      
         <div class="card">
           <div class="imgBx">
              <img src="https://images.unsplash.com/photo-1549417229-aa67d3263c09?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="images">
           </div>
           <div class="details">
              <h2>Jack Wilson<br>CEO</h2>
            </div>
         </div>

   
    </div>