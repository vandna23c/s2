<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/glyphicon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" type="text/css" href="slickjs/css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="slickjs/css/slick.css">
    <title>SOHNI JUNEJA</title>
    <style>
            body {
                font-family: 'Nunito', sans-serif;
                 
            }
            a{
                font-size: 25px;
            }
            .social img{
                margin-right: 20px;
            }
            .slick-prev, .slick-next
            {
                height: 20px;
                width: 20px;
                /*z-index: 9;*/
                background: black;
                border-radius: 100%;
            }
 
            .slick-prev:before, .slick-next:before
            {
                font-family: 'slick';
                font-size: 20px;
                line-height: 1;
                opacity: .75;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }
             
            .slick-initialized .multiple-items
            {
                display: block;
                height: 359px;
                width: 131px;
            }
     
            .next
            {
                right: 0px;
            }
     
            .prev
            {
                left: 0px;
            }
     
            .slick-initialized .slick-slide
            {
                display: block;
            }
            .accolades img{
                margin: 0 40px;
            }
            .slick-dots li button:before
            {
                font-size: 20px;
                line-height: 20px;
                
            }
    
        </style>
  </head>
  <body>
    <div style="height: 80px;" class="d-flex px-4 mt-2 align-items-center justify-content-between">
        <div class="">
            <img src="phone.png"  style="height: 30px;width: 30px;" > <span style="font-size: 18px;padding-left: 0.5em;">+91-9999963537</span>
        </div>
        <div>
            <a href="/" class=""><img src="sohni logo-02.png" height="80px" width="250px"></a>
        </div>
        <div class="social">
            <img src="fb.png">
            <img src="Insta.png">
            <img src="Link.png">
            <img src="Mail.png">
        </div>
    </div>
    <br>
    <center>
        <div class="row-md-12"><h3>
            |<a style="text-decoration: none; cursor: pointer; color: darkslategray;" href="/" style=" color: black;">Home</a>  |
            <a style="text-decoration: none; cursor: pointer; color: darkslategray;" href="/aboutus" style="color: black;">About Us</a>  |
            <a style="text-decoration: none; cursor: pointer; color: darkslategray;" href="/services" style="color: black;">Services</a>  |
            <a style="text-decoration: none; cursor: pointer; color: darkslategray;" href="/media" style="color: black;">Media</a>  |
            <a style="text-decoration: none; cursor: pointer; color: darkslategray;" href="/album" style="color: black;">Album</a>  |
            <a style="text-decoration: none; cursor: pointer; color: darkslategray;" href="https://sohnijuneja.com/blog/" style="color: black;">Blog</a>  |
            <a style="text-decoration: none; cursor: pointer; color: darkslategray;" href="/contactus" style="color: black;">Contact Us</a>  |</h3>
        </div>
    </center>

    @section('content')
    
    @show



</body>
</html>