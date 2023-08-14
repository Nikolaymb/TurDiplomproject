



<? if(empty($_SESSION['login'])){ ?>


	 <!--/w3l-footer-29-main-->
	 <footer>
    <!-- footer -->
    <section class="w3l-footer">
      <div class="w3l-footer-16-main py-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 column">
              <div class="row">
              <div class="col-md-4 column">
                  <h3>Компания</h3>
                  <ul class="footer-gd-16">
                    <li><a href="/">Главная</a></li>
                    <li><a href="contact.php">О нас</a></li>
                    <li><a href="maptur.php">Путеводитель</a></li>
                    <li><a href="#">Новости</a></li>
                    <li><a href="contact.php">Связаться с нами</a></li>
                  </ul>
                </div>
                <div class="col-md-4 column mt-md-0 mt-4">
                  <h3>Полезные ссылки</h3>
                  <ul class="footer-gd-16">
                    <li><a href="#url">Cсылка </a></li>
                    <li><a href="#url">Cсылка </a></li>
                  
                  </ul>
                </div>
                <div class="col-md-4 column mt-md-0 mt-4">
                  <h3>Наши услуги</h3>
                  <ul class="footer-gd-16">
                    <li><a href="#url">Cсылка </a></li>
                    <li><a href="#url">Cсылка </a></li>
                  
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 column pl-lg-5 column4 mt-lg-0 mt-5">
              <h3>Новостная рассылка </h3>
              <div class="end-column">
                <h4>Получайте последние обновления и предложения.</h4>
                <form action="#" class="subscribe" method="post">
                  <input type="email" name="email" placeholder="Email Address" required="">
                  <button type="submit">Go</button>
                </form>
                <p>Подпишитесь на наши последние новости и статьи. Мы не будем рассылать вам спам-письма.</p>
              </div>
            </div>
          </div>
          <div class="d-flex below-section justify-content-between align-items-center pt-4 mt-5">
            <div class="columns text-lg-left text-center">
              <p>&copy; 2023 Diplom
              </p>
            </div>
          
          </div>
        </div>
      </div>
  
      <!-- move top -->
      <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-angle-up"></span>
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
      <!-- //move top -->
      <script>
        $(function () {
          $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
          })
        });
      </script>
    </section>
    <!-- //footer -->
  </footer>
  <!-- Template JavaScript -->
  <script src="/assets/js/jquery-3.3.1.min.js"></script>
  <script src="/assets/js/theme-change.js"></script>
  <!--/slider-js-->
  <script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/js/modernizr-2.6.2.min.js"></script>
  <script src="/assets/js/jquery.zoomslider.min.js"></script>
  <!--//slider-js-->
  <script src="/assets/js/owl.carousel.js"></script>
  <!-- script for tesimonials carousel slider -->
  <script>
    $(document).ready(function () {
      $("#owl-demo1").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          736: {
            items: 1,
            nav: false
          },
          1000: {
            items: 1,
            nav: false,
            loop: true
          }
        }
      })
    })
  </script>
  <!-- //script for tesimonials carousel slider -->
  <!-- stats number counter-->
  <script src="/assets/js/jquery.waypoints.min.js"></script>
  <script src="/assets/js/jquery.countup.js"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats number counter -->

  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

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

  <script src="/assets/js/bootstrap.min.js"></script>




<? }else{ ?>
 
	  <!--/w3l-footer-29-main-->
	  <footer>
    <!-- footer -->
    <section class="w3l-footer">
      <div class="w3l-footer-16-main py-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 column">
              <div class="row">
                <div class="col-md-4 column">
                  <h3>Компания</h3>
                  <ul class="footer-gd-16">
                    <li><a href="/">Главная</a></li>
                    <li><a href="contact.php">О нас</a></li>
                    <li><a href="maptur.php">Путеводитель</a></li>
                    <li><a href="#">Новости</a></li>
                    <li><a href="contact.php">Связаться с нами</a></li>
                  </ul>
                </div>
                <div class="col-md-4 column mt-md-0 mt-4">
                  <h3>Полезные ссылки</h3>
                  <ul class="footer-gd-16">
                    <li><a href="#url">Cсылка </a></li>
                    <li><a href="#url">Cсылка </a></li>
                  
                  </ul>
                </div>
                <div class="col-md-4 column mt-md-0 mt-4">
                  <h3>Наши услуги</h3>
                  <ul class="footer-gd-16">
                    <li><a href="#url">Cсылка </a></li>
                    <li><a href="#url">Cсылка </a></li>
                  
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 column pl-lg-5 column4 mt-lg-0 mt-5">
              <h3>Новостная рассылка </h3>
              <div class="end-column">
                <h4>Получайте последние обновления и предложения.</h4>
                <form action="#" class="subscribe" method="post">
                  <input type="email" name="email" placeholder="Email Address" required="">
                  <button type="submit">Go</button>
                </form>
                <p>Подпишитесь на наши последние новости и статьи. Мы не будем рассылать вам спам-письма.</p>
              </div>
            </div>
          </div>
          <div class="d-flex below-section justify-content-between align-items-center pt-4 mt-5">
            <div class="columns text-lg-left text-center">
              <p>&copy; 2023 Diplom
              </p>
            </div>
          
          </div>
        </div>
      </div>
  
      <!-- move top -->
      <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-angle-up"></span>
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
      <!-- //move top -->
      <script>
        $(function () {
          $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
          })
        });
      </script>
    </section>
    <!-- //footer -->
  </footer>
  <!-- Template JavaScript -->
  <script src="/assets/js/jquery-3.3.1.min.js"></script>
  <script src="/assets/js/theme-change.js"></script>
  <!--/slider-js-->
  <script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/js/modernizr-2.6.2.min.js"></script>
  <script src="/assets/js/jquery.zoomslider.min.js"></script>
  <!--//slider-js-->
  <script src="/assets/js/owl.carousel.js"></script>
  <!-- script for tesimonials carousel slider -->
  <script>
    $(document).ready(function () {
      $("#owl-demo1").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          736: {
            items: 1,
            nav: false
          },
          1000: {
            items: 1,
            nav: false,
            loop: true
          }
        }
      })
    })
  </script>
  <!-- //script for tesimonials carousel slider -->
  <!-- stats number counter-->
  <script src="/assets/js/jquery.waypoints.min.js"></script>
  <script src="/assets/js/jquery.countup.js"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats number counter -->

  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

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

  <script src="/assets/js/bootstrap.min.js"></script>


	


<? } ?>

