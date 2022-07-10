<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body class="antialiased">
    @include("header");

    <div class="row">
        <div class="col-7" style="margin-top: 280px; padding-left: 100px;">
            <h1 style="text-align: left;font-family: Poppins;font-style: normal;font-weight: 500;font-size: 3rem;padding-bottom: 0px !important;">Sohni Juneja</h1>
            <p style="  max-width: 33.75em;font-size: 1.2rem;line-height: 24.8px;margin-bottom: 1.75em;">Sohni Juneja, a product of National Institute of Fashion Technology (Delhi) where she got her proficiency in her passion for Designing and Styling.</p>
            <p class="White-dusra" style=""><a class="cc" style="background-color: grey; color: white; font-size: 20px; padding: 3px 20px; border-radius: 20px; text-decoration: none;" href="/aboutus">Read More</a></p>
        </div>
        <div class="col-5">
            <div class="multiple-items" style="margin: 0 20px;">
                <img src="homeslide1.png">
                <img src="homeslide2.png">
                <img src="homeslide3.png">
            </div>    
        </div>
    </div>

    <br>
    <center><div class="my-5"><h1><b>Testimonials</b></h1></div></center>
    <div class="Testimonials-items" style="width:100%;">
        <div class="d-flex">
            <div class="col-3 " style="margin-left: 150px;">
                <img src="Testimonials.png">
            </div>
            <div class="col-7 pt-4">
                <center><span class="mt-4" style="font-size: 50px;"><b>Vatsala Wilson</b><span></center><br>
                <p style="text-align: center; line-height: 1.3; font-size:  20px; margin-top: 40px;">I am glad that I had you as my makeup artist on our big day.<br>Thank you so much for all your help, you are one seriously<br>talented woman! I looked so beautiful and not to mention that<br>makeup looked stubbing on me.</p>
                <p style="text-align: center;margin-top: 50px; line-height: 1.3; font-size:  20px;">You made me feel so comfortable (not to forget the soft brush<br>touch, asmr feeling), I couldn't have picked a better makeup<br>artist.</p>
            </div>
        </div>
        <div class="d-flex">
            <div class="col-3 " style="margin-left: 150px;">
                <img src="Testimonials1.png" height="400" width="300">
            </div>
            <div class="col-7 pt-4">
                <center><span class="mt-4" style="font-size: 50px;"><b>Vatsala Wilson</b><span></center><br>
                <p style="text-align: center; line-height: 1.3; font-size:  20px; margin-top: 40px;">I am glad that I had you as my makeup artist on our big day.<br>Thank you so much for all your help, you are one seriously<br>talented woman! I looked so beautiful and not to mention that<br>makeup looked stubbing on me.</p>
                <p style="text-align: center;margin-top: 50px; line-height: 1.3; font-size:  20px;">You made me feel so comfortable (not to forget the soft brush<br>touch, asmr feeling), I couldn't have picked a better makeup<br>artist.</p>
            </div>
        </div>
        <div class="d-flex">
            <div class="col-3 " style="margin-left: 150px;">
                <img src="Testimonials2.png" height="400" width="300">
            </div>
            <div class="col-7 pt-4">
                <center><span class="mt-4" style="font-size: 50px;"><b>Vatsala Wilson</b><span></center><br>
                <p style="text-align: center; line-height: 1.3; font-size:  20px; margin-top: 40px;">I am glad that I had you as my makeup artist on our big day.<br>Thank you so much for all your help, you are one seriously<br>talented woman! I looked so beautiful and not to mention that<br>makeup looked stubbing on me.</p>
                <p style="text-align: center;margin-top: 50px; line-height: 1.3; font-size:  20px;">You made me feel so comfortable (not to forget the soft brush<br>touch, asmr feeling), I couldn't have picked a better makeup<br>artist.</p>
            </div>
        </div>
    </div>


    <br>
    <center><div class="mt-5"><h1><b>Blog</b></h1></div></center>
    <div class="d-flex mt-4">
        <div class="ml-4">
            <img src="blog1.jpg" height="300" width="420"><br>
            <span><b><a style="color: black; text-decoration: none;" href="https://sohnijuneja.com/blog/how-to-get-dewy-skin-without-makeup/">How to Get Dewy Skin without Makeup</a></b></span><br>
            <span><b>By Sohni-11-Apr-2022</b></span><br>
            <a href="https://sohnijuneja.com/blog/how-to-get-dewy-skin-without-makeup/" style="color: black; text-decoration: none;">Read More</a>
        </div>
        <div>
            <img src="blog2.jpg" height="300" width="420"><br>
            <span><b><a style="color: black; text-decoration: none;" href="https://sohnijuneja.com/blog/how-to-get-dewy-skin-without-makeup/">How to Get Dewy Skin without Makeup</a></b></span><br>
            <span><b>By Sohni-11-Apr-2022</b></span><br>
            <a href="https://sohnijuneja.com/blog/how-to-get-dewy-skin-without-makeup/" style="color: black; text-decoration: none;">Read More</a>
        </div>
        <div>
            <img src="blog3.jpg" height="300" width="420"><br>
            <span><b><a style="color: black; text-decoration: none;" href="https://sohnijuneja.com/blog/how-to-get-dewy-skin-without-makeup/">How to Get Dewy Skin without Makeup</a></b></span><br>
            <span><b>By Sohni-11-Apr-2022</b></span><br>
            <a href="https://sohnijuneja.com/blog/how-to-get-dewy-skin-without-makeup/" style="color: black; text-decoration: none;">Read More</a>
        </div>
    </div>

    <br>
    <div class="mt-5" style="">
        <center><h1><b>Accolades</b></h1></center>
        <div class="accolades mt-5">
            <center>
                <img src="Accolades1.png" width="200" height="200">
                <img src="Accolades2.png" width="200" height="200">
                <img src="Accolades3.png" width="200" height="200">
                <img src="Accolades4.png" width="200" height="200">
            </center>
        </div>
        
    </div>

    <div class="mt-5">
        <center><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13767.780286907804!2d78.0860112!3d30.3809176!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x13e8933f0d1cb787!2sMakeup%20by%20Sohni%20Juneja!5e0!3m2!1sen!2sin!4v1657281138529!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></center>
    </div>
    


@include("footer");
    </body>
</html>
