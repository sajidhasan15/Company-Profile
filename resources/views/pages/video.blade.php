{{-- <div class="embed-responsive embed-responsive-16by9">
    <video class="embed-responsive-item" controls autoplay>
        <source src="assets/impitvideo.mp4" type="video/mp4">
		<source src="assets/impitvideo.ogg" type="video/ogg">
    </video>
</div> --}}
<style>
	/* *, ::before, ::after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: roboto, sans-serif;
} */

.home {
    height: 100vh;
    position: relative;
}
video {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.home-content {
    position: relative;
    padding-top: 150px;
    color: #fff;
    text-align: center;
}
h1 {
    font-family: Playfair Display, serif;
    font-size: clamp(45px, 7vw, 130px);
    line-height: 1.1;
}

.home p {
    font-size: clamp(25px, 4vw, 40px);
    margin-top: 10px;
}

.home-content button {
    display: block;
    font-size: clamp(14px, 1.5vw, 18px);
    border: 1px solid #f1f1f1;
    border-radius: 5px;
    background: transparent;
    color: #fff;
    margin: 50px auto 0;
    padding: 12px 20px;
    cursor: pointer;
}
</style>
<div class="home">
	<video muted loop autoplay>
	  <source src="assets/impitvideo.mp4" type="video/mp4">
	</video>
	<div class="home-content">
	  {{-- <h1>NATURE</h1>
	  <p>EXPERIENCE</p>

	  <button>EXPLORE THE WORLD</button> --}}
	</div>
  </div>