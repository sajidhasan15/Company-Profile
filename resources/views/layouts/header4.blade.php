<style>
    /* body{
  background: green;
} */
@font-face{
    font-family: "TuskerGrotesk-6500Medium";
    src: 
    local("TuskerGrotesk-6500Medium"),
    local("TuskerGrotesk-6500Medium"),
    url("/assets/fonts/TuskerGrotesk-6500Medium.woff") format("woff");
}

h1{
    color: #fff;
}
h1{
    animation: sajid 2s;
    text-align: left;
    padding-left: 6%;
    font-family: 'TuskerGrotesk-6500Medium';
}
.banner{
    padding-top: 250px;
    width: 100%;
    height: 700px;
    font-family: 'TuskerGrotesk-6500Medium';
}

@keyframes sajid{
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
<script>
    document.getElementsByTagName("h1")[0].style.fontSize = "6vw";
    document.getElementsByTagName("h1")[0].style.fontFamily = "TuskerGrotesk-6500Medium";
</script>
<div class="banner" style="background-image: url('assets/img/final-web-tem.png');">
    <div class="overlay">
        <h1 style="font-size: 50px; font-family: 'TuskerGrotesk-6500Medium';">Small World</h1><br>
        <h1 style="font-size: 100px; font-family: 'TuskerGrotesk-6500Medium';">Big Impact</h1>
    </div>
</div>