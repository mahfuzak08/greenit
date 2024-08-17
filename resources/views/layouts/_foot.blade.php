<section class="w3l-footer-29-main">
  <div class="footer-29 py-5">
    <div class="container py-lg-4">
      <div class="row footer-top-29">
        <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-1 pr-lg-5">
          <div class="footer-logo mb-4">
            <a class="navbar-brand" href="index.html">Green IT</a>
          </div>
          <p>We are real pros at digital and web design. We work for our clients to provide them with the best service
            and products. We value every project as we get invaluable experience.</p>
          <div class="main-social-footer-29 mt-4">
            <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
            <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
            <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
            <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-2 mt-sm-0 mt-5">
  
          <ul>
            <h6 class="footer-title-29">Useful Links</h6>
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('about')}}">About Us</a></li>
            <li><a href="{{route('services')}}">Services</a></li>
            <li><a href="{{route('contact')}}">Contact us</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-5 col-6 footer-list-29 footer-3 mt-lg-0 mt-5">
          <h6 class="footer-title-29">Resources</h6>
          <ul>
            <li><a href="#traning">Training</a></li>
            <li><a href="#marketplace">Marketplace</a></li>
            <li><a href="#experts">Our Experts</a></li>
            <li><a href="#platform">Platform</a></li>
            <li><a href="#customers"> Customers</a></li>
          </ul>
  
        </div>
        <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4 mt-lg-0 mt-5">
          <h6 class="footer-title-29">Find Us on Map</h6>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d690.2354764119906!2d90.40175947317805!3d23.72251666233157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8e4c15fc48d%3A0x114aa23dcc7d7394!2s54no%20BK%20Ganguly%20Ln%2C%20Dhaka%201100!5e0!3m2!1sen!2sbd!4v1713784939132!5m2!1sen!2sbd" frameborder="0" style="border:0;width: 100%;
          height: 75%;" allowfullscreen=""></iframe>
        </div>
      </div>
    </div>
  </div>
  <!-- copyright -->
  <section class="w3l-copyright text-center">
    <div class="container">
      <p class="copy-footer-29">© 2024 Regard Chemical All rights reserved. Design by <a href="https://absoft-bd.com/" target="_blank">ABSoftBD</a></p>
    </div>
  
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      &#10548;
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };
  
      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }
  
      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->
  </section>
  <!-- //copyright -->
  </section>
  <!-- //footer -->
  
  <script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
  
  <script src="assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->
  
  <script src="assets/js/circles.js"></script>
  
  <!-- owlcarousel -->
  <script src="assets/js/owl.carousel.js"></script>
  
  <!-- script for tesimonials carousel slider -->
  <script>
  $(document).ready(function () {
  $("#owl-demo1").owlCarousel({
    loop: true,
    nav: false,
    margin: 50,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      992: {
        items: 2,
        nav: false
      }
    }
  })
  })
  </script>
  <!-- //script for tesimonials carousel slider -->
  
  <!-- faq -->
  <script>
  const items = document.querySelectorAll(".accordion button");
  
  function toggleAccordion() {
    const itemToggle = this.getAttribute('aria-expanded');
  
    for (i = 0; i < items.length; i++) {
      items[i].setAttribute('aria-expanded', 'false');
    }
  
    if (itemToggle == 'false') {
      this.setAttribute('aria-expanded', 'true');
    }
  }
  
  items.forEach(item => item.addEventListener('click', toggleAccordion));
  </script>
  <!-- //faq -->
  
  <!--/MENU-JS-->
  <script>
  // $(window).on("scroll", function () {
  //   var scroll = $(window).scrollTop();
  
  //   if (scroll >= 80) {
  //     $("#site-header").addClass("nav-fixed");
  //   } else {
  //     $("#site-header").removeClass("nav-fixed");
  //   }
  // });
  
  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
  </script>
  <!--//MENU-JS-->
  
  <!-- disable body scroll which navbar is in active -->
  <script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
  </script>
  <!-- //disable body scroll which navbar is in active -->
  
  <!--bootstrap-->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- //bootstrap-->
  
  </body>
  
  </html>