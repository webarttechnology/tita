<footer class="footersec">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="ftr-cntct-hdng">
                    <h4>Contact Us</h4>
                </div>
                <div class="ftr-address">
                    <ul>
                        <li>
                            <p>IN Office Address : Matrix Tower <br>Block GP, Sector V, WB, Kol–700091</p>
                        </li>
                        <li><a href="#">Email : infoShopsee.com</a></li>
                        <li><a href="tel: 1 888-927-7332">Toll-Free : +1 888-927-7332</a></li>
                        <li><a href="tel:1 415 800 4429">USA Support : +1 415 800 4429</a>
                            <p></p>
                        </li>
                    </ul>
                </div>
                <div class="company">
                    <p>Company Name : Boise</p>
                    <p>Company Address : Zone Orlytech
                        Batiment 5161 allee du commandant
                        Mouchotte ORLY Paris ,91550 , France</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ftrservice">
                    <div class="srvchdng">
                        <h4>Services</h4>
                    </div>
                    <ul>
                        <li><a href="#">New Product</a></li>
                        <li><a href="#">Ecommerce Development</a></li>
                        <li><a href="#">Bespoke website</a></li>
                        <li><a href="#">App Strategy</a></li>
                        <li><a href="#">Smartwatches</a></li>
                        <li><a href="#">Hire a Professional</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ftrservice">
                    <div class="srvchdng">
                        <h4>Quick Links</h4>
                    </div>
                    <ul>
                        <li><a href="#">Headphones</a></li>
                        <li><a href="#">Wireless Headphones</a></li>
                        <li><a href="#">Wired Headphones</a></li>
                        <li><a href="#">Smartwatches</a></li>
                        <li><a href="#">Airdopes</a></li>
                        <li><a href="#">Wired Earphones</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-md-8">
                <div class="ftrbtm">
                    <p>Copyright 2022 © Boise. Powered by WebArt Technology All Rights Reserved</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ftrlogo">
                    <a href="#"><img src="assets/images/ftr-logo.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Optional JavaScript; choose one of the two! -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<!-- custom -->
<script src="assets/js/custom.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>



<script>
      var swiper = new Swiper(".mySwiper1", {
         autoplay: {
            delay: 2500,
            disableOnInteraction: false,
            loop: true,
         },
         pagination: {
            el: ".swiper-pagination",
         },
      });
   </script>

<script>
      var swiper = new Swiper(".mySwiper2 ", {
         autoplay: {
            delay: 2500,
            disableOnInteraction: false,
            loop: true,
         },
         pagination: {
            el: ".swiper-pagination",
         },
      });
   </script>


   <script>
      var swiper = new Swiper(".brandslogos", {
         autoplay: {
            delay: 2500,
            loop: true,
            disableOnInteraction: false,
         },
         breakpoints: {
            '280': {
               slidesPerView: 1,
               spaceBetween: 50,
            },
            '600': {
               slidesPerView: 3,
               spaceBetween: 50,
            },
            '991': {
               slidesPerView: 5,
               spaceBetween: 50,
            },
            '1200': {
               slidesPerView: 7,
               spaceBetween: 50,
            },
         },

      });
   </script>

   <script>
      var swiper = new Swiper(".carlistingslider", {
         autoplay: {
            delay: 2500,
            loop: true,
            disableOnInteraction: false,
         },
         breakpoints: {
            '280': {
               slidesPerView: 1,
               spaceBetween: 50,
            },

         },
         pagination: {
            el: ".swiper-pagination",
         },
      });
   </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Video Popup -->
<script>
        $(document).ready(function () {
            $('.vid-slider .vid').on('click', function () {
                // get required DOM Elements
                var iframe_src = $(this).children('iframe').attr('src'),
                    iframe = $('.video-popup'),
                    iframe_video = $('.video-popup iframe'),
                    close_btn = $('.close-video');
                iframe_src = iframe_src + '?autoplay=1&rel=0'; // for autoplaying the popup video

                // change the video source with the clicked one
                $(iframe_video).attr('src', iframe_src);
                $(iframe).fadeIn().addClass('show-video');

                // remove the video overlay when clicking outside the video
                $(document).on('click', function (e) {
                    if ($(iframe).is(e.target) || $(close_btn).is(e.target)) {
                        $(iframe).removeClass('show-video');
                        $(iframe_video).attr('src', '');
                    }
                });

            });

        });
    </script>


<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>