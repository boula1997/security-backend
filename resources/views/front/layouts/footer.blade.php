 
   <!-- info section -->
   <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class=" col-md-4 info_detail">
          <div>
            <p>
             هناك العديد من المميزات التي تجعلنا افضل من غبرنا في مجال الامن حيث اننا الشركة الوحيدة المعتمدة من العديد من الجهات الامنية وايضا نقوم بتدريب جميع موظفينا ليعملوا بكفاءة اكبر
            </p>
          </div>
        </div>
        <div class=" col-md-4 address_container">
          <div>
            <h3>
              معلومات التواصل:
            </h3>
            <div class="address_link-container">
              <a href="">
                <img src="images/location.png" alt="">
                <span> العنوان: 73 شارع القناة ، نيويورك ، نيويورك
                </span>
              </a>
              <a href="">
                <img src="images/phone.png" alt="">
                <span> هاتف: +1 123 456 789
                </span>
              </a>
              <a href="">
                <img src="images/mail.png" alt="">
                <span>
                  البريد الإلكتروني: demo@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class=" col-md-4 news_container">
          <div>
            <div>
              <h3>
                النشرة الإخبارية

              </h3>
              <form action="{{route('newsletter.form')}}" method="post">
                @csrf
                <input type="email" name="email" required placeholder="أدخل بريدك الإلكتروني">
                <div>
                  <button type="submit">
                    الإشتراك
                  </button>
                </div>
              </form>
            </div>
            <div class="social_container">
              <div>
                <img src="images/fb.png" alt="">
              </div>
              <div>
                <img src="images/twitter.png" alt="">
              </div>
              <div>
                <img src="images/linkedin.png" alt="">
              </div>
              <div>
                <img src="images/youtube.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->
 <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      جميع الحقوق محفوظة بواسطة &copy
      <a href="https://html.design/">شركة سكيورتي للخدمات الامنية</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
  </script>
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 20,
      nav: true,
      navText: [],
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    });
  </script>

  <script>
    $(".nav_search-btn").click(function () {
      if ($(".nav_search-input").hasClass("d-none")) {
        event.preventDefault();
        $(".nav_search-input")
          .animate({
            left: "-1000px"
          },
            "1000000"
          )
          .removeClass("d-none");
      } else {
        $(".nav_search-input")
          .animate({
            left: "0px"
          },
            "1000000"
          )
          .addClass("d-none");
      }
    });
  </script>

  <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: {
          lat: 40.645037,
          lng: -73.880224
        },
      });

      var image = 'images/maps-and-flags.png';
      var beachMarker = new google.maps.Marker({
        position: {
          lat: 40.645037,
          lng: -73.880224
        },
        map: map,
        icon: image
      });
    }
  </script>
  <!-- google map js -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
  </script>
  <!-- end google map js -->

</body>

</html>