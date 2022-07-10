 <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12" style="height:50px;height: 360px;background-color: #f1f1f1;">
              <center style="font-size: 24px;text-align: center;padding: 10px;">Useful Links</center>
              <br>
              <center>
                <div class="row-md-12"><h3>
                    <a style="text-decoration: none; cursor: pointer; color: darkslategray; margin: 0 20px;" href="/home" style=" color: black;">Home</a>  
                    <a style="text-decoration: none; cursor: pointer; color: darkslategray; margin: 0 20px;" href="/aboutus" style="color: black;">About Us</a>  
                    <a style="text-decoration: none; cursor: pointer; color: darkslategray; margin: 0 20px;" href="/services" style="color: black;">Services</a>  
                    <a style="text-decoration: none; cursor: pointer; color: darkslategray; margin: 0 20px;" href="/media" style="color: black;">Media</a>  
                    <a style="text-decoration: none; cursor: pointer; color: darkslategray; margin: 0 20px;" href="/album" style="color: black;">Album</a>  
                    <a style="text-decoration: none; cursor: pointer; color: darkslategray; margin: 0 20px;" href="https://sohnijuneja.com/blog/" style="color: black;">Blog</a>  
                    <a style="text-decoration: none; cursor: pointer; color: darkslategray; margin: 0 20px;" href="/contactus" style="color: black;">Contact Us</a>  </h3>
                </div>
            </center><br><br><br>
            <div class="d-flex justify-content-between" style="padding: 0 80px;">
              <div>
                <img src="Telephone.png"><br>
                +91-9999963537
              </div>
              <div>
                <img src="location.png">   R - 255, 2nd Floor, G K- 1, Delhi - 110048
              </div>
              <div>
                <img src="location.png">   123, lane, opp. Sai Temple, Emerald Hills, Dehradun- 248001
              </div>
            </div>

            <center><div class="social mt-5">
              <img src="fb.png">
              <img src="Insta.png">
              <img src="Link.png">
              <img src="Mail.png">
            </div></center>

        </div>
    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="slickjs/jsjquery.min.js"></script>
    <script src="js/slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="slickjs/js/slick.js"></script>
    <script type="text/javascript">
        $(function () {
            $(".multiple-items").slick({
                infinite: true,
                slidesToShow: 1, //if you want to change the number of images to be displayed just change the number.
                slidesToScroll: 1,
                arrows: true
            });

            $('.Testimonials-items').slick({
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: true,
              infinite: false,
              cssEase: 'linear'
            });
        });
    </script>
    

<script>
  AOS.init();
</script>
  </body>
</html>